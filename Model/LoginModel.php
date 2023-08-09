<?php
include'../Model/DBConnection.php';
function Login($email,$password){
   
    $conn = connection();
    $sql = oci_parse($conn, "select * from ADMIN where A_EMAIL='$email' and A_PASSWORD='$password'");       
    $res= oci_execute($sql);
    $row = oci_fetch_assoc($sql);
    return $row;
   
    
}

?>