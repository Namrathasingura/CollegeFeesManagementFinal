<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>college Fees Payment System</title>

    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

    <link href="css/datatable/datatable.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        .navbartop
        {
            width: 100%;
            height: 90px;
            background-color: black;
            position: fixed;
            top: 0;
        }

        .dowm{

            width: 100%;
            height: 52px;
            background-color: #3b5998;
            margin-top: 30px;
        }
        #downdiv{
            margin-top: 90px;
            width: 100%;
            height: 800px;
            background-color: blueviolet;

        }
        h1{
            text-align: center;
            color: white;
            font-family: Roboto;
        }
        button{
            color: white;
            background-color: #3b5998;
            border:none;
            padding: 10px 20px;
        }
        button:hover{
            background-color: darkblue;
        }
        i{
            margin-left: 50px;
        }

    </style>
</head>
<body>
<div id="pageinner">

    <div class="navbartop ">
        <h1>College Fees Management System</h1>
        <div class="dowm">
            <div class="nav" style="margin-left: 800px">
                <a href="home.html"><button type= "submit" name="login"> <label style="color: white">Home</label></button></a>
                <a href="admission.php"><button type= "submit" name="login"> <label style="color: white">Admission</label></button></a>
                <a href="reports.php"><button type= "submit" name="login"> <label style="color: white">Report</label></button></a>
                <a href="about.php"><button type= "submit" name="login"> <label style="color: white">About us</label></button></a>
                <a href="ash.php"> <i class="fa fa-user" style="color: white"></i><strong style="color: white; margin-left: 10px;">LOGIN</strong></a>
            </div>
        </div>
    </div>
    <div id="downdiv">

    </div>

</div>

</body>
</html>