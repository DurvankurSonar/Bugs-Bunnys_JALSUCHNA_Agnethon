

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:35:26 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Sign Up</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>
	<!-- Start wrapper-->
	<div id="wrapper">
		<div class="height-200v d-flex align-items-center justify-content-center">
			<div
				class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
				<div class="card-body">
					<div class="card-content p-2">
						<div class="text-center">
							<img src="assets/images/logo.png" height="100px" width="100px">
						</div>
						<div class="card-title text-uppercase text-center py-3">Valvemen Updation</div>

                        <?php
   include 'join.php';
   if(isset($_GET['val_id']))
   {

   	$view=mysqli_query($x,"select * from val_form where ValvemenID='".$_GET['val_id']."'") or die(mysqli_error($x));
	 	$fetch=mysqli_fetch_array($view);
	 	extract($fetch);
   }
   ?>

						<form action="" method="post" >

						<!-- Valvemen ID -->

							<div class="form-group">

								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label"> ValvemenID </label>

									<input type="number" name="valve_id" id="exampleInputEmailId"
										class="form-control form-control-rounded" placeholder="Enter Valvemen ID " value="<?php echo $ValvemenID;?>">
									<div class="form-control-position">

									</div>
								</div>
							</div> 
							
							<div class="form-group">

								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-3 col-form-label">Name</label>
									<input type="text"  name="val_name" id="exampleInputName" class="form-control form-control-rounded"
										placeholder="Enter your Name" value="<?php echo $Name;?>">
									<div class="form-control-position">
										<i class="icon-user"></i>
									</div>
								</div>
							</div>
						<!--	<div class="form-group">

								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label">Email</label>

									<input type="email" name="val_mail" id="exampleInputEmailId"
										class="form-control form-control-rounded" placeholder="Enter your Email ID">
									<div class="form-control-position">
										<i class="icon-envelope-open"></i>
									</div>
								</div>
							</div> -->
							<div class="form-group">

								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label">Mobile</label>

									<input type="number" name="val_mob" id="exampleInputEmailId"
										class="form-control form-control-rounded"
										placeholder="Enter your Mobile Number" value="<?php echo $Mobile;?>">
									<div class="form-control-position">
										<i class="ti-mobile"></i>
									</div>
								</div>
							</div>

							

							<div class="form-group">

								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label">ResidentialArea</label>
									<div class="col-sm-10">
										
										<br>
										<select name="val_res" class="form-control" id="basic-select" >
											
											<option  <?php if($ResidentialArea=='Baliram Peth') { echo "selected";} ?>>
												Baliram Peth
											</option>
											<option <?php if($ResidentialArea=='Kanchan Nagar') { echo "selected";} ?>>
												Kanchan Nagar
											</option>
											<option <?php if($ResidentialArea=='ShaniPeth') { echo "selected";} ?>>
												ShaniPeth
											</option>
											<option <?php if($ResidentialArea=='Shivaji Nagar') { echo "selected";} ?>>
												Shivaji Nagar
											</option>
											<option <?php if($ResidentialArea==' NaviPeth') { echo "selected";} ?>>
												NaviPeth
											</option>
										</select>
									</div>

								</div>
							</div>
							<div class="form-group">

								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label">SubArea</label>
									<div class="col-sm-10">
										
										<br>
										<select name ="val_sub" class="form-control" id="basic-select">
											
											<option <?php if($SubArea=='Baliram Peth') { echo "selected";} ?>>
												change options dynamically as per main area
											</option>
											<option <?php if($SubArea=='SubArea') { echo "selected";} ?>>
												SubArea
											</option>
											<option <?php if($SubArea=='SubArea') { echo "selected";} ?>>
												SubArea
											</option>
											<option <?php if($SubArea=='SubArea') { echo "selected";} ?>>
												SubArea
											</option>
											<option <?php if($SubArea=='SubArea') { echo "selected";} ?>>
												SubArea
											</option>
										</select>
									</div>

								</div>
							</div>
							<!--<div class="form-group">
								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label">Password</label>
									<input type="password" name="val_pass" id="exampleInputPassword"
										class="form-control form-control-rounded" placeholder="Enter your Password">
									<div class="form-control-position">
										<i class="icon-lock"></i>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="position-relative has-icon-right">
									<label for="input-1" class="col-sm-6 col-form-label">Confirm Password</label>
									<input type="password" name="val_cpass" id="exampleInputRetryPassword"
										class="form-control form-control-rounded" placeholder="Confirm Password">
									<div class="form-control-position">
										<i class="icon-lock"></i>
									</div>
								</div>
							</div> -->
							<button type="submit" name="update"
								class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">update</button>

                                <button type="reset" name="reset"
								class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">reset</button>
							
							</div>
						</form>

                        <?php 
		if(isset($_POST['update']))
		{
			extract($_POST);
			
			$update=mysqli_query($x,"update val_form set
			    ValvemenID='".$valve_id."',
				Name='".$val_name."',
				Mobile='".$val_mob."',
				ResidentialArea='".$val_res."',
				SubArea='".$val_sub."'
				where ValvemenID='".$_GET['val_id']."'") or die(mysqli_error($x));
			if($update)
			{
	            echo '<script type="text/javascript">';
	            echo "alert('Record  Updated');";
	            echo 'window.location.href = "home.php";';
	            echo "</script>";
     	}
			else
			{
	            echo '<script type="text/javascript">';
	            echo "alert('record Not Update');";
	            echo "</script>";             
      }

		}
	?>
					</div>
				</div>
			</div>
		</div>

		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->
	</div>
	<!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from codervent.com/rocker/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:35:26 GMT -->

</html>