
<?php session_start(); ?>
<?php include('../dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Kidney Management System Admin Login</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- MetisMenu CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <link rel="stylesheet" href="/bloodbank se/icofont/icofont.min.css">

        <!-- Custom Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
	

        <div class="container" style="padding-top: 150px;">
		 <form action="#" method="post">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>User Login</center></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
										<input type="text" name="username" class="form-control input_user" value="" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
										<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-info btn-block" style="border-radius: 10px;" title="Log In" name="login" value="Login"></input>
                                    <div class="checkbox">
                                        <label>
                                          
                                            <a href="../index kidney.php" style="padding-left: 130px;">Back</a>
                                        </label>
                                    </div>
                                </fieldset>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
			</form>
			
			<?php
					if (isset($_POST['login']))
						{
							$username = mysqli_real_escape_string($con, $_POST['username']);
							$password = mysqli_real_escape_string($con, $_POST['password']);
							
							$query 		= mysqli_query($con, "SELECT * FROM donor WHERE  password='$password' and username='$username'");
							$row		= mysqli_fetch_array($query);
							$num_row 	= mysqli_num_rows($query);
							
							if ($num_row > 0) 
								{			
									$_SESSION['user_id']=$row['user_id'];
									header('location:userdashboard.php');
									
								}
							else
								{
									echo '
												<div class="alert alert-danger alert-dismissible">
														Invalid Username & Password.
												</div> ';
								}
						}
				?>
			
        </div>

        

        <!-- jQuery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

        <!-- Bootstrap Core JavaScript -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.5.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Metis Menu Plugin JavaScript -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js">

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
		
		

    </body>

    <!-- Footer -->
	<footer class="page-footer font-small special-color-dark pt-4">
		

	</footer>
<!-- Footer -->
    
</html>
  
  
