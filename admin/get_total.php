<?php include "php/class.php";?>
<?php
 $query = "SELECT result_id FROM results WHERE user_id = {$_SESSION['user_id']} ";
 $result_of_query = mysqli_query($result_connection,$query);
 check_query1($result_of_query);
 if(mysqli_num_rows($result_of_query)){
    $result_array = array();
    $count = 0;
    $total = 0;
    while($result_row = mysqli_fetch_assoc($result_of_query)){
        $result_array[$count] = new Result();
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
                $component_query = "SELECT subcomponent_name,subcomponent_marks FROM subcomponent_marks WHERE component_id = {$row_comp['component_id']} ";
                $component_query_result = mysqli_query($result_connection,$component_query);
                check_query1($component_query_result);   
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
    }
?>