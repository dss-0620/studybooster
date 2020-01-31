<?php ob_start(); ?>
<?php 
if(isset($_SESSION['firstname']))
{
    if($_SESSION['role'] == 'admin')
     header('location:../admin');
    else if($_SESSION['role'] == 'user')
     header('location:../user');
}
else{
    header('location:../');
}
?>