<?php ob_start(); ?>
<?php include "../php/dbs.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php 
    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $_GET['email'];
        $token = $_GET['token'];
        $query = "SELECT username,token,user_account_status FROM users WHERE username = '$email' AND token = '$token'";
        $result_query = mysqli_query($connection,$query);
        check_query($result_query);
        $count = mysqli_num_rows($result_query);
        $result_row = mysqli_fetch_assoc($result_query);
        $acc_stat = $result_row['user_account_status'];
        if($count){
           if(isset($_POST['submit']))
            {
            $pass = $_POST['new_password'];
            $conf_pass = $_POST['confirm_password'];
                if($pass === $conf_pass)
                {   
                    $pass = password_hash($pass,PASSWORD_BCRYPT,array('cost' => 10));
                    if($acc_stat == 'SD'){
                        $update = "UPDATE users SET token = '', user_password = '$pass', user_account_status = 'active' WHERE username = '$email' ";
                        $update_result = mysqli_query($connection,$update);
                        if(!$update_result)
                            die('RESET FAILED'.mysqli_error($connection));
                    }
                else{
                    $update = "UPDATE users SET token = '', user_password = '$pass' WHERE username = '$email' ";
                    $update_result = mysqli_query($connection,$update);
                    if(!$update_result)
                        die('RESET FAILED'.mysqli_error($connection));
                }
                echo "RESET SUCCESSFUL";
              }
            else if($count && ($acc_stat == 'disabled'))
            {
                echo "Your account has been disabled by admin";
            }
            else{
                echo "NO";
            }
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
    <section class="d-flex justify-content-center section-1">
        <div class="col=10 col-xs-8 col-sm-7 col-md-5 col-lg-3 forget">
            <h2>Reset Password</h2>
            <form class="form-group form" action="" method="POST">
                <input type="password" name="new_password" class="form-control password-1 mb-3" placeholder="Enter new password" required>
                <input type="password" name="confirm_password" class="form-control password-1 mb-1" placeholder="Enter confirm password" required>
                <input type="submit" name="submit" class="form-control btn btn-primary mt-3">
                
            </form>
        </div>
    </section>
    
    
</body>
</html>