<?php
include '../Model/DBConnection.php';
function plsqldb1($eid,$esal){

    $conn = connection();
    $sql = 'BEGIN easy_store1.emp_sal_up(:eid, :esal); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':eid',$eid,32);
    oci_bind_by_name($stmt,':esal',$esal,32);
    return oci_execute($stmt);
    
}

function plsqldb2($cid){

    $conn = connection();
    $sql = 'BEGIN easy_store2.delete_customer(:cid); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':cid',$cid,32);
    return oci_execute($stmt);
    
}
function plsqldb3($sid,$pid,$quan,$eid,$cid,$tamount){

    $conn = connection();
    $sql = 'BEGIN easy_store3.insert_sale(:sid,:pid,:quan,:eid,:cid,:tamount); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':sid',$sid,32);
    oci_bind_by_name($stmt,':pid',$pid,32);
    oci_bind_by_name($stmt,':quan',$quan,32);
    oci_bind_by_name($stmt,':eid',$eid,32);
    oci_bind_by_name($stmt,':cid',$cid,32);
    oci_bind_by_name($stmt,':tamount',$tamount,32);
    return oci_execute($stmt);
    
}


?>