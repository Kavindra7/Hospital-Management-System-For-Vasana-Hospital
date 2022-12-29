<html>

<head>

<title>Campaign Details</title>

<!-- Bootstrap Core CSS -->
<link href="../kidney vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../kidney vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../kidney vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">


</head>


<body>
<div id="wrapper" style="background-color: #a5c422;">

<?php include 'includes/donornav.php'?>


<div id="page-wrapper" style="background-color: #ebf2ce;">
<div class="container-fluid" >
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Campaign Details</h1>
                </div>
  </div>  

				<div class="row" style="background-color: #ebf2ce;">
                        <div class=".col-lg-12">
                            <div class="panel panel-default" style="background-color: #ebf2ce;">
                             
								 <div class="panel-body" style="background-color: #ebf2ce;">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="background-color: #ebf2ce;">
									
									<?php

						include "dbconnect.php";

						$qry="select * from campaigndb";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
						<th>Campaign Name</th>
						<th>Organizer Name</th>
						<th>Phone Number</th>
						<th>Date of campaign</th>
						<th>Description</th>
					</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['cname']."</td>
						  <td>".$row['oname']."</td>
						  <td>".$row['phn']."</td>
						  <td>".$row['cdate']."</td>
						  <td>".$row['descp']."</td>

						</tr>
						</tbody>";
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

  <!-- jQuery -->
  <script src="../kidney vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../kidney vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../kidney vendor/metisMenu/metisMenu.min.js"></script>

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

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>
</html>