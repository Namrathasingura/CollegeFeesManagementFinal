<?php

include 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['msg'];

//$name='shxg';
//$email='hxjba';
//$sub='xhguazx';
//$msg='xjhbax';

 //$status=false;

$sql="INSERT into tblcontact(name,email,subject,message) values('$name','$email','$sub','$msg')";

if($conn->query($sql))
{
    echo "<script>alert('success');</script>";
    echo "<script>window.location.href='../Varsity/index.html';</script>";

    //$status=true;
}
else{
    echo "<script>alert('error');</script>";
    //  $status=false;
}

//  echo json_encode($status);
?>