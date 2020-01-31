<?php include "../../../php/dbs.php";?>
<?php
    if(isset($_POST['count'])){
        $count = $_POST['count'];
        $initial = $_POST['initial'];
        $rs = $_POST['rs'];
        $sub = $_POST['sub'];
        for($i=0;$i<$count;$i++){
            $arr = $_POST[$initial+$i];
            $update_query = "UPDATE subcomponent_marks SET ";
            $update_query.="subcomponent_marks = $arr ";
            $update_query.="WHERE subcomponent_id = ($initial+$i)";
            $result = mysqli_query($result_connection,$update_query);
            if(!$result)
                die('Update Query Failed'.mysqli_error($result_connection));
        }
        $redirect = "location:";
        $redirect .= $_POST['redirect'];
        $redirect .="?rs=".$rs."&sub=".$sub;
        header($redirect);
    }
    else{
        header('location:index.php');
    }
?>