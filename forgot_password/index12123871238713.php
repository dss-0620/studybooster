
<?php 
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   require '../vendor/autoload.php';
   require '../php/class.php';
?>
 <?php 
 if(isset($_POST['submit'])){
   if(username_exists($_POST['email'])){
    $select_name = "SELECT user_firstname FROM users WHERE username = '{$_POST['email']}' ";
    $result_select = mysqli_query($connection,$select_name);
    check_query($result_select);
    $name = mysqli_fetch_assoc($result_select);
    $token = bin2hex(openssl_random_pseudo_bytes(50));
    $query = "UPDATE users SET ";
    $query.="token='$token' ";
    $query.="WHERE username = '{$_POST['email']}'";
    $query_result = mysqli_query($connection,$query);
    check_query($query_result);
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
    $mail->addAddress("{$_POST['email']}", "User");     // Add a //recipient
    $mail->Subject = 'This is a test mail';
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <div class="mainCont1" style="box-sizing: border-box; position: absolute; margin-top: 1.7%; margin-left: 2.0%; margin-right: 2.5%; height: 90%; width: 95%; background-color: rgb(235, 235, 235); border-radius: 5px;">
           <div class="contHolder1" style="box-sizing: border-box; margin-left: 15%; margin-top: 4.5%; height: 80%; width: 70%; background-color: white; box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.2); border-radius: 10px; border: 8px solid #ffb122;">
            <div class="HeadingCont1" style="margin-top: 0; height: 10%; padding: 18px; padding-bottom: 10px;border-bottom: 1px solid rgb(220, 220, 220); font-size: 30px;">Study Booster</div>
            <div class="SubContent1" style="font-size: 25px; padding-top: 1%; padding-left: 5%; padding-right: 5%;"><p>Hi Devansh,</p><p>As per your request for password reset, we have sent a link to reset your password with this mail.</p><p>This link is active only for 24 hours.</p><p>Click this button to reset this password.</p><a href="www.studybooster.co.in/reset_password/index.php?email='.$_POST['email'].'&token='.$token.' ">Reset password</a></div>
        </div>
        </div>
    </body>
    </html>';
    if($mail->send()){
        echo "MAIL WAS SENT";
    }
    else{
        echo "MAIL WAS NOT SENT";
    }
     }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <section class="d-flex justify-content-center section-1">
        <div class="col-10 col-xs-8 col-sm-7 col-md-5 col-lg-3 forget">
            <h2>Forgot Password</h2>
            <form class="form-group form" action="" method="POST">
                <input type="email" name="email" class="form-control password-1 mb-2" placeholder="Enter your E-mail" required>
                <input type="submit" name="submit" class="form-control btn btn-primary mt-3" >
            </form>
        </div>
    </section>
    
    
</body>
</html>