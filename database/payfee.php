<?php

include 'connect.php';

$id=$_POST['id'];
$total=$_POST['total'];

//$id=1;
//$total='comp';


$status=false;

$sql="update tblstudent set paid='$total',balance=0 where id='$id'";

if($conn->query($sql))
{
    // echo "success";
    $status=true;
}
else{
    // echo "error";
    $status=false;
}

echo json_encode($status);
?>