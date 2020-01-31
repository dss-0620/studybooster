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
        $this->spi = $total/$total_credits;
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
        return $this->total;
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
                $this->total += (($this->sub_components[$this->total_sub_comp])->getMarks())/2;
                $this->counter++;
            }
            else{
                $this->total += ($this->sub_components[$this->total_sub_comp])->getMarks();
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
    var $sub_component_name;
    var $marks;
    public function __construct($name,$marks){
        $this->sub_component_name = $name;
        $this->marks = $marks;
    }
    public function getSubComponent_name(){
        return $this->sub_component_name;
    }
    public function getMarks(){
        return $this->marks;
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
        case 'Sessional Exam':
            return 'SE';
        case 'Tutorial / Assignment':
            return 'TUT';
        case 'Term Assignment':
            return 'TA';
        case 'Lab File':
            return 'lab';
        case 'Viva':
            return 'VV';
        case 'SEE':
            return 'SEE';
    }
}
function revert_name($var){
    switch($var){
        case 'CT':
            return 'Class Test';
        case 'SE':
            return 'Sessional Exam';
        case 'TUT':
            return 'Tutorial / Assignment';
        case 'TA':
            return 'Term Assignment';
        case 'lab':
            return 'Lab File';
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
        case 'LPW':
            return 'LPW Component';
        case 'SEE':
            return 'SEE Component';
    }
}
// function subject_name($var){
//     switch($var){
//         case 'Discrete Mathematics':
//             return 'DM';
//         case 'Data Communication':
//             return 'DC';
//         case 'Digital Electronics':
//             return 'DE';
//         case 'Object Oriented Programming':
//             return 'OOP';
//         case 'Data Structures & F.S.':
//             return 'DS';
//         case 'Web Technologies':
//             return 'WT';
//         case 'Probability and Stats.':
//             return 'PS';
//         case 'Computer Organisation':
//             return 'CO';
//         case 'Operating Systems':
//             return 'OS';
//         case 'Computer Networks':
//             return 'CN';
//         case 'Database Management Systems':
//             return 'DBMS';
//         case 'Economics':
//             return 'ECS';
//         case 'Software Engineering':
//             return 'SE';
//         case 'Design & Analysis of Algo.':
//             return 'ALG';
//         case 'Theory of Computation':
//             return 'TC';
//         case 'Microprocessor & Interfacing':
//             return 'MI';
//         case 'Computer Security':
//             return 'CS';
//         case 'Institute Elective 1':
//             return 'IE1';
//         case 'Artificial Intelligence':
//             return 'AI';
//         case 'Dept. Elect. 1':
//             return 'DE1';    
//         case 'Dept. Elect. 2':
//             return 'DE2';
//         case 'Dept. Elect. 3':
//             return 'DE3';
//         case 'University Elect.':
//             return 'UE';
//         case 'Database App. Development':
//             return 'DBAD';
//         case 'Minor Project':
//             return 'MP';
//         case 'Organisational Behaviour':
//             return 'OB';
//     }
// }
// function subject_name_revert($var){
//     switch($var){
//         case 'DM':
//             return 'Discrete Mathematics';
//         case 'DC':
//             return 'Data Communication';
//         case 'DE':
//             return 'Digital Electronics';
//         case 'OOP':
//             return 'Object Oriented Programming';
//         case 'DS':
//             return 'Data Structures & F.S.';
//         case 'WT':
//             return 'Web Technologies';
//         case 'PS':
//             return 'Probability and Stats.';
//         case 'CO':
//             return 'Computer Organisation';
//         case 'OS':
//             return 'Operating Systems';
//         case 'CN':
//             return 'Computer Networks';
//         case 'DBMS':
//             return 'Database Management Systems';
//         case 'ECS':
//             return 'Economics';
//         case 'SE':
//             return 'Software Engineering';
//         case 'ALG':
//             return 'Design & Analysis of Algo.';
//         case 'TC':
//             return 'Theory of Computation';
//         case 'MI':
//             return 'Microprocessor & Interfacing';
//         case 'CS':
//             return 'Computer Security';
//         case 'IE1':
//             return 'Institute Elective 1';
//         case 'AI':
//             return 'Artificial Intelligence';
//         case 'DE1':
//             return 'Dept. Elect. 1';    
//         case 'DE2':
//             return 'Dept. Elect. 2';
//         case 'DE3':
//             return 'Dept. Elect. 3';
//         case 'UE':
//             return 'University Elect.';
//         case 'DBAD':
//             return 'Database App. Development';
//         case 'MP':
//             return 'Minor Project';
//         case 'OB':
//             return 'Organisational Behaviour';
//     }
//}
?>