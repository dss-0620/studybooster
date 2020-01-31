<?php include "../../php/dbs.php"; ?>
<?php include "class.php"; ?>
<?php session_start(); ?>
<?php
    if(!isset($_SESSION['username'])){
        header('location:../../php/login_page.php');
    }
?>
<?php 
    if(isset($_POST['redirect'])){
        $destination = $_POST['redirect'];
    }
    else{
        header('location:../');
    }
?>
<?php
   if(isset($_POST['redirect'])){
    $sem = $_SESSION['user_semester_id'];
    $sem--;
    $query = "SELECT result_id FROM results WHERE user_id = {$_SESSION['user_id']} AND sem_id=$sem";
    $result_of_query = mysqli_query($result_connection,$query);
    check_query1($result_of_query);
    if(!(mysqli_num_rows($result_of_query))){
        echo "No results found";
    }
    else{
    $result_array = array();
    $count = 0;
    $total = 0;
    while($result_row = mysqli_fetch_assoc($result_of_query)){
        $result_array[$count] = new Result();
        $result_array[$count]->setResult_id($result_row['result_id']);
        $result_id = $result_array[$count]->getResult_id();
        $delete_result_query = "DELETE FROM results WHERE result_id = {$result_row['result_id']}";
        $result_delete_result_query = mysqli_query($result_connection,$delete_result_query);
        check_query1($result_delete_result_query);
        $subject_select_query = "SELECT subject_id,subject_name,subject_credit FROM subjects WHERE result_id = $result_id ";
        $subject_select_query_result = mysqli_query($result_connection,$subject_select_query);
        check_query1($subject_select_query_result);
          $subject_delete_query = "DELETE FROM subjects WHERE result_id = $result_id ";
        $subject_delete_query_result = mysqli_query($result_connection,$subject_delete_query);
        check_query1($subject_select_query_result);
        while($row_subject = mysqli_fetch_assoc($subject_select_query_result)){
           // $row_subject['subject_name'] = subject_name_revert($row_subject['subject_name']);
            $result_array[$count]->addSubject($row_subject['subject_id'],$row_subject['subject_name'],$row_subject['subject_credit']);
            $subject_query = "SELECT component_name,component_id FROM components WHERE subject_id = {$row_subject['subject_id']} ";
            $subject_query_result = mysqli_query($result_connection,$subject_query);
            check_query1($subject_query_result);
            $component_delete_query = "DELETE FROM components WHERE subject_id = {$row_subject['subject_id']} ";
            $component_delete_query_result = mysqli_query($result_connection,$component_delete_query);
            check_query1($component_delete_query_result);
            $p=0;
            while($row_comp = mysqli_fetch_assoc($subject_query_result)){
                $subject_array = $result_array[$count]->getSubject();  
                ($subject_array[($result_array[$count]->getSubject_count())-1])->addComponent($row_comp['component_id'],$row_comp['component_name']);
                $component_query = "SELECT subcomponent_name,subcomponent_marks FROM subcomponent_marks WHERE component_id = {$row_comp['component_id']} ";
                $component_query_result = mysqli_query($result_connection,$component_query);
                check_query1($component_query_result); 
                $subcomponent_delete_query = "DELETE FROM subcomponent_marks WHERE component_id = {$row_comp['component_id']} ";
                $subcomponent_delete_query_result = mysqli_query($result_connection,$subcomponent_delete_query);
                check_query1($subcomponent_delete_query_result); 
                while($row_subcomp = mysqli_fetch_assoc($component_query_result))
                {
                    $components_array = $subject_array[($result_array[$count]->getSubject_count())-1]->getComponent();
                    $components_array[$p]->addSub_component($row_subcomp['subcomponent_name'],$row_subcomp['subcomponent_marks']);
                }
                $p++;
            }
          ($subject_array[($result_array[$count]->getSubject_count())-1])->doTotal();

        }
        $result_array[$count]->calculateSPI();
        $count++;
    }
    $storage_query = "UPDATE users SET storage = 0 WHERE user_id = {$_SESSION['user_id']}";
    $storage_query_result = mysqli_query($connection,$storage_query);
    check_query1($storage_query_result);
    $_SESSION['storage'] = 0;
    header("location:$destination");
    }
   }
?>
