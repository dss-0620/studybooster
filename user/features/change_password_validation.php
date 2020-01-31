<?php include "../../php/dbs.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 
if(!isset($_SESSION['firstname']))
    header('location:../index.php');
if($_SESSION['role'] == 'user')
  header('location:../user/index.php');
?>
<?php 
    if(isset($_POST['submit']))
    {      
        $form_current_password = $_POST['current_password'];
        $form_new_password = $_POST['new_password'];
        $form_confirm_password = $_POST['confirm_new_password'];
        if($form_new_password === $form_confirm_password){
            if(password_verify($form_current_password,$_SESSION['user_password']))
            {
                $form_new_password = password_hash($form_new_password,PASSWORD_BCRYPT,array('cost' => 10));
                $query="UPDATE users SET ";
                $query.="user_password = '$form_new_password' ";
                $query.="WHERE user_id = {$_SESSION['user_id']} ";
                $change_password = mysqli_query($connection,$query);
                check_query($change_password);
                $_SESSION['user_password'] = $form_new_password;
                header('location:change_password/index.php?change=success');
            }
            else
            {
                header('location:change_password/index.php?change=current_incorrect');
            }
        }
        else
        {
            header('location:change_password/index.php?change=both_not_match');
        }

    }
?>