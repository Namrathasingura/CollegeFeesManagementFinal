<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>college Fees Management System</title>

    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->
    <style>
        img
        {
            width: 250px;
            height: 140px;
            border-radius: 10px;
        }
    </style>

</head>
<body>
<?php
include("php/header.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header" ><strong>DASHBOARD</strong></h2>
                <h2 style="text-align:center;"><strong style="color: black;font-size: 40px;text-shadow: 2px 7px 2px darkgrey">Welcome to College Fees Management System</strong> </h2>
                <br><br>
            </div>
        </div>
        <!--  Student row  -->
        <div class="row">
            <div class="col-md-4">
                <div class="main-box bg-success">
                    <a href="student.php">
                        <img src="img/student1.jpg"/>
                        <h1 style="color: darkblue;text-shadow: 6px 7px 2px darkgrey;font-family: 'Blackadder ITC';"><strong>Students</strong></h1>
                    </a>

                    <strong style="color: ">You Can Find The Information About Students  CLICK HERE</strong>
                </div>
            </div>

        <!--  Student row end  -->
            <!--  Fees row  -->
            <div class="col-md-4">
                <div class="main-box bg-primary">
                    <a href="fees.php">
                        <img src="img/fees.jpg">
                        <h1 style="color: darkblue; text-shadow: 6px 7px 2px darkgrey;font-family: 'Blackadder ITC'">Take Fees</h1>
                    </a>

                    <strong>You Can Find The Information About Fees of the Students  CLICK HERE</strong>
                </div>
            </div>
            <!--  Fees row end -->
            <!--  Report row  -->
            <div class="col-md-4">
                <div class="main-box bg-success">
                    <a href="report.php">
                        <img src="img/report.jpg" >
                        <h1 style="color: darkblue; text-shadow: 6px 7px 2px darkgrey;font-family: 'Blackadder ITC'">Report</h1>
                    </a>
                    <strong style="color: ">You Can Find The Information About Report of the Students  CLICK HERE</strong>
                </div>
            </div>
            <!--  Report row end  -->
        </div>
    </div>
</div>
</body>
</html>