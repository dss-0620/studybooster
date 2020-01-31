<?php 
    function return_text($var){
        if($var > 8.5)
            return 'Congratulations';
        else if($var > 8.0)
            return 'Well Done';
        else if($var > 7.0)
            return 'Work Hard';
    }
?>