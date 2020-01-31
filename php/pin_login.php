<?php ob_start(); ?>
<?php session_start(); ?>
<?php 
    function redirect_to($url){
        $string  = 'Location: ';
        $string.=$url;
        header($string);
        exit;
    }
?>
<?php include "../php/dbs.php";?>
<?php 
    $x='';
    if(isset($_COOKIE['user'])){
        $x = $_COOKIE['user'];
    }
    if(!isset($_COOKIE['pin_login_username']) || !isset($_COOKIE['SJKHDKJASDOEO'])){
        redirect_to("login_page.php");
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
    function cookie_set($name,$value){
        setcookie($name,$value,time()+(3600*24*730),"/"); 
    }
    function cookie_delete($name,$value){
        setcookie($name,$value,time(),"/");
    }
?>
<!DOCTYPE HTML>
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
                    <form action="login_pin.php" method="POST" class="form-group form1">
                        <div class="form-group" style="margin-top:3%;margin-bottom:3%;">
                            <p class="sign">Login using Pin</p>
                        </div>
                        <div class="wrong1">
                                <p class="sign">Your passwords do not match</p>
                        </div>
                        <div class="form-group input-group my-4">
                            <div class="input-group-prepend"><i class="icon ion-md-lock input-group-text" style="font-size:1.3rem;"></i></div>
                            <input type="password" class="form-control" placeholder="4 Digit Pin" name="pin" inputmode="numeric" minlength="4" pattern="[0-9]{4}" maxlength="4" required />   
                        </div>
                        <div class="form-group ml-auto mr-auto">
                            <input type="submit" class="btn btn-primary form-control" value="Login Securely" name="submit">
                        </div>
                        <div class="form-group text-center">
                            <a href="login_page.php?pin_forgot=true" class="ml-auto mr-auto link1">Forgot Pin?</a>
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
        if($_GET['pin'] == 'wrong')
        {
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Entered pin is incorrect';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
?>
    </body>
</html>
