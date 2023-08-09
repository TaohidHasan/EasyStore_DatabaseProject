<?php
include'../Model/DBConnection.php';
function Customer($fname,$lname,$phn){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO customer(c_id,c_fname,c_lname,c_phn) VALUES (seq_customer.nextval,'$fname','$lname','$phn')") ;
    $res = oci_execute($sql);
    return $res;
}
function Location($city,$street){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO LOCATION(Loc_id,City,Street) VALUES (SEQ_Loc.NEXTVAL,'$city','$street')") ;
    $res = oci_execute($sql);
    return $res;
}
?>