<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET['cancel']))
		  {
		          mysqli_query($con,"update appointment set userStatus='0' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Your appointment canceled !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Appointment History</title>
				
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<script src="https://cdn.directpay.lk/dev/v1/directpayCardPayment.js?v=1"></script>
	</head>
	<body style="background-color: purewhite;">
		<div id="app">		
  			<?php include('include/sidebar.php');?>
			<div class="app-content">

	            <!--nav bar starts-->
					<?php include('include/header.php');?>
				<!--nav bar ends-->
				
				<div class="main-content" style="background-color: purewhite;">
					<div class="wrap-content container" id="container" >
					
						<!--form starts-->
						<div class="container-fluid container-fullw bg-purewhite">
						
						<div class="panel-heading">
								<h1>Appointment History</h1>
						</div>
									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">ID</th>
												<th class="hidden-xs">Doctor Name</th>
												<th>Specialization</th>
												<th>Consultancy Fee</th>
												<th>Appointment Date / Time </th>
												<th>Appointment Created Date  </th>
												<th>Status</th>
												<th>Payment Status</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
												$sql=mysqli_query($con,"select  users.fullName as name,users.email as email,doctors.doctorName as docname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId join users on users.id=appointment.userId where appointment.userId='".$_SESSION['id']."'");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
												{
											?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['docname'];?></td>
												<td><?php echo $row['doctorSpecialization'];?></td>
												<td><?php echo $row['consultancyFees'];?></td>
												<td><?php echo $row['appointmentDate'];?> / 
												    <?php echo $row['appointmentTime'];?>
												</td>
												<td><?php echo $row['postingDate'];?></td>
												<td>
													<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
														{
															echo "Active";
														}
														if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
														{
															echo "Cancel by You";
														}
														if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
														{
														echo "Cancel by Doctor";
														}
													?>
												</td>
												<td>
													<?php if($row['payment_status']=="Not Paid")  
														{?>

													<form action="appointment-history.php" id="payForm<?php echo $row['id'];?>" method="post">
													<input type="hidden" id="description" value="<?php echo $row['id']."- ".$row['name']."(".$row['docname'].")";?>">
													<input type="hidden" id="amount" value="<?php echo $row['consultancyFees'];?>">
													<input type="hidden" id="email" value="<?php echo $row['email'];?>">
													<input type="hidden" id="id" value="<?php echo $row['id'];?>">
													<button type="button" onclick="payFee(<?php echo $row['id'];?>)" class="btn btn-primary" data-toggle="modal" data-target="#payModal" name="pay">
									                 Pay <i class="fa fa-arrow-circle-right"></i>
								                      </button>		
													  </form>	
													<?php	}else{
															echo "Paid";
														}
													?>
												</td>
												<td >
												<div class="visible-md visible-lg hidden-sm hidden-xs">
												<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)){ 
												?>
												
												<a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
												<?php } else 
													{
														echo "Canceled";
													}
												?>
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											
											<?php 
												$cnt=$cnt+1;}
											?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
						
						<!--form ends-->
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay your Consultancy Fee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div id="card_container"></div>
      </div>
    </div>
  </div>
</div>

<script>
	function payFee(id){

		var amountValue = document.forms["payForm"+id]["amount"].value;
		var email = document.forms["payForm"+id]["email"].value;
		var description = document.forms["payForm"+id]["description"].value;
		var payID = Math.floor(100000 + Math.random() * 900000);
             DirectPayCardPayment.init({
                    container: 'card_container', 
                    merchantId: 'HV15178', 
                    amount: amountValue,
                    refCode: "VH-0"+payID,
                    currency: 'LKR',
                    type: 'ONE_TIME_PAYMENT',
                    customerEmail: email,
                    customerMobile: '+94712345674',
                    description: description,  
                    debug: true,
                    responseCallback: responseCallback,
                    errorCallback: errorCallback,
                    logo: 'https://test.com/directpay_logo.png',
                    apiKey: 'da595fc076d8b1aefdb4f7f65c1f476898d52e032126211aeb96932cd1eba930'
                });

             function responseCallback(result) {
				var res = result["data"]["status"].replaceAll('"', '');
				if(res=="SUCCESS"){
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						location.reload(); 
					}
				};
				xhttp.open("GET", "updatepayment.php?id="+id, true);
				xhttp.send();
				}else{
					return false;
				}
				
                }

             function errorCallback(result) {
                    return false;
               }
	}
        </script>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script> 
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
