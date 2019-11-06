
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Fees Payment System</title>

    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<?php
include("php/header.php");
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row" >
            <div class="col-md-12">
                <h2 class="page-header" ><strong>SETTING</strong>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="panel panel-primary" style="background-color: lightblue">
                        <div class="panel-heading" style="background: linear-gradient(to right,darkblue,black)">
                            Change Password
                        </div>
                        <form action="setting.php" method="post" id="signupForm1" class="form-horizontal">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Old">Old Password</label>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control" id="oldpassword" name="oldpassword"  />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Password"> New Password</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" name="newpassword" id="newpassword" type="password">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Confirm">Confirm Password</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" name="confirmpassword" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-4" >
                                        <button type="submit" name="save" class="btn btn-primary" style="background: linear-gradient(darkblue,black); width:150px;">Save </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>