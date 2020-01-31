<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
                        <div class="row">
                            <div class="col-6 ml-4 mt-3" style="font-size:20px;">
                                Change Password
                            </div>
                        </div>
                        <div class="row d-block">
                            <div class="wrong1" style="padding-left: 20px;">
                                <i class="far fa-check-circle mr-2 icn-typ1"></i>Your password has been changed successfully
                            </div>
                            <div class="wrong2" style="padding-left: 20px;">
                                <i class="far fa-times-circle mr-2 icn-typ1"></i>Your current password is incorrect
                            </div>
                            <div class="wrong3" style="padding-left: 20px;">
                                <i class="far fa-times-circle mr-2 icn-typ1"></i>Your password does not match
                            </div>
                            <div class="col-10 col-md-6 mt-3 ml-4">
                                <form action="../change_password_validation.php" method="POST" class="form-group">
                                    <div class="form-group">
                                        <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Enter current password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="confirm_new_password" name="confirm_new_password" placeholder="Enter confirm password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name = "submit" class="btn btn-primary form-control" value="Change Password">
                                    </div>
                                </form>
                            </div>
                        </div>
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
       .wrong1{  
            display: none;
            background-color: rgb(235, 250, 235);
            color: rgb(0, 150, 0); 
            padding:16px;
            margin:6px 0;
            clear:both;
        }
        .wrong2 {
            display: none;
            background-color: rgb(250, 235, 235);
            color: rgb(138,94,101); 
            padding:16px;
            margin:6px 0;
            clear:both;
        }
        .wrong3 {
            display: none;
            background-color: rgb(250, 235, 235);
            color: rgb(138,94,101); 
            padding:16px;
            margin:6px 0;
            clear:both;
        }
       .sign{
          font-size:19px;
          margin:0;
        }
    </style>
<script>
    $(document).ready(function(){
        $('.js--mobile-icon').click(function(){
          $('.js--main-menu1').toggle("3000");
        })
    });
</script>
<?php 
if(isset($_GET['change']))
{
    if($_GET['change'] == 'success')
    {   
      echo "<script>
           document.querySelector('.wrong1').style.display = 'block';
       </script>";
    }
    else if($_GET['change'] == 'current_incorrect')
    {
       echo "<script>
           document.querySelector('.wrong2').style.display = 'block';
        </script>";
    }
    else if($_GET['change'] == 'both_not_match')
    {
    echo "<script>
           document.querySelector('.wrong3').style.display = 'block';
        </script>";
    }
}
?>
</body>
</html>