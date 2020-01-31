<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/style.css">
    <title>Studybooster</title>
</head>
<body class="bg-light">
    <!-- HEADER -->
    <header id="main-header">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <div class="container">
                <img href="" src="css1/img/logo1.png" class="img-fluid navbar-brand" style="height:65px;width:auto;">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#NAVBAR">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="NAVBAR">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="php/login_page.php" class="nav-link">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a href="user/features/signup.php" class="nav-link">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- HEADER CONTENT ALONG WITH LOGIN -->
        <div class="container" style="padding-top:170px;">
            <div class="row">
                <div class="col-md-6 pt-5">
                    <h2 class="text-light">Enhance Your Studies With Studybooster</h2>
                    <a href="php/login_page.php" class="btn btn-light mt-2 mr-2">Log In</a>
                    <a href="user/features/signup.php" class="btn btn-outline-light ml-2 mt-2">Sign Up</a>
                </div>
                <div class="col-md-6  d-none d-md-flex justify-content-md-end">
                    <div class="card text-center text-light col-md-12 col-lg-10" style="background-color:#fff;">
                        <div class="card-body">
                            <h5 class="card-text mt-3 mb-5 text-dark">Log In</h3>
                            <form action="php/login.php" class="form-group" method="POST">
                                <div class="form-group input-group my-4">
                                        <div class="input-group-prepend"><i class="icon ion-md-person input-group-text" style="font-size:1.2rem;"></i></div>
                                    <input type="text" name="username" class="form-control" placeholder="Username / E-mail">
                                </div>
                                <div class="form-group input-group my-4">
                                        <div class="input-group-prepend"><i class="icon ion-md-lock input-group-text" style="font-size:1.3rem;"></i></div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mt-4 mb-3">
                                    <input type="submit" value="Login Securely" class="btn btn-primary btn-block">
                                </div>
                                <div class="form-group mt-4">
                                    <a href="forgot_password/">Forgot Password?</a> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- FOOTER -->
    <footer id="main-footer" class="pt-5 pb-4 bg-dark text-light">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col text-center">
                    <h5>Studybooster</h5>
                    <p>Web App Built By Devansh Suthar</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#MODAL">Feedback</button>
                </div>
            </div>
        </div>
    </footer>
    <!-- MODAL -->
    <div class="modal fade text-dark" id="MODAL">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Feedback</h5>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" placeholder="Your Name (optional)" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" placeholder="Your E-mail (optional)" class="form-control">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control"placeholder="Your Message" required></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary btn-block">Submit</button>
            </div>
          </div>
        </div>
      </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <style>
    .head-cont{
        font-weight:300;
        font-size:35px;
    }
    .icn-1{
        font-size:45px;
        color:#0b0;
        padding-left:3px;
    }
    .text-cont{
        font-size:21px;
    }
</style>
</body>
</html>