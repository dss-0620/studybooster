<?php include "php/dbs.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Studybooster is tool that can calculate your pointers based on your performance in various exams.">
    <meta name="keywords" content="Studybooster,pointer calculator,spi calculator,study booster">
    <meta name="author" content="Devansh Suthar">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143827838-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143827838-1');
</script>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="css/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="css/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="css/favicons/favicon-16x16.png">
    <link rel="manifest" href="css/favicons/site.webmanifest">
    <link rel="mask-icon" href="css/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="css/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="css/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!--/****Link to stylesheets and link to google fonts****/-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/queries.css">
    <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400&display=swap" rel="stylesheet">
    <!--ADS-->
    <!----/****Title of webpage****/---->

    <title>Studybooster</title>
</head>

<body style="max-width:100vw;">
    <!----/****Header of webpage****/---->

    <header>
    <?php //include "php/loader1.php"; ?>
    <!--Navigation in header-->
    <div class="cont1" style="min-height:700px;">
       <div class="container-fluid px-0">
       <!-- NAVBAR -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top pt-2" style="z-index:10000;">
                    <div class="container">
                        <a href="" class="navbar-brand">Studybooster</a>
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#NAVBAR">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="NAVBAR">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item mx-1">
                                    <a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item mx-1">
                                    <a href="#features" class="nav-link">Features</a>
                                </li>
                                 <?php 
                                    if(!isset($_SESSION['firstname'])){
                                 ?>
                                    <li class="nav-item mx-1">
                                        <a href="php/login_page.php" class="nav-link">Log In</a>
                                    </li>
                                    <li class="nav-item mx-1">
                                        <a href="user/features/signup.php" class="nav-link">Sign Up</a>
                                    </li>
                                <?php
                                    }
                                    else if(($_SESSION['role']) == 'admin')
                                    {
                                        echo '<li class="nav-item mx-1">
                                        <a href="admin/" class="nav-link">Admin</a>
                                    </li>';
                                    echo '<li class="nav-item mx-1">
                                        <a href="user/features/logout.php" class="nav-link">Log out</a>
                                    </li>';
                                    }
                                    else if(($_SESSION['role']) == 'user')
                                    {
                                        echo '<li class="nav-item mx-1">
                                        <a href="user/" class="nav-link">User</a>
                                    </li>';
                                    echo '<li class="nav-item mx-1">
                                        <a href="user/features/logout.php" class="nav-link">Log out</a>
                                    </li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
           <!-- <div class="row">
                <img src="css/imgs/header/lg3.png" alt="Website logo" class="logo ml-4" style="z-index:2;">
              <div class="navbar ml-auto mr-5">
                  <div class="navbar nav navi js--navi" style="z-index:10;">
                        <a href="#" class="nav-item nav-link but1 px-4 d-block d-md-inline-block" style="color:white;font-weight: 400; font-size:115%; transition: border 0.4s;">Home</a>
                        <a href="#features" class="nav-item nav-link but1 px-4 d-block d-md-inline-block" style="color:white;font-weight: 400; font-size:115%; transition: border 0.4s;">Features</a>
                       
                    </div>
              </div>
              <a class="mobile-icon js--mobile-icon mr-5 pt-4" style="color:white;"><i class="icon ion-md-menu"></i></a>
           </div> -->
       </div>

       <!--Main content of header-->
       <div class="header-main-content1">
           <h1 class="main-heading1 mb-3">Enhance Your Studies with studybooster</h1>
          <?php
          if(!isset($_SESSION['username'])){
          echo '<div class="anim"><a href="user/features/signup.php" class="heading-button1" style="text-decoration:none;">Get started</a></div>';
          }
         else if($_SESSION['role'] == 'admin'){ 
          echo '<div class="anim"><a href="admin/" class="heading-button1" style="text-decoration:none;">Admin Page</a></div>';
           }
         else if($_SESSION['role'] == 'user'){ 
          echo '<div class="anim"><a href="user/" class="heading-button1" style="text-decoration:none;">User Page</a></div>';
         }
         ?>
       </div>

       <!--Login form in header-->
       <!-- <form method="POST" action="php/login.php" class="login-form">
            <div class="row1" id="underline1">
                <p id="p1">Log In to your account</p>
                <a href="index.php?action=close_login"><i class="icon ion-md-close icn1"></i></a>
            </div>
            <div class="wrong1">
                <p class="sign">Your E-mail or password is incorrect</p>
            </div>
            <div class="row1">
                <input name="username" id="username" type="email" value="<?php echo $x; ?>" placeholder="E-mail" required>
            </div>
            <div class="row1">
                <input name="password" id="password" type="password" placeholder="Password" required>
            </div>
            <div class="row1 row2 d-flex align-items-center">
            <small><a href="forgot_password">Forgot password?</a></small> 
            <input name="submit" value="Log In" type="submit" class="btn btn-primary mt-0" style="width:auto; margin-left:33%;">
            </div>
            <div class="row1">
                <small id="sp">Don't have an account?</small>
                <small><a href="user/php/signup.php">Create now</a></small>
            </div>
           </form> -->
    </div> 
         <style>
            html{
                overflow-x:hidden;
            }
            .logo{
                height:130px; width:auto; float:left;
            }
                .row1 input:focus{
                    outline:none;
                    border-radius:3px;
                    border:1px solid #7bf;
                }
                .wrong1{
                    font-size:86%;
                }
                @media only screen and (max-width:767px)
                {
                    .mobile-icon{
                        display: inline-block;
                        color:white;
                    }
                    .navi{
                        display:none;
                    }
                    .but1:hover,.but1:active{
                        color:#0b0;
                        border:none;
                    }
                }
                /*@media only screen and (max-width:400px)*/
                /*{*/
                /*    .login-form*/
                /*    {*/
                /*        width:97%;*/
                /*    }*/
                /*    .main-heading1{*/
                /*        font-size: 150% !important;*/
                /*    }*/
                /*    .anim{*/
                /*        font-size: 50% !important;*/
                /*    }*/
                /*}*/
                @media only screen and (max-width:500px)
                {
                    .login-form
                    {
                        width:97%;
                    }
                    .main-heading1{
                        font-size: 155% !important;
                    }
                    .anim{
                        font-size: 70% !important;
                    }
                    .logo{
                        height:90px; width:auto; float:left; margin-top:6px;
                    }
                    .mobile-icon{
                        font-size:150%;
                    }
                }
                @media only screen and (max-width:400px)
                {
                    body{
                        font-size:17px;
                    }
                }
            </style>
    </header>
     <!----/****Features of webpage****/---->
     <section class="features pt-5" id="features" style="background-color:#f1f3f6;">
        <div class="container" style="padding-bottom: 15vh;">
            <div class="row d-flex justify-content-center mb-4">
                <h1 style="font-weight: 100;">Features</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="icn-1"><i class="icon ion-md-fastforward"></i></div>
                    <h2>Fast and easy</h2>
                    <span>Why waste your valuable time! When performing simple steps can give you estimated pointers.</span>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="icn-1"><i class="icon ion-ios-save"></i></div>
                    <h2>Save and review</h2>
                   <span>You can just save and edit your calculated result and look through it anytime you want. No
notes or diaries to be written !</span>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="icn-1"><i class="icon ion-ios-lock"></i></div>
                    <h2>Secure</h2>
                   <span>Your pointers are your pointers and not anyone else business. Your pointers are safe and so
don’t worry about anyone finding it.</span>
                </div>
            </div>
        </div>
     </section>
   <!----/****Footer****/---->
     <section class="footer" style="background-color:rgba(0,0,0,0.75);">
         <div class="container-fluid px-0">
                 <div class="row mx-0">
                  &nbsp;
                 </div>
                <div class="row mx-0">
                    <div class="col d-flex justify-content-center mt-3 mb-3 text1">
                            Website Built by &nbsp;<span>Devansh Suthar</span>
                    </div>
                </div>
                <div class="row mx-0">
                <div class="col d-flex justify-content-center mb-5">
                           <a href="/developers/" target="_blank" class="link1">Developers</a>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col d-flex justify-content-center mt-0 mb-2 text2">
                            Contact us at &nbsp;<span><a style="color:#f7f7f7;" href="mailto:support@studybooster.co.in">support@studybooster.co.in</span>
                    </div>
                </div>
         </div>
     </section>
     <style>
        .text1{
            font-family: 'Montserrat', sans-serif;
            cursor:pointer;
            color:#d5d5d5;
        }
        .text2{
            font-family: 'Montserrat', sans-serif;
            cursor:pointer;
            font-size:80%;
            color:#d5d5d5;
        }
        .text2:hover, .text2:active{
            color:#f7f7f7;
        }
        .text2 span{
            font-weight:500;
        }
        .text1:hover, .text1:active{
            color:#f7f7f7;
        }
        .text1 span{
            font-weight:500;
        }
        .link1{
            text-decoration:none;
            font-family: 'Montserrat', sans-serif;
            cursor:pointer;
            color:#d5d5d5;
        }
        .link1:hover, .link1:active{
            text-decoration:none;
            color:#f7f7f7;
        }
     </style>
         
     </section>
    <!----/****Javascript and jQuery files****/---->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script> 
    <script src="js/jquery.js"></script>
    <script src="js/jquery_code.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>