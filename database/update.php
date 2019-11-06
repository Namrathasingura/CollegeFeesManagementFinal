<?php

include 'connect.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$status=false;
$sql="UPDATE student set name='$name',email='$email' where id=$id";

 if($conn->query($sql)===true)
 {
    
     $status=true;
 }
 else{
    
     $status=false;
 }

 echo json_encode($status);
 ?>