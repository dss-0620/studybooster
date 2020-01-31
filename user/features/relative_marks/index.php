<?php include "../header.php" ?>
<?php
    $check_permission = "SELECT * FROM allowed_users WHERE user_id = {$_SESSION['user_id']}";
    $check_result = mysqli_query($relative_user_connection,$check_permission);
    if(!$check_result)
        die('CHECKING FAILED'.mysqli_error($relative_user_connection));
    $count = mysqli_num_rows($check_result);
    if($count!=1)
        header('Location: ../not_authorized/');
    else{
        $check_data = "SELECT * FROM relative_grade_est_data_val WHERE user_id = {$_SESSION['user_id']}";
        $check_data_result = mysqli_query($relative_user_connection,$check_data);
        if(!$check_data_result)
            die('ANOTHER CHECKING FAILED'.mysqli_error($relative_user_connection));
        $count_val = mysqli_num_rows($check_data_result);
        if($count_val>=1){
            header('Location:../../');
        }
    }
?>
<?php include "../navigation.php" ?>
        <?php
            $subject_select_query = "SELECT * FROM subjects WHERE branch_id={$_SESSION['user_branch_id']} AND semester_id=3";
            $subject_select_query_result = mysqli_query($connection,$subject_select_query);
            if(!$subject_select_query_result)
                die('SUBJECT SELECT QUERY FAILED');
            $subjects_array = array();
            $x=0;
            while($rows = mysqli_fetch_assoc($subject_select_query_result))
            {
                $subjects_array[$x] = new Subject();
                $subjects_array[$x]->setName($rows['subject_name']);
                $subjects_array[$x]->setCategory_id($rows['category_id']);
                $subjects_array[$x]->setcredit($rows['subject_credit']);
                $x++;
            }
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
                            if(!isset($_GET['add'])){
                        ?>
                        <div class="row">
                            <div class="alert alert-primary mt-3 ml-5" style="font-size:20px;">
                                Help us to improve by adding your marks!
                            </div>
                        </div>
                        <div class="row">
                            <div class="alert alert-warning mt-3 ml-5" style="font-size:20px;">
                                Please verify your marks from MIS before entering.
                            </div>
                        </div>
                        <?php
                                }
                        ?>
                        <?php
                            if(isset($_GET['add'])){
                                if($_GET['add'] == "success"){
                        ?>
                        <div class="row">
                            <div class="alert alert-success mt-3 ml-5" style="font-size:20px;">
                                Thanks for your help.
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                        <!-- <div class="row">
                            <div class="col-10 col-sm-8 col-md-6 mt-4 ml-4 d-none">
                                <div class="wrong1 mb-4" style="padding-left: 20px;">
                                    <i class="far fa-check-circle mr-2 icn-typ1"></i>Thanks for your valuable feedback
                                </div>
                            </div>
                        </div> -->
                        <script>
                            var counter=0;
                        </script>
                        <div class="row">
                            <div class="col-10 col-sm-8 col-md-6 col-xl-4 mt-3 ml-5">
                                <form action="" method="post" class="form-group">
                                    <?php
                                        $comp_counter=0;
                                        for($i=0;$i<$x;$i++){
                                            echo "<h3 class='disp mt-5 mb-4'>{$subjects_array[$i]->getName()}</h3>";
                                            $comp_id = $subjects_array[$i]->getComponent_id();
                                            $comp_name = $subjects_array[$i]->getComponent_name();
                                            $count = count($comp_id);
                                            for($j=0;$j<$count;$j++){
                                                if($comp_name[$j] == 'CE'){
                                                    echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$comp_name[$j]}</label>
                                                    <input type='number' class='form-control {$comp_name[$j]} d-inline-block' style='display:inline-block;' placeholder='Enter marks (out of 100)' id='input-1' name='{$comp_counter}' max='100' required></div>";
                                                    $str = "sub_name".$comp_counter;
                                                    echo "<input type='text' class='form-control d-none' value='{$comp_name[$j]}' name='$str' hidden>";
                                                }
                                                else if($comp_name[$j] == 'LPW'){
                                                    echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$comp_name[$j]}</label>
                                                    <input type='number' class='form-control {$comp_name[$j]} d-inline-block' style='display:inline-block;' placeholder='Enter marks (out of 100)' id='input-1' name='{$comp_counter}' max='100' required></div>";
                                                    $str = "sub_name".$comp_counter;
                                                    echo "<input type='text' class='form-control d-none' value='{$comp_name[$j]}' name='$str' hidden>";
                                                }
                                                else if($comp_name[$j] == 'SEE'){
                                                    echo "<div class='form-group my-2'><label for='input-1' class='disp2 my-1 ml-md-1'>{$comp_name[$j]}</label>
                                                    <input type='number' class='form-control {$comp_name[$j]} d-inline-block' style='display:inline-block;' placeholder='Enter marks (out of 100)' id='input-1' name='{$comp_counter}' max='100' required></div>";
                                                    $str = "sub_name".$comp_counter;
                                                    echo "<input type='text' class='form-control d-none' value='{$comp_name[$j]}' name='$str' hidden>";
                                                }
                                                $comp_counter++;
                                            }
                                            $select_grades = "SELECT grade_name,grade_points FROM grades";
                                            $select_grades_query = mysqli_query($connection,$select_grades);
                                            if(!$select_grades_query)
                                                die('GRADES QUERY FAILED!'.mysqli_error($connection));
                                            $str1 = "grade".$i;
                                            ?>
                                            <?php 
                                                $id_str = "grade".$i;
                                            ?>
                                            <select name='<?php echo $str1; ?>' id='<?php echo $id_str; ?>' class='custom-select mt-4' onchange="authenticate()">
                                            <script>
                                                counter++;
                                            </script>
                                            <?php
                                                echo '<option value="null" selected disabled hidden>Achieved Grade (required)</option>';
                                                while($grade_row = mysqli_fetch_assoc($select_grades_query)){
                                                    echo "<option value='{$grade_row['grade_points']}'>{$grade_row['grade_name']}</option>";
                                                }
                                            ?>
                                            </select>
                                            <?php
                                        }
                                    ?>
                                    <div class="form-group">
                                        <label for="text"></label>
                                        <input type="submit" id="sub_conf" name="submit_send_it" class="btn btn-primary form-control my-3" value="Send it!" disabled>
                                    </div>
                                </form>
                                <script>
                                    function authenticate(){
                                        var flag=true;
                                        for(var i=0;i<counter;i++){
                                            var value = document.getElementById('grade'+i).value;
                                            console.log("Hello!!!!");
                                            if(value == "null"){
                                                flag=false;
                                                console.log("Hello!");
                                                break;
                                            }
                                        }
                                        if(flag == true){
                                            document.getElementById('sub_conf').disabled = false;
                                        }
                                        else{
                                            document.getElementById('sub_conf').disabled = true;
                                        }
                                    }
                                </script>
                            </div>
                           </div>
                        </div>
                    </div>
                    </div>
              </div>
    </header>
    <?php
        if(isset($_POST['submit_send_it'])){
                $result_query = "INSERT INTO relative_grade_est_data_val (user_id,sem_id) VALUES ({$_SESSION['user_id']},{$_SESSION['user_semester_id']}) ";
                $result_query_result = mysqli_query($relative_connection,$result_query);
                check_query($result_query_result);
                $result_query = "SELECT data_id FROM relative_grade_est_data_val WHERE user_id = {$_SESSION['user_id']} ORDER BY data_id DESC LIMIT 1";
                $result_query_result = mysqli_query($relative_user_connection,$result_query);
                if(!$result_query_result)
                    die('QUERYY FAILED'.mysqli_error($relative_user_connection));
                $row = mysqli_fetch_assoc($result_query_result);
                $result_id = $row['data_id'];
                $comp_array = array();
                for($i=0;$i<$comp_counter;$i++){
                    $comp_array[$i] = $_POST[$i];
                }
                $selected_comp = 0;
                for($i=0;$i<$x;$i++){
                    $sub_name_submit = $subjects_array[$i]->getName();
                    $sub_credits_submit = $subjects_array[$i]->getCredit();
                    $sub_comp = $subjects_array[$i]->getComponent_count();
                    $grade_str = "grade".$i;
                    $sub_grade = $_POST[$grade_str];
                    $add_subject_query = "INSERT INTO relative_sub_data_val(subject_name,subject_grade_points,subject_credit,result_id) VALUES ('$sub_name_submit','$sub_grade',$sub_credits_submit,$result_id)";
                    $add_subject_query_result = mysqli_query($relative_connection,$add_subject_query);
                    if(!$add_subject_query_result)
                        die('ADDING SUBJECT FAILED!'.mysqli_error($relative_connection));
                    $get_sub_id = "SELECT  subject_id FROM relative_sub_data_val WHERE result_id = $result_id ORDER BY subject_id DESC LIMIT 1";
                    $get_sub_id_result = mysqli_query($relative_user_connection,$get_sub_id);
                    if(!$get_sub_id_result)
                        die('GET SUB ID FAILED!'.mysqli_error($relative_user_connection));
                    $row_id = mysqli_fetch_assoc($get_sub_id_result);
                    $sub_id = $row_id['subject_id'];
                    for($j=0;$j<$sub_comp;$j++){
                        $comp_name_val = $_POST['sub_name'.$selected_comp];
                        $comp_marks = $_POST[$selected_comp];
                        $add_comp_query = "INSERT INTO relative_com_data_val(comp_name,comp_marks,subject_id) VALUES ('$comp_name_val','$comp_marks',$sub_id)";
                        $add_comp_query_result = mysqli_query($relative_connection,$add_comp_query);
                        if(!$add_comp_query_result)
                            die('ADDING COMP FAILED!'.mysqli_error($relative_connection));
                        $selected_comp++;
                    }
                }
                ?>
                <form action="../add_success/index.php" name="form" method="POST">
                    <input type="text" value="iuyuiyeiuqwy" name="add" hidden>
                </form>
                <script type="text/javascript">
                    document.form.submit();
                </script>
    <?php
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size:17px;
        }
        .disp{
            text-align:center;
            font-weight:450;
            font-size:150%;
        }
        .disp2{
            font-weight:375;
            font-size:120%;
        }
        .mobile-icon{
           font-size:18px;
           background-color:#f1f3f6;
           display:none;
           color:black;
       }
       .wrong1{  
            display: none;
            background-color: rgb(235, 250, 235);
            color: rgb(0, 150, 0); 
            padding:16px;
            margin:6px 0;
            clear:both;
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