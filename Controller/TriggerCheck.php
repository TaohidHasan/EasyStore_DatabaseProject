<?php
include '../Model/TriggerModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if (isset($_POST['submit1'])) {
    $pid = $quantity = "";
    
        $pid = input_data($_POST['pid']);
        $quantity = input_data($_POST['quantity']);
        $res = trigger1($quantity,$pid);
        if($res){
            echo "trigger mission failed";
        }
        else{
            echo"trigger mission done";
        }
    }

if (isset($_POST['submit2'])) {

    $jid = $sal = "";
   
        $jid = input_data($_POST['jid']);
        $sal = input_data($_POST['salary']);
        $res = trigger2($jid,$sal);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    }


if (isset($_POST['submit3'])) {
   
    $eid = $efname = "";
    
        $eid = input_data($_POST['eid']);
        $efname = input_data($_POST['efname']);
        $res = trigger3($eid,$efname);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    
}


if (isset($_POST['submit4'])) {
   
    $sid = $quan = "";
    
        $sid = input_data($_POST['sid']);
        $quan = input_data($_POST['quan']);
        $res = trigger4($sid,$quan);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    
}
?>