<?php include "../php/dbs.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<script src="https://kit.fontawesome.com/07cd09f507.js"></script>
<?php 
    if(!isset($_SESSION['firstname']))
        header('location:../php/login_page.php');
    if($_SESSION['role'] == 'admin')
        header('location:../admin/');
?>
<?php include "get_total.php"; ?>
<?php 
  if(mysqli_num_rows($result_of_query)){
    $sub_arr = $result_array[$count-1]->getSubject();
    $count = $result_array[$count-1]->getSubject_count();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143827838-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143827838-1');
</script>
    <!-- GOOGLE CHARTS -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Subjects', 'Marks'],
         <?php
            for($i=0;$i<$count;$i++){
                $var = $sub_arr[$i]->getSubject_name();
                $mark = $sub_arr[$i]->getTotal();
                echo "['$var', $mark],"; 
            }
        ?>
         
        ]);

        var options = {
          chart: {
            title: 'Your Performance',
            subtitle: 'Subjects vs Marks',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<?php $user_id = $_SESSION['user_id']; ?>
<body>
    <header>
        <?php //include "../php/loader1.php"; ?>
            <div class="container-fluid px-0">
                    <div class="navbar bg-dark navbar-dark navbar-expand-sm">
                        <h2 class="navbar-label d-none d-sm-inline-block m-0 p-0" style="color:white; font-weight:100;">User</h2>
                        <div class="navbar-nav mr-5 ml-sm-auto">
                            <a href="/" class="nav-item nav-link mr-3"><i class="fas fa-home mr-1"></i>Home</a>
                            <div class="dropdown">
                              <a href="#" class="nav-item nav-link dropdown-toggle" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-md-person mr-1"></i><?php echo $_SESSION['firstname'];?></a>
                               <div class="dropdown-menu" aria-labelledby="user">
                                  <a href="features/profile" class="dropdown-item">Profile</a>
                                  <a href="features/logout.php" class="dropdown-item">Log Out</a>
                               </div>  
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-icon mr-0" style="width:100%;margin-right:0;">
                            <a class="js--mobile-icon"><i class="fas fa-bars"></i></a> 
                    </div>
                <div class="row pt-4 main-cont-space1">
                    <div class="col-md-2 mt-3 main-menu1 js--main-menu1">
                            <div class="row pl-3 mb-3 link-type1"><a href=""><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/add_result"><i class="far fa-plus-square mr-2"></i>Create new result</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/grade_result"><i class="fas fa-calculator mr-2"></i>Calculate S.P.I. by Grades</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/view_saved_results"><i class="fas fa-binoculars mr-2"></i>View saved results</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/notes"><i class="fas fa-book-open mr-2"></i>Notes</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/add_content"><i class="fas fa-plus mr-2"></i>Add Content</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/change_password"><i class="far fa-edit mr-2"></i>Change Password</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="features/feedback"><i class="far fa-comments mr-2"></i>Give feedback</a></div>
                    </div>
                    <div class="col-md-9 main-content1">
                        <div class="headings-cont1">
                        <h2  class="heading-main1">Welcome,</h2> 
                        <h4  class="heading-user1" style="font-weight:500; font-size:130%; color:grey;"><?php echo $_SESSION['firstname'];?>&nbsp;<?php echo $_SESSION['lastname'];?><h4>
                        <!-- <a href="php/subject_entry.php" class="btn btn-primary">Enter Subjects</a> -->
                        </div>
                        <?php $user_id = $_SESSION['user_semester_id'];?>
                        <?php if($user_id == 2){ ?>
                            <div class="alert alert-warning mt-3">
                                <strong>We are extremly Sorry for wrong S.P.I. calculation(By Grades not Marks) by our system. Please recalculate your S.P.I. using grades. Ignore if already recalculated.</strong>
                                <a href="features/profile">Click Here to change semester</a>
                            </div>
                        <?php } ?>
                        <?php if($user_id<337){?>
                            <div class="alert alert-primary mt-3">
                                <strong>Your Semester has been automatically updated  by the System </strong>you can see the past semester saved results in <a href='features/view_saved_results'>view saved results</a> section.
                            </div>
                        <?php } ?>
                        <?php if(mysqli_num_rows($result_of_query)){ ?>
                        <div class="row mx-2 mx-md-5 my-5 p-2" style="font-weight:400; font-size:110%; border:1px solid black;"> 
                         <div class="col-11" style="text-align:center;">
                                   Note: Graph of your last result is shown here. And for mobile users click on column of graph to see which subject it represents.
                        </div>
                     </div>
                     <?php } ?>
                       <?php if(mysqli_num_rows($result_of_query)){ ?>
                     <div id="columnchart_material" style="width: 'auto'; height:65vh; margin-top:7vh;"></div>
                       <?php }
                        else{
                       ?>
                        <div class="row">
                            <div class="col d-flex justify-content-center mt-5" style="font-weight:400; font-size:18px; color:#6e6e6e;">
                                <a href="features/add_result">Create new result</a> &nbsp;to display graph based on your performance
                            </div>
                        </div>

                       <?php } ?>
                    </div>
                </div>
            </div>  
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
       .main-cont-space1 {
           min-height:92.5vh;width:100%;background-color:#f1f3f6;margin:0;
       }

       .link-type1 a{
           color: rgb(100, 100, 100); text-transform: uppercase; font-weight: 400; transition: all .2s;
       }
       .link-type1 a:hover {
           color: blue; text-decoration: none;
       }

       .main-content1 {
          background-color:#fff; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); border-radius: 5px; margin-bottom: 2.5vh;
       }

       .headings-cont1 {
          margin-top: 3vh; margin-left: 1.5vh; word-spacing: 10px;
       }

       .heading-main1 {
          font-weight:300;display:inline-block;
       }

       .heading-user1 {
          font-size:125%;display:inline-block;
       }
       .main-menu1{
           display:inline-block;
       } 
       .mobile-icon{
           font-size:18px;
           background-color:#f1f3f6;
           display:none;
           color:black;
       }
       .mobile-icon i{
           font-size:20px;
           margin-left:30px;
           margin-top:10px;
           cursor:pointer;
       }
        @media only screen and (max-width:767px)
       {
           .main-menu1{
               display:none;
           }
           .mobile-icon{
               display:block;
           }
       }
    </style>
        <!-- JQUERY CODE -->
<script>
    $(document).ready(function(){
        $('.js--mobile-icon').click(function(){
          $('.js--main-menu1').toggle("3000");
        })
    });
</script>
</body>
</html>