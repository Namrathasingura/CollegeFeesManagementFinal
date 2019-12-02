<?php

$name=$_FILES['file1']['name'];
$temp_name=$_FILES['file1']['tmp_name'];

echo $temp_name;
echo $name;

$dest="../notes/".$name;
if(move_uploaded_file($temp_name,$dest))
    {
    echo "<script>alert('upload successfull');</script>";
    }
else
    echo "alert('upload unsuccessfull');";

$branch=$_POST['branch'];
$sem=$_POST['sem'];


include 'connect.php';


$sem=7;
$address='kunjath';
$password=1;
$sql="INSERT into tblnotes(branch,sem,notes) values('$branch','$sem','$name')";

if($conn->query($sql))
{
    echo "<script>window.location.href='../notes.php';</script>";

}
else{
    echo "error";
    //  $status=false;
}

//  echo json_encode($status);







?>
