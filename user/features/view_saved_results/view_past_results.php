<?php include "../header.php" ?>
<?php include "../navigation.php" ?>
<?php
    $sem = $_SESSION['user_semester_id'];
    $sem--;
    $query = "SELECT result_id FROM results WHERE user_id = {$_SESSION['user_id']} AND sem_id = $sem";
    $result_of_query = mysqli_query($result_connection,$query);
    check_query1($result_of_query);
    if(!(mysqli_num_rows($result_of_query))){
    ?>
        <div class="row d-flex justify-content-center mt-5" style="font-weight:400; font-size:18px; color:#6e6e6e;">
            <h3 style="font-weight:400; font-size:18px; color:#6e6e6e;">No Past Semester saved results found</h3>
        </div>
        <div class="row mx-2 mx-md-5 mt-3 p-2 d-flex justify-content-center" style="font-weight:400; font-size:115%;">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    <?php
    }
    else{
        $result_array = array();
        $count = 0;
        $total = 0;
        while($result_row = mysqli_fetch_assoc($result_of_query)){
            $result_array[$count] = new Result2();
            $result_array[$count]->setResult_id($result_row['result_id']);
            $result_id = $result_array[$count]->getResult_id();
            $subject_select_query = "SELECT subject_id,subject_name,subject_credit FROM subjects WHERE result_id = $result_id ";
            $subject_select_query_result = mysqli_query($result_connection,$subject_select_query);
            check_query1($subject_select_query_result);
            while($row_subject = mysqli_fetch_assoc($subject_select_query_result)){
            // $row_subject['subject_name'] = subject_name_revert($row_subject['subject_name']);
                $result_array[$count]->addSubject($row_subject['subject_id'],$row_subject['subject_name'],$row_subject['subject_credit']);
                $subject_query = "SELECT component_name,component_id FROM components WHERE subject_id = {$row_subject['subject_id']} ";
                $subject_query_result = mysqli_query($result_connection,$subject_query);
                check_query1($subject_query_result);
                $p=0;
                while($row_comp = mysqli_fetch_assoc($subject_query_result)){
                    $subject_array = $result_array[$count]->getSubject();  
                    ($subject_array[($result_array[$count]->getSubject_count())-1])->addComponent($row_comp['component_id'],$row_comp['component_name']);
                    $component_query = "SELECT subcomponent_id,subcomponent_name,subcomponent_marks FROM subcomponent_marks WHERE component_id = {$row_comp['component_id']} ";
                    $component_query_result = mysqli_query($result_connection,$component_query);
                    check_query1($component_query_result);   
                    while($row_subcomp = mysqli_fetch_assoc($component_query_result))
                    {
                        $components_array = $subject_array[($result_array[$count]->getSubject_count())-1]->getComponent();
                        $components_array[$p]->addSub_component($row_subcomp['subcomponent_id'],$row_subcomp['subcomponent_name'],$row_subcomp['subcomponent_marks']);
                    }
                    $p++;
                }
            ($subject_array[($result_array[$count]->getSubject_count())-1])->doTotal();

            }
            $result_array[$count]->calculateSPI();
            $count++;
        }
    }
?>
<?php if(mysqli_num_rows($result_of_query)){ ?>
    <?php if(!(isset($_GET['rs']) && isset($_GET['sub']))){ ?>
                <div class="row d-flex justify-content-end mb-3">
                    <div class="col-3 d-flex justify-content-end">
                        
                        <input type="submit" class="btn btn-danger" value="DELETE ALL RESULTS" data-toggle="modal" data-target="#modal123">
                    </div>
                </div>
    <?php } ?>
                <!-- MODAL2 -->
                <div class="modal fade" id="modal123">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete All Results?</h5>
                                    <button class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete all your Past semester saved results?
                                </div>
                                <div class="modal-footer">
                                    <form action="../delete_past_result.php" method="post">
                                        <input type="text" name="redirect" value="view_saved_results/view_past_results.php" hidden>
                                        <input type="submit" class="btn btn-danger" value="Confirm Delete">
                                    </form>
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                </div>
                    <div class="table-responsive">
                    <?php if(!(isset($_GET['rs']) && isset($_GET['sub']))){ ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th class="align-middle">Result_id</th>
                                <?php 
                                    $arr = $result_array[0]->getSubject();
                                    for($i=0;$i<($result_array[0]->getSubject_count());$i++){
                                       echo "<th class='align-middle'>{$arr[$i]->getSubject_name()}</th>";
                                    }
                                ?>
                                <th class="align-middle">Estimated S.P.I.</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php 
                           for($j=0;$j<$count;$j++){
                            echo "<tr>";
                            $p = $j+1;
                            echo "<td>{$p}</td>";
                            $sub_arr = $result_array[$j]->getSubject();
                            for($i=0;$i<($result_array[$j]->getSubject_count());$i++){
                                echo "<td><a href = 'view_past_results.php?rs=$j&sub=$i' title='Click here'>{$sub_arr[$i]->getTotal()}</a></td>";
                            }
                            $ptr = $result_array[$j]->getSPI();
                            $modal = "MODAL".$result_array[$j]->getResult_id();
                            $modal_id = "#MODAL".$result_array[$j]->getResult_id();
                            echo "<td>$ptr</td>";
                            echo "<td><button class='btn btn-outline-danger' data-toggle='modal' data-target='$modal_id'>DELETE</button></td>";
                            echo "</tr>"; 
                            ?>
                            <!-- MODAL -->
                            <div class="modal fade" id="<?php echo $modal;?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete result</h5>
                                    <button class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this result?
                                </div>
                                <div class="modal-footer">
                                <form action='../delete_result.php' method='post'><input type='text' name='result_id' value='<?php echo $result_array[$j]->getResult_id(); ?>' hidden><input type='text' value='view_saved_results/view_past_results.php' class='btn btn-danger' name='redirect' hidden><input type='submit' value='Confirm Delete' class='btn btn-danger' name='delete'></form>
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                            <?php }?>
                            <?php
                                if(isset($_GET['rs']) && isset($_GET['sub'])){
                                     $i = $_GET['rs'];
                                     $j = $_GET['sub'];
                                     $subject_arr_disp = $result_array[$i];
                                     $sub_count = $subject_arr_disp->getSubject_count();
                                     $subjects = $subject_arr_disp->getSubject();
                                     $subject_disp = $subjects[$j];
                                     $count = $subject_disp->getTotal_comp();
                                     $comp = $subject_disp->getComponent();
                                     $idx = 0;
                                     $id = array();
                            ?>
                            <div style="font-weight:400; font-size:160%; margin-left:2%;margin-bottom:1.5%;">
                                    <?php echo $subject_disp->getSubject_name(); ?>
                            </div>
                            <form action="edit_result.php" method="post" class="form-group">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Components</th>
                                            <th>Marks</th>
                                            <th>Edit</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                            <?php
                                                $counter=0;
                                                $sb = $comp[0]->getSubcomponents();
                                                $start_id = $sb[0]->getId();
                                                echo "<input type='number' name='initial' value='$start_id' hidden>"; 
                                                echo "<input type='number' name='rs' value='$i' hidden>";
                                                echo "<input type='number' name='sub' value='$j' hidden>";
                                                for($x=0;$x<$count;$x++){
                                                    $sub_comp = $comp[$x]->getSubcomponents();
                                                    $c = count($sub_comp);
                                                    for($y=0;$y<$c;$y++){
                                                        $id[$idx] = $sub_comp[$y]->getId();
                                                        $name = $sub_comp[$y]->getSubComponent_name();
                                                        $name = revert_name($name);
                                                        echo "<tr>";
                                                        echo "<td>{$name}</td>";
                                                        echo "<td><span class='changeSpan{$counter}'>{$sub_comp[$y]->getMarks()}</span>";
                                                        if($name == 'Class Test'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='30' required></td>";
                                                        }
                                                        else if($name == 'Sessional Exam'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='40' required></td>";
                                                        }
                                                        else if($name == 'SEE'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='100' required></td>";
                                                        }
                                                        else if($name == ''){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='30' required></td>";
                                                        }
                                                        else if($name == 'Lab File'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='75' required></td>";
                                                        }
                                                        else if($name == 'Viva'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='25' required></td>";
                                                        }
                                                        else if($name == 'Tutorial / Assignment / Test'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='30' required></td>";
                                                        }
                                                        else if($name == 'Drawing Sheets'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='50' required></td>";
                                                        }
                                                        else if($name == 'AutoCAD Sketch'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='30' required></td>";
                                                        }
                                                        else if($name == 'Sketch Book'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='20' required></td>";
                                                        }
                                                        else if($name == 'Term Assignment'){
                                                            echo "<input type='number' class='inputChange{$counter} form-control' name='{$id[$idx]}' value='{$sub_comp[$y]->getMarks()}' style='display: none;' max='60' required></td>";
                                                        }
                                                        echo "<td class='editbtn{$counter}'style='cursor: pointer;' >Edit</td>";
                                                        echo "<script>
                                                                document.querySelector('.editBtn{$counter}').addEventListener('click', function() {
                                                                    document.querySelector('.inputChange{$counter}').style.display = 'inline-block';
                                                                    document.querySelector('.changeSpan{$counter}').style.display = 'none';
                                                                    document.querySelector('.saveInput1').style.display = 'block';
                                                                });
                                                            </script>";
                                                        //echo "<td>$id[$idx]</td>";
                                                        echo "</tr>";
                                                        $idx++;
                                                        $counter++;
                                                    }
                                                    $comp_name = $comp[$x]->getComponent_name();
                                                    $comp_name = comp_name($comp_name);
                                                    echo "<tr style='background-color:#e7eaed;'>";
                                                    echo "<td>{$comp_name}</td>";
                                                    echo "<td>{$comp[$x]->getTotal()}</td>";
                                                    echo "<td></td>";
                                                    echo "</tr>";
                                                }
                                                echo "<tr style='background-color:#aeb7c1;'>";
                                                echo "<td>Subject Total</td>";
                                                echo "<td>{$subject_disp->getTotal()}</td>";
                                                echo "<td></td>";
                                                echo "</tr>";
                                                echo "<tr style='background-color:#e7eaed;'>";
                                                echo "<td>Expected Grade</td>";
                                                $exp_grade = returngrade1($subject_disp->getTotal());
                                                echo "<td>$exp_grade</td>";
                                                echo "<td></td>";
                                                echo "</tr>";
                                                echo "<input type='number' value='$counter' name='count' hidden></input>";
                                        echo "<input type='text' value='view_past_results.php' name='redirect' hidden></input>";
                                            ?>
                                    </tbody>
                                </table>
                                <input type="submit" value ="Save" class="ml-2 btn btn-primary saveInput1" style="display: none;">
                            </form>
                            <?php  
                           echo '<a href="view_past_results.php" class="mb-3 ml-2 btn btn-primary">Go back</a>';
                           $j++;
                           if($j < $sub_count)
                           echo "<a href='view_past_results.php?rs=$i&sub=$j' class='mb-3 ml-5 btn btn-primary'>Next Subject</a>";
                            }
                        ?>
                    </div> 
                    <?php }?>
                    <?php if(!(isset($_GET['rs']) && isset($_GET['sub'])) && mysqli_num_rows($result_of_query)){?>
                    <div class="row mx-2 mx-md-5 my-5 p-2" style="font-weight:400; font-size:110%; border:1px solid black;"> 
                         <div class="col-11" style="text-align:center;">
                                   Click on total marks of respective subject to view/edit marks of individual component of respective subject
                        </div>
                    </div>
                    <div class="row mx-2 mx-md-5 mt-3 p-2" style="font-weight:400; font-size:115%; border:1px solid black;">
                                <div class="col-11">
                                    Note: This is estimated S.P.I. , as our university supports relative grading system, so your S.P.I. can increase or decrease based on difficulty level of paper.
                                </div>
                    </div>
                    <div class="row mx-2 mx-md-5 mt-3 p-2 d-flex justify-content-center" style="font-weight:400; font-size:115%;">
                        <a href="index.php" class="btn btn-primary">Back</a>
                    </div>
                    <div class="row mx-2 mx-md-5 my-5 p-2" style="font-weight:370; font-size:110%; border:1px solid black;"> 
                         <div class="col-11" style="text-align:center;">
                                   Help us to improve!<br> Please spare your few valuable minutes to give <a href="../feedback">Feedback</a>.
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
        th{
            font-size:115%;
            font-weight:500;
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