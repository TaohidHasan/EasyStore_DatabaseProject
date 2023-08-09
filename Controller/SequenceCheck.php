<?php
include '../Model/SequenceModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if(isset($_POST['customer'])){
    $fname = $lname = $phn = "";
    
        $fname = input_data($_POST['fname']);
        $lname = input_data($_POST['lname']);
        $phn = input_data($_POST['phn']);
        $res = Customer($fname,$lname,$phn);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }



if(isset($_POST['location'])){
    $city = $street ="";
    
        $city = input_data($_POST['city']);
        $street = input_data($_POST['street']);
      
        $res = Location($city,$street);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }

