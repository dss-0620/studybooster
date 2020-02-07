<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
<?php 
    $select_category_query = "SELECT * FROM content_category";
    $select_category_query_result = mysqli_query($result_connection,$select_category_query);
?>  
    <div class="row">
        <div class="col-10 col-sm-8 col-md-6 mt-4 ml-5">
            <div class="wrong1 mb-4" style="padding-left: 20px;">
                Thanks for contributing, our experts will review you content and it will be published if your content is appropriate
            </div>
        </div>
        <div class="col-12 pl-5 mt-3 mb-4">
            <form action="index.php?add=success" class="form-group col-6" method="POST">
            <div class="form-group">
                    <select name='branch_id' class='custom-select'>
                        <option value="null" selected disabled hidden>Select Category of content (required)</option>
                        <?php
                          while($category_row=mysqli_fetch_assoc($select_category_query_result))
                            {  
                              echo "<option value='{$category_row['category_id']}'>{$category_row['category_name']}</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" name="content_title">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Body" rows="8" name="content_body"></textarea>
                </div>
                <div class="checkbox form-group">
                    <label><input type="checkbox" name="display_value" value="display_name" class="ml-2" checked>&nbsp;&nbsp;&nbsp;Display your name under published content</label>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Send Publish Request">
                </div>
            </form>
        </div>
    </div>        
    </header>
    <?php 
    if(isset($_GET['add'])){
        if($_GET['add'] == 'success')
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