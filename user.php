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
    <script>
        function showpopup() {
            $('.popup1').animate({top:'1%'},500);
        }
        function hidepopup() {
            $('.popup1').animate({top:'-500%'},500);
        }
    </script>
    <style>
        .popup1{
            position: fixed;
            top: -500%;
            width: 40%;
            margin-left: 30%;
            background-color: white;
            box-shadow: 2px 3px 8px slategrey;
            border-radius: 5px;
        }

        button{
            width: 30px;
            border: none;
            background-color: transparent;
        }
        .fa-eye{
            color: green;
        }
        .fa-edit{
            color: blue;
        }
        .fa-trash{
            color: red;
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



                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Contact Queries
                            </div>
                            <div class="panel-body">
                                <div class="table-sorting table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="tSortable22"  style="width: 50px; ">
                                        <thead>
                                        <tr>

                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                        <?php
                                        include 'database/connect.php';
                                        //                                        $sql="SELECT f.id,f.sem,f.fee,b.bcode,b.bname FROM tblfee f,tblbranch b where b.id=f.bid";
                                        $sql="SELECT  * FROM tblcontact ";
                                        $result=$conn->query($sql);
                                        if($result->num_rows>0)
                                        {
                                        while ($row = $result->fetch_assoc())
                                        {
                                        ?>
                                        <tr>

                                            <td ><input type="text" id="id"  value="<?php echo $row['id']; ?>"/></td>
                                            <td ><input type="text" id="name" value="<?php echo $row['name'] ?>"/></td>
                                            <td ><input type="text" id="email" value="<?php echo $row['email']; ?>"/></td>
                                            <td ><input type="text" id="dob" value="<?php echo $row['subject']; ?>"/></td>
                                            <td ><input type="text" id="uname" value="<?php echo $row['message']; ?>"/></td>

                                        </tr>

                                        </thead>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </table>
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
