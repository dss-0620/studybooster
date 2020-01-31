<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "dbs.php"; ?>
<?php include "loader1.php"; ?>
<?php 
    if(!isset($_POST['username_id']) || !isset($_POST['username'])){
        header('location:../');
    }
    function cookie_set($email){
        $name = "user";
        setcookie($name,$email,time()+(30*86400),"/"); 
    }
?>
<?php 
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
      {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
      }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
      {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
    //whether ip is from remote address
    else
      {
        $ip_address = $_SERVER['REMOTE_ADDR'];
      }
    //echo $ip_address;
?>
<?php 
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        
        $form_username=$_POST['username'];
        $query="SELECT * FROM users ";
        $query.="WHERE username_id = '$form_username'";
        $result=mysqli_query($connection,$query);
        if(!$result)
            die('QUERY FAILED'.mysqli_error($connection));
        $num = mysqli_num_rows($result);
        if(!$num){
            $query="SELECT * FROM users ";
            $query.="WHERE username = '$form_username'";
            $result=mysqli_query($connection,$query);
            if(!$result)
                die('QUERY FAILED'.mysqli_error($connection));
        }
        cookie_set($_POST['username']);
        $form_password=$_POST['password'];
        $db_data=array();
        // $secure_query = mysqli_prepare($connection,"SELECT user_id,user_password,user_firstname,user_lastname,user_role,user_account_status,user_semester_is,user_college_id,user_branch_id,username,user_group,storage FROM users WHERE username = ? ");
        // mysqli_stmt_bind_param($secure_query,"s",$form_username);
        // mysqli_stmt_execute($secure_query);
        // mysqli_stmt_bind_result($secure_query,$db_data['user_id'],$db_data['user_password'],$db_data['user_firstname'],$db_data['user_lastname'],$db_data['user_role'],$db_data['user_account_status'],$db_data['user_semester_id'],$db_data['user_college_id'],$db_data['user_branch_id'],$db_data['username'],$db_data['user_group'],$db_data['storage']);
        // $query="SELECT * FROM users ";
        // $query.="WHERE username = '$form_username'";
        // $result=mysqli_query($connection,$query);
        // if(!$result)
        //     die('QUERY FAILED'.mysqli_error($connection));
        $db_data = mysqli_fetch_assoc($result);
        $db_user_id=$db_data['user_id'];
        $db_password=$db_data['user_password'];
        $db_firstname=$db_data['user_firstname'];
        $db_lastname=$db_data['user_lastname'];
        $db_role=$db_data['user_role'];
        $db_status=$db_data['user_account_status'];
        $db_semester_id=$db_data['user_semester_id'];
        $db_college_id=$db_data['user_college_id'];
        $db_branch_id=$db_data['user_branch_id'];
        $db_username = $db_data['username'];
        $db_group = $db_data['user_group'];
        $db_storage = $db_data['storage'];
        if($db_status == 'active')
        {
            if(password_verify($form_password,$db_password))
            {   
                $query = "UPDATE users SET wrong_attemps = 0 WHERE user_id = $db_user_id ";
                $query_result = mysqli_query($connection,$query);
                check_query($query_result);
                $_SESSION['username'] = $db_username;
                $_SESSION['user_id']=$db_user_id;
                $_SESSION['firstname']=$db_firstname;
                $_SESSION['lastname']=$db_lastname;
                $_SESSION['role']=$db_role;
                $_SESSION['user_college_id']=$db_college_id;
                $_SESSION['user_branch_id']=$db_branch_id;
                $_SESSION['user_semester_id']=$db_semester_id;
                $_SESSION['user_password'] = $db_password;
                $_SESSION['user_group'] = $db_group;
                $_SESSION['storage'] = $db_storage;
                $ip_query="SELECT * from add_ip_val_secure_ssl_615 WHERE user_id = {$_SESSION['user_id']} ";
                $result_ip_result = mysqli_query($result_connection,$ip_query);
                if(!$result_ip_result)
                    die('QUERY FAILED REGARDING DATA'.mysqli_error($result_connection));
                $flag = false;
                while($ip_data = mysqli_fetch_assoc($result_ip_result)){
                    if($ip_data['ip_add'] == $ip_address){
                        $flag = true;
                        break;
                    }
                }
                if(!$flag){
                    $ip_store = "INSERT INTO add_ip_val_secure_ssl_615(user_id,ip_add) ";
                    $ip_store .= "VALUES('{$_SESSION['user_id']}','$ip_address')";
                    $result_ip = mysqli_query($result_connection,$ip_store);
                    if(!$result_ip)
                        die('STORING FAILED');
                }
                $visits_query = "UPDATE users SET visits = visits+1 WHERE user_id = $db_user_id ";
                $visits_query_result = mysqli_query($connection,$visits_query);
                check_query($visits_query_result);
                if(!isset($_COOKIE['pin_login_username']) || !isset($_COOKIE['SJKHDKJASDOEO']))
                    header('location:set_up.php');
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
                    if($count_val<1)
                        header('Location: ../user/features/relative_marks');
                    else{
                        if(!isset($_COOKIE['pin_login_username']) || !isset($_COOKIE['SJKHDKJASDOEO']))
                            header('location:set_up.php');
                        else if($_SESSION['role'] == 'admin')
                           header('Location:../admin/php/validation.php');
                        else if($_SESSION['role'] == 'user')
                           header('Location:../user/features/validation.php');
                    }
                }
                else if(!isset($_COOKIE['pin_login_username']) || !isset($_COOKIE['SJKHDKJASDOEO']))
                    header('location:set_up.php');
                else if($_SESSION['role'] == 'admin')
                   header('Location:../admin/php/validation.php');
                else if($_SESSION['role'] == 'user')
                   header('Location:../user/features/validation.php');
            }
            else
            {   
                $query = "UPDATE users SET wrong_attemps = wrong_attemps+1 WHERE user_id = $db_user_id ";
                $query_result = mysqli_query($connection,$query);
                check_query($query_result);
                $query = "SELECT wrong_attemps FROM users WHERE user_id = $db_user_id ";
                $query_count_result = mysqli_query($connection,$query);
                check_query($query_count_result);
                $row = mysqli_fetch_assoc($query_count_result);
                if($row['wrong_attemps'] >= 10)
                {
                    $query = "UPDATE users SET user_account_status = 'SD' WHERE user_id = $db_user_id ";
                    $result = mysqli_query($connection,$query);
                    check_query($result);
                }
                header('Location:login_page.php?password=wrong');
            }
        }
        else if($db_status == 'disabled')
        {
            header('Location:login_page.php?user_account=disabled');
        }
        else if($db_status == 'SD')
        {
            header('Location:login_page.php?user_account=blocked');
        }
        else
        {
            header("Location:login_page.php?password=wrong");
        }
    }
?>