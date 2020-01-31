<?php include "../header.php" ?>
<?php
    if(isset($_POST['add'])){
        if($_POST['add'] != "iuyuiyeiuqwy"){
            header('Location: ../add_result');
        }
    }
    else{
        header('Location: ../add_result');
    }
?>
<?php include "../navigation.php" ?>
                        <div class="row">
                            <div class="alert alert-success mt-5 ml-4" style="font-size:20px;">
                                Your data has been saved. Thanks for Helping us!
                            </div>
                        </div>
    </header>
    <?php
        if(isset($_POST['submit_send_it'])){
                $result_query = "INSERT INTO relative_grade_est_data_val (user_id,sem_id) VALUES ({$_SESSION['user_id']},{$_SESSION['user_semester_id']}) ";
                $result_query_result = mysqli_query($relative_connection,$result_query);
                check_query($result_query_result);
                $result_query = "SELECT data_id FROM relative_grade_est_data_val WHERE user_id = {$_SESSION['user_id']} ORDER BY data_id DESC LIMIT 1";
                $result_query_result = mysqli_query($relative_connection,$result_query);
                if(!$result_query_result)
                    die('QUERYY FAILED'.mysqli_error($relative_connection));
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
                    $get_sub_id_result = mysqli_query($relative_connection,$get_sub_id);
                    if(!$get_sub_id_result)
                        die('GET SUB ID FAILED!'.mysqli_error($relative_connection));
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
                header('Location: index.php?add=success');
        }
    ?>
    <?php 
    if(isset($_GET['add'])){
        if($_GET['add'] == 'success')
        {   
          echo "<script>
               document.querySelector('.wrong1').style.display = 'block';
           </script>";
        }
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