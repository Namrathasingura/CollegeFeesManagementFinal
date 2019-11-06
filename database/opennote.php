<?php


include 'connect.php';

//$noteid=2;
$noteid=$_POST['note'];

$sql="SELECT * from tblnotes where id='$noteid'";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($res)):;
    $notes=$row['notes'];
endwhile;

$file= "../notes/$notes";
$filename='../notes/$notes';
header('Content-type:application/pdf');
header('Content-Disposition:inline;filename="'.$filename.'"');
header('Content-Transfer-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file);
?>