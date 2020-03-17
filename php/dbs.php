<?php 
   $connection = mysqli_connect('localhost','studybooster_db1','wi03GP+CmsN@','studybooster_getresult');
   //$connection = mysqli_connect('localhost','root','','getresult');
?>
<?php 
   $result_connection = mysqli_connect('localhost','studybooster_db2','^}9%t2Ftk?Wt','studybooster_getresult_results');
   //$result_connection = mysqli_connect('localhost','root','','getresult_result');
?>
<?php 
   $relative_connection = mysqli_connect('localhost','relative_user','5tO!1j1%cRz','relative_est_secure_ssl');
   $relative_user_connection = mysqli_connect('localhost','relative_select','yqwie891273yqwiu','relative_est_secure_ssl');
   //$relative_connection = mysqli_connect('localhost','root','','relative_est_secure_ssl');
?>
<?php 
 function check_query($result_of_query)
 {  
    global $connection;
    if(!$result_of_query)
        die('QUERY FAILED'.mysqli_error($connection));
 }
 function check_query1($result_of_query)
 {  
     global $result_connection;
     if(!$result_of_query)
        die('QUERY FAILED'.mysqli_error($result_connection));
 }
 function clean($string)
 {   
     global $connection;
     $string = mysqli_real_escape_string($connection,$string);
     return $string;
 }
 function username_exist($username)
 {
     global $connection;
     $query = "SELECT user_id FROM users WHERE username = '$username' ";
     $query_result = mysqli_query($connection,$query);
     $num=mysqli_num_rows($query_result);
     if($num && !($username == null))
        return true;
     else
        return false;
 }
 function username_id_exist($username_id)
 {
     global $connection;
     $query = "SELECT user_id FROM users WHERE username_id = '$username_id' ";
     $query_result = mysqli_query($connection,$query);
     $num=mysqli_num_rows($query_result);
     if($num)
        return true;
     else
        return false;
 }
//  class Subject{
//      var $name;
//      var $category_id;
//      var $component_id = array();
//      var $component_name = array();
//      var $component_x=0;
//      var $subcomponent_id = array();
//      var $subcomponent_name = array();
//      var $subcomponent_x=0;
//      public function __construct(){
//          $category_x = 0;
//          $component_x = 0;
//          $subcomponent_x = 0;
//          $category_id = 0;
//      }
//      public function getName(){
//          return $this->name;
//      }
//      public function getCategory_id(){
//          return $this->category_id;
//      }
//      public function getComponent_id(){
//          return $this->component_id;
//      }
//      public function getComponent_name(){
//          return $this->component_name;
//      }
//      public function getSubcomponent_id(){
//          return $this->subcomponent_id;
//      }
//      public function getSubcomponent_name(){
//          return $this->subcomponent_name;
//      }
//      public function setName($name_val){
//         $this->name = $name_val;
//      }
//      public function setCategory_id($category_id_val){
//        $this->category_id = $category_id_val;
//      }
//      public function setComponents($component_id_val,$component_name_val){
//          $this->component_name[$this->component_x] = $component_name_val;
//          $this->component_id[$this->component_x] = $component_id_val;
//          $this->component_x++;
//      }
//      public function setSubcomponents($subcomponent_id_val,$subcomponent_name_val){
//          $this->subcomponent_id[$this->subcomponent_x] = $subcomponent_id_val;
//          $this->subcomponent_name[$this->subcomponent_x] = $subcomponent_name_val;
//          $this->subcomponent_x++;
//      }
//  }
?>