<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>college Fees Payment System</title>

    <link href="../css/bootstrap.css" rel="stylesheet" />

    <link href="../css/font-awesome.css" rel="stylesheet" />

    <link href="../css/basic.css" rel="stylesheet" />

    <link href="../css/custom.css" rel="stylesheet" />

    <link href="../css/datatable/datatable.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="../database/jquery-3.1.1.js"></script>
    <script src="../database/script.js"></script>
    <style>
        #admit{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
    </style>

</head>
<?php
include("../php/userheadapp.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-12">
                        <!--                        <h2 class="page-header" ><strong>Application form</strong>-->

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Fee Structure
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <!--                                    <div id="tSortable22_length" class="dataTables_length"><label>Show <select size="1" name="tSortable22_length" aria-controls="tSortable22"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>-->
                                    <!--      -->
                                    <!--                                    <div class="dataTables_filter" id="tSortable22_filter"><label><i class="fa fa-search"></i> <input type="text" aria-controls="tSortable22"></label></div>-->
                                    <?php
                                                                            $branch=$_POST['branch'];
                                                                            $year=$_POST['year'];
                                                                            $quota=$_POST['quota'];
                                                                            $type=$_POST['type'];
                                                                            $source=$_POST['source'];
                                                                            $fname=$_POST['fname'];
                                                                            $mname=$_POST['mname'];
                                                                            $lname=$_POST['lname'];
                                                                            $bus=$_POST['bus'];
                                                                            $dob=$_POST['dob'];
                                                                            $uname=$_POST['uname'];
                                                                            $semail=$_POST['semail'];

                                                                            include '../database/connect.php';

                                                                            $query1="SELECT * FROM tblfee where branch='$branch' and year='$year' and quota='$quota'";
                                                                            $res1=mysqli_query($conn,$query1);

                                                                            while($row1=mysqli_fetch_array($res1)):;
                                                                            $admissionfee=$row1['admission'];
                                                                            $examfee= $row1['exam'];
                                                                            $feastfee=$row1['feast'];
                                                                            $stationaryfee =$row1['stationary'];
                                                                            $softskillfee=$row1['softskill'];
                                                                            endwhile;


                                                                            $query2="SELECT * FROM tblhostel where type='$type' ";
                                                                            $res2=mysqli_query($conn,$query2);

                                                                            while($row2=mysqli_fetch_array($res2)):;
                                                                            $hostelfee=$row2['fee'];
                                                                            endwhile;


                                                                            if($bus=='yes')
                                                                            {
                                                                                if($source!='no')
                                                                                {
                                                                                $query3="SELECT * FROM tblsource where source='$source' ";
                                                                                }
                                                                                else
                                                                                    {
                                                                                        $query3="SELECT * FROM tblsource where source='hostel' ";
                                                                                        $source='hostel';
                                                                                }
                                                                                $res3=mysqli_query($conn,$query3);
                                                                                while($row3=mysqli_fetch_array($res3)):;
                                                                                $busfee= $row3['fee'];
                                                                                endwhile;


                                                                            }
                                                                           else
                                                                           {
                                                                               $busfee=0;
                                                                               $source='no';
                                                                           }
                                                                           $total=$admissionfee+$examfee+$feastfee+$stationaryfee+$softskillfee+$hostelfee+$busfee;
                                                                            $paid=0;
                                                                            $balance=$total;
                                                                                    ?>

                                                                        <label id="uname" class="pull-right"><?php echo $uname;?></label>
                                                                        <form class="contactform" method="post">
                                                                            <table class="table table-striped table-bordered table-hover" id="tSortable22" >
                                                                                <tr>
                                                                                    <td id="name" ><strong>Name :</strong><?php echo $fname." ".$mname." ".$lname;?></td>
                                                                                    <td id="branch" ><strong>Branch :</strong><?php echo $branch;?></td>
                                                                                    <td id="year" ><strong>Year :</strong><?php echo $year;?></td>
                                                                                    <td id="dob"><strong>DOB :</strong><?php echo $dob;?></td>
                                                                                </tr>

                                                                                <tr><td ><strong>Email:</strong></td>
                                                                                <td colspan="3" id="semail"><?php echo $semail;?></td> </tr>

                                                                                <tr>
                                                                                    <th colspan="2">Particular</th>
                                                                                    <th colspan="2" >Amount</th>
                                                                                </tr>
                                                                                <tr>
                                                                                       <td colspan="2"> Admission fee</td>
                                                                                       <td colspan="2" id="admission"> <?php echo $admissionfee;?></td>
                                                                                </tr>
                                                                                <tr>

                                                                                    <td colspan="2"> Exam fee</td>
                                                                                   <td colspan="2" id="exam"> <?php echo $examfee;?></td>

                                                                                </tr>
                                                                                <tr>

                                                                                      <td colspan="2">Feast Fee</td>
                                                                                   <td colspan="2" id="feast"><?php echo $feastfee;?> </td>

                                                                                </tr>
                                                                                   <tr>

                                                                                      <td colspan="2"> Stationary Fee</td>
                                                                                      <td colspan="2" id="stationary"> <?php echo $stationaryfee;?> </td>


                                                                                    </tr>
                                                                                <tr>

                                                                                       <td colspan="2">SoftSkill</td>
                                                                                       <td colspan="2" id="softskill"> <?php echo $softskillfee;?></td>

                                                                                   </tr>

                                                                                <tr>

                                                                                      <td colspan="2">Hostel Fee</td>
                                                                                    <td colspan="2" id="hostel"><?php echo $hostelfee;?></td>


                                                                                </tr>


                                                                                <tr>

                                                                                       <td colspan="2">Bus Fee</td>
                                                                                   <td colspan="2" id="bus"><?php echo $busfee;?></td>


                                                                                </tr>

                                                                                <tr><td colspan="4"></td> </tr>
                                                                                <tr>

                                                                                    <td colspan="2">Bus Source</td>
                                                                                    <td colspan="2" id="source"><?php echo $source;?></td>

                                                                                </tr>

                                                                                <tr>

                                                                                       <td colspan="2">Total</td>
                                                                                   <td colspan="2" id="total"><?php echo $total?></td>


                                                                                </tr>


                                                                                <tr>

                                                                                       <td colspan="2">Paid</td>
                                                                                   <td colspan="2" id="paid"><?php echo $paid;?></td>


                                                                                </tr>

                                                                                <tr>

                                                                                       <td colspan="2">Balance</td>
                                                                                   <td colspan="2" id="balance"><?php echo $balance;?></td>


                                                                                </tr>



                                                                            </table>
                                                                            <input id="admit" type="button"
                                                                                   class="mu-post-btn pull-right"
                                                                                name="admit" value="Admit" />
                                                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<body>

</body>
</html>















<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>CollegeFeesManagement| Register</title>-->
<!---->
<!--    <!-- Favicon -->-->
<!--    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->
<!---->
<!--    <!-- Font awesome -->-->
<!--    <link href="assets/css/font-awesome.css" rel="stylesheet">-->
<!--    <!-- Bootstrap -->-->
<!--    <link href="assets/css/bootstrap.css" rel="stylesheet">-->
<!--    <!-- Slick slider -->-->
<!--    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">-->
<!--    <!-- Fancybox slider -->-->
<!---->
<!--    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />-->-->
<!---->
<!--    <!-- Theme color -->-->
<!--    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">-->
<!---->
<!--    <!-- Main style sheet -->-->
<!--    <link href="assets/css/style.css" rel="stylesheet">-->
<!---->
<!---->
<!--    <!-- Google Fonts -->-->
<!--    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
<!--    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>-->
<!---->
<!--    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->-->
<!--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->-->
<!--    <!--&lt;!&ndash;[if lt IE 9]>-->-->
<!---->
<!--    <script src="../database/jquery-3.1.1.js"></script>-->
<!--    <script src="../database/script.js"></script>-->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!--<!--START SCROLL TOP BUTTON -->-->
<!--<a class="scrollToTop" href="#">-->
<!--    <i class="fa fa-angle-up"></i>-->
<!--</a>-->
<!--<!-- END SCROLL TOP BUTTON -->-->
<!---->
<!--<!-- Start header  -->-->
<!--<header id="mu-header">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12">-->
<!--                <div class="mu-header-area">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
<!--                            <div class="mu-header-top-left">-->
<!--                                <div class="mu-top-email">-->
<!--                                    <i class="fa fa-envelope"></i>-->
<!--                                    <span>eduuniversity@gmail.com</span>-->
<!--                                </div>-->
<!--                                <div class="mu-top-phone">-->
<!--                                    <i class="fa fa-phone"></i>-->
<!--                                    <span>+91 9972074304</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
<!--                            <div class="mu-header-top-right">-->
<!--                                <i class="fa fa-user">-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="fa fa-angle-down"></span></a>-->
<!--                                    <ul class="dropdown-menu" style="margin-left: 405px;">-->
<!--                                        <li><a href="../userlogin.php">User Login</a></li>-->
<!--                                        <li><a href="../login.php">Admin Login</a></li>-->
<!--                                    </ul>-->
<!--                                </i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<!--<!-- End header  -->-->
<!--<!-- Start menu -->-->
<!--<section id="mu-menu">-->
<!--    <nav class="navbar navbar-default" role="navigation">-->
<!--        <div class="container">-->
<!--            <div class="navbar-header">-->
<!--                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->-->
<!--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--                    <span class="sr-only">Toggle navigation</span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
<!--                <!-- LOGO -->-->
<!--                <!-- TEXT BASED LOGO -->-->
<!--                <img src="../img/univer.jpg" style="width: 60px; height: 60px;/">-->
<!--                <a class="navbar-brand" href="../index.html"><span style="font-style: oblique">EDU University</span></a>-->
<!--                <!-- IMG BASED LOGO  -->-->
<!--                <!---->
<!--                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->-->
<!--            </div>-->
<!--            <div id="navbar" class="navbar-collapse collapse">-->
<!--                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">-->
<!--                    <li class="active"><a href="../index.html">Home</a></li>-->
<!--                    <li ><a href="course.html">Course</a></li>-->
<!--                    <li ><a href="gallery.html">Campus</a></li>-->
<!--                    <li><a href="blog-archive.html">About Us</a></li>-->
<!--                    <li><a href="contact.html">Contact</a></li>-->
<!---->
<!--                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>-->
<!--                </ul>-->
<!--            </div><!--/.nav-collapse -->-->
<!--        </div>-->
<!--    </nav>-->
<!--</section>-->
<!--<!-- End menu -->-->
<!--<!-- Start search box -->-->
<!--<div id="mu-search">-->
<!--    <div class="mu-search-area">-->
<!--        <button class="mu-search-close"><span class="fa fa-close"></span></button>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <form class="mu-search-form">-->
<!--                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<!-- End search box -->-->
<!---->
<!---->
<!--<!-- Page breadcrumb -->-->
<!--<section id="mu-page-breadcrumb">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="mu-page-breadcrumb-area">-->
<!--                    <h2>Register</h2>-->
<!--                    <ol class="breadcrumb">-->
<!--                        <li><a href="../usermain.php">LogIn</a></li>-->
<!--                        <li class="active">Register</li>-->
<!--                    </ol>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<!-- End breadcrumb -->-->
<!---->
<!--<!-- Start contact  -->-->
<!--<section id="mu-contact">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="mu-contact-area">-->
<!--                    <!-- start title -->-->
<!--                    <div class="mu-title">-->
<!--                        <h2>Fee Structure</h2>-->
<!--                    </div>-->
<!--                    <!-- end title -->-->
<!--                    <!-- start contact content -->-->
<!--                    <div class="mu-contact-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="mu-contact-left" >-->
<!---->
<!---->
<!--                                        --><?php
//                                        $branch=$_POST['branch'];
//                                        $year=$_POST['year'];
//                                        $quota=$_POST['quota'];
//                                        $type=$_POST['type'];
//                                        $source=$_POST['source'];
//                                        $fname=$_POST['fname'];
//                                        $mname=$_POST['mname'];
//                                        $lname=$_POST['lname'];
//                                        $bus=$_POST['bus'];
//                                        $dob=$_POST['dob'];
//                                        $uname=$_POST['uname'];
//                                        $semail=$_POST['semail'];
//
//                                        include '../database/connect.php';
//
//                                        $query1="SELECT * FROM tblfee where branch='$branch' and year='$year' and quota='$quota'";
//                                        $res1=mysqli_query($conn,$query1);
//
//                                        while($row1=mysqli_fetch_array($res1)):;
//                                        $admissionfee=$row1['admission'];
//                                        $examfee= $row1['exam'];
//                                        $feastfee=$row1['feast'];
//                                        $stationaryfee =$row1['stationary'];
//                                        $softskillfee=$row1['softskill'];
//                                        endwhile;
//
//
//                                        $query2="SELECT * FROM tblhostel where type='$type' ";
//                                        $res2=mysqli_query($conn,$query2);
//
//                                        while($row2=mysqli_fetch_array($res2)):;
//                                        $hostelfee=$row2['fee'];
//                                        endwhile;
//
//
//                                        if($bus=='yes')
//                                        {
//                                            if($source!='no')
//                                            {
//                                            $query3="SELECT * FROM tblsource where source='$source' ";
//                                            }
//                                            else
//                                                {
//                                                    $query3="SELECT * FROM tblsource where source='hostel' ";
//                                                    $source='hostel';
//                                            }
//                                            $res3=mysqli_query($conn,$query3);
//                                            while($row3=mysqli_fetch_array($res3)):;
//                                            $busfee= $row3['fee'];
//                                            endwhile;
//
//
//                                        }
//                                       else
//                                       {
//                                           $busfee=0;
//                                           $source='no';
//                                       }
//                                       $total=$admissionfee+$examfee+$feastfee+$stationaryfee+$softskillfee+$hostelfee+$busfee;
//                                        $paid=0;
//                                        $balance=$total;
//                                                ?>
<!---->
<!--                                    <label id="uname" class="pull-right">--><?php //echo $uname;?><!--</label>-->
<!--                                    <form class="contactform" method="post">-->
<!--                                        <table class="table table-striped table-bordered table-hover" id="tSortable22" >-->
<!--                                            <tr>-->
<!--                                                <td id="name" ><strong>Name :</strong>--><?php //echo $fname." ".$mname." ".$lname;?><!--</td>-->
<!--                                                <td id="branch" ><strong>Branch :</strong>--><?php //echo $branch;?><!--</td>-->
<!--                                                <td id="year" ><strong>Year :</strong>--><?php //echo $year;?><!--</td>-->
<!--                                                <td id="dob"><strong>DOB :</strong>--><?php //echo $dob;?><!--</td>-->
<!--                                            </tr>-->
<!---->
<!--                                            <tr><td ><strong>Email:</strong></td>-->
<!--                                            <td colspan="3" id="semail">--><?php //echo $semail;?><!--</td> </tr>-->
<!---->
<!--                                            <tr>-->
<!--                                                <th colspan="2">Particular</th>-->
<!--                                                <th colspan="2" >Amount</th>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                   <td colspan="2"> Admission fee</td>-->
<!--                                                   <td colspan="2" id="admission"> --><?php //echo $admissionfee;?><!--</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!---->
<!--                                                <td colspan="2"> Exam fee</td>-->
<!--                                               <td colspan="2" id="exam"> --><?php //echo $examfee;?><!--</td>-->
<!---->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!---->
<!--                                                  <td colspan="2">Feast Fee</td>-->
<!--                                               <td colspan="2" id="feast">--><?php //echo $feastfee;?><!-- </td>-->
<!---->
<!--                                            </tr>-->
<!--                                               <tr>-->
<!---->
<!--                                                  <td colspan="2"> Stationary Fee</td>-->
<!--                                                  <td colspan="2" id="stationary"> --><?php //echo $stationaryfee;?><!-- </td>-->
<!---->
<!---->
<!--                                                </tr>-->
<!--                                            <tr>-->
<!---->
<!--                                                   <td colspan="2">SoftSkill</td>-->
<!--                                                   <td colspan="2" id="softskill"> --><?php //echo $softskillfee;?><!--</td>-->
<!---->
<!--                                               </tr>-->
<!---->
<!--                                            <tr>-->
<!---->
<!--                                                  <td colspan="2">Hostel Fee</td>-->
<!--                                                <td colspan="2" id="hostel">--><?php //echo $hostelfee;?><!--</td>-->
<!---->
<!---->
<!--                                            </tr>-->
<!---->
<!---->
<!--                                            <tr>-->
<!---->
<!--                                                   <td colspan="2">Bus Fee</td>-->
<!--                                               <td colspan="2" id="bus">--><?php //echo $busfee;?><!--</td>-->
<!---->
<!---->
<!--                                            </tr>-->
<!---->
<!--                                            <tr><td colspan="4"></td> </tr>-->
<!--                                            <tr>-->
<!---->
<!--                                                <td colspan="2">Bus Source</td>-->
<!--                                                <td colspan="2" id="source">--><?php //echo $source;?><!--</td>-->
<!---->
<!--                                            </tr>-->
<!---->
<!--                                            <tr>-->
<!---->
<!--                                                   <td colspan="2">Total</td>-->
<!--                                               <td colspan="2" id="total">--><?php //echo $total?><!--</td>-->
<!---->
<!---->
<!--                                            </tr>-->
<!---->
<!---->
<!--                                            <tr>-->
<!---->
<!--                                                   <td colspan="2">Paid</td>-->
<!--                                               <td colspan="2" id="paid">--><?php //echo $paid;?><!--</td>-->
<!---->
<!---->
<!--                                            </tr>-->
<!---->
<!--                                            <tr>-->
<!---->
<!--                                                   <td colspan="2">Balance</td>-->
<!--                                               <td colspan="2" id="balance">--><?php //echo $balance;?><!--</td>-->
<!---->
<!---->
<!--                                            </tr>-->
<!---->
<!---->
<!---->
<!--                                        </table>-->
<!--                                        <input id="admit" type="button"-->
<!--                                               class="mu-post-btn pull-right"-->
<!--                                            name="admit" value="Admit" />-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <!-- end contact content -->-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<!-- End contact  -->-->
<!---->
<!---->
<!--<!-- Start footer -->-->
<!--<footer id="mu-footer">-->
<!--    <!-- start footer top -->-->
<!--    <div class="mu-footer-top">-->
<!--        <div class="container">-->
<!--            <div class="mu-footer-top-area">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-3">-->
<!--                        <div class="mu-footer-widget">-->
<!--                            <h4>Information</h4>-->
<!--                            <ul>-->
<!--                                <li><a href="#">About Us</a></li>-->
<!--                                <li><a href="">Features</a></li>-->
<!--                                <li><a href="">Course</a></li>-->
<!--                                <li><a href="">Event</a></li>-->
<!--                                <li><a href="">Sitemap</a></li>-->
<!--                                <li><a href="">Term Of Use</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-3">-->
<!--                        <div class="mu-footer-widget">-->
<!--                            <h4>Student Help</h4>-->
<!--                            <ul>-->
<!--                                <li><a href="">Get Started</a></li>-->
<!--                                <li><a href="#">My Questions</a></li>-->
<!--                                <li><a href="">Download Files</a></li>-->
<!--                                <li><a href="">Latest Course</a></li>-->
<!--                                <li><a href="">Academic News</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-3">-->
<!--                        <div class="mu-footer-widget">-->
<!--                            <h4>News letter</h4>-->
<!--                            <p>Get latest update, news & academic offers</p>-->
<!--                            <form class="mu-subscribe-form">-->
<!--                                <input type="email" placeholder="Type your Email">-->
<!--                                <button class="mu-subscribe-btn" type="submit">Subscribe!</button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-3">-->
<!--                        <div class="mu-footer-widget">-->
<!--                            <h4>Contact</h4>-->
<!--                            <address>-->
<!--                                <p>P.O. Box 320, Ross, California 9495, USA</p>-->
<!--                                <p>Phone: (415) 453-1568 </p>-->
<!--                                <p>Website: www.markups.io</p>-->
<!--                                <p>Email: info@markups.io</p>-->
<!--                            </address>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <!-- end footer top -->-->
<!--    <!-- start footer bottom -->-->
<!--    <div class="mu-footer-bottom">-->
<!--        <div class="container">-->
<!--            <div class="mu-footer-bottom-area">-->
<!--                <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <!-- end footer bottom -->-->
<!--</footer>-->
<!--<!-- End footer -->-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--<!-- jQuery library -->-->
<!--<script src="assets/js/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->-->
<!--<script src="assets/js/bootstrap.js"></script>-->
<!--<!-- Slick slider -->-->
<!--<script type="text/javascript" src="assets/js/slick.js"></script>-->
<!--<!-- Counter -->-->
<!--<script type="text/javascript" src="assets/js/waypoints.js"></script>-->
<!--<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>-->
<!--<!-- Mixit slider -->-->
<!--<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>-->
<!--<!-- Add fancyBox -->-->
<!--<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>-->
<!---->
<!--<!-- Custom js -->-->
<!--<script src="assets/js/custom.js"></script>-->
<!---->
<!---->
<!---->
<!--</body>-->
<!--</html>-->