<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

    <script src="database/jquery-3.1.1.js"></script>
    <script src="database/script.js"></script>
    <style>
        #insertbranch{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
    </style>

</head>
<?php
include("php/header.php");

?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-12">
                        <h2 class="page-header" ><strong>Add Branch</strong>
                        </h2>


                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Enter Details
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <form class="contactform" action="database/branchinsert.php" method="post">
                                        <p class="comment-form-author">
                                            <label for="author">Branch Name<span class="required">* </span></label>
                                            <input type="text" id="bname" required="required" size="30" value="" name="bname">
                                        </p>
                                        <p class="comment-form-author">
                                            <label for="author">Branch Code<span class="required">* </span></label>
                                            <input type="text" id="bcode" required="required" size="30" value="" name="bcode">
                                        </p>


                                        <p class="comment-form-author">
                                            <label for="author">Branch HOD<span class="required"> *  </span></label>
                                            <input type="text" id="bhod" required="required" size="30" value="" name="bhod">
                                        </p>


                                        <p class="form-submit">
                                            <input type="submit" id="insertbranch" value="Submit" class="mu-post-btn" name="submit">
                                        </p>
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
<!--    <link rel="shortcut icon" href="Varsity/assets/img/favicon.ico" type="image/x-icon">-->
<!---->
<!--    <!-- Font awesome -->-->
<!--    <link href="Varsity/assets/css/font-awesome.css" rel="stylesheet">-->
<!--    <!-- Bootstrap -->-->
<!--    <link href="Varsity/assets/css/bootstrap.css" rel="stylesheet">-->
<!--    <!-- Slick slider -->-->
<!--    <link rel="stylesheet" type="text/css" href="Varsity/assets/css/slick.css">-->
<!--    <!-- Fancybox slider -->-->
<!---->
<!--    <!--<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />-->-->
<!---->
<!--    <!-- Theme color -->-->
<!--    <link id="switcher" href="Varsity/assets/css/theme-color/default-theme.css" rel="stylesheet">-->
<!---->
<!--    <!-- Main style sheet -->-->
<!--    <link href="Varsity/assets/css/style.css" rel="stylesheet">-->
<!---->
<!---->
<!--    <!-- Google Fonts -->-->
<!--    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
<!--    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>-->
<!---->
<!--    <script src="database/jquery-3.1.1.js"></script>-->
<!--    <script src="database/script.js"></script>-->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!---->
<!--<!-- Start contact  -->-->
<!--<section id="mu-contact">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="mu-contact-area">-->
<!--                    <!-- start title -->-->
<!--                    <div class="mu-title">-->
<!--                        <h2>Add Branch</h2>-->
<!--                    </div>-->
<!--                    <!-- end title -->-->
<!--                    <!-- start contact content -->-->
<!--                    <div class="mu-contact-content">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="mu-contact-left">-->
<!--                                    <form class="contactform">-->
<!--                                        <p class="comment-form-author">-->
<!--                                            <label for="author">Branch Name <span class="required">*</span></label>-->
<!--                                            <input type="text" id="bname" required="required" size="30" value="" name="author">-->
<!--                                        </p>-->
<!--                                        <p class="comment-form-author">-->
<!--                                            <label for="author">Branch Code <span class="required">*</span></label>-->
<!--                                            <input type="text" id="bcode" required="required" size="30" value="" name="author">-->
<!--                                        </p>-->
<!---->
<!---->
<!--                                        <p class="comment-form-author">-->
<!--                                            <label for="author">Branch HOD <span class="required">*</span></label>-->
<!--                                            <input type="text" id="bhod" required="required" size="30" value="" name="author">-->
<!--                                        </p>-->
<!---->
<!---->
<!--                                        <p class="form-submit">-->
<!--                                            <input type="submit" id="insertbranch" value="Submit" class="mu-post-btn" name="submit">-->
<!--                                        </p>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <div class="mu-contact-right">-->
<!--                                    <img src="img/reg1.jpg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></img>-->
<!--                                </div>-->
<!--                            </div>-->
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
<!---->
<!---->
<!---->
<!---->
<!--<!-- jQuery library -->-->
<!--<script src="Varsity/assets/js/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->-->
<!--<script src="Varsity/assets/js/bootstrap.js"></script>-->
<!--<!-- Slick slider -->-->
<!--<script type="text/javascript" src="Varsity/assets/js/slick.js"></script>-->
<!--<!-- Counter -->-->
<!--<script type="text/javascript" src="Varsity/assets/js/waypoints.js"></script>-->
<!--<script type="text/javascript" src="Varsity/assets/js/jquery.counterup.js"></script>-->
<!--<!-- Mixit slider -->-->
<!--<script type="text/javascript" src="Varsity/assets/js/jquery.mixitup.js"></script>-->
<!--<!-- Add fancyBox -->-->
<!--<script type="text/javascript" src="Varsity/assets/js/jquery.fancybox.pack.js"></script>-->
<!---->
<!--<!-- Custom js -->-->
<!--<script src="Varsity/assets/js/custom.js"></script>-->
<!---->
<!--</body>-->
<!--</html>-->