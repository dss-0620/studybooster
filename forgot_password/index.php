<?php ob_start(); ?>
<?php 
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   require '../vendor/autoload.php';
   require '../php/class.php';
?>
<?php 
    function cookie_set($email){
        $name = "user";
        setcookie($name,$email,time()+(30*86400),"/"); 
    }
?>
 <?php 
 if(isset($_POST['submit'])){
   if(username_exists($_POST['email']) || username_id_exist($_POST['email'])){
    $select_name = "SELECT user_firstname,user_account_status,username FROM users WHERE username_id = '{$_POST['email']}' ";
    $result_select = mysqli_query($connection,$select_name);
    check_query($result_select);
    $cnt = mysqli_num_rows($result_select);
    if(!$cnt){
      $select_name = "SELECT user_firstname,user_account_status,username FROM users WHERE username = '{$_POST['email']}' ";
      $result_select = mysqli_query($connection,$select_name);
      check_query($result_select);
    }
    $name = mysqli_fetch_assoc($result_select);
    if($name['user_account_status'] != 'disabled'){
        $token = bin2hex(openssl_random_pseudo_bytes(50));
        if($cnt){
          $query = "UPDATE users SET ";
          $query.="token='$token' ";
          $query.="WHERE username_id = '{$_POST['email']}'";
          $query_result = mysqli_query($connection,$query);
          check_query($query_result);
        }
        else{
          $query = "UPDATE users SET ";
          $query.="token='$token' ";
          $query.="WHERE username = '{$_POST['email']}'";
          $query_result = mysqli_query($connection,$query);
          check_query($query_result);
        }
        $email_id = $name['username'];
        if($email_id != null){
            $mail = new PHPMailer();
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = Configure::SMTP_HOST;  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = Configure::SMTP_USER;                     // SMTP username
            $mail->Password   = Configure::SMTP_PASSWORD;                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = Configure::SMTP_PORT;                                    // TCP port to connect to
            $mail->isHTML(true);
            $mail->setFrom('no-reply@studybooster.co.in', 'studybooster');
            $mail->addAddress("$email_id", "User");     // Add a //recipient
            $mail->Subject = 'Reset your password here.';
            $mail->Body = '<!doctype html>
    <html>
      <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Reset Password Link</title>
        <style>
          /* -------------------------------------
              GLOBAL RESETS
          ------------------------------------- */
          
          /*All the styling goes here*/
          
          img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; 
          }

          body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; 
          }

          table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
            table td {
              font-family: sans-serif;
              font-size: 14px;
              vertical-align: top; 
          }

          /* -------------------------------------
              BODY & CONTAINER
          ------------------------------------- */

          .body {
            background-color: #f6f6f6;
            width: 100%; 
          }

          /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
          .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; 
          }

          /* This should also be a block element, so that it will fill 100% of the .container */
          .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; 
          }

          /* -------------------------------------
              HEADER, FOOTER, MAIN
          ------------------------------------- */
          .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%; 
          }

          .wrapper {
            box-sizing: border-box;
            padding: 20px; 
          }

          .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
          }

          .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%; 
          }
            .footer td,
            .footer p,
            .footer span,
            .footer a {
              color: #999999;
              font-size: 12px;
              text-align: center; 
          }

          /* -------------------------------------
              TYPOGRAPHY
          ------------------------------------- */
          h1,
          h2,
          h3,
          h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px; 
          }

          h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; 
          }

          p,
          ul,
          ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px; 
          }
            p li,
            ul li,
            ol li {
              list-style-position: inside;
              margin-left: 5px; 
          }

          a {
            color: #3498db;
            text-decoration: underline; 
          }

          /* -------------------------------------
              BUTTONS
          ------------------------------------- */
          .btn {
            box-sizing: border-box;
            width: 100%; }
            .btn > tbody > tr > td {
              padding-bottom: 15px; }
            .btn table {
              width: auto; 
          }
            .btn table td {
              background-color: #ffffff;
              border-radius: 5px;
              text-align: center; 
          }
            .btn a {
              background-color: #ffffff;
              border: solid 1px #3498db;
              border-radius: 5px;
              box-sizing: border-box;
              color: #3498db;
              cursor: pointer;
              display: inline-block;
              font-size: 14px;
              font-weight: bold;
              margin: 0;
              padding: 12px 25px;
              text-decoration: none;
              text-transform: capitalize; 
          }

          .btn-primary table td {
            background-color: #3498db; 
          }

          .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff; 
          }

          /* -------------------------------------
              OTHER STYLES THAT MIGHT BE USEFUL
          ------------------------------------- */
          .last {
            margin-bottom: 0; 
          }

          .first {
            margin-top: 0; 
          }

          .align-center {
            text-align: center; 
          }

          .align-right {
            text-align: right; 
          }

          .align-left {
            text-align: left; 
          }

          .clear {
            clear: both; 
          }

          .mt0 {
            margin-top: 0; 
          }

          .mb0 {
            margin-bottom: 0; 
          }

          .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; 
          }

          .powered-by a {
            text-decoration: none; 
          }

          hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0; 
          }

          /* -------------------------------------
              RESPONSIVE AND MOBILE FRIENDLY STYLES
          ------------------------------------- */
          @media only screen and (max-width: 620px) {
            table[class=body] h1 {
              font-size: 28px !important;
              margin-bottom: 10px !important; 
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
              font-size: 16px !important; 
            }
            table[class=body] .wrapper,
            table[class=body] .article {
              padding: 10px !important; 
            }
            table[class=body] .content {
              padding: 0 !important; 
            }
            table[class=body] .container {
              padding: 0 !important;
              width: 100% !important; 
            }
            table[class=body] .main {
              border-left-width: 0 !important;
              border-radius: 0 !important;
              border-right-width: 0 !important; 
            }
            table[class=body] .btn table {
              width: 100% !important; 
            }
            table[class=body] .btn a {
              width: 100% !important; 
            }
            table[class=body] .img-responsive {
              height: auto !important;
              max-width: 100% !important;
              width: auto !important; 
            }
          }

          /* -------------------------------------
              PRESERVE THESE STYLES IN THE HEAD
          ------------------------------------- */
          @media all {
            .ExternalClass {
              width: 100%; 
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
              line-height: 100%; 
            }
            .apple-link a {
              color: inherit !important;
              font-family: inherit !important;
              font-size: inherit !important;
              font-weight: inherit !important;
              line-height: inherit !important;
              text-decoration: none !important; 
            }
            #MessageViewBody a {
              color: inherit;
              text-decoration: none;
              font-size: inherit;
              font-family: inherit;
              font-weight: inherit;
              line-height: inherit;
            }
            .btn-primary table td:hover {
              background-color: #34495e !important; 
            }
            .btn-primary a:hover {
              background-color: #34495e !important;
              border-color: #34495e !important; 
            } 
          }

        </style>
      </head>
      <body class="">
        <span class="preheader">Reset your password</span>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
          <tr>
            <td>&nbsp;</td>
            <td class="container">
              <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                  <!-- START MAIN CONTENT AREA -->
                  <tr>
                    <td class="wrapper">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            <p>As per your request we send this mail for reset your password. Click the button to reset your password</p>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                              <tbody>
                                <tr>
                                  <td align="left">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td> <a href="www.studybooster.co.in/reset_password/index.php?email='.$email_id.'&token='.$token.' " target="_blank">Reset Password</a> </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <p>This link is valid only for 24 hours. This can only be used once.</p>
                            <p>If you have not requested for this, please ignore this mail.</p>
                            <p>Have a nice day! Hope it works.</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="content-block">
                        If it do not works mail us at support@studybooster.co.in.
                        <br><span class="apple-link">Studybooster</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="content-block powered-by">
                        This page is developed by <a href="http://htmlemail.io">HTMLemail</a>.
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- END FOOTER -->

              </div>
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>
    ';
        cookie_set($_POST['email']);
        if($mail->send()){
            //echo "MAIL WAS SENT";
             header('location:index.php?mail=send');
        }
        else{
           // echo "MAIL WAS NOT SENT";
             header('location:index.php?mail=send');
        }
   }
   else{
       header('location:index.php?email=null');
   }
  }
   else{
       header('location:index.php?account=disabled');
   }
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
    <title>Forgot Password?</title>
