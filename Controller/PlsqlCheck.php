<?php
include '../Model/PlSqlModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}

if(isset($_POST['submit1'])){
    $eid = $esal = "";
    

    
        $eid = input_data($_POST['eid']);
        $esal = input_data($_POST['esal']);
       $res = plsqldb1($eid , $esal);
       if($res){
           echo "Update successfully";
       }
       else{
           echo"failed the operation";
       }
        # code...
    }

if(isset($_POST['submit2'])){
    $cid = "";
    
        $cid = input_data($_POST['cid']);
    
       $res = plsqldb2($cid);
       if($res){
           echo "Delete successfully";
       }
       else{
           echo"failed the operation";
       }
        # code...
    }

if (isset($_POST['submit3'])) {
    
    $sid = $pid = $quan = $eid = $cid = $tmount="";
    
        $sid = input_data($_POST['sid']);
        $pid = input_data($_POST['pid']);
        $quan = input_data($_POST['quan']);
        $eid = input_data($_POST['eid']);
        $cid= input_data($_POST['cid']);
        $tamount= input_data($_POST['tamount']);
       $res = plsqldb3($sid , $pid ,$quan , $eid ,$cid ,$tamount);
       if($res){
           echo "Insertion successfully";
       }
       else{
           echo"failed the operation";
       }
        # code...
    }


?>