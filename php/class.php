 <?php include "dbs.php";?>
 <?php 
    class Configure{
        const SMTP_HOST = 'smtpout.secureserver.net';
        const SMTP_PORT = 80;
        const SMTP_USER = 'support@studybooster.co.in';
        const SMTP_PASSWORD = 'log(tanxyzab1)';
    }

  function username_exists($var){
    global $connection;
    $select_query = "SELECT username from users WHERE username = '$var' ";
    $select_query_result = mysqli_query($connection,$select_query);
    if(!$select_query_result)
      die('FORGOT PASSWORD FAILED'.mysqli_error($connection));
    $count = mysqli_num_rows($select_query_result);
    if($count){
      return true;
    }
    else{
      return false;
    }
  }
 ?>