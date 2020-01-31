<?php ob_start() ?>
<?php include "../php/dbs.php";?>
<?php session_start(); ?>
<?php 
    // if(isset($_SESSION['username'])){
    //     if($_SESSION['role'] == 'user')
    //         header('location:../user');
    //     else
    //         header('location:../admin');
    // }
?>
    <!-- REDIRECT -->
<?php 
    if(isset($_COOKIE['pin_login_username']) && isset($_COOKIE['SJKHDKJASDOEO'])){
        header('location:pin_login.php');
    }
?>
    <!-- SET COOKIE HELPER FUNCTION -->
<?php
    function cookie_set($name,$value){
        setcookie($name,$value,time()+(3600*24*730),"/"); 
    }
    function cookie_delete($name,$value){
        setcookie($name,$value,time(),"/");
    }
?>
<?php 
    $x='';
    if(isset($_COOKIE['user'])){
        $x = $_COOKIE['user'];
    }
?>
    <!-- FETCH DATA -->
<?php 
    if(isset($_POST['submit'])){
        $pin = $_POST['pin'];
        $confpin = $_POST['confpin'];
        if($pin == $confpin){
            $name = "pin_login_username";
            $hash_pin = password_hash($pin,PASSWORD_BCRYPT,array('cost' => 11));
            cookie_set($name,$x);
            $name_pass = "SJKHDKJASDOEO";
            cookie_set($name_pass,$hash_pin);
            if($_SESSION['role'] == 'admin')
                header('Location:../admin/php/validation.php');
            else if($_SESSION['role'] == 'user')
                header('Location:../user/features/validation.php');
        }
        else{
            header('location:set_up.php?pin=no_match');
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Log In</title>
</head>
<body>
    <?php //include "loader1.php"; ?>
    <header style="min-height:100vh;background-image:linear-gradient(rgba(12, 97, 138, 0.85), rgba(12, 97, 138, 0.85)),url('../user/css/imgs/signup-min2.jpg');background-size:100% 105%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-xs-10 col-sm-9 col-md-7 col-lg-5 signup">
                    <form action="" method="POST" class="form-group form1">
                        <div class="form-group" style="margin-top:3%;margin-bottom:3%;">
                            <p class="sign">Set Up Pin For Faster Login</p>
                        </div>
                        <div class="wrong1">
                                <p class="sign">Your passwords do not match</p>
                        </div>
                        <div class="form-group input-group mb-4 mt-5">
                            <div class="input-group-prepend"><i class="icon ion-md-lock input-group-text" style="font-size:1.2rem;"></i></div>
                         <input type="password" class="form-control" placeholder="Create 4-digit Numeric Pin" name="pin" inputmode="numeric" minlength="4" pattern="[0-9]{4}" maxlength="4" required>   
                        </div>
                        <div class="form-group input-group my-4">
                            <div class="input-group-prepend"><i class="icon ion-md-lock input-group-text" style="font-size:1.3rem;"></i></div>
                            <input type="password" class="form-control" placeholder="Confirm Numeric Pin" name="confpin" inputmode="numeric" minlength="4" pattern="[0-9]{4}" maxlength="4" required>   
                        </div>
                        <div class="form-group ml-auto mr-auto">
                            <input type="submit" class="btn btn-primary form-control" value="Set Up and Continue" name="submit">
                        </div>
                        <div class="form-group" style="font-size:20px;">
                            <small class="mr-2">Don't want to set up pin?</small>
                            <small><a href="../user">Click Here</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <style>
    *{
        box-sizing:border-box;
        margin:0;
        padding:0;
    }
    .wrong1{  
        display: none;
        background-color: rgb(250,235,235);
        color: rgb(138,94,101); 
        padding:16px;
        margin:6px 0;
    }
    .sign{
        font-size:22px;
        font-weight:400;
        margin:0;
        text-align:center;
        margin-bottom:5vh;
    }
    .link1{
        font-size:16px;
        margin-right:46%;
    }
    .signup{
            margin-top:15vh;
    }
    .form1{
            padding-top:20px;
            padding-bottom:20px;
            padding-left:10%;
            padding-right:10%;
            border-radius:5px;
            background-color: white;
    }
    </style>
   <?php 
    if(isset($_GET['pin']))
    {
        if($_GET['pin'] == 'no_match')
        {  
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Your both Pin do not match';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
?>
    </body>
</html>
