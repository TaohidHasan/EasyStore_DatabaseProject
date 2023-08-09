<?php
include'../Model/DBConnection.php';
function AdminShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from admin") ;
     $res = oci_execute($sql);
     return $sql;
}

function CatagoryShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from catagory") ;
     $res = oci_execute($sql);
     return $sql;
}

function EmployeeShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from employee") ;
     $res = oci_execute($sql);
     return $sql;
}
function JobShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from job") ;
     $res = oci_execute($sql);
     return $sql;
}
function LocationShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from location") ;
     $res = oci_execute($sql);
     return $sql;
}
function ProductShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from product") ;
     $res = oci_execute($sql);
     return $sql;
}

?>