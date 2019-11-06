<?php
include 'connect.php';


$id=$_POST['id'];

$status=false;

$sql="DELETE from tblbranch where id=$id";
if($conn->query($sql)===true)
{
    $status=true;
}
else{
    $status=false;
}
echo json_encode($status);
?>