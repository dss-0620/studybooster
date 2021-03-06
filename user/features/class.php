<?php
 function returnGrade($marks){
       if($marks>=90)
        return 10;
    else if($marks>=80)
        return 9;
    else if($marks>=70)
        return 8;
    else if($marks>=60)
        return 7;
    else if($marks>=50)
        return 6;
    else if($marks>=40)
        return 5;
    else
        return 0;
    }
    function returngrade1($marks){
    if($marks>=90)
        return 'A+';
    else if($marks>=80)
        return 'A';
    else if($marks>=70)
        return 'B+';
    else if($marks>=60)
        return 'B';
    else if($marks>=50)
        return 'C+';
    else if($marks>=40)
        return 'C';
 }
 class Result{
    var $result_id;
    var $subject_count;
    var $subject;
    var $spi;
    public function __construct(){
        $this->subject = array();
        $this->result_id = 0;
        $this->subject_count = 0;
        $this->spi = 0;
        $this->ppi=0;
    }
    public function getResult_id(){
        return $this->result_id;
    }
    public function getSubject_count(){
        return $this->subject_count;
    }
    public function setResult_id($result_id){
        $this->result_id = $result_id;
    }
    public function addSubject($id,$name,$credits){
        $this->subject[$this->subject_count] = new Subject1($id,$name,$credits);
        $this->subject_count++;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function getSPI(){
        return $this->spi;
    }
    public function calculateSPI(){
        $total = 0;
        $total_credits = 0;
        for($i=0; $i<($this->subject_count); $i++){
            $total += returnGrade(($this->subject[$i])->getTotal()) * (($this->subject[$i])->getCredit());
            $total_credits += ($this->subject[$i])->getCredit();
        }
        $this->spi = round($total/$total_credits,3);
    }
}
class Subject1{
    var $subject_name;
    var $subject_id;
    var $components;
    var $total_comp;
    var $total;
    var $credits;
    public function __construct($id,$name,$credits){
        $this->subject_id = $id;
        $this->subject_name = $name;
        $this->credits = $credits;
        $this->components = array(); 
        $this->total_comp=0;
        $this->total = 0;
    }
    public function getSubject_name(){
        return $this->subject_name;
    }
    public function getSubject_id(){
        return $this->subject_id;
    }
    public function getTotal(){
        return $this->total;
    }
    public function getTotal_comp(){
        return $this->total_comp;
    }
    public function getComponent(){
        return $this->components;
    }
    public function getCredit(){
        return $this->credits;
    }
    public function setCredit($cr){
        $this->credits = $cr;
    }
    public function addComponent($id,$name){
        $this->components[$this->total_comp] = new Component1($id,$name);
        $this->total_comp++;
    }
    public function doTotal(){
       // echo (($this->components[1])->getTotal());
    if(($this->total_comp) == 3)
            $this->total = (0.4)*(($this->components[0])->getTotal()) + (0.2)*(($this->components[1])->getTotal()) +(0.4)*(($this->components[2])->getTotal());
    else if(($this->total_comp) == 2)
            $this->total = (0.6)*(($this->components[0])->getTotal()) + (0.4)*(($this->components[1])->getTotal());
    else{
        $this->total = ($this->components[0])->getTotal();
    }
    $this->total = round($this->total,2);
    }
}
class Component1{
    var $component_name;
    var $component_id;
    var $sub_components;
    var $total_sub_comp;
    var $total;
    var $counter;
    public function __construct($id,$name){
        $this->component_id = $id;
        $this->component_name = $name;
        $this->sub_components = array(); 
        $this->total_sub_comp=0;
        $this->total = 0;
        $this->counter = 0;
    }
    public function getComponent_name(){
        return $this->component_name;
    }
    public function getComponent_id(){
        return $this->component_id;
    }
    public function getTotal(){
        return round($this->total,2);
    }
    public function getTotal_sub_comp(){
        return $this->total_sub_comp;
    }
    public function addSub_component($name,$marks){
        $this->sub_components[$this->total_sub_comp] = new Sub_component1($name,$marks);
       if($this->component_name == 'CE1'){
            if($this->counter == 0){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks() * 2)/3;
                $this->counter++;
            }
            else if($this->counter == 1){
                $this->total += ((($this->sub_components[$this->total_sub_comp])->getMarks())*3)/4;
                $this->counter++;
            }
            else{
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks()*5)/6;
                $this->counter++;
            }
       }
       else if($this->component_name == 'LP1'){
            if($this->counter < 3){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
            else if($this->counter == 3){
                $this->total = ($this->total)*0.75;
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
            
       }
       else if($this->component_name == 'CE2'){
            if($this->counter == 0){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
            else if($this->counter == 1){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks())/2;
                $this->counter++;
            }
            else{
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
       }
       else{
        $this->total += ($this->sub_components[$this->total_sub_comp])->getMarks();
        //echo $this->total;
       }
        $this->total_sub_comp++;
    }
    public function getSubcomponents(){
        return $this->sub_components;
    }
}
class Sub_component1{
    //var $subcomponent_id;
    var $sub_component_name;
    var $marks;
    public function __construct($name,$marks){
       // $this->subcomponent_id = $id;
        $this->sub_component_name = $name;
        $this->marks = $marks;
    }
    public function getSubComponent_name(){
        return $this->sub_component_name;
    }
    public function getMarks(){
        return $this->marks;
    }
    public function getId(){
        return $this->subcomponent_id;
    }
    public function setMarks($marks){
        $this->marks = marks;
    }
}

 class Subcomponents{
     var $component_name;
     var $subcomponent_name;
     public function getComponents_name(){
         return $this->component_name;
     }
     public function getSubcomponents_name(){
         return $this->subcomponent_name;
     }
     public function setComponents_name($component_name){
         $this->component_name = $component_name;
     }
     public function setSubcomponents_name($subcomponent_name){
         $this->subcomponent_name = $subcomponent_name;
     }
 } 
 class Subject{
    var $name;
    var $credit;
    var $category_id;
    var $component_id = array();
    var $component_name = array();
    var $component_x=0;
    var $subcomponent_id = array();
    var $subcomponent_name = array();
    var $subcomponent_x=0;
    public function __construct(){
        $category_x = 0;
        $component_x = 0;
        $subcomponent_x = 0;
        $category_id = 0;
        $credit = 0;
    }
    public function getName(){
        return $this->name;
    }
    public function getCategory_id(){
        return $this->category_id;
    }
    public function getComponent_id(){
        return $this->component_id;
    }
    public function getComponent_name(){
        return $this->component_name;
    }
    public function getCredit(){
        return $this->credit;
    }
    public function setCredit($cr){
        $this->credit = $cr;
    }
    public function getSubcomponent_id(){
        return $this->subcomponent_id;
    }
    public function getComponent_count(){
        return $this->component_x;
    }
    public function getSubcomponent_name(){
        return $this->subcomponent_name;
    }
    public function setName($name_val){
       $this->name = $name_val;
    }
    public function setCategory_id($category_id_val){
       $this->category_id = $category_id_val;
    }
    public function setComponents($component_id_val,$component_name_val){
        $this->component_name[$this->component_x] = $component_name_val;
        $this->component_id[$this->component_x] = $component_id_val;
        $this->component_x++;
    }
    public function setSubcomponents($subcomponent_id_val,$subcomponent_name_val,$component_name_val){
        $this->subcomponent_id[$this->subcomponent_x] = $subcomponent_id_val;
        $this->subcomponent_name[$this->subcomponent_x] = new Subcomponents();
        ($this->subcomponent_name[$this->subcomponent_x])->setComponents_name($component_name_val);
        ($this->subcomponent_name[$this->subcomponent_x])->setSubcomponents_name($subcomponent_name_val);
        $this->subcomponent_x++;
    }
}
function name($var){
    switch($var){
        case 'Class Test':
            return 'CT';
        case 'Class test':
            return 'CT1';
        case 'Sessional Exam':
            return 'SE';
        case 'Tutorial / Assignment / Test':
            return 'TUT';
        case 'Tutorial':
            return 'TT1';
        case 'Term Assignment':
            return 'TA';
        case 'Drawing Sheets':
            return 'DS';
        case 'AutoCAD Sketch':
            return 'AS';
        case 'Sketch Book':
            return 'SB';
        case 'Lab File':
            return 'lab';
        case 'Viva':
            return 'VV';
        case 'SEE':
            return 'SEE';
    }
}
function cal_ppi(){
    global $relative_connection;
    $select_ppi_query = "SELECT ppi_val,ppi_credits FROM ppi_spi_secure WHERE user_id = {$_SESSION['user_id']}";
    $select_ppi_query_result = mysqli_query($relative_connection,$select_ppi_query);
    if(!$select_ppi_query_result)
        die('PPI QUERY FAILED!');
    return $select_ppi_query_result;
}
function ppi_exists(){
    global $relative_connection;
    $check_query = "SELECT * FROM ppi_spi_secure WHERE user_id = {$_SESSION['user_id']}";
    $check_query_result = mysqli_query($relative_connection,$check_query);
    if(!$check_query_result)
        die('CHECK PPI QUERY FAILED!');
    $num = mysqli_num_rows($check_query_result);
    if($num == 0)
        return false;
    else
        return $check_query_result;
}
function revert_name($var){
    switch($var){
        case 'CT':
            return 'Class Test';
        case 'CT1':
            return 'Class Test';
        case 'SE':
            return 'Sessional Exam';
        case 'TT1':
            return 'Tutorial';
        case 'TUT':
            return 'Tutorial / Assignment / Test';
        case 'TA':
            return 'Term Assignment';
        case 'lab':
            return 'Lab File';
        case 'DS':
            return 'Drawing Sheets';
        case 'AS':
            return 'AutoCAD Sketch';
        case 'SB':
            return 'Sketch Book';
        case 'VV':
            return 'Viva';
        case 'SEE':
            return 'SEE';
    }
}
function comp_name($var){
    switch($var){
        case 'CE':
            return 'Continuous Evaluation Component';
        case 'CE1':
            return 'Continuous Evaluation Component';
        case 'CE2':
            return 'Continuous Evaluation Component';
        case 'LP1':
            return 'LPW Component';
        case 'LPW':
            return 'LPW Component';
        case 'SEE':
            return 'SEE Component';
    }
}
class Result2{
    var $result_id;
    var $subject_count;
    var $subject;
    var $spi;
    var $ppi;
    public function __construct(){
        $this->subject = array();
        $this->result_id = 0;
        $this->subject_count = 0;
        $this->spi = 0;
    }
    public function getResult_id(){
        return $this->result_id;
    }
    public function getSubject_count(){
        return $this->subject_count;
    }
    public function setResult_id($result_id){
        $this->result_id = $result_id;
    }
    public function addSubject($id,$name,$credits){
        $this->subject[$this->subject_count] = new Subject2($id,$name,$credits);
        $this->subject_count++;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function getSPI(){
        return $this->spi;
    }
    public function calculateSPI(){
        $total = 0;
        $total_credits = 0;
        for($i=0; $i<($this->subject_count); $i++){
            $total += returnGrade(($this->subject[$i])->getTotal()) * (($this->subject[$i])->getCredit());
            $total_credits += ($this->subject[$i])->getCredit();
        }
        $this->spi = round($total/$total_credits,3);
    }
    public function getPPI(){
        return $this->ppi;
    }
    public function calculatePPI($grade_points,$credits){
        $total = 0;
        $total_credits = 0;
        for($i=0; $i<($this->subject_count); $i++){
            $total += returnGrade(($this->subject[$i])->getTotal()) * (($this->subject[$i])->getCredit());
            $total_credits += ($this->subject[$i])->getCredit();
        }
        $grade_points+=$total;
        $credits+=$total_credits;
        $this->ppi = round(($grade_points/$credits),3);
    }
}
class Subject2{
    var $subject_name;
    var $subject_id;
    var $components;
    var $total_comp;
    var $total;
    var $credits;
    public function __construct($id,$name,$credits){
        $this->subject_id = $id;
        $this->subject_name = $name;
        $this->credits = $credits;
        $this->components = array(); 
        $this->total_comp=0;
        $this->total = 0;
    }
    public function getSubject_name(){
        return $this->subject_name;
    }
    public function getSubject_id(){
        return $this->subject_id;
    }
    public function getTotal(){
        return $this->total;
    }
    public function getTotal_comp(){
        return $this->total_comp;
    }
    public function getComponent(){
        return $this->components;
    }
    public function getCredit(){
        return $this->credits;
    }
    public function setCredit($cr){
        $this->credits = $cr;
    }
    public function addComponent($id,$name){
        $this->components[$this->total_comp] = new Component2($id,$name);
        $this->total_comp++;
    }
    public function doTotal(){
       // echo (($this->components[1])->getTotal());
    if(($this->total_comp) == 3)
            $this->total = (0.4)*(($this->components[0])->getTotal()) + (0.2)*(($this->components[1])->getTotal()) +(0.4)*(($this->components[2])->getTotal());
    else if(($this->total_comp) == 2)
            $this->total = (0.6)*(($this->components[0])->getTotal()) + (0.4)*(($this->components[1])->getTotal());
    else{
        $this->total = ($this->components[0])->getTotal();
    }
    $this->total = round($this->total,2);
    }
}
class Component2{
    var $component_name;
    var $component_id;
    var $sub_components;
    var $total_sub_comp;
    var $total;
    var $counter;
    public function __construct($id,$name){
        $this->component_id = $id;
        $this->component_name = $name;
        $this->sub_components = array(); 
        $this->total_sub_comp=0;
        $this->total = 0;
        $this->counter = 0;
    }
    public function getComponent_name(){
        return $this->component_name;
    }
    public function getComponent_id(){
        return $this->component_id;
    }
    public function getTotal(){
        return round($this->total,2);
    }
    public function getTotal_sub_comp(){
        return $this->total_sub_comp;
    }
    public function addSub_component($id,$name,$marks){
        $this->sub_components[$this->total_sub_comp] = new Sub_component2($id,$name,$marks);
       if($this->component_name == 'CE1'){
            if($this->counter == 0){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks() * 2)/3;
                $this->counter++;
            }
            else if($this->counter == 1){
                $this->total += ((($this->sub_components[$this->total_sub_comp])->getMarks())*3)/4;
                $this->counter++;
            }
            else{
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks()*5)/6;
                $this->counter++;
            }
       }
       else if($this->component_name == 'LP1'){
            if($this->counter < 3){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
            else if($this->counter == 3){
                $this->total = ($this->total)*0.75;
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
            
       }
       else if($this->component_name == 'CE2'){
            if($this->counter == 0){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
            else if($this->counter == 1){
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks())/2;
                $this->counter++;
            }
            else{
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks());
                $this->counter++;
            }
       }
       else{
        $this->total += ($this->sub_components[$this->total_sub_comp])->getMarks();
        //echo $this->total;
       }
        $this->total_sub_comp++;
    }
    public function getSubcomponents(){
        return $this->sub_components;
    }
}
class Sub_component2{
    var $subcomponent_id;
    var $sub_component_name;
    var $marks;
    public function __construct($id,$name,$marks){
        $this->subcomponent_id = $id;
        $this->sub_component_name = $name;
        $this->marks = $marks;
    }
    public function getSubComponent_name(){
        return $this->sub_component_name;
    }
    public function getMarks(){
        return $this->marks;
    }
    public function getId(){
        return $this->subcomponent_id;
    }
    public function setMarks($marks){
        $this->marks = marks;
    }
}

?>