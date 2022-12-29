<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../admindashboard.php');	
}

include "dbconnect.php";
$qry="SELECT bloodgroup, count(*) as number FROM blood GROUP BY bloodgroup";
$result= mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kidney Management System Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="../kidney vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../kidney vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../kidney vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../kidney vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

</head>

<body>

    <div id="wrapper" style="background-color: #a5c422;"> 

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper" style="background-color: #ebf2ce;">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-center" style="padding-bottom: 50px;">
                                    <div class="" style="padding-right: 60px; font-size: 24px;">Total Donors</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="viewdonor.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-center" style="padding-bottom: 50px;">     
                                    <div class="" style="padding-right: 60px; font-size: 24px;">Available Kidney</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewblood.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-right" style="padding-bottom: 82px; padding-right: 50px;">
                                    
                                    <div style="padding-right: 60px; font-size: 24px;">Announcement</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewannouncement.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-center" style="padding-bottom: 80px;">
                                    <div style="padding-right: 60px; font-size: 24px;">Add Donor</div>
                                </div>
                            </div>
                        </div>
                        <a href="adddonor.php">
                            <div class="panel-footer">
                                <span class="pull-left">Add</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
<!--
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-center" style="padding-bottom: 20px;">
                                    <div style="padding-right: 60px; font-size: 24px;">Delete Donars Details</div>
                                </div>
                            </div>
                        </div>
                        <a href="deleteview.php">
                            <div class="panel-footer">
                                <span class="pull-left">Delete Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-center" style="padding-bottom: 50px;">
                                    <div class="huge"> </div>
                                    <div style="padding-right: 60px; font-size: 24px;">Edit Donars Details</div>
                                </div>
                            </div>
                        </div>
                        <a href="editview.php">
                            <div class="panel-footer">
                                <span class="pull-left">Edit Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-center" style="padding-bottom: 50px;">
                                    <div class="huge"> </div>
                                    <div style="padding-right: 60px; font-size: 24px;">View Campaings</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewcampaign.php">
                            <div class="panel-footer">
                                <span class="pull-left">View</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 text-right" style="padding-bottom: 50px;">
                                    <div class="huge"> </div>
                                    <div  style="padding-right: 60px; font-size: 24px;">Add campaings</div>
                                </div>
                            </div>
                        </div>
                        <a href="newcampaign.php">
                            <div class="panel-footer">
                                <span class="pull-left">Add</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
    -->
                
            </div>
            <!-- /.row -->
            
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../Kidney vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Kidney vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../Kidney vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../Kidney vendor/raphael/raphael.min.js"></script>
    <script src="../Kidney vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}


	</style>



</html>
