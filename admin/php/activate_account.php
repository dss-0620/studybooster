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
    if(isset($_POST['activate']))
    { 
      $query = "SELECT user_account_status from users WHERE user_id = {$_POST['activate']} ";
      $result = mysqli_query($connection,$query);
      check_query($result);
      $row = mysqli_fetch_assoc($result);
      if($row['user_account_status'] == 'SD')
        header('location:view_all_users');
      else if($_SESSION['role'] == 'admin')
      {
        $userid= $_POST['activate'];
        $query="UPDATE users SET ";
        $query.="user_account_status = 'active' ";
        $query.="WHERE user_id = $userid ";
        $request=mysqli_query($connection,$query);
        if(!$request)
            die('QUERY FAILED'.mysqli_error($connection));
        $query = "INSERT INTO activate_account (action_name,user_id,admin_id) ";
        $query.="VALUES('activated','$userid','{$_SESSION['user_id']}')";
        $result = mysqli_query($connection,$query);
        check_query($result);
        header('location:view_all_users');
      }
      else
      {
        header('location:../../user/index.php');
      }
    }
    else if(isset($_POST['deactivate']))
    {  
      $query = "SELECT user_account_status from users WHERE user_id = {$_POST['deactivate']} ";
      $result = mysqli_query($connection,$query);
      check_query($result);
      $row = mysqli_fetch_assoc($result);
      if($row['user_account_status'] == 'SD')
        header('location:view_all_users');
      else if($_SESSION['role'] == 'admin')
        {
        $userid=$_POST['deactivate'];
        $query="UPDATE users SET ";
        $query.="user_account_status = 'disabled' ";
        $query.="WHERE user_id = $userid ";
        $request=mysqli_query($connection,$query);
        if(!$request)
            die('QUERY FAILED'.mysqli_error($connection));
        $query = "INSERT INTO activate_account (action_name,user_id,admin_id) ";
        $query.="VALUES('deactivated','$userid','{$_SESSION['user_id']}')";
        $result = mysqli_query($connection,$query);
        check_query($result);
        header('location:view_all_users');
    }
    else{
        header('location:../../user');
    }
    }
    else{
        header('location:view_all_users');
    }
?>