<?php  
include '../Model/DBConnection.php';
 function trigger1($quantity,$pid){
    $conn = connection();
    $sql = oci_parse($conn,"update purchase set quantity = $quantity where pur_id = $pid") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger2($jid,$sal){
    $conn = connection();
    $sql = oci_parse($conn,"update job set salary = '$sal' where job_id = $jid") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger3($eid,$efname){
    $conn = connection();
    $sql = oci_parse($conn,"update employee set e_fname = '$efname' where e_id = $eid") ;
    $res = oci_execute($sql);
    return $res;
 }

 function trigger4($sid,$quan){
    $conn = connection();
    $sql = oci_parse($conn,"update sales set quantity = '$quan' where sales_id = $sid") ;
    $res = oci_execute($sql);
    return $res;
 }
 function logShow1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from emp_dml_log") ;
    $res = oci_execute($sql);
    return $sql;
 }
 function logShow2(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from emp_sal_uplog") ;
    $res = oci_execute($sql);
    return $sql;
 }
?>