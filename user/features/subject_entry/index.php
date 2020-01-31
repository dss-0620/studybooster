<?php include "../../../php/dbs.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<script src="https://kit.fontawesome.com/07cd09f507.js"></script>
<?php 
    if(!isset($_SESSION['firstname']))
        header('location:../');
    if($_SESSION['role'] == 'user')
        header('location:../user/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<?php 
    if(isset($_POST['submit'])){
        $subject_name = $_POST['subject_name'];
        $subject_credit = $_POST['subject_credit'];
        $branch_id = $_POST['branch_id'];
        $category_id = $_POST['category_id'];
        $semester_id = $_POST['semester_id'];
        $query = "INSERT INTO subjects(subject_name,subject_credit,college_id,branch_id,semester_id,category_id) ";
        $query.= "VALUES ('$subject_name','$subject_credit',2,6,'$semester_id','$category_id')";
        $result = mysqli_query($connection,$query);
        check_query($result);
    }
?>
<body>
    <header>
            <div class="container-fluid px-0">
                    <div class="navbar bg-dark navbar-dark navbar-expand-sm">
                        <h2 class="navbar-label d-none d-sm-inline-block m-0 p-0" style="color:white; font-weight:100;">Admin</h2>
                        <div class="navbar-nav mr-5 ml-sm-auto">
                            <a href="../" class="nav-item nav-link mr-3"><i class="fas fa-home mr-1"></i>Home</a>
                            <div class="dropdown">
                              <a href="#" class="nav-item nav-link dropdown-toggle" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-md-person mr-1"></i><?php echo $_SESSION['firstname'];?></a>
                               <div class="dropdown-menu" aria-labelledby="user">
                                  <a href="profile.php" class="dropdown-item">Profile</a>
                                  <a href="../../user/php/logout.php" class="dropdown-item">Log Out</a>
                               </div>  
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-icon mr-0" style="width:100%;margin-right:0;">
                            <a class="js--mobile-icon"><i class="fas fa-bars"></i></a> 
                    </div>
                <div class="row pt-4 main-cont-space1"> 
                    <div class="col-md-2 mt-3 main-menu1 js--main-menu1">
                            <div class="row pl-3 mb-3 link-type1"><a href="../"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="add_result"><i class="far fa-plus-square mr-2"></i>Create new result</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="grade_result"><i class="fas fa-calculator mr-2"></i>Grade result</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="view_saved_results"><i class="fas fa-binoculars mr-2"></i>View saved results</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="view_all_users"><i class="far fa-eye mr-2"></i>View all user</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="change_password"><i class="far fa-edit mr-2"></i>Change Password</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="feedback"><i class="far fa-comments mr-2"></i>Give feedback</a></div>
                    </div>
                    <div class="col-md-9 main-content1">
                        <div class="headings-cont1">
                        <h2  class="heading-main1">Welcome</h2> 
                        <h4  class="heading-user1"><?php echo $_SESSION['firstname'];?><h4>
                        <form action="../subject_entry" method="post" class="form-group">
                            <div class="form-group">
                                <select class="form-control" name="semester_id">
                                <option value="null" selected disabled hidden>Semester (required)</option>
                                <?php
                                        $query_branch = "SELECT * FROM semester";
                                        $result_query_branch = mysqli_query($connection,$query_branch);
                                        check_query($result_query_branch);
                                        while($row = mysqli_fetch_assoc($result_query_branch)){
                                            echo "<option value='{$row['semester_id']}'>{$row['semester_name']}</option>";
                                        }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="subject_name" type="text" class="form-control" placeholder="Enter Subject Name" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="subject_credit" class="form-control" placeholder="Enter Subject Credits" required>
                            </div>
                            <!-- <div class="form-group">
                                <select class="form-control" name="college_id">
                    
                                </select>
                            </div> -->
                            
                            <div class="form-group">
                                <select class="form-control" name="category_id">
                                <option value="null" selected disabled hidden>Category (required)</option>
                                <?php
                                        $query_branch = "SELECT * FROM category";
                                        $result_query_branch = mysqli_query($connection,$query_branch);
                                        check_query($result_query_branch);
                                        while($row = mysqli_fetch_assoc($result_query_branch)){
                                            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                        }
                                ?>
                                </select>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                        </form>
                        </div>
                    </div>
                </div>
            </div>  
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="D:/XAMPP/htdocs/Pointer calculator/code/js/jquery.js"></script>
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