<?php
include 'connect.php';


$id=$_POST['noteid'];

$status=false;

$sql="DELETE from tblnotes where id=$id";
if($conn->query($sql)===true)
{
    $status=true;
}
else{
    $status=false;
}
echo json_encode($status);
?>