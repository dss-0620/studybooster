<?php include "../php/dbs.php" ?>
<?php
    $select_query = "SELECT user_id,user_semester_id FROM users";
    $select_query_result = mysqli_query($connection,$select_query);
    if(!$select_query_result)
        die('SELECT QUERY FAILED!');
    while($row = mysqli_fetch_assoc($select_query_result)){
        $data = $row['user_semester_id'];
        $user_id = $row['user_id'];
        if($data%2!=0){
            $update_query = "UPDATE users SET user_semester_id = user_semester_id+1 WHERE user_id = $user_id";
            $update_query_result = mysqli_query($connection,$update_query);
            if(!$update_query_result)
                die('UPDATE FAILED!!!');
        }
    }
    echo 'DONE!!!';
?>