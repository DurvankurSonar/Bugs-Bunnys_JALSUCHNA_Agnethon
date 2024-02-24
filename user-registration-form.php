<?php
	include 'join.php';
	if(isset($_POST["btn_submit"]))
	{
		extract($_POST);
		
		$insert = mysqli_query($x,"insert into user_form(Name,Email,Mobile,ResidentialArea,Password,ConfirmPassword) values('$u_name','$u_mail','$u_mob','$u_res',
     '$u_pass','$u_cpass')") or die(mysqli_error($x));
		
		if($insert)
			{
				echo '<script type="text/javascript">';
	            echo "alert('Registered Successfully');";
	            echo "</script>"; 
			}
		else
		{
			echo '<script type="text/javascript">';
	            echo "alert('Data not inserted successfully');";
	            echo "</script>"; 
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:35:26 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Sign Up</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>
 
<body>
 <!-- Start wrapper-->
 <table>
	<tr >
	
		<td >
			
			 <div id="wrapper"style="margin-left:100px;">
			 <div class="height-200v d-flex align-items-center justify-content-center">
				<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
					<div class="card-body">
					 <div class="card-content p-2">
						<div class="text-center">
							<img src="assets/images/logo-icon.png" height="100px" width="100px">
						</div>
					  <div class="card-title text-uppercase text-center py-3">User Registration</div>
						<form action="" method="post">
						  <div class="form-group">
							
							  <div class="position-relative has-icon-right">
								<label for="input-1" class="col-sm-3 col-form-label">Name</label>
								<input type="text" name="u_name" id="exampleInputName" class="form-control form-control-rounded" placeholder="Enter your Name"  required="">
							  <div class="form-control-position">
								  <i class="icon-user"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
							
						   <div class="position-relative has-icon-right">
							<label for="input-1" class="col-sm-6 col-form-label">Email</label>
							  
							  <input type="email" name="u_mail" id="exampleInputEmailId" class="form-control form-control-rounded" placeholder="Enter your Email ID"  required="">
							  <div class="form-control-position">
								  <i class="icon-envelope-open"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
							
							<div class="position-relative has-icon-right">
							 <label for="input-1" class="col-sm-6 col-form-label">Mobile</label>
							   
							   <input type="number" name="u_mob" id="exampleInputEmailId" class="form-control form-control-rounded" placeholder="Enter your Mobile Number"  required="">
							   <div class="form-control-position">
								   <i class="ti-mobile"></i>
							   </div>
							</div>
						   </div>
						   <div class="form-group">
							
							<div class="position-relative has-icon-right">
							 <label for="input-1" class="col-sm-6 col-form-label">Residential Area</label>
							 <div class="col-sm-10">
								<small class="text-muted">Choose Your Residental Area</small>
								<br>
								<select name="u_res" class="form-control" id="basic-select" required="">
									<option>
										--select--
									</option>

                                            <?php
                                                    include "join.php";
                                                    $view = mysqli_query($x,"SELECT * FROM `areas`") or die (mysqli_error($x));
                                                    
                                                    while($asd = mysqli_fetch_array($view))
                                                    {
                                                        extract($asd);
                                                    
                                                ?>                
                                                    <option>
                                                        <?php echo $name;?>
                                                    </option>
                                    
                                            <?php
                                                }
                                            ?>

                                    </select>							</div>
								
							</div>
						   </div>
						   <!-- <div class="form-group">
							
							<div class="position-relative has-icon-right">
							 <label for="input-1" class="col-sm-6 col-form-label">SubArea</label>
							 <div class="col-sm-10">
								<small class="text-muted">Choose Your Sub Area</small>
								<br>
								<select class="form-control" name="u_sub" id="basic-select"  required="">
									<option>
										--SELECT--
									</option>
									<option>
									   Kalika Devi Mandir
									</option>
									<option>
									   DSP chowk
									</option>
									<option>
									   MJ college
									</option>
									<option>
									   Bhushan Colony
									</option>
									<option>
									   Ganesh Colony
									</option>
								</select>
							</div>
						
							</div>
						   </div> -->
						  <div class="form-group">
						   <div class="position-relative has-icon-right">
							  <label for="input-1" class="col-sm-6 col-form-label">Password</label>
							  <input type="password" name="u_pass" id="exampleInputPassword" class="form-control form-control-rounded" placeholder="Enter your Password"  required="">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-right">
							<label for="input-1" class="col-sm-10 col-form-label">Confirm Password</label>
							  <input type="password" name="u_cpass"  id="exampleInputRetryPassword" class="form-control form-control-rounded" placeholder="Confirm Password"  required="">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						 <a href="user-login.php"> <button type="submit" name="btn_submit" value="Register" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light"> Register </button> </a>
						  <div class="text-center pt-3">
							<p class="text-muted mb-0">Do you have an account? <a href="user-login.php"> Login </a>here</p>
						  </div>
						 </form>
					   </div>
					  </div>
					 </div>
					 </div>
				
		</td>
		
		<td>
		
			<h2 style="text-align:center; font-family:'Times New Roman';"> Find Your Area </h2>
			<br>
			
			<iframe style="margin-left:100px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59601.0203020587!2d75.54040366474786!3d20.990080770822317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90fa4a1eab90f%3A0x37f67bd21bff0a3c!2sJalgaon%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1679980541178!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			
		
		
		
		
		
		
		</td>
		
		
		
		
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
</body>

<!-- Mirrored from codervent.com/rocker/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:35:26 GMT -->
</html>
