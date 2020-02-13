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
<?php
    function check_credit($sem_id){
        global $relative_connection;
        $branch_id = $_SESSION['user_branch_id'];
        $select_credits = "SELECT * FROM stored_credits WHERE credit_branch_id = $branch_id AND credit_sem_id = $sem_id";
        $select_credits_result = mysqli_query($relative_connection,$select_credits);
        if(!$select_credits_result)
            die('SELECT CREDITS FAILED!'.mysqli_error($relative_connection));
        $num = mysqli_num_rows($select_credits_result);
        if($num)
            return $select_credits_result;
        else
            return false;
    }
    function insert_ppi($sem,$total_credits,$ppi){
        global $relative_connection;
        $user_id = $_SESSION['user_id'];
        $insert_ppi = "INSERT INTO ppi_spi_secure(ppi_val,ppi_sem,ppi_credits,user_id) VALUES($ppi,$sem,$total_credits,$user_id)";
        $insert_ppi_result = mysqli_query($relative_connection,$insert_ppi);
        if(!$insert_ppi_result)
            die('INSERT PPI FAILED!'.mysqli_error($relative_connection));
    }
    function extract_credits($sem_id){
        global $connection;
        global $relative_connection;
        $branch_id = $_SESSION['user_branch_id'];
        $select_credit = "SELECT subject_credit FROM subjects WHERE semester_id = $sem_id AND branch_id = $branch_id";
        $select_credit_result = mysqli_query($connection,$select_credit);
        if(!$select_credit_result)
            die('CREDIT SELECTION FAILED!');
        $sem_credits=0;
        while($row = mysqli_fetch_assoc($select_credit_result)){
            $credit = $row['subject_credit'];
            $sem_credits+=$credit;
        }
        $insert_query = "INSERT INTO stored_credits(credit_branch_id,credit_sem_id,credit_val) VALUES($branch_id,$sem_id,$sem_credits)";
        $insert_query_result = mysqli_query($relative_connection,$insert_query);
        if(!$insert_query_result)
            die('STORED CREDIT RESULT FAILED!');
        return $sem_credits;
    }
    function delete_ppi(){
        global $relative_connection;
        $delete_ppi = "DELETE FROM ppi_spi_secure WHERE user_id = {$_SESSION['user_id']}";
        $delete_ppi_result = mysqli_query($relative_connection,$delete_ppi);
        if(!$delete_ppi_result)
            die('DELETE PPI QUERY FAILED!'.mysqli_error($delete_ppi_result));
    }
    function modify_ppi(){

    }
?>
<?php 
    if(isset($_POST['delete_ppi'])){
        if($_POST['data'] == 'true')
            delete_ppi();
        header('Location: ./');
    }
?>
<?php
    if(isset($_POST['content'])){
        $branch_id = $_SESSION['user_branch_id'];
        $sem_id = $_SESSION['user_semester_id'];
        if(isset($_POST['ppi'])){
            $ppi = $_POST['ppi'];
            $select_credits = check_credit($sem_id-1);
            if($select_credits == false){
                $total_credits=35;
                $sem_credits = extract_credits($sem_id-1);
                $total_credits+=$sem_credits;
            }
            else{
                $total_credits = 35;
                while($rows = mysqli_fetch_assoc($select_credits)){
                    $total_credits+=$rows['credit_val'];
                }
            }
            insert_ppi(0,$total_credits,$ppi);
        }
        else if(isset($_POST['spi1'])){
            $group = $_POST['group_id'];
            $update_user_group = "UPDATE users SET user_group = $group WHERE user_id = {$_SESSION['user_id']}";
            $update_user_group_result = mysqli_query($connection,$update_user_group);
            $_SESSION['user_group'] = $group;
            if(!$update_user_group)
                die('GROUP FAILED!');
            $counter = $_POST['counter'];
            for($i=1;$i<=$counter;$i++){
                $spi = $_POST['spi'.$i];
                if($i == 1){
                    if($group == 1){
                        insert_ppi($i,19,$spi);
                    }
                    else{
                        insert_ppi($i,15,$spi);
                    }
                }
                else if($i==2){
                    if($group == 1){
                        insert_ppi($i,16,$spi);
                    }
                    else{
                        insert_ppi($i,20,$spi);
                    }  
                }
                else{
                    $get_credit = check_credit($i);
                    if($get_credit == false){
                        $sem_credits = extract_credits($i);
                    }
                    else{
                        $sem_credits=0;
                        while($rows = mysqli_fetch_assoc($get_credit)){
                            $sem_credits += $rows['credit_val'];
                        }
                    }
                    insert_ppi($i,$sem_credits,$spi);
                }
            }
        }
        header('Location: ./');
    }