</head>
<?php 
$x='';
    if(isset($_COOKIE['user'])){
        $x = $_COOKIE['user'];
    }
?>
<body>
    <header style="min-height:100vh;background-image:linear-gradient(rgba(12, 97, 138, 0.75), rgba(12, 97, 138, 0.75));background-size:100% 105%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-xs-10 col-sm-9 col-md-7 col-lg-5 signup">
                    <form action="" method="POST" class="form-group form1">
                        <div class="form-group" style="margin-top:3%;margin-bottom:3%;">
                            <p class="sign">Forgot Password?</p>
                        </div>
                        <div class="wrong1">
                                <p class="sign">Your passwords do not match</p>
                        </div>
                        <div class="form-group input-group my-4">
                            <div class="input-group-prepend"><i style="font-size:1.2rem;" class="icon ion-md-mail input-group-text"></i></div>
                         <input type="text" class="form-control" placeholder="Enter you Username/E-mail" name="email" value="<?php echo $x;?>" required>   
                        </div>
                        <div class="form-group d-flex justify-content-end align-items-center">
                            <input type="submit" class="btn btn-primary" value="Send link!" name="submit">
                        </div>
                        <div class="wrong2">
                                <p class="sign">Didn't recieved mail? Click on send it button again.</p>
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
        background-color: rgb(235,250,235);
        color: rgb(73,165,41); 
        padding:16px;
        margin:6px 0;
    }
    .wrong2{  
        display: none;
        background-color: rgb(235,250,235);
        color: rgb(100,193,138); 
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
    if(isset($_GET['mail']))
    {
        if($_GET['mail'] == 'send')
        {  
            echo "<script>
            document.querySelector('.wrong1').textContent = 'E-mail with reset link has been sent to your registered E-mail address';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
    if(isset($_GET['email']))
    {
        if($_GET['email'] == 'null')
        {
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Your E-mail is not registered. Please contact us at support@studybooster.co.in  or Create a new account';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
    if(isset($_GET['account']))
    {
        if($_GET['account'] == 'disabled')
        {
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Your account has been disabled by admin';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
?>
    </body>
</html>
