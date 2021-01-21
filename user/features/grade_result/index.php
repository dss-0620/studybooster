<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
<?php 
    $number = [1=>"First",2=>"Second",3=>"Third",4=>"Fourth",5=>"Fifth",6=>"Sixth"];
?> 
<?php 
    if(!isset($_SESSION['grade_pointer']) && isset($_GET['show_spi'])){
        header('Location:./');
    }
?>                 <!--After submit button clicked-->  
                    <?php
                            if(isset($_GET['show_spi'])){
                                if($_GET['show_spi'] == 'true'){
                        ?>
                        <div class="row ml-2 mt-3 ml-md-5 mt-md-5">
                            <div class="col-10" style="font-weight:350;font-size:160%;">
                                Congratulations!
                            </div>
                        </div>
                       <?php if($_SESSION['user_semester_id'] == $_SESSION['check_semester'] && ppi_exists()!=false){?>
                        <div class="row ml-2 ml-md-5 mt-2" style="font-weight:350; font-size:160%;">
                            <div class="col-10">
                                You got <span style="font-weight:500;"><?php echo $_SESSION['grade_pointer']; ?></span> S.P.I. and <span style="font-weight:500;"><?php echo $_SESSION['ppi'] ?></span> P.P.I.
                            </div>
                        </div>
                        <?php }
                        else if($_SESSION['user_semester_id'] == $_SESSION['check_semester'] && ppi_exists()==false){ ?>
                            <div class="row ml-2 ml-md-5 mt-2" style="font-weight:350; font-size:160%;">
                                <div class="col-10">
                                    You got <span style="font-weight:500;"><?php echo $_SESSION['grade_pointer']; ?></span> S.P.I. and <span style="font-weight:500;"><a href='../add_spi'><i class='far fa-question-circle' style='font-size:22px;'></i></a></span> P.P.I.
                                </div>
                            </div>
                        <?php } 
                        else{
                        ?>
                            <div class="row ml-2 ml-md-5 mt-2" style="font-weight:350; font-size:160%;">
                                <div class="col-10">
                                    You got <span style="font-weight:500;"><?php echo $_SESSION['grade_pointer']; ?></span> S.P.I.
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row mx-2 mx-md-5 mt-3 p-1" style="font-weight:370; font-size:130%; border:1px solid black;">
                            <div class="col-11">
                                Note: This is exact S.P.I., you will get same S.P.I. on marksheet if your entered grades matches with marksheet.
                            </div>
                        </div>
                        <div class="alert alert-success text-center mt-3">
                                Please spare your few valuable minutes to give us a feedback which will help us to improve.
                                <a href="../feedback">Click Here.</a>
                        </div>
                        <?php
                                }
                            }
                        ?>
                        <?php $user_id = $_SESSION['user_semester_id']; ?>
                        <!-- FORM -->
                        <?php
                            if(!isset($_GET['show_spi'])){
                        ?>
                        <form action="" method = "post" class="col-xs-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 form-group">
                                <select name="semester" class="form-control" id="sem_id" onchange="check()">
                                    <?php
                                if(isset($_POST['sem'])){
                                    $sem = $number[$_POST['semester']];
                                    echo "<option value='{$_POST['semester']}' selected disabled hidden>$sem</option>";
                                }
                                else{
                                    echo '<option value="null" selected disabled hidden>Select Semester</option>';
                                }
                            ?>
                                    <?php 
                                            $query = "SELECT * FROM semester WHERE semester_id <= {$_SESSION['user_semester_id']}";
                                            $result = mysqli_query($connection,$query);
                                            check_query($result);
                                            while($row_sem = mysqli_fetch_assoc($result)){
                                    ?>
                                            <option value="<?php echo $row_sem['semester_id'] ?>"><?php echo $row_sem['semester_name'] ?></option>
                                    <?php    
                                            }
                                    ?>
                                    <input type="submit" name="sem" id="sem_sub" value="Calculate" class="btn btn-primary mt-2 form-control" disabled>
                                </select>
                        </form>
                        <script>
                            function check(){
                                var sem_val = document.getElementById('sem_id').value;
                                if(sem_val == "null"){
                                    document.getElementById('sem_sub').disabled=true;
                                }
                                else{
                                    document.getElementById('sem_sub').disabled=false;
                                }
                            }
                        </script>
                    <?php }?>
                        <?php
                         if(isset($_POST['sem'])){
                        ?>
                        <script>
                            var counter=0;
                        </script>
                        <form action="" method="POST" class="col-xs-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 form-group">
                            <input type="number" name="semester" hidden>
                            <?php
                            if(isset($_POST['semester']) && $_POST['semester'] != 'null'){
                                    if($_POST['semester'] == 1)
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
                                    else if($_POST['semester'] == 2)
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
                                    else{
                                        $query="SELECT subject_name,category_id,subject_credit from subjects ";
                                        $query.="WHERE college_id = {$_SESSION['user_college_id']} AND semester_id= {$_POST['semester']} AND branch_id={$_SESSION['user_branch_id']}";
                                        $subject_query_result=mysqli_query($connection,$query);
                                        check_query($subject_query_result);
                                    }
                                $x=0;
                                $arrayofcredit = array();
                                while($subject_row = mysqli_fetch_assoc($subject_query_result)){
                                    $arrayofcredit[$x] = $subject_row['subject_credit'];
                            ?>     
                            
                                <label for="<?php echo $x; ?>" class="disp2 ml-2"><?php echo $subject_row['subject_name']; ?></label>
                                <select class="form-control" name="<?php echo $x;?>" onchange="authenticate()" id="sub<?php echo $x;?>">
                                <option value="null" selected disabled hidden>Select Grade (required)</option>
                                <script>
                                    counter++;
                                </script>
                                <?php 
                                    $grade_query = "SELECT grade_name, grade_points FROM grades ";
                                    $grade_query_result = mysqli_query($connection,$grade_query);
                                    check_query($grade_query_result);
                                    while($grade_row = mysqli_fetch_assoc($grade_query_result)){
                                ?>
                                        <option value="<?php echo $grade_row['grade_points']; ?>"><?php echo $grade_row['grade_name']; ?></option>
                                    <?php
                                }
                                ?>
                                </select>
                                <?php $x++;
                            }
                            ?>
                            <input type="hidden" name="semester" value="<?php echo $_POST['semester']; ?>">
                          <input type="submit" value="Calculate" title="Select all grades to calculate" name="submit" id="cal" class="btn btn-primary form-control mt-3 mb-3" disabled>
                        </form>
                        <script>
                            function authenticate(){
                                var flag=true;
                                for(var i=0;i<counter;i++){
                                    var value = document.getElementById('sub'+i).value;
                                    if(value == "null"){
                                        flag=false;
                                        break;
                                    }
                                }
                                if(flag == true){
                                    document.getElementById('cal').disabled = false;
                                }
                                else{
                                    document.getElementById('cal').disabled = true;
                                }
                            }
                        </script>
                       <?php
                        }
                    }
                        ?>
                            <div class="alert alert-info mt-3">
                                <strong>For any queries regarding S.P.I. like how S.P.I. is calculated, etc. feel free to contact us at</strong>
                                <a href="mailto:support@studybooster.co.in">support@studybooster.co.in</a>
                            </div>
                    </div>
                </div>
            </div>  
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .disp2{
            font-weight:380;
            font-size:130%;
        }
       .main-cont-space1 {
           min-height:92.5vh;width:100%;background-color:#f1f3f6;margin:0;
       }

       .link-type1 a{
           color: rgb(100, 100, 100); text-transform: uppercase; font-weight: 400; transition: all .2s;
       }
       .link-type1 a:hover {
           color: blue; text-decoration: none;
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
       .main-menu1{
           display:inline-block;
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
    </style>
        <!-- JQUERY CODE -->
    <script>
        $(document).ready(function(){
            $('.js--mobile-icon').click(function(){
            $('.js--main-menu1').toggle("3000");
            })
        });
    </script> 
    <?php 
        if(isset($_POST['submit'])){
            $sum = 0;
            $credit_total = 0;
            $_SESSION['check_semester'] = $_POST['semester'];
            if($_POST['semester'] == 1)
            { 
                if($_SESSION['user_group'] == 1){
                    $query  = "SELECT subject_credit FROM subjects ";
                    $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 1 AND group_id=0) OR group_id=1";
                    $subject_query_result=mysqli_query($connection,$query);
                    if(!$subject_query_result)
                        die('SUBJECT FAILED'.mysqli_error($connection));
                }
                else if($_SESSION['user_group'] == 2){
                    $query  = "SELECT subject_credit FROM subjects ";
                    $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 2 AND group_id=0) OR group_id=1";
                    $subject_query_result=mysqli_query($connection,$query);
                    if(!$subject_query_result)
                        die('SUBJECT FAILED'.mysqli_error($connection));
                }
            }
            else if($_POST['semester'] == 2)
            { 
                if($_SESSION['user_group'] == 2){
                    $query  = "SELECT subject_credit FROM subjects ";
                    $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 1 AND group_id=0) OR group_id=2";
                    $subject_query_result=mysqli_query($connection,$query);
                    if(!$subject_query_result)
                        die('SUBJECT FAILED'.mysqli_error($connection));
                }
                else if($_SESSION['user_group'] == 1){
                    $query  = "SELECT subject_credit FROM subjects ";
                    $query .= "WHERE (college_id = {$_SESSION['user_college_id']} AND semester_id = 2 AND group_id=0) OR group_id=2";
                    $subject_query_result=mysqli_query($connection,$query);
                    if(!$subject_query_result)
                        die('SUBJECT FAILED'.mysqli_error($connection));
                }
            }
            else{
                $query="SELECT subject_credit from subjects ";
                $query.="WHERE college_id = {$_SESSION['user_college_id']} AND semester_id= {$_POST['semester']} AND branch_id = {$_SESSION['user_branch_id']}";
                $subject_query_result=mysqli_query($connection,$query);
                check_query($subject_query_result);
            }
            $x=0;
            $arrayofcredit = array();
            while($subject_row = mysqli_fetch_assoc($subject_query_result)){
               $arrayofcredit[$x] = $subject_row['subject_credit'];
               $x++;
            }
            for($i = 0; $i < $x; $i++){
                $credit_total += $arrayofcredit[$i];
                $sum += $_POST[$i]*$arrayofcredit[$i];
            }
          $pointers = $sum/$credit_total;
          $pointers = round($pointers,3);
          if($_SESSION['user_semester_id'] == $_POST['semester'] && ppi_exists()!=false){
              $ppi_data = cal_ppi();
              $total_credits=0;
              $total_grade_points = 0;
              while($row = mysqli_fetch_assoc($ppi_data)){
                    $total_credits += $row['ppi_credits'];
                    $total_grade_points += ($row['ppi_val'])*($row['ppi_credits']);
              }
              $total_credits+=$credit_total;
              $total_grade_points+=$sum;
              $ppi = $total_grade_points/$total_credits;
              $ppi = round($ppi,3);
              $_SESSION['ppi'] = $ppi;
          }
          $_SESSION['grade_pointer'] = $pointers;
          $insert_query = "INSERT INTO grade_pointers(total,total_credits,semester_id,student_id) ";
          $insert_query .= "VALUES($sum,$credit_total,{$_POST['semester']},{$_SESSION['user_id']})"; 
          $result = mysqli_query($result_connection,$insert_query);
          check_query($result);
          header('location:index.php?show_spi=true');
        }
    ?>
</body>
</html>