<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CollegeFeesManagement| Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->

    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />-->

    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--&lt;!&ndash;[if lt IE 9]>-->

    <script src="../database/jquery-3.1.1.js"></script>
    <script src="../database/script.js"></script>

</head>
<body>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

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
                                    <span>eduuniversity@gmail.com</span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>+91 9972074304</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-right">
                                <i class="fa fa-user">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu" style="margin-left: 405px;">
                                        <li><a href="../userlogin.php">User Login</a></li>
                                        <li><a href="../login.php">Admin Login</a></li>
                                    </ul>
                                </i>
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
                <img src="../img/univer.jpg" style="width: 60px; height: 60px;/">
                <a class="navbar-brand" href="../index.html"><span style="font-style: oblique">EDU University</span></a>
                <!-- IMG BASED LOGO  -->
                <!--
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href="../index.html">Home</a></li>
                    <li ><a href="course.html">Course</a></li>
                    <li ><a href="gallery.html">Campus</a></li>
                    <li><a href="blog-archive.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>

                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
    <div class="mu-search-area">
        <button class="mu-search-close"><span class="fa fa-close"></span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="mu-search-form">
                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End search box -->
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Register</h2>
                    <ol class="breadcrumb">
                        <li><a href="../usermain.php">LogIn</a></li>
                        <li class="active">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Fee Structur</h2>
                    </div>
                    <!-- end title -->
                    <!-- start contact content -->
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">
                                    <form class="contactform" action="">
                                        <?php
                                        include 'database/connect.php';
                                        //                                        $sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";
                                        $sql="SELECT * FROM tblbranch ";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                        while ($row = $result->fetch_assoc())
                                        {
                                        ?>
                                        <p class="comment-form-author">
                                            <label for="author">First Name <span class="required">*</span></label>
                                            <input type="text" id="fname" required="required" size="30" value="" name="fname">
                                        </p>

                                        <p class="comment-form-author">
                                            <label for="author">Last Name <span class="required">*</span></label>
                                            <input type="text" id="lname" required="required" size="30" value="" name="lname">
                                        </p>

                                        <p class="comment-form-author">
                                            <label for="author">Branch <span class="required">*</span></label>

                                        </p>

                                        <p class="comment-form-author">
                                            <label for="author">Year <span class="required">*</span></label>

                                        </p>


                                        <p class="comment-form-author">

                                        </p>

                                        <p class="comment-form-comment">
                                            <label for="comment">Type <span class="required">*</span></label>

                                        </p>

                                        <p class="comment-form-author">
                                            <label for="author">Bus <span class="required">*</span></label>
                                            <!--                                            <input type="text" id="dob"required="required" size="30" value=""  name="author">-->
                                            <select name="bus">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>

                                            </select>
                                        </p>

                                        <p class="comment-form-author">
                                            <label for="author">Bus Source <span class="required">*</span></label>

                                        </p>


                                        <p class="form-submit">
                                            <input type="submit" id="insertuser" value="Get Fee" class="mu-post-btn" name="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-contact-right">
                                    <img src="../img/reg1.jpg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact  -->


<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="">Features</a></li>
                                <li><a href="">Course</a></li>
                                <li><a href="">Event</a></li>
                                <li><a href="">Sitemap</a></li>
                                <li><a href="">Term Of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Student Help</h4>
                            <ul>
                                <li><a href="">Get Started</a></li>
                                <li><a href="#">My Questions</a></li>
                                <li><a href="">Download Files</a></li>
                                <li><a href="">Latest Course</a></li>
                                <li><a href="">Academic News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>News letter</h4>
                            <p>Get latest update, news & academic offers</p>
                            <form class="mu-subscribe-form">
                                <input type="email" placeholder="Type your Email">
                                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Contact</h4>
                            <address>
                                <p>P.O. Box 320, Ross, California 9495, USA</p>
                                <p>Phone: (415) 453-1568 </p>
                                <p>Website: www.markups.io</p>
                                <p>Email: info@markups.io</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
<!-- End footer -->






<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="assets/js/custom.js"></script>

</body>
</html>