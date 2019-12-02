<html>
<head>

    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="css/ui.css" rel="stylesheet" />
    <link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />
    <link href="css/datepicker.css" rel="stylesheet" />
    <link href="css/datatable/datatable.css" rel="stylesheet" />
    <script type="text/javascript">

    </script>
</head>
<body>
<?php
//include("php\userheader.php");
include ("userindex.php");
?>
<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{
    header("location:http://localhost/CollegeFeesManagement/usermain.php");


}

?>
</body>
</html>
<!-- /. NAV SIDE  -->