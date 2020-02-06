<?php include "../header.php"; ?>
<?php include "../navigation.php"; ?>
                    <?php if($_SESSION['user_semester_id'] == 1 && !isset($_GET['show_spi'])){?>
                    <div class="row mx-2 mx-md-5 my-5 p-2" style="font-weight:350; font-size:87%; border:1px solid black;"> 
                         <div class="col-11" style="text-align:center;">
                                   Note: Subjects having 0 credits is not listed here because marks of that subjects don't affect your S.P.I. but you need to pass in that subjects.
                        </div>
                     </div>
                    <?php } ?>
                     <!--After submit button clicked-->
                        <?php
                            if(isset($_GET['show_spi'])){
                                if($_GET['show_spi'] == 'true' && $_SESSION['cal_spi']!=0){
                        ?>
                        <div class="card col-12 col-md-10 col-xl-7 bg-light ml-sm-1 ml-md-5 mt-4">
                            <div class="card-body">
                                <div class="card-title" style="font-weight:400;">
                                   According to our Estimate
                                </div>
                                <div class="card-text" style="font-weight:350;font-size:85%;">
                                    You got <span style="font-weight:450;"><?php echo $_SESSION['cal_spi']; ?></span> S.P.I.
                                </div>
                                <div class="card-text" style="font-weight:350;font-size:85%;">
                                    Your result has been saved, <a href="../view_saved_results">click here</a> to view it.
                                </div>
                            </div>
                        </div>
                            <div class="row mx-2 mx-md-5 mt-3 p-2" style="font-weight:400; font-size:85%; border:1px solid black;">
                                <div class="col-11">
                                    Note: This is estimated S.P.I. , as our university supports relative grading system, so your S.P.I. can increase or decrease based on difficulty level of paper. For calculating exact S.P.I. <a href="../grade_result">Click here</a>.
                                </div>
                            </div>
                            <div class="row ml-2 ml-md-5 mt-3" style="font-weight:400;">
                                <div class="col-10">
                                    <a href="../add_result" class="btn btn-outline-primary">CREATE NEW RESULT</a>
                                </div>
                            </div>
                            <div class="row mx-2 mx-md-5 my-5 p-2" style="font-weight:350; font-size:85%; border:1px solid black;"> 
                                <div class="col-11" style="text-align:center;">
                                   Help us to improve!<br> Please spare your few valuable minutes to give <a href="../feedback">Feedback</a>.
                            </div>
                     </div>
                        <?php
                                }
                                else
                                    header('location:../add_result');
                            }
                        ?>
                        <?php
                            if(!isset($_GET['show_spi'])){
                        ?>
                        <?php
                        if($_SESSION['user_semester_id'] == 1)
                        { 
                           if($_SESSION['user_group'] == 1){
                            $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                            $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 1 AND group_id=0) OR group_id=1";
                            $subject_query_result=mysqli_query($connection,$query);
                            if(!$subject_query_result)
                                die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                           else if($_SESSION['user_group'] == 2){
                                $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                                $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 2 AND group_id=0) OR group_id=1";
                                $subject_query_result=mysqli_query($connection,$query);
                                if(!$subject_query_result)
                                    die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                        }
                        else if($_SESSION['user_semester_id'] == 2)
                        { 
                           if($_SESSION['user_group'] == 2){
                                $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                                $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 1 AND group_id=0) OR group_id=2";
                                $subject_query_result=mysqli_query($connection,$query);
                                if(!$subject_query_result)
                                    die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                           else if($_SESSION['user_group'] == 1){
                                $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                                $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 2 AND group_id=0) OR group_id=2";
                                $subject_query_result=mysqli_query($connection,$query);
                                if(!$subject_query_result)
                                    die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                        }
                        else
                        {
                            $query="SELECT subject_name,category_id,subject_credit FROM subjects ";
                            $query .= "WHERE college_id = {$_SESSION['user_college_id']} AND semester_id = {$_SESSION['user_semester_id']} AND branch_id = {$_SESSION['user_branch_id']} ";
                            $subject_query_result=mysqli_query($connection,$query);
                            if(!$subject_query_result)
                                die('SUBJECT QUERY FAILED'.mysqli_error($connection));
                        }
                            
                            $subjects_array = array();
                            $x=0;
                            while($rows = mysqli_fetch_assoc($subject_query_result))
                            {
                                $subjects_array[$x] = new Subject();
                                $subjects_array[$x]->setName($rows['subject_name']);
                                $subjects_array[$x]->setCategory_id($rows['category_id']);
                                $subjects_array[$x]->setcredit($rows['subject_credit']);
                                $x++;
                            }
                        ?>
                        <?php 
                            $y = $x;
                            $x=0;
                            while($x < $y)
                            {   
                                $id = $subjects_array[$x]->getCategory_id();
                                $query = "SELECT component_id,component_name FROM components WHERE category_id = $id ";
                                $component_result = mysqli_query($connection,$query);
                                if(!$component_result)
                                    die('COMPONENT QUERY FAILED'.mysqli_error($connection));
                                while($row = mysqli_fetch_assoc($component_result))
                                {
                                    $subjects_array[$x]->setComponents($row['component_id'],$row['component_name']);
                                }
                                $x++;
                            }
                        ?>
                        <?php
                            $y = $x;
                            $x=0;
                            while($x < $y)
                            {
                                $comp_id = $subjects_array[$x]->getComponent_id();
                                $comp_name = $subjects_array[$x]->getComponent_name();
                                $count = count($comp_id);
                                for($z=0;$z<$count;$z++)
                                {
                                    $query = "SELECT sub_component_id,sub_component_name FROM sub_components WHERE component_id = {$comp_id[$z]} ";
                                    $sub_component_result = mysqli_query($connection,$query);
                                    if(!$sub_component_result)
                                        die('SUB COMPONENT QUERY FAILED'.mysqli_error($connection));
                                    while($rw = mysqli_fetch_assoc($sub_component_result))
                                    {
                                        $subjects_array[$x]->setSubcomponents($rw['sub_component_id'],$rw['sub_component_name'],$comp_name[$z]);
                                    }
                                }
                                $x++;
                            }
                        ?>
                        <form action="" method="post" class="col-xs-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 ml-md-4 mt-md-4 form-group">
                           <?php
                            $sub_comp_counter = 0;
                            $sub = $x;
                            $x=0;
                            while($x < $sub)
                            { 
                               echo "<h3 class='disp mt-5 mb-4'>{$subjects_array[$x]->getName()}</h3>";
                              // $cmp = $subjects_array[$x]->getComponent_name();
                               //$count = count($cmp);
                              // $a=0;
                              // while($a < $count)
                             //  {    
                                   // echo "<label for=''>{$cmp[$a]}</label><br>";
                                    $sbcmp = $subjects_array[$x]->getSubcomponent_name();
                                    $sbcount = count($sbcmp);
                                   // print_r($sbcmp);
                                 //  echo $sbcount;
                                    for($i = 0; $i < $sbcount; $i++)
                                    {  

                                            if($sbcmp[$i]->getSubcomponents_name() == 'Class Test'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 30)' id='input-1' name='{$sub_comp_counter}' min='0' max='30' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Drawing Sheets'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 50)' id='input-1' name='{$sub_comp_counter}' min='0' max='50' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Sketch Book'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 20)' id='input-1' name='{$sub_comp_counter}' min='0' max='20' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'AutoCAD Sketch'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 30)' id='input-1' name='{$sub_comp_counter}' min='0' max='30' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Class test'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>Class Test</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 20)' id='input-1' name='{$sub_comp_counter}' min='0' max='20' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Sessional Exam'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 40)' id='input-1' name='{$sub_comp_counter}' min='0' max='40' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Tutorial'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 60)' id='input-1' name='{$sub_comp_counter}' min='0' max='60' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Tutorial / Assignment / Test'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 30)' id='input-1' name='{$sub_comp_counter}' min='0' max='30' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Term Assignment'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 60)' id='input-1' name='{$sub_comp_counter}' min='0' max='60' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Lab File'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 75)' id='input-1' name='{$sub_comp_counter}' min='0' max='75' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'Viva'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 25)' id='input-1' name='{$sub_comp_counter}' min='0' max='25' required><div>";
                                            }
                                            if($sbcmp[$i]->getSubcomponents_name() == 'SEE'){
                                                echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$sbcmp[$i]->getSubcomponents_name()}</label>
                                                <input type='number' class='form-control {$sbcmp[$i]->getSubcomponents_name()} d-inline-block' style='display:inline-block;' placeholder='Estimated marks (out of 100)' id='input-1' name='{$sub_comp_counter}' min='0' max='100' required><div>";
                                            }
                                         $sub_comp_counter++;
                                    }
                                //    $a++;
                               //}
                               $x++;
                            }
                           ?>
                           <!-- <button type="submit" name="submit" class="form-control btn btn-primary submit-check1"><span class="spinner-border"></span>Send It</button> -->
                           <div class="form-group">
                                <input type="submit" name="submit" value = "Calculate" class="form-control btn btn-primary submit-check1 mt-4 mb-2">
                           </div>
                        </form>
                        </div>
                    </div>
                    </div>
              </div>
              <?php } ?>
    </header>
    <?php 
        if(isset($_POST['submit']) && ($_SESSION['storage'] < 20))
        {   
            $result_query = "INSERT INTO results (user_id,sem_id) VALUES ({$_SESSION['user_id']},{$_SESSION['user_semester_id']}) ";
            $result_query_result = mysqli_query($result_connection,$result_query);
            check_query($result_query_result);
            $result_query = "SELECT result_id FROM results WHERE user_id = {$_SESSION['user_id']} ORDER BY result_id DESC LIMIT 1";
            $result_query_result = mysqli_query($result_connection,$result_query);
            if(!$result_query_result)
                die('QUERYY FAILED'.mysqli_error($result_connection));
            $row = mysqli_fetch_assoc($result_query_result);
            $result_id = $row['result_id'];
            if($_SESSION['user_semester_id'] == 1)
                        { 
                           if($_SESSION['user_group'] == 1){
                            $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                            $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 1 AND group_id=0) OR group_id=1";
                            $query_result=mysqli_query($connection,$query);
                            if(!$query_result)
                                die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                           else if($_SESSION['user_group'] == 2){
                                $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                                $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 2 AND group_id=0) OR group_id=1";
                                $query_result=mysqli_query($connection,$query);
                                if(!$query_result)
                                    die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                        }
                        else if($_SESSION['user_semester_id'] == 2)
                        { 
                           if($_SESSION['user_group'] == 2){
                                $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                                $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 1 AND group_id=0) OR group_id=2";
                                $query_result=mysqli_query($connection,$query);
                                if(!$query_result)
                                    die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                           else if($_SESSION['user_group'] == 1){
                                $query  = "SELECT subject_name,category_id,subject_credit FROM subjects ";
                                $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 2 AND group_id=0) OR group_id=2";
                                $query_result=mysqli_query($connection,$query);
                                if(!$query_result)
                                    die('SUBJECT FAILED'.mysqli_error($connection));
                           }
                        }
            else{
                $select_subjects_query = "SELECT subject_name,subject_credit FROM subjects WHERE college_id = {$_SESSION['user_college_id']} AND semester_id= {$_SESSION['user_semester_id']} AND branch_id = {$_SESSION['user_branch_id']} ";
                $query_result = mysqli_query($connection,$select_subjects_query);
                check_query1($query_result);
            }
            //echo "test";
            $subjects = array();
            $credits = array();
            $s=0;
            $sub_comp_counter1 = 0;
            $sub_id = array();
            $result1 = new Result(); // for spi
            while($row = mysqli_fetch_assoc($query_result))
            {
                $subjects[$s] = $row['subject_name'];
                $credits[$s] = $row['subject_credit'];
                $result_subjects_query = "INSERT INTO subjects (subject_name,result_id,subject_credit) VALUES ('$subjects[$s]', $result_id,$credits[$s]) ";
                $results = mysqli_query($result_connection,$result_subjects_query);
                check_query1($results);
                $s++;
            }
            $sub_query = "SELECT subject_id,subject_name,subject_credit FROM subjects WHERE result_id = $result_id ";
            $result_array = mysqli_query($result_connection,$sub_query);
            check_query1($result_array);
            $s = 0;
            $subject1_arr = array(); // for spi
            while($row_sub_id = mysqli_fetch_assoc($result_array)){
                $result1->addSubject($row_sub_id['subject_id'],$row_sub_id['subject_name'],$row_sub_id['subject_credit']);
            }
            $subject1_arr = $result1->getSubject();
            $result = mysqli_query($result_connection,$sub_query);
            check_query1($result);
            while($row_sub_id = mysqli_fetch_assoc($result))
            {  
                $comp = $subjects_array[$s]->getComponent_name();
                $num = count($comp);
                $subject_ids[$s] = $row_sub_id['subject_id'];
                for($p = 0; $p < $num; $p++)
                {  
                    $comp_table_query = "INSERT INTO components (component_name,subject_id) VALUES ('$comp[$p]',$subject_ids[$s]) ";
                    $component_query_result = mysqli_query($result_connection,$comp_table_query);
                    check_query1($component_query_result);
                }
                $select_comp_id_query = "SELECT component_id,component_name FROM components WHERE subject_id = $subject_ids[$s] ";
                $result_select_comp_id_query = mysqli_query($result_connection,$select_comp_id_query);
                $comp_id_arr = array();
                $comp_name_arr = array();
                $l = 0;
                $sub_comp_arr = $subjects_array[$s]->getSubcomponent_name();
                while($comp_row = mysqli_fetch_assoc($result_select_comp_id_query))
                {   
                    $subject1_arr[$s]->addComponent($comp_row['component_id'],$comp_row['component_name']); // for spi
                    $comp_id_arr[$l] = $comp_row['component_id'];
                    $comp_name_arr[$l] = $comp_row['component_name'];
                    $l++;
                }
                $comp1_arr = $subject1_arr[$s]->getComponent(); //for spi
                $count_comp = count($comp_name_arr);
                $count_sub = count($sub_comp_arr);
                for($b = 0; $b < $count_sub; $b++)
                {
                    for($c = 0; $c < $count_comp; $c++)
                    {
                        if($sub_comp_arr[$b]->getComponents_name() == $comp_name_arr[$c])
                            {   
                                $name_sub_comp = $sub_comp_arr[$b]->getSubcomponents_name();
                                $name_sub_comp = name($name_sub_comp);
                                $query = "INSERT INTO subcomponent_marks(subcomponent_name,subcomponent_marks,component_id) VALUES('$name_sub_comp','$_POST[$sub_comp_counter1]',$comp_id_arr[$c]) ";
                                $result_of_query = mysqli_query($result_connection,$query);
                                check_query1($result_of_query);
                                $sub_comp_counter1++;
                            }
                    }
                }
                for($c = 0; $c<$count_comp; $c++){
                    $select_query = "SELECT subcomponent_name,subcomponent_marks FROM subcomponent_marks WHERE component_id = $comp_id_arr[$c] ";
                    $select_query_result = mysqli_query($result_connection,$select_query);
                    check_query1($select_query_result);
                    while($row = mysqli_fetch_assoc($select_query_result)){
                        $comp1_arr[$c]->addSub_component($row['subcomponent_name'],$row['subcomponent_marks']);
                    }
                }
                $subject1_arr[$s]->doTotal();
                $s++;
            }
          $result1->calculateSPI();
          ?>
          <?php
          $_SESSION['cal_spi'] = $result1->getSPI();
