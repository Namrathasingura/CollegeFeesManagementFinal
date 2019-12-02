<?php

include 'connect.php';

$name=$_POST['name'];
$opass=$_POST['opass'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];

//$id=1;
//$bname='comp';
//$bcode='cs';
//$hod='anandddd';

//$status=false;
if($npass==$cpass)
{
    $sql="update tbladmin set password='$npass' where  password='$opass' and name='$name'";
    if($conn->query($sql))
    {
        echo "<script>alert('Password Updated');</script>";
        echo "<script>window.location.href='../login.php';</script>";

        //  $status=true;
    }
    else{
        echo "<script>alert('Password Update Failed');</script>";
        echo "<script>window.location.href='../setting.php';</script>";
 }


}
else
{
    echo "<script>alert('Password do not match');</script>";
    echo "<script>window.location.href='../setting.php';</script>";

}


//echo json_encode($status);
?>