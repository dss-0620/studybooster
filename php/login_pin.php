<?php session_start(); ?>
<?php ob_start(); ?>
<?php 
    function redirect_to($url){
        $string  = 'Location: ';
        $string.=$url;
        header($string);
        exit;
    }
?>
<?php include "dbs.php"; ?>
<?php
    if(!isset($_POST['submit'])){
        redirect_to("../");
    }
?>
<?php
    function cookie_set($name,$value){
        setcookie($name,$value,time()+(3600*24*730),"/"); 
    }
    function cookie_delete($name,$value){
        setcookie($name,$value,time(),"/");
    }
?>
<?php
    if(isset($_COOKIE['count'])){
        $count=$_COOKIE['count'];
        if($count>=2){
            redirect_to("login_page.php?pin=blocked");
        }
    }
?>
<?php
if(isset($_POST['submit'])){
        $pin = $_POST['pin'];
        $cookie_pin = $_COOKIE['SJKHDKJASDOEO'];
        $username = $_COOKIE['pin_login_username'];
        if(password_verify($pin,$cookie_pin)){
            $login_query = "SELECT * FROM users WHERE username_id = '$username'";
            $login_query_result = mysqli_query($connection,$login_query);
            if(!$login_query_result)
                die('LOGIN FAILED');
            $cnt = mysqli_num_rows($login_query_result);
            if($cnt == 0){
                $login_query = "SELECT * FROM users WHERE username = '$username'";
                $login_query_result = mysqli_query($connection,$login_query);
                if(!$login_query_result)
                    die('LOGIN FAILED');
            }
            $count="count";
            $counter=0;
            cookie_set($count,$counter);
            $row = mysqli_fetch_assoc($login_query_result);
            $db_username = $row['username'];
            $db_user_id = $row['user_id'];
            $db_first_name = $row['user_firstname'];
            $db_last_name = $row['user_lastname'];
            $db_role = $row['user_role'];
            $db_user_college_id = $row['user_college_id'];
            $db_user_branch_id = $row['user_branch_id'];
            $db_user_semester_id = $row['user_semester_id'];
            $db_password = $row['user_password'];
            $db_user_group = $row['user_group'];
            $db_storage = $row['storage'];
            $_SESSION['username'] = $db_username;
            $_SESSION['user_id']=$db_user_id;
            $_SESSION['firstname']=$db_first_name;
            $_SESSION['lastname']=$db_last_name;
            $_SESSION['role']=$db_role;
            $_SESSION['user_college_id']=$db_user_college_id;
            $_SESSION['user_branch_id']=$db_user_branch_id;
            $_SESSION['user_semester_id']=$db_user_semester_id;
            $_SESSION['user_password'] = $db_password;
            $_SESSION['user_group'] = $db_user_group;
            $_SESSION['storage'] = $db_storage;
            $count="count";
            $counter=0;
            cookie_delete($count,$counter);
            $check_permission = "SELECT * FROM allowed_users WHERE user_id = {$_SESSION['user_id']}";
            $check_result = mysqli_query($relative_user_connection,$check_permission);
            if(!$check_result)
                die('CHECKING FAILED'.mysqli_error($relative_user_connection));
            $count = mysqli_num_rows($check_result);
            if($count==1){
                $check_data = "SELECT * FROM relative_grade_est_data_val WHERE user_id = {$_SESSION['user_id']}";
                $check_data_result = mysqli_query($relative_user_connection,$check_data);
                if(!$check_data_result)
                    die('ANOTHER CHECKING FAILED'.mysqli_error($relative_user_connection));
                $count_val = mysqli_num_rows($check_data_result);
                if($count_val!=1)
                    redirect_to("../user/features/relative_marks");
                else{
                    redirect_to("../user");
                }
            }
            else{
                redirect_to("../user");
                echo '<script type="text/javascript">window.location.replace("../user")</script>';
            }
        }
        else{
            if(isset($_COOKIE['count'])){
                $total_count = $_COOKIE['count'];
                $counter = $total_count+1;
                cookie_set("count",$counter);
            }
            else{
                $count="count";
                $counter=0;
                cookie_set($count,$counter);
            }
            redirect_to("pin_login.php?pin=wrong");
        }
}
?>