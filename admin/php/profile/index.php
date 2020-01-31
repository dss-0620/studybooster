<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
<?php
    $detail_name_array = ['First Name','Last Name','E-mail','Semester','Group (only for 1st year Students)','Branch','College'];
    $select_query1 = "SELECT college_name FROM college WHERE college_id = {$_SESSION['user_college_id']} ";   
    $select_query2 = "SELECT branch_name FROM user_branch WHERE branch_id = {$_SESSION['user_branch_id']} ";
    $select_query3 = "SELECT semester_name FROM semester WHERE semester_id = {$_SESSION['user_semester_id']} ";
    $result1 = mysqli_query($connection,$select_query1);
    $result2 = mysqli_query($connection,$select_query2);
    $result3 = mysqli_query($connection,$select_query3);
    if(!$result1)
        die('QUERYYY FAILED'.mysqli_error($connection));
    check_query($result2);
    check_query($result3);
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
    $row3 = mysqli_fetch_assoc($result3);
    if(empty($_SESSION['lastname'])){
        $detail_array = ["{$_SESSION['firstname']}","","{$_SESSION['username']}","{$row3['semester_name']}","{$_SESSION['user_group']}","{$row2['branch_name']}","{$row1['college_name']}"];
    }
    else{
        $detail_array = ["{$_SESSION['firstname']}","{$_SESSION['lastname']}","{$_SESSION['username']}","{$row3['semester_name']}","{$_SESSION['user_group']}","{$row2['branch_name']}","{$row1['college_name']}"];
    }
?>
<?php 
    function display_sem($x){
        global $connection;
        $query_sem = "SELECT * FROM semester";
        $result_query_sem = mysqli_query($connection,$query_sem);
        check_query($result_query_sem);
        echo "<select class='changeName{$x} form-control' name='{$x}' style='display: none;' >";
        while($row = mysqli_fetch_assoc($result_query_sem)){
        if($row['semester_id'] == $_SESSION['user_semester_id'])
           echo "<option value='{$row['semester_id']}' selected>{$row['semester_name']}</option>";
        else
           echo "<option value='{$row['semester_id']}' id='{$row['semester_id']}'>{$row['semester_name']}</option>";
        }
        echo "</select>";
    }
    function display_branch($x){
        global $connection;
        $query_branch = "SELECT * FROM user_branch";
        $result_query_branch = mysqli_query($connection,$query_branch);
        check_query($result_query_branch);
        echo "<select class='changeName{$x} form-control' name='{$x}' style='display: none;' >";
        while($row = mysqli_fetch_assoc($result_query_branch)){
        if($row['branch_id'] == $_SESSION['user_branch_id'])
           echo "<option value='{$row['branch_id']}' selected>{$row['branch_name']}</option>";
        else
           echo "<option value='{$row['branch_id']}'>{$row['branch_name']}</option>";
        }
        echo "</select>";
    }
    function display_college($x){
        global $connection;
        $query_college = "SELECT * FROM college";
        $result_query_college = mysqli_query($connection,$query_college);
        check_query($result_query_college);
        echo "<select class='changeName{$x} form-control' name='{$x}' style='display: none;' >";
        while($row = mysqli_fetch_assoc($result_query_college)){
            if($row['college_id'] == $_SESSION['user_college_id'])
                echo "<option value='{$row['college_id']}' selected>{$row['college_name']}</option>";
            else
                echo "<option value='{$row['college_id']}'>{$row['college_name']}</option>";
            }
        echo "</select>";
    }
    function display_group($x){
        echo "<select class='changeName{$x} form-control' name='{$x}' style='display: none;' >";
        if($_SESSION['user_group'] == 1){
            echo "<option value='1' selected>1</option>";
            echo "<option value='2'>2</option>";
        }
        else if($_SESSION['user_group'] == 2){
            echo "<option value='2' selected>2</option>";
            echo "<option value='1'>1</option>";
        }
        else{
            echo "<option value='1'>1</option>";
            echo "<option value='2'>2</option>";
        }

        echo "</select>";
    }
?>
                    <div class="row ml-4 mb-2" style="font-weight:350; font-size:160%;">
                        Personal Information
                    </div>
                    <div class="row mx-4 mb-2 py-2 px-3 warn1" style="font-weight:350; font-size:130%; display: none; background-color:rgba(255,213,0,0.8);color:#d00;">
                        Hello world
                    </div>
                    <div class="table-responsive mt-4 col-xs-9 col-sm-8 col-md-7 col-xl-7">
                        <table class="table table-hover">
                          <tbody>
                          <form action="" method="post">
                                <?php 
                                    for($i=0; $i<7; $i++)
                                    {
                                        if($i<3 && $i!=1){
                                            echo "<tr><td><strong>$detail_name_array[$i]</strong></td>
                                            <td><span class='changeSpan{$i}'>$detail_array[$i]</span><input class='changeName{$i} form-control' name='$i' type='text' value='$detail_array[$i]' style='display: none;' required></td>";
                                            echo "<td class='change{$i}' style='cursor:pointer;'>EDIT</td></tr>";
                                            echo "<script>document.querySelector('.change{$i}').addEventListener('click', function() {
                                                document.querySelector('.changeName{$i}').style.display = 'inline-block';
                                                document.querySelector('.changeSpan{$i}').style.display = 'none';
                                            });</script>";
                                        }
                                        else if($i == 1){
                                            echo "<tr><td><strong>$detail_name_array[$i]</strong></td>
                                            <td><span class='changeSpan{$i}'>$detail_array[$i]</span><input class='changeName{$i} form-control' name='$i' type='text' value='$detail_array[$i]' style='display: none;'></td>";
                                            echo "<td class='change{$i}' style='cursor:pointer;'>EDIT</td></tr>";
                                            echo "<script>document.querySelector('.change{$i}').addEventListener('click', function() {
                                                document.querySelector('.changeName{$i}').style.display = 'inline-block';
                                                document.querySelector('.changeSpan{$i}').style.display = 'none';
                                            });</script>";
                                        }
                                        else if($i == 3){
                                            echo "<tr><td><strong>$detail_name_array[$i]</strong></td>
                                            <td><span class='changeSpan{$i}'>$detail_array[$i]</span>"; 
                                            display_sem($i);
                                            echo"</td>";
                                            echo "<td class='change{$i}' style='cursor:pointer;'>EDIT</td></tr>";
                                            echo "<script>document.querySelector('.change{$i}').addEventListener('click', function() {
                                                document.querySelector('.changeName{$i}').style.display = 'inline-block';
                                                document.querySelector('.changeSpan{$i}').style.display = 'none';
                                                document.querySelector('.warn1').textContent = 'Note: Changing your semester will delete all of your saved results.';
                                                document.querySelector('.warn1').style.display = 'block';
                                            });</script>";
                                        }
                                        else if($i == 4){
                                            echo "<tr><td><strong>$detail_name_array[$i]</strong></td>
                                            <td><span class='changeSpan{$i}'>$detail_array[$i]</span>"; 
                                            display_group($i);
                                            echo"</td>";
                                            echo "<td class='change{$i}' style='cursor:pointer;'>EDIT</td></tr>";
                                            echo "<script>document.querySelector('.change{$i}').addEventListener('click', function() {
                                                document.querySelector('.changeName{$i}').style.display = 'inline-block';
                                                document.querySelector('.changeSpan{$i}').style.display = 'none';
                                                document.querySelector('.warn1').textContent = 'Note: Changing your group will delete all of your saved results.';
                                                document.querySelector('.warn1').style.display = 'block';
                                            });</script>";
                                        }
                                        else if($i == 5){
                                            echo "<tr><td><strong>$detail_name_array[$i]</strong></td>
                                            <td><span class='changeSpan{$i}'>$detail_array[$i]</span>"; 
                                            display_branch($i);
                                            echo"</td>";
                                            echo "<td class='change{$i}' style='cursor:pointer;'>EDIT</td></tr>";
                                            echo "<script>document.querySelector('.change{$i}').addEventListener('click', function() {
                                                document.querySelector('.changeName{$i}').style.display = 'inline-block';
                                                document.querySelector('.changeSpan{$i}').style.display = 'none';
                                                document.querySelector('.warn1').textContent = 'Note: Changing your branch will delete all of your saved results.';
                                                document.querySelector('.warn1').style.display = 'block';
                                            });</script>";
                                        }
                                        else if($i == 6){
                                            echo "<tr><td><strong>$detail_name_array[$i]</strong></td>
                                            <td><span class='changeSpan{$i}'>$detail_array[$i]</span>"; 
                                            display_college($i);
                                            echo"</td>";
                                            echo "<td class='change{$i}' style='cursor:pointer;'>EDIT</td></tr>";
                                            echo "<script>document.querySelector('.change{$i}').addEventListener('click', function() {
                                                document.querySelector('.changeName{$i}').style.display = 'inline-block';
                                                document.querySelector('.changeSpan{$i}').style.display = 'none';
                                            });</script>";
                                        }
                                    }
                                ?>
                               
                          </tbody>
                        </table>
                        <input type="submit" title="Save Changes" value="Save Changes" name="submit" class="btn btn-primary mb-2"> 
                      </form>
                    </div>
                    </div>
                    </div>
              </div>
    </header>
    <?php 
        if(isset($_POST['submit'])){
            $form_array = array();
            for($i=0; $i<7; $i++){
                $form_array[$i] = $_POST[$i];
            }
            if($form_array[3] > 2){
                $form_array[4] = '';
            }
            if($_SESSION['user_semester_id'] != $form_array[3])
                include "../delete.php";
            else if($_SESSION['user_branch_id'] != $form_array[5])
                include "../delete.php";
            else if($_SESSION['user_group'] != $form_array[4])
                include "../delete.php";
            $query = "UPDATE users SET ";
            $query .= "user_firstname = '$form_array[0]', ";
            $query .= "username = '$form_array[2]', ";
            $query .= "user_lastname = '$form_array[1]', ";
            $query .= "user_branch_id = '$form_array[5]', ";
            $query .= "user_group = '$form_array[4]', ";
            $query .= "user_college_id = '$form_array[6]', ";
            $query .= "user_semester_id = '$form_array[3]' ";
            $query .= "WHERE user_id = {$_SESSION['user_id']} ";
            $result = mysqli_query($connection,$query);
            check_query($result);
            $_SESSION['firstname'] = $form_array[0];
            $_SESSION['lastname'] = $form_array[1];
            $_SESSION['username'] = $form_array[2];
            $_SESSION['user_group'] = $form_array[4];
            $_SESSION['user_semester_id'] = $form_array[3];
            $_SESSION['user_branch_id'] = $form_array[5];
            $_SESSION['user_college_id'] = $form_array[6];
            header('location:../profile');
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