?>
    <?php 
        $storage_query = "UPDATE users SET storage = storage+1 WHERE user_id = {$_SESSION['user_id']}";
        $storage_query_result = mysqli_query($connection,$storage_query);
        check_query1($storage_query_result);
        $_SESSION['storage']++; 
    ?>
            <!-- <form action="" name="show_spi" method="POST">
                <input type="text" value="true" name="show_spi" hidden>
            </form>
            <script>
                document.show_spi.submit();
            </script> -->
<?php
        header('location:index.php?show_spi=true');  
        }
    ?>
    <style>
        .disp{
            text-align:center;
            font-weight:450;
            font-size:125%;
        }
        .disp2{
            font-weight:375;
            font-size:100%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
       .main-cont-space1 {
        min-height:92.5vh;width:100%;background-color:#f1f3f6;margin:0;
       }

       .link-type1 a{
           color: rgb(100, 100, 100); text-transform: uppercase; font-weight: 400; transition: all .2s;
       }
       .link-type1 a:hover {
           color: blue; text-decoration: none;
       }
       .mobile-icon{
           font-size:18px;
           background-color:#f1f3f6;
           display:none;
           color:black;
       }
       .mobile-icon i{
           font-size:20px;
           margin-left:30px;
           margin-top:10px;
           cursor:pointer;
       }
        @media only screen and (max-width:767px)
       {
           .main-menu1{
               display:none;
           }
           .mobile-icon{
               display:block;
           }
       }
       .main-content1 {
          background-color:#fff; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); border-radius: 5px; margin-bottom: 2.5vh;
       }

       .headings-cont1 {
          margin-top: 3vh; margin-left: 1.5vh; word-spacing: 10px;
       }

       .heading-main1 {
          font-weight:300;display:inline-block;
       }

       .heading-user1 {
          font-size:125%;display:inline-block;
       }
    </style>
<script>
    $(document).ready(function(){
        $('.js--mobile-icon').click(function(){
          $('.js--main-menu1').toggle("3000");
        })
    });
</script>
</body>
</html>