<?php
include '../Model/DBConnection.php';
function view1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from sales_view") ;
    $res = oci_execute($sql);
    return $sql;
}
function view2(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from product_discount") ;
    $res = oci_execute($sql);
    return $sql;
}

function view3(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from manager_new_salary") ;
    $res = oci_execute($sql);
    return $sql;
}

function view4(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from supplier_company") ;
    $res = oci_execute($sql);
    return $sql;
}
?>