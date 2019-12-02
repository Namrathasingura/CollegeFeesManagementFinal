<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGIN TO COLLEGE FEES MANAGEMENT</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!-- Favicon -->
    <link rel="shortcut icon" href="Varsity/assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="Varsity/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="Varsity/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="Varsity/assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="Varsity/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="Varsity/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="Varsity/assets/css/style.css" rel="stylesheet">

    <style>
        /*body{*/
            /*!*background-image: url("img/up.jpeg");*!*/
            /*background-color: lightblue;*/
            /*!*background-color: white;*!*/
            /*background-size: cover;*/
            /*width: 100%;*/
            /*height: 100%;*/
        /*}*/
        h3
        {
            /*text-shadow: 1px 8px 2px grey;*/
            font-family: "Bookman Old Style";
            font-size: 26px;
            color: black;
        }
    </style>
</head>
<body>
<!-- Start header  -->
<header id="mu-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span>sdit@gmail.com</span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>+91 9972074304</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <img src="img/univer.jpg" style="width: 60px; height: 60px;/">
                <a class="navbar-brand" href="index.html"><span style="font-style: oblique">Shree Devi Institute Of Technology</span></a>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li ><a href="Varsity/index.html">Home</a></li>
                    <li ><a href="Varsity/course.html">Course</a></li>
                    <li ><a href="Varsity/gallery.html">Campus</a></li>
                    <li><a href="Varsity/blog-archive.html">About Us</a></li>
                    <li><a href="Varsity/contact.html">Contact</a></li>

                    <li><a href="Varsity/index.html"><i class="fa fa-close"></i></a> </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
</body>
<div class="container">

    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body" style="background-color: white; margin-top:150px; margin-left: -40px; border:solid 2px mediumspringgreen;  width:500px; ">
                <h3 class="myhead" style="color:black ">LOGIN IN</h3>
                <form role="form" action="" method="post">
                    <hr />
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="text" class="form-control" placeholder="Your Username " name="username" required />
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="password" class="form-control"  placeholder="Your Password" name="password" required />
                    </div>

                    <div class="form-group">

                        <span class="pull-right">
                             <a href="Varsity/Forgot.html"  style="color: #5a95ba" >Forget password ? </a>
                         </span>
                    </div>

                    <button class="btn btn-success" type= "submit" name="login" > <label style="color: white">Login Now</label></button>
                    <button class="btn btn-success" type= "submit" name="login" ><a href="Varsity/Regiterfrom.html"><label style="color: white"> Sign Up</label></a></button>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $pass=$_POST['password'];
    include 'sql.php';
    $str="select * from tbluser where username='$username' and password='$pass'";
    $res=mysqli_query($sql,$str);
    if(mysqli_num_rows($res)>0)
    {
        session_start();
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$pass;

        echo "<script>alert('Login Successfull');window.location.href='usermain.php';</script>";
    }
    else
        echo "<script>alert('Login unuccessfull');</script>";
}
?>
</body>
</html>