?>
<?php
    $sem_array = [1=>'One',2=>'Two',3=>'Three',4=>'Four',5=>'Five',6=>'Six'];
?>
<?php
    $ppi_data = ppi_exists();
    if($ppi_data == false){
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
                                        <select name="option_val" class="custom-select" id="ppi" onchange="check('ppi','submit-text')">
                                            <option value="null" selected hidden disabled>Select one Option</option>
                                            <option value="ppi">Enter current P.P.I.</option>
                                            <option value="spi">Enter S.P.I. of each sem</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="submit-text" name="submit" class="btn btn-primary form-control" value="Submit" disabled>
                                    </div>
                                </form>
                            <?php } ?>
                            <?php if(isset($_POST['submit'])){ ?>
                                <?php if($option_value == 'ppi'){ 
                                    $sem_id = $_SESSION['user_semester_id'];
                                    $num = $sem_array[$sem_id-1];
                                    $placholder_string = "Enter your P.P.I. of first ".$num." semesters";   
                                ?>
                                    <form action="" method="post" class="form-group">
                                        <div class="form-group">
                                            <input type="number" step="any" class="form-control" placeholder="<?php echo $placholder_string; ?>" name="ppi" max="10" min="4">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="text" name="content" class="btn btn-primary form-control" value="Save">
                                        </div>
                                    </form>
                                <?php } ?>
                                <?php if($option_value == 'spi'){ ?>
                                    <form action="" method="post" class="form-group">
                                        <select name="group_id" id="group" class="custom-select mb-2" onchange="check('group','save-text')">
                                            <option value="null" selected disable hidden>Select Group of your 1st year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
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
                                                $spi_placeholder_string = "Enter S.P.I. of ".$sem_name." sem";
                                        ?>
                                        <div class="form-group">
                                            <label for="spi"><?php echo $sem_name; ?></label>
                                            <input type="number" id="spi" step="any" class="form-control" name="<?php echo $name; ?>" placeholder="<?php echo $spi_placeholder_string; ?>" max="10" min="4">
                                        </div>
                                        <?php } ?>
                                        <input type="number" name="counter" value="<?php echo $sem; ?>" hidden required>
                                        <div class="form-group">
                                            <input type="submit" id="save-text" name="content" class="btn btn-primary form-control" value="Save" disabled>
                                        </div>
                                    </form>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
<?php 
    if($ppi_data != false){
?>
                    <div class="row">
                            <div class="col-10 col-sm-8 col-md-6 mt-4 ml-4">
                                <div class="wrong1 mb-4" style="padding-left: 20px;">
                                <i class="far fa-check-circle mr-2 icn-typ1"></i>Thanks for your valuable feedback
                            </div>
                                <form action="" method="post" class="form-group">
                                    <?php 
                                        $ppi_sem = [0=>'P.P.I.',1=>'S.P.I. of First Sem',2=>'S.P.I. of Second Sem',3=>'S.P.I. of Third Sem',4=>'S.P.I. of Fourth Sem'];
                                        while($ppi_row = mysqli_fetch_assoc($ppi_data)){
                                            $semester_name = $ppi_sem[$ppi_row['ppi_sem']];
                                            $placeholder = "Enter ".$semester_name;
                                            $value = $ppi_row['ppi_val'];
                                            if($ppi_row['ppi_sem'] == 0)
                                                $name = 'ppi';
                                            else
                                                $name = 'spi'.$ppi_row['ppi_sem'];
                                    ?>
                                        <div class="form-group">
                                            <label for="ppi"></label>
                                            <input type="text" id="ppi" name = "<?php echo $name; ?>" value="<?php echo $value; ?>" class="form-control" placeholder="<?php echo $placeholder; ?>" step="any" min="4" max="10" disabled required>
                                        </div>
                                    <?php } ?>
                                    <!-- <div class="form-group">
                                        <label for="text"></label>
                                        <input type="submit" id="text" name="modify" class="btn btn-primary form-control" value="Save Changes">
                                    </div> -->
                                </form>
                                <form action="" method="post">
                                    <input type="text" name="data" value="true" hidden>
                                    <input type="submit" name="delete_ppi" class="btn btn-danger" value="Delete Data">
                                </form>
                    </div>
<?php } ?>
                        </div>
                        </div>
                    </div>
                    </div>
              </div>
              <script>
        function check(element_id,button_id){
            var sem_val = document.getElementById(element_id).value;
            if(sem_val == "null"){
                document.getElementById(button_id).disabled=true;
            }
            else{
                document.getElementById(button_id).disabled=false;
            }
        }
    </script>
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