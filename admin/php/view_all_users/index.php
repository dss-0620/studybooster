<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
                        <?php
                            $query="SELECT user_id,user_firstname, user_account_status from users ";
                            $query.="WHERE user_role='user' ";
                            $result=mysqli_query($connection,$query);
                            if(!$result)
                                die('QUERY FAILED'.mysqli_error($connection));
                        ?>
                        <?php 
                            $query = "SELECT user_id FROM users";
                            $query_result = mysqli_query($connection,$query);
                            check_query($query_result);
                            $query1 = "SELECT result_id FROM results ORDER by result_id DESC LIMIT 1";
                            $query1_result = mysqli_query($result_connection,$query1);
                            check_query($query1_result);
                            $query2 = "SELECT result_id FROM results";
                            $query2_result = mysqli_query($result_connection,$query2);
                            check_query($query_result);
                            $row1 = mysqli_num_rows($query_result);
                            $row2 = mysqli_fetch_assoc($query1_result);
                            $row3 = mysqli_num_rows($query2_result);
                        ?>
                        <div class="row ml-3 mb-3">
                            <div class="col-4">Total Users:<?php echo $row1; ?></div>
                            <div class="col-4">Total saved results:<?php echo $row3; ?></div>
                            <div class="col-4">Total Results:<?php echo $row2['result_id']; ?></div>
                        </div>
                       <div class="table-responsive">
                        <table class="table table-bordered table-hover" style="width:99%">
                            <thead>
                                <tr>
                                <th>First name</th>
                                <th>Account Status</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php 
                           while($data=mysqli_fetch_assoc($result))
                           {
                            echo "<tr>
                            <td>{$data['user_firstname']}</td>
                            <td>{$data['user_account_status']}</td>           
                            <td><form action='../activate_account.php' method='post'><input type='hidden' name='deactivate' value='{$data['user_id']}'><input type='submit' class='btn btn-outline-danger' value='Deactivate'></form></td>
                            <td><form action='../activate_account.php' method='post'><input type='hidden' name='activate' value='{$data['user_id']}'><input type='submit' class='btn btn-outline-success' value='Activate'></form></td>
                            </tr>"; 
                           }
                            ?>
                            </tbody>
                        </table>
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