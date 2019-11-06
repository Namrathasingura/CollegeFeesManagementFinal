<?php

include 'connect.php';


$bname=$_POST['bname'];
$bcode=$_POST['bcode'];
$hod=$_POST['hod'];
//$bname='cc';
//$bcode='nn';
//$hod='jhcyx';

// $status=false;

$sql="INSERT into tblbranch(bname,bcode,hod) values('$bname','$bcode','$hod')";

if($conn->query($sql))
{
    echo "success";
    //  $status=true;
}
else{
    echo "error";
    //  $status=false;
}

//  echo json_encode($status);
?>