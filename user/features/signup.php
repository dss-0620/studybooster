<?php include "../../php/dbs.php";?>
<?php ob_start() ?>
<html lang="en">
<?php
    function cookie_set($name,$value){
        setcookie($name,$value,time()+(30),"signup.php"); 
    }
    function cookie_delete($name,$value){
        setcokkie($name,$value,time(),"signup.php");
    }
?>
<?php 
    $fn = "";
    $ln = "";
    $uni = "";
    $un = "";
    $cp = "";
    $p = "";
    if(isset($_COOKIE['userFirstname']))
        $fn = $_COOKIE['userFirstname'];
    if(isset($_COOKIE['userLastname']))
        $ln = $_COOKIE['userLastname'];
    if(isset($_COOKIE['username']))
        $un = $_COOKIE['username'];
    if(isset($_COOKIE['username_id']))
        $uni = $_COOKIE['username_id'];
    if(isset($_COOKIE['userConfirmPassword']))
        $cp = $_COOKIE['userConfirmPassword'];
    if(isset($_COOKIE['userPassword']))
        $p = $_COOKIE['userPassword'];
    
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="D:/XAMPP/htdocs/AMS/downloads/ionicons.min.css" type="text/css">
    <title>Sign Up</title>
</head>
<body>
       <?php include "../../php/loader1.php"; ?>
    <header style="min-height:100vh;background-image:linear-gradient(rgba(12, 97, 138, 0.85), rgba(12, 97, 138, 0.85)),url('../css/imgs/signup-min2.jpg');background-size:100% 105%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-xs-10 col-sm-9 col-md-7 col-lg-5 signup">
                    <form action="" method="POST" class="form-group form1">
                        <div class="form-group" style="margin-top:3%;margin-bottom:3%;">
                            <p class="sign">Sign up and continue</p>
                        </div>
                        <div class="wrong1">
                                <p class="sign">Your passwords do not match</p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name (required)" value="<?php echo $fn; ?>" name="FirstName" required>   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name (optional)" value="<?php echo $ln; ?>" name="LastName">   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Create Username (required)" value="<?php echo $uni; ?>" name="username_id" required> 
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail (optional but recommended)" value="<?php echo $un; ?>" name="Username">  <small class="form-text text-muted ml-1">Your email will never be shared with anyone.</small> 
                        </div>
                        <div class="form-group">
                        <select name='college_id' class='custom-select'>
                        <option value="null" selected disabled hidden>College/University (required)</option>
                        <?php 
                            $query = "SELECT * FROM college ";
                            $result=mysqli_query($connection,$query);
                            if(!$result)
                             die('QUERY FAILED'.mysqli_error($connection));
                        ?>
                        <?php
                        while($db_data=mysqli_fetch_assoc($result))
                            {  
                              echo "<option value='{$db_data['college_id']}'>{$db_data['college_name']}</option>";
                            }
                      ?>
                      </select>
                      </div>
                      <div class="form-group">
                        <select name='branch_id' class='custom-select'>
                        <option value="null" selected disabled hidden>Branch (required)</option>
                        <?php 
                            $query = "SELECT * FROM user_branch ";
                            $result=mysqli_query($connection,$query);
                            if(!$result)
                             die('QUERY FAILED'.mysqli_error($connection));
                        ?>
                        <?php
                          while($db_branch_data=mysqli_fetch_assoc($result))
                            {  
                              echo "<option value='{$db_branch_data['branch_id']}'>{$db_branch_data['branch_name']}</option>";
                            }
                        ?>
                      </select>
                      </div>
                       <?php
                       $query = "SELECT * FROM semester ";
                       $result=mysqli_query($connection,$query);
                       if(!$result)
                        die('QUERY FAILED'.mysqli_error($connection));
                       ?>
                       <div class="form-group">
                        <select name='semester_id' class='custom-select' placeholder='Semester' required>
                        <option value="null" selected disabled hidden>Semester (required)</option>
                     <?php
                       while($db_data=mysqli_fetch_assoc($result))
                        {  
                           echo "<option value='{$db_data['semester_id']}'>{$db_data['semester_name']}</option>";
                        }
                      ?>
                      </select>
                      </div>
                      <div class="form-group">
                            <select name='group_id' class='custom-select'>
                                <option value="null" selected disabled hidden>Group (only for 1st year students)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                      </div>
                        <div class="form-group">
                            <input type="password" class="form-control passwo" placeholder="Password (required)" value="<?php echo $p; ?>" name="Password" required>   
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control conpasswo" placeholder="Confirm Password (required)" value="<?php echo $cp; ?>" name="ConfirmPassword" required>   
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary form-control" value="Sign Up" name="submit">
                        </div>
                        <div class="form-group" style="font-size:20px;">
                            <small class="mr-2">Already have an account?</small>
                            <small><a href="../../php/login_page.php">Log in</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <?php include "email.php"; ?>
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
    font-size:19px;
    margin:0;
    }
        .signup{
            margin-top:10vh;
        }
        .form1{
            padding:20px;
            border-radius:5px;
            background-color: white;
        }
    </style>
    <?php 
        function signup($user_firstname,$user_lastname,$username_id,$username,$user_password,$user_semester_id,$user_group_id,$user_branch_id,$user_college_id){
            global $connection;
            $query="INSERT INTO users(user_firstname,user_lastname,username_id,username,user_password,user_semester_id,user_group,user_branch_id,user_college_id) ";
            $query.="VALUES ('$user_firstname','$user_lastname','$username_id','$username','$user_password',$user_semester_id,$user_group_id,$user_branch_id,$user_college_id) ";
            $result=mysqli_query($connection,$query);
            check_query($result);
        }
    ?>
  <?php 
    if(isset($_POST['submit']))
    {
        $user_firstname=$_POST['FirstName'];
        $user_group_id = 1;
        $user_lastname=$_POST['LastName'];
        $username=$_POST['Username'];
        $user_password=$_POST['Password'];
        $user_confirmpassword=$_POST['ConfirmPassword'];
        $user_college_id=$_POST['college_id'];
        $user_branch_id=$_POST['branch_id'];
        $user_semester_id=$_POST['semester_id'];
        $username_id = $_POST['username_id'];
        cookie_set("userFirstname",$user_firstname);
        cookie_set("userLastname",$user_lastname);
        cookie_set("username_id",$username_id);
        cookie_set("username",$username);
        cookie_set("userPassword",$user_password);
        cookie_set("userConfirmPassword",$user_confirmpassword);
        if(isset($_POST['group_id']))
            $user_group_id = $_POST['group_id'];
        if(empty($user_college_id))
            header('Location:signup.php?college=empty');
        else if(empty($user_branch_id))
            header('Location:signup.php?branch=empty');
        else if(empty($user_semester_id))
            header('Location:signup.php?semester=empty');
        else if((empty($_POST['group_id']) && ($user_semester_id == 1 || $user_semester_id == 2)))
            header('Location:signup.php?group=empty');
        else if($user_password != $user_confirmpassword) 
            header('Location:signup.php?password=wrong'); 
        else if(username_id_exist($username_id))
            header('Location:signup.php?username_id=exists');
        else if(username_exist($username))
            header('Location:signup.php?username=exists');
        else{
            $uncrypt_password = $user_password;
            $user_password=password_hash($user_password,PASSWORD_BCRYPT,array('cost' => 10));
            signup($user_firstname,$user_lastname,$username_id,$username,$user_password,$user_semester_id,$user_group_id,$user_branch_id,$user_college_id);
            $select_query = "SELECT user_id FROM users WHERE username_id = '$username_id'";
            $result_select_query = mysqli_query($connection,$select_query); 
            if(!$result_select_query)
                die('SELECT QUERY FAILED');
            $result_select_query1 = mysqli_fetch_assoc($result_select_query);
            $ip_query="SELECT * from add_ip_val_secure_ssl_615 WHERE user_id = {$result_select_query1['user_id']} ";
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
                $ip_store .= "VALUES('{$result_select_query1['user_id']}','$ip_address')";
                $result_ip = mysqli_query($result_connection,$ip_store);
                if(!$result_ip)
                    die('STORING FAILED');
            }
            if($username != null)
                email_mailer($username);
            ?>
            <form action="../../php/login.php" name="form" method="POST">
                <input type="text" value="<?php echo $username_id; ?>" name="username" hidden>
                <input type="password" value="<?php echo $uncrypt_password; ?>" name="password" hidden>
            </form>
            <script type="text/javascript">
                document.form.submit();
            </script>
            <?php
        }
    }
        if(isset($_GET['password']))
        {
            if($_GET['password'] == 'wrong') 
                echo "<script>
                    document.querySelector('.wrong1').textContent = 'Your passwords do not match';   
                    document.querySelector('.wrong1').style.display = 'block';
                  </script>";
        }
       else if(isset($_GET['semester']))
        {
            if($_GET['semester'] == 'empty')
                echo "<script>
                        document.querySelector('.wrong1').textContent = 'Please select your semester'; 
                        document.querySelector('.wrong1').style.display = 'block';
                      </script>";
        }
        else if(isset($_GET['group']))
        {
            if($_GET['group'] == 'empty')
                echo "<script>
                        document.querySelector('.wrong1').textContent = 'Please select your group'; 
                        document.querySelector('.wrong1').style.display = 'block';
                      </script>";
        }
        else if(isset($_GET['branch']))
        {
            if($_GET['branch'] == 'empty')
                echo "<script>
                        document.querySelector('.wrong1').textContent = 'Please select your branch'; 
                        document.querySelector('.wrong1').style.display = 'block';
                      </script>";
        }
        else if(isset($_GET['college']))
        {
            if($_GET['college'] == 'empty')
                echo "<script>
                        document.querySelector('.wrong1').textContent = 'Please select your college/university'; 
                        document.querySelector('.wrong1').style.display = 'block';
                      </script>";
        }
        else if(isset($_GET['username_id']))
        {
            //cookie_delete("username_id","");
            if($_GET['username_id'] == 'exists')
                echo "<script>
                        document.querySelector('.wrong1').textContent = 'Entered Username already exists. Please select another'; 
                        document.querySelector('.wrong1').style.display = 'block';
                      </script>";
        }
        else if(isset($_GET['username']))
        {
            //cookie_delete("username","");
            if($_GET['username'] == 'exists')
                echo "<script>
                        document.querySelector('.wrong1').textContent = 'Entered E-mail already exists. Please sign up with different E-mail'; 
                        document.querySelector('.wrong1').style.display = 'block';
                      </script>";
        }
        
  ?>
    </body>
</html>
