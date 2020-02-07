<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
<?php
    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'null'){
            header('location:index.php?option=null');
        }
        else{
            $option_value = $_POST['option_val'];
        }
    }
?>
                        <div class="row">
                            <div class="alert alert-primary mt-3 ml-4">
                                <strong>Add your S.P.I. of each semester to predict your P.P.I. of all semester including this semester </strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 col-sm-8 col-md-6 mt-4 ml-4">
                                <div class="wrong1 mb-4" style="padding-left: 20px;">
                                <i class="far fa-check-circle mr-2 icn-typ1"></i>Thanks for your valuable feedback
                            </div>
                            <?php if(!isset($_POST['submit'])){?>
                                <form action="" method="post" class="form-group">
                                    <div class="form-group">
                                        <select name="option_val" class="custom-select">
                                            <option value="null" selected hidden disabled>Select one Option</option>
                                            <option value="ppi">Enter current P.P.I.</option>
                                            <option value="spi">Enter S.P.I. of each sem</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="text" name="submit" class="btn btn-primary form-control" value="Submit">
                                    </div>
                                </form>
                            <?php } ?>
                            <?php if(isset($_POST['submit'])){ ?>
                                <?php if($option_value == 'ppi'){ ?>
                                    <form action="" method="post" class="form-group">
                                        <div class="form-group">
                                            <input type="number" step="any" class="form-control" placeholder="Enter your current P.P.I." name="ppi">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="text" name="content" class="btn btn-primary form-control" value="Save">
                                        </div>
                                    </form>
                                <?php } ?>
                                <?php if($option_value == 'spi'){ ?>
                                    <form action="" method="post" class="form-group">
                                        <?php
                                            $semester_select_query = "SELECT * FROM semester WHERE semester_id<{$_SESSION['user_semester_id']}";
                                            $semester_select_query_result = mysqli_query($connection,$semester_select_query);
                                            if(!$semester_select_query_result)
                                                die('SEMESTER SELECT QUERY FAILED!');
                                            $sem = 0;
                                            while($semester_row = mysqli_fetch_assoc($semester_select_query_result)){
                                                $sem = $semester_row['semester_id'];
                                                $sem_name = $semester_row['semester_name'];
                                                $name = 'spi'.$sem;
                                        ?>
                                        <div class="form-group">
                                            <label for="spi"><?php echo $sem_name; ?></label>
                                            <input type="number" id="spi" step="any" class="form-control" name="<?php echo $name; ?>" placeholder="Enter S.P.I." max="10" min="4">
                                        </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <input type="submit" id="text" name="content" class="btn btn-primary form-control" value="Save">
                                        </div>
                                    </form>
                                <?php } ?>
                            <?php } ?>
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