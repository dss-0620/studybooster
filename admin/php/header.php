<?php include "../../../php/dbs.php"; ?>
<?php include "class.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<script src="https://kit.fontawesome.com/07cd09f507.js"></script>
<?php 
if(!isset($_SESSION['firstname']))
    header('location:../php/login_page.php');
if($_SESSION['role'] == 'user')
  header('location:../../user/index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143827838-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-143827838-1');
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
