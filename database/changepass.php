<?php

include 'connect.php';

$uname=$_POST['uname'];
$cpass=$_POST['cpass'];
$npass=$_POST['npass'];
$conpass=$_POST['conpass'];

//$id=1;
//$bname='comp';
//$bcode='cs';
//$hod='anandddd';

//$status=false;
if($npass==$conpass)
{
    $sql="update tbluser set password='$npass' where username='$uname' and password='$cpass'";
    if($conn->query($sql))
    {
        echo "<script>alert('Password Updated');</script>";
        echo "<script>window.location.href='../userlogin.php';</script>";

        //  $status=true;
    }
    else{
        echo "<script>alert('Password Update Failed');</script>";
        echo "<script>window.location.href='../usersetting.php';</script>";

// echo "error";
        //  $status=false;
    }


}
else
{
    echo "<script>alert('Password do not match');</script>";
    echo "<script>window.location.href='../usersetting.php';</script>";

}


//echo json_encode($status);
?>