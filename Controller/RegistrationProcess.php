<?php
include ("../Model/RegistrationModel.php");
$fname=$lname=$age=$pass=$gender=$phnNo=$email=$city=$street=$result=$res="";
$fnameerr=$lnameerr=$ageerr=$passerr=$gendererr=$phnNoerr=$emailerr=$cityerr=$streeterr=$dataerr="";
$emailcount=0;
$count=0;


if(isset($_POST["Submit"])){

   
 
$fname=$_POST["fname"];

if(empty($fname)|| !preg_match ("/^[a-zA-Z\s]+$/", $fname) || strlen($fname)<3){

$fnameerr= " Please enter a valid name!";

}
else{
    
    $count++;
    
}
$lname=$_POST["lname"];

if(empty($lname)|| !preg_match ("/^[a-zA-Z\s]+$/", $lname) || strlen($lname)<3){

$lnameerr= " Please enter a valid name!";

}
else{
   
    $count++;
    
}


$age=$_POST["age"];
if(empty("$age")){

    $ageerr= " Please enter age!";
    
    }
    else{
     
        $count++;
        
    }

   
    
    if(isset($_POST["gender"])){
       
        
        $count++;
    }
    else{
       
        $gendererr=" Please select gender!";
    }


    $phnNo=$_POST["phnNo"];
if(empty("$phnNo")){

    $phnNoerr= " Please enter Phone Number!";
    
    }
    
    else{
       
        $count++;
        
    }


    $email=$_POST["email"];
    
if(!empty($email)){
    $res=UniqueEmail($email);
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        
        foreach ($row as $item) 
        {
            $emailcount=$emailcount+$item;
        }
       
        }

    }
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="Please enter a valid email!";
}
elseif($emailcount!=0){
    
    $emailerr="User Email already Exists!! Please enter a unique email!";
}
else{
    $count++;
   
}
$pass=$_POST["password"];
    $uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 8 ){

        $passerr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $count++;
           
        }


        $city=$_POST["city"];

if(empty($city) || strlen($city)<3){

$cityerr= " Please enter a valid city!";

}
else{
   
    $count++;
    
}
$street=$_POST["street"];

if(empty($street) || strlen($street)<3){

$cityerr= " Please enter a valid street!";

}
else{
   
    $count++;
    
}




       if($count==9){
        
        
        $result = Registration($fname,$lname,$age,$_POST["gender"],$phnNo,$email,$city,$street,$pass);

        if($result){
            $dataerr="Registration Succesfull!!";
           }
           else{
            $dataerr="Registration Unsuccesfull!!";
           }
       }

      


    }
