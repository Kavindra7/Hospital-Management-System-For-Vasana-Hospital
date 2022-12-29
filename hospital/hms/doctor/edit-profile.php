<?php
	session_start();
	error_reporting(0);
	include('include/config.php');
	include('include/checklogin.php');
	if(isset($_POST['submit']))
	{
		$docspecialization=$_POST['Doctorspecialization'];
	$docname=$_POST['docname'];
	$docaddress=$_POST['clinicaddress'];
	$docfees=$_POST['docfees'];
	$doccontactno=$_POST['doccontact'];
	$docemail=$_POST['docemail'];
	$sql=mysqli_query($con,"Update doctors set specilization='$docspecialization',doctorName='$docname',address='$docaddress',docFees='$docfees',contactno='$doccontactno' where id='".$_SESSION['id']."'");
	if($sql)
	{
	echo "<script>alert('Doctor Details updated Successfully');</script>";

	}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctr | Edit Doctor Details</title>
		
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



	</head>
	<body style="background-color: ghostwhite;">
		<div id="app">		
			<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!--form starts-->
						<div class="panel-heading" >
							<h1 style="padding-top: 20px;">Edit Details</h1>
						</div>
						
						<div class="container-fluid container-fullw bg-ghostwhite">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-ghostwhite">
												<div class="panel-body">
													<?php $sql=mysqli_query($con,"select * from doctors where docEmail='".$_SESSION['dlogin']."'");
														while($data=mysqli_fetch_array($sql))
														{
													?>

													<h4><?php echo htmlentities($data['doctorName']);?>'s Profile</h4>
													<p><b>Profile Reg. Date: </b><?php echo htmlentities($data['creationDate']);?></p>
													<?php if($data['updationDate']){?>
													<p><b>Profile Last Updation Date: </b><?php echo htmlentities($data['updationDate']);?></p>
													<?php } ?>
													<hr/>

													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="DoctorSpecialization"> Doctor Specialization </label>
															<select name="Doctorspecialization" class="form-control" required="required">
																<option value="<?php echo htmlentities($data['specilization']);?>">
																<?php echo htmlentities($data['specilization']);?></option>
																<?php $ret=mysqli_query($con,"select * from doctorspecilization");
																	while($row=mysqli_fetch_array($ret))
																	{
																?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>	
															</select>
														</div>

														<div class="form-group">
															<label for="doctorname"> Doctor Name </label>
															<input type="text" name="docname" class="form-control" value="<?php echo htmlentities($data['doctorName']);?>" >
														</div>

														<div class="form-group">	
															<label for="address"> Doctor Clinic Address </label>
															<textarea name="clinicaddress" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
														</div>
														
														<div class="form-group">
															<label for="fess"> Doctor Consultancy Fees </label>											
															<input type="text" name="docfees" class="form-control" required="required"  value="<?php echo htmlentities($data['docFees']);?>" >
														</div>
	
														<div class="form-group">
															<label for="fess">Doctor Contact No </label>
															<input type="text" name="doccontact" class="form-control" required="required"  pattern="07[1,2,5,6,7,8][0-9]{7}" maxlength="10" value="<?php echo htmlentities($data['contactno']);?>">
														</div>

														<div class="form-group">
															<label for="fess">Doctor Email</label>
															<input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docEmail']);?>">
														</div>
														<?php } ?>
														
														<button type="submit" name="submit" class="btn btn-o btn-primary" style="color: red; border-radius: 20px;"> Update </button>
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
			</div>
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
