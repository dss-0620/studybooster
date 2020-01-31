<?php include "../header.php" ?>
<?php
    if(isset($_POST['submit']))
    {
        $type = $_POST['category'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $query = "INSERT INTO feedback (feedback_type,feedback_title,feedback_text,user_id) ";
        $query .= "VALUES ('$type','$title','$text','{$_SESSION['user_id']}') ";
        $query_result = mysqli_query($connection,$query);
        check_query($query_result);
        header('location:index.php?feedback=success');
    }
?>

<?php include "../navigation.php" ?>
                        <div class="row">
                            <div class="col ml-4" style="font-size:20px;font-weight:450;">
                                Help us to Improve!
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 col-sm-8 col-md-6 mt-4 ml-4">
                                <div class="wrong1 mb-4" style="padding-left: 20px;">
                                <i class="far fa-check-circle mr-2 icn-typ1"></i>Thanks for your valuable feedback
                            </div>
                                <form action="" method="post" class="form-group">
                                    <div class="form-group">
                                        <select name="category" class="custom-select">
                                            <option value="Feature">New Feature Suggestion</option>
                                            <option value="Feedback">Feedback</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title"></label>
                                        <input type="text" id="title" name = "title" class="form-control" placeholder="Title (required)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="text"></label>
                                        <textarea class="form-control" id="text" type="text" name="text" placeholder="Body (max 300 characters)" maxlength="300" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="text"></label>
                                        <input type="submit" id="text" name="submit" class="btn btn-primary form-control" value="Send it">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
              </div>
    </header>
    <?php 
    if(isset($_GET['feedback'])){
        if($_GET['feedback'] == 'success')
        {   
          echo "<script>
               document.querySelector('.wrong1').style.display = 'block';
           </script>";
        }
    }
    ?>
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
       .wrong1{  
            display: none;
            background-color: rgb(235, 250, 235);
            color: rgb(0, 150, 0); 
            padding:16px;
            margin:6px 0;
            clear:both;
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
    </style>
<script>
    $(document).ready(function(){
        $('.js--mobile-icon').click(function(){
          $('.js--main-menu1').toggle("3000");
        })
    });
</script>
</body>
</html>