<?php

include 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$gender=$_POST['gender'];
$dept=$_POST['dept'];
// $status=false;

$sql="INSERT into student(name,email,D_id,gender,password) values('$name','$email',$dept,'$gender','$pass')";

 if($conn->query($sql))
 {
     echo "success";
 }
 else{
     echo "error";
 }

//  echo json_encode($status);
 ?>