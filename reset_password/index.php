<?php ob_start() ?>
<?php include "../php/dbs.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Reset Password</title>
</head>
<?php 
    if(isset($_GET['email']) && isset($_GET['token']) && $_GET['token'] != ""){
        $email = $_GET['email'];
        $token = $_GET['token'];
        $query = "SELECT username_id,token,user_account_status FROM users WHERE username = '$email' AND token = '$token'";
        $result_query = mysqli_query($connection,$query);
        check_query($result_query);
        $count = mysqli_num_rows($result_query);
        $result_row = mysqli_fetch_assoc($result_query);
        $acc_stat = $result_row['user_account_status'];
        $user = $result_row['username_id'];
        if($count){
           if(isset($_POST['submit']))
            {
            if(($acc_stat != 'disabled')){
                $pass = $_POST['new_password'];
                $conf_pass = $_POST['confirm_password'];
                if($pass === $conf_pass)
                {   
                    $pass = password_hash($pass,PASSWORD_BCRYPT,array('cost' => 10));
                    if($acc_stat == 'SD'){
                        $update = "UPDATE users SET token = '', user_password = '$pass', user_account_status = 'active' WHERE username_id = '$user' ";
                        $update_result = mysqli_query($connection,$update);
                        if(!$update_result)
                            die('RESET FAILED'.mysqli_error($connection));
                    }
                else{
                    $update = "UPDATE users SET token = '', user_password = '$pass' WHERE username_id = '$user' ";
                    $update_result = mysqli_query($connection,$update);
                    if(!$update_result)
                        die('RESET FAILED'.mysqli_error($connection));
                }
                header('location:../reset_successful');
              }
              else{
                  $s = "../reset_password/index.php?email=".$email."&token=".$token."&password=false";
                 // echo $s;
                  header("location:$s");
              }
            }
            // else{
                
            // }
            // else if($count && ($acc_stat == 'disabled'))
            // {
            //     echo "Your account has been disabled by admin";
            // }
           }
        }
        else{
            header('location:../reset_error/');
        }
    }
    else{
        header('location:../reset_error/');
    }
?>
<body>
    <header style="min-height:100vh;background-image:linear-gradient(rgba(12, 97, 138, 0.85), rgba(12, 97, 138, 0.85));background-size:100% 105%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-xs-10 col-sm-9 col-md-7 col-lg-5 signup">
                    <form action="" method="POST" class="form-group form1">
                        <div class="form-group" style="margin-top:3%;margin-bottom:3%;">
                            <p class="sign">Reset Password</p>
                        </div>
                        <div class="wrong1">
                                <p class="sign">Your passwords do not match</p>
                        </div>
                        <div class="form-group input-group my-4">
                            <div class="input-group-prepend">
                                <i class="icon ion-md-lock input-group-text" style="font-size:1.2rem;"></i>
                            </div>
                            <input type="password" class="form-control" placeholder="New Password" name="new_password" required>   
                        </div>
                        <div class="form-group input-group my-4">
                            <div class="input-group-prepend">
                                <i class="icon ion-md-lock input-group-text" style="font-size:1.2rem;"></i>
                            </div>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required>   
                        </div>
                        <div class="form-group d-flex justify-content-end align-items-center">
                            <input type="submit" class="btn btn-primary" value="Reset" name="submit">
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
    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'open_login')
        { 
          echo "<script>displogin();</script>";
        }
        else if($_GET['action'] == 'close_login')
        {
          echo "<script>closelogin();</script>";
        }
    }
    if(isset($_GET['user_account']))
    {
        if($_GET['user_account'] == 'disabled')
        {  
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Your account has been disabled by admin';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
       else if($_GET['reset'] == 'successful')
        {  
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Reset Successful';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
    if(isset($_GET['password']))
    {
        if($_GET['password'] == 'false')
        {
            echo "<script>
            document.querySelector('.wrong1').textContent = 'Your passwords do not match';
            document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
    }
?>
    </body>
</html>
