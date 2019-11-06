<?php
include 'connect.php';
$name=$_POST['name'];
$password=$_POST['password'];

// $name='nammu';
// $password='123';


$check="SELECT * from student where name='$name' and password='$password'";


$result=$conn->query($check);

$status=false;


if($result->num_rows>0)
{
    session_start();
    $_SESSION['uname']=$name;
    $_SESSION['upassword']=$password;
    $status=true;
}
else
{
    $status=false;
}
echo json_encode($status);
?>