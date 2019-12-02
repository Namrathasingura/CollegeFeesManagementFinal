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
        #getfee{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
        #insertadmin{
            width: 75px;
            height: 30px;
            background-color: lightblue;
            border: 1px solid deepskyblue;
        }
    </style>
</head>
<?php
include("../php/headerapp.php");
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
                                Application form
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <!--  SHOW ENTRIES-->
                                    <!--                                    <div id="tSortable22_length" class="dataTables_length"><label>Show <select size="1" name="tSortable22_length" aria-controls="tSortable22"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>-->
                                    <!--      -->
                                    <!--                                    <div class="dataTables_filter" id="tSortable22_filter"><label><i class="fa fa-search"></i> <input type="text" aria-controls="tSortable22"></label></div>-->
                                    <form class="contactform" action="../database/insertadmin.php" method="post">

                                        <table class="table table-striped table-bordered table-hover" id="tSortable22"  style="width: 50px; ">
                                            <thead>
                                            <tr>
                                                <td><p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label> <br/>
                                                        <input type="text" id="name" required="required" size="30" value="" name="name">
                                                    </p>
                                                </td>


                                            </tr>
                                            <td> <p class="comment-form-author">
                                                    <label for="author">Password <span class="required">*</span></label>  <br/>
                                                    <input type="password" id="pass"  size="30" value="" name="pass">
                                                </p>
                                            </td>
                                            <tr>
                                                <td> <p class="comment-form-author">
                                                        <label for="author">Confirm Password <span class="required">*</span></label>   <br/>
                                                        <input type="password" id="cpass" required="required" size="30" value="" name="cpass">
                                                    </p>
                                                </td>

                                            </tr>
                                        <tr>

                                       <td>    <input type="submit" id="insertadmin"  value="Insert"  class="mu-post-btn   pull-right" name="submit">
                                       </td> </tr>  </thead>

                                        </table>



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