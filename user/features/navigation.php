<body>
    <header>
            <div class="container-fluid px-0" style="overflow-x:hidden;">
                    <div class="navbar bg-dark navbar-dark navbar-expand-sm">
                        <h2 class="navbar-label d-none d-sm-inline-block m-0 p-0" style="color:white; font-weight:100;">User</h2>
                        <div class="navbar-nav mr-5 ml-sm-auto">
                            <a href="../../../" class="nav-item nav-link mr-3"><i class="fas fa-home mr-1"></i>Home</a>
                            <div class="dropdown">
                              <a href="#" class="nav-item nav-link dropdown-toggle" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-md-person mr-1"></i><?php echo $_SESSION['firstname'];?></a>
                               <div class="dropdown-menu" aria-labelledby="user">
                                  <a href="../profile" class="dropdown-item">Profile</a>
                                  <a href="../logout.php" class="dropdown-item">Log Out</a>
                               </div>  
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-icon pt-2">
                            <a class="js--mobile-icon"><i class="icon ion-md-menu" style="font-size:160%;"></i></a> 
                    </div>
                <div class="row pt-4 main-cont-space1"> 
                    <div class="col-md-2 mt-3 main-menu1 js--main-menu1">
                            <div class="row pl-3 mb-3 link-type1"><a href="../../"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="../add_result/"><i class="far fa-plus-square mr-2"></i>Create new result</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="../grade_result/"><i class="fas fa-calculator mr-2"></i>Calculate S.P.I. by Grades</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="../add_spi"><i class="far fa-plus-square mr-2"></i>Add S.P.I.</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="../view_saved_results"><i class="fas fa-binoculars mr-2"></i>View saved results</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="../change_password"><i class="far fa-edit mr-2"></i>Change Password</a></div>
                            <div class="row pl-3 my-3 link-type1"><a href="../feedback"><i class="far fa-comments mr-2"></i>Give feedback</a></div>
                    </div>
                    <div class="col-md-9 main-content1">
                        <div class="headings-cont1">
                            <h2  class="heading-main1">Welcome,</h2> 
                            <h4  class="heading-user1" style="font-weight:500; font-size:130%; color:grey;"><?php echo $_SESSION['firstname'];?>&nbsp;<?php echo $_SESSION['lastname'];?><h4>
                        </div>