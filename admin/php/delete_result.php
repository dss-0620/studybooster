<?php include "../../php/dbs.php"; ?>
<?php include "class.php"; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['delete'])){
    
    $total = 0;
        $result_id = $_POST['result_id'];
        $delete_query = "DELETE FROM results WHERE result_id = $result_id";
        $delete_query_result = mysqli_query($result_connection,$delete_query);
        check_query1($delete_query_result);
        $result_array = new Result();
        $result_array->setResult_id($result_id);
        $subject_select_query = "SELECT subject_id,subject_name,subject_credit FROM subjects WHERE result_id = $result_id ";
        $subject_select_query_result = mysqli_query($result_connection,$subject_select_query);
        check_query1($subject_select_query_result);
        $delete_subject = "DELETE FROM subjects WHERE result_id = $result_id";
        $delete_subject_result = mysqli_query($result_connection,$delete_subject);
        check_query1($delete_subject_result);
        while($row_subject = mysqli_fetch_assoc($subject_select_query_result)){
          //  $row_subject['subject_name'] = subject_name_revert($row_subject['subject_name']);
            $result_array->addSubject($row_subject['subject_id'],$row_subject['subject_name'],$row_subject['subject_credit']);
            $subject_query = "SELECT component_name,component_id FROM components WHERE subject_id = {$row_subject['subject_id']} ";
            $subject_query_result = mysqli_query($result_connection,$subject_query);
            check_query1($subject_query_result);
            $delete_component_query = "DELETE FROM components WHERE subject_id = {$row_subject['subject_id']} ";
            $delete_component_query_result = mysqli_query($result_connection,$delete_component_query);
            check_query1($delete_component_query_result);
            $p=0;
            while($row_comp = mysqli_fetch_assoc($subject_query_result)){
                $subject_array = $result_array->getSubject();  
                ($subject_array[($result_array->getSubject_count())-1])->addComponent($row_comp['component_id'],$row_comp['component_name']);
                $component_query = "SELECT subcomponent_name,subcomponent_marks FROM subcomponent_marks WHERE component_id = {$row_comp['component_id']} ";
                $component_query_result = mysqli_query($result_connection,$component_query);
                check_query1($component_query_result);   
                $delete_subcomponent_query = "DELETE FROM subcomponent_marks WHERE component_id = {$row_comp['component_id']} ";
                $delete_subcomponent_query_result = mysqli_query($result_connection,$delete_subcomponent_query);
                check_query1($delete_subcomponent_query_result);   
                while($row_subcomp = mysqli_fetch_assoc($component_query_result))
                {
                    $components_array = $subject_array[($result_array->getSubject_count())-1]->getComponent();
                    $components_array[$p]->addSub_component($row_subcomp['subcomponent_name'],$row_subcomp['subcomponent_marks']);
                }
                $p++;
            }
        }
        $storage_query = "UPDATE users SET storage = storage-1 WHERE user_id = {$_SESSION['user_id']}";
        $storage_query_result = mysqli_query($connection,$storage_query);
        check_query1($storage_query_result);
        $_SESSION['storage']-= 1;
    header('location:view_saved_results');
}
?>
