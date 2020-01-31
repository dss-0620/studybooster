<?php include "../../php/dbs.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php
function online_users(){ 
    global $connection;
    $session_id = session_id();
    $time = time();
    $time_out = (time() - 300);
    $query = "SELECT * FROM online_users WHERE session_id = '$session_id' ";
    $query_result = mysqli_query($connection,$query);
    if(!$query_result)
        die('QUERY FAILED'.mysqli_error($connection));
    $result = mysqli_fetch_assoc($query_result);
    if($result == null)
    { 
        $query = "INSERT INTO online_users (session_id,time) VALUES ('$session_id',$time) ";
        $insert_query = mysqli_query($connection,$query);
        if(!$insert_query)
            die('QUERY FAILED'.mysqli_error($connection));
    }
    else{
        $query = "UPDATE online_users SET time = $time WHERE session_id = '$session_id' ";
        $update_query = mysqli_query($connection,$query);
        if(!$update_query)
            die('QUERY FAILED'.mysqli_error($connection));
    }
    $query = "SELECT * FROM online_users WHERE time > $time_out ";
    $count_query = mysqli_query($connection,$query);
    if(!$count_query)
        die('QUERY FAILED'.mysqli_error($connection));
    $online_users = mysqli_num_rows($count_query);
    return $online_users;
}
function total_users(){
    global $connection;
    $query = "SELECT id FROM online_users ";
    $total_users_query = mysqli_query($connection,$query);
    if(!$total_users_query)
        die('QUERY FAILED'.mysqli_error($connection));
    $total_users_visited = mysqli_num_rows($total_users_query);
    return $total_users_visited;
}
?>