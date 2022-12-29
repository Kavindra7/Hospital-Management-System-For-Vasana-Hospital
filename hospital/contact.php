<?php
include_once('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	</head>
	<body style="background-image: url(images/top-view-chat-bubbles-with-telephone-receiver-copy-space.jpg); background-repeat: no-repeat; background-size: cover; padding-top: 110px;"> 
		<!--start wrap-->
		
			<!--start header-->
			<div>
				<div class="wrap">
				<!--start logo-->
				<div style="background-color:transparent">
		        <!--<a href="index.html" style="font-size: 30px; text-align: center;">Nirogya Hospitals</a> -->
				</div>
				<!--end logo-->
				
			</div>
			<!--end header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap" style="background-color: transparent;">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">


				<!--address part starts-->
      			<div class="address" style="color: brown; font-size: 20px;" >
				     	<h2>Hospital Address  :</h2>
						    	<p>Mathugama Road,</p>
						   		<p>Bulathsinhala,</p>
						   		<p>Srilanka</p>
				   		<p>Phone:+711587157</p>
				 	 	<p>Email: <span>VasanaHospitals@gmail.com</span></p><br>
						  <h3>Follow us</h3>
						  <a href="#"> <i class="fab fa-facebook-f"></i></a>
						  <a href="#"> <i class="fab fa-twitter"></i></a>
						  <a href="#"> <i class="fab fa-instagram"></i></a>
						  <a href="#"> <i class="fab fa-linkedin"></i></a>
						  <a href="#"> <i class="fab fa-pinterest"></i></a>
				   </div>
				</div>	
				
				<!--end address part-->

				<!--contact form starts-->
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>	
				  
				<!--end contact form -->
			  </div>
			  	 <div class="clear"> </div>
	</div>
	
		<!--end wrap-->
	</body>
</html>

