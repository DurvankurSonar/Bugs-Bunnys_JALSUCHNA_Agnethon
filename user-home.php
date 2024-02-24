<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> user-home</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
	
	
	
	
	<!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Chart js -->
    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <script src="assets/plugins/Chart.js/Chart.extension.js"></script>
    <!-- Index js -->
    <script src="assets/js/index.js"></script>


</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            
                <a href="user-home.php">
                    <a href="user-home.php"> <img src="assets/images/logowithname.png" class="m-3" height="50px" width="190px" style="margin-left:5px;" alt="logo icon"> </a>
					
          
            <ul class="sidebar-menu do-nicescrol gradient-telegram" >
			
				<li>
					<li>
							<a href="user-home.php" class="waves-effect">
								<center><span><i class="icon-home"></i></span></center>
							</a>
					</li>
					
					<li>
						<a href="#" class="waves-effect" id="menuItem1">
							<i class="fa fa-table"></i>
							<span>TimeTable</span>
						</a>

					</li>
					
					<li>
						<a href="#" class="waves-effect" id="menuItem6">
							<i class="fa fa-list"></i>
							<span>Notifications</span>
						</a>

					</li>
					

					<li>
						<a href="#" class="waves-effect" id="menuItem2">
							<i class="icon-map"></i>
							<span>Water Route</span>
						</a>
					</li>

					

					<li>
						<a href="javaScript:void();" class="waves-effect" >
							<i class="fa fa-address-card-o "></i>
							<span>My Profile</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sidebar-submenu">
							<li><a href="#" id="menuItem3"> <i class="fa "></i> View Profile</a></li>
							<li><a href="#" id="menuItem4"> <i class="fa "></i> Update Profile </a></li>
						</ul>		
					</li>

					<li>
						<a href="#" class="waves-effect" id="menuItem5">
							<i class="icon-layers"></i>
							<span>Feedback</span>
						</a>
					</li>
				</li>
				
            </ul>
	

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand gradient-winter">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    
					<li class="nav-item">
						
					</li>

                </ul>
				
				
				

                <ul class="navbar-nav align-items-center right-nav-link">
				<li class="nav-item dropdown-lg">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                    href="javascript:void();">
                    <i class="icon-bell"></i><span class="badge badge-primary badge-up">2</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            You have 2 user-notification
                            <span class="badge badge-primary">2</span>
                        </li>
                         
                        <li class="list-group-item"><a href="user-notification.php">See All notifications</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" href="user-view-profile.php" >
                    <span class="user-profile"><i class="icon-user icons" alt="user avatar"></i></span>
                </a>
            </li>
			
        </ul>
		
    </nav>
	
</header>
        <!--End topbar header-->

        <div class="clearfix"></div>
		<div id="content">
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-1">
                                <center><b> <div style="font-size:25px;font-family:algerian;margin-top:7px;margin-bottom:7px;">Water Timetable</div> </b> </center>  
                            </div>
							
							
                            <div class="table-responsive">
                                <table class="table align-items-center  table table-striped shadow-info table-bordered" >
                                    <thead >
                                        <tr >
                                            <th style="font-size:14px"><center>Day</center></th>
                                            <th style="font-size:14px"><center>Date</center></th>
                                            <th style="font-size:14px"><center>Time<center></th>    
                                        </tr>
                                    </thead>
                                    <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from time_table") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <td><center><?php echo $Day; ?></center></td>
                            <td><center><?php echo $Date; ?></center></td>
                            <td><center><?php echo $Time; ?></center></td>
                               
                                
                                
                            </tr>
                    </tbody>
                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
		</div>
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div>
				<center>
                   <img src="assets/images/water-drop-animation.gif" class="logo-icon" alt="logo icon" height="50px" width="50px">
                   <img src="assets/images/water-drop-animation.gif" class="logo-icon" alt="logo icon" height="50px" width="50px">
                   <img src="assets/images/water-drop-animation.gif" class="logo-icon" alt="logo icon" height="50px" width="50px">
				</center>
				   
                </div>
				
				<center><h5 >SAVE WATER</h5></center>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->


<script>
  // Get references to menu items and content area
  const menuItem1 = document.getElementById('menuItem1');
  const menuItem2 = document.getElementById('menuItem2');
  const menuItem3 = document.getElementById('menuItem3');
  const menuItem4 = document.getElementById('menuItem4');
  const menuItem5 = document.getElementById('menuItem5');

  const content = document.getElementById('content');

  // Add event listeners to menu items
  menuItem1.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `<div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-1">
                                <center><b> <div style="font-size:25px;font-family:algerian;margin-top:7px;margin-bottom:7px;">Water Timetable</div> </b> </center>  
                            </div>
							
							
                            <div class="table-responsive">
                                <table class="table align-items-center  table table-striped shadow-info table-bordered" >
                                    <thead >
                                        <tr >
                                            <th style="font-size:14px"><center>Day</center></th>
                                            <th style="font-size:14px"><center>Date</center></th>
                                            <th style="font-size:14px"><center>Time<center></th>    
                                        </tr>
                                    </thead>
                                    <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from time_table") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <td><center><?php echo $Day; ?></center></td>
                            <td><center><?php echo $Date; ?></center></td>
                            <td><center><?php echo $Time; ?></center></td>
                               
                                
                                
                            </tr>
                    </tbody>
                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>`;
  });
  
  menuItem6.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `  <div class="content-wrapper">
            <div class="container-fluid">

				
				<h3 class="mt-3 mb-4" style="font-family:algerian;"><center> Notifications </center></h3>



                <div class="row">
                    <div class="col-lg-12">				
						 <form class="search-bar">
							<input type="text" class="form-control" placeholder="Search Notifications" style="margin-left:-20px;" >
							<!-- <a href="javascript:void();"><i class="icon-magnifier"></i></a> -->	
						</form>
							
                        <div class="card mt-3">	
							
                            <div class="table-responsive">
                                <table class="table align-items-center  table table-striped shadow-info table-bordered" >
                                    <thead >
                                        <tr>
                                            <th style="font-size:14px"><center>Description</center></th>
                                            <th style="font-size:14px"><center>Date</center></th>
                                            <th style="font-size:14px"><center>Time<c/enter></th>    
                                        </tr>
                                    </thead>

                                    <tr >
                                        <td> Water will be delivered to your house within next 30 minutes</td>
                                            <td><center>31-03-2023 </center></td>
                                            <td><center> 9.31 am </center></td>
                                       
                                    </tr>


                                    <tr >
                                        <td> Water will be delivered to your house within next 30 minutes</td>
                                            <td><center>28-03-2023 </center></td>
                                            <td><center> 9.31 am </center></td>
                                       
                                    </tr>

                                    <tr>
                                        <td>Water will be delivered to your house within next 30 minutes</td>                                       
                                        <center>
											<td><center>25-03-2023 </center></td>
											<td><center>9.30 am </center></td>
                                        </center>
                                       
                                    </tr>

                                    <tr>
                                        <td>Water will be delivered to your house within next 30 minutes </td>
										<center>
											<td><center>22-03-2023 </center></td>
											<td><center>9.28 am</center></td>
                                        </center>
                                    </tr>

                                    <tr>
                                        <td>Water will be delivered to your house within next 30 minutes</td>                                       
                                        <center>
											<td><center>19-03-2023 </center></td>
											<td><center>9.30 am </center></td>
                                        </center>
                                        
                                    </tr>
									
                                    <tr>
                                        <td>Water will be delivered to your house within next 30 minutes </td>
										<center>
											<td><center>16-03-2023 </center></td>
											<td><center>9.33 am </center></td>
                                        </center>                                       
                                    </tr>
									
                                    
									
									 <tr>
                                        <td>Water will be delivered to your house within next 30 minutes.</td>
										<center>
											<td><center>06-03-2023 </center></td>
											<td><center>9.28 am </center></td>
                                        </center>   
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>`;
  });


menuItem2.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `<div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <center>
                    <h1 style="font-family: 'Times New Roman', Times, serif ;color:rgb(41, 53, 214) ;">Water Route </h1>
                </center>
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="text-uppercase mt-3">Water Pipelines map of Jalgaon City.</h6>
                        <hr>
                        <div class="card mt-3">

                            <div class="container" style="padding:30px;">
									<embed src="assets/images/water-map.pdf" type="application/pdf" width="100%" height="800px"/>
							</div>
                        </div>
                    </div>
                </div>

                <!--End Dashboard Content-->
                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>`;
  });

menuItem3.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `<div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="card " >
                    <div class="card-header border-1">
                        <center>
                            <img class="profile-user-img rounded img-fluid mx-auto d-block"
                            src="assets/images/user_img.png" 
                            alt="User profile picture" height="150px" width="150px">
                        </center>
                    </div>
    
    
                    <div id="edit" style="margin-left:25px;margin-right:25px;">
                        <form>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label" ><b>First name</b></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Parag"disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><b>Last name</b></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Chopade"disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><b>Mobile No.</b></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="+91 7789879878" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><b>Email</b></label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="parag@gmail.com" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><b>Area</b></label>
                                <div class="col-lg-4">
                                    <input class="form-control" type="text" value="Dadawadi" placeholder="Area"disabled>
                                </div>		
                            </div>
                           
                    </div>	
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <center> 
                                        <input type="reset" class="btn btn-secondary" value="Cancel" style="font-size:14px">
                                        <a href="update-profile.php">
                                            <input type="button" class="btn btn-primary" value="Update Profile" style="font-size:14px">
                                        </a>
                                    </center>
                                </div>
                            </div>
                            
                        </form>
                        
                    </div>

                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>`;
  });
  
   menuItem4.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = ` <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                	
			<div class="card " >
                <div class="card-header border-1">
					<center>
						<img class="profile-user-img rounded img-fluid mx-auto d-block"
						src="assets/images/user_img.png" 
						alt="User profile picture" height="150px" width="150px">
						<h4 style="margin-top:5px">Edit Information</h4>
					</center>
				</div>


				<div id="edit" style="margin-left:25px;margin-right:25px;">
					<form>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label" ><b>First name</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Parag">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Last name</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Chopade">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Mobile No.</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="+91 7789879878" >
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Email</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="email" value="parag@gmail.com" >
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Area</b></label>
							<div class="col-lg-7">
								<select style="font-size:16px">
									<option value=""> ---Select Your Area---</option>
									<option value=""> MJ College </option>
									<option value=""> Kanchan Nagar </option>
									<option value=""> Navi Peth</option>
									<option value=""> Baliram Peth </option>
									<option value=""> Mehrun</option>
									
								</select>
							</div>		
						</div>
					   
						<div class="form-group row">
                            <label class="col-lg-2 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
								<center> 
									<input type="reset" class="btn btn-secondary" value="Cancel" style="font-size:14px">
									<button type="button" class="btn btn-primary waves-effect waves-light" id="confirm-btn-alert" style="font-size:14px">Save Changes</button>
								
									
								</center>
							</div>
						</div>
						
					</form>
				</div>
			</div>

                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>`;
  });

menuItem5.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `<div class="content-wrapper">
		
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <Center>
                    <h1 style="font-family: 'Times New Roman', Times, serif ;color:rgb(41, 53, 214) ;">Feedback</h1>
                </Center>
                <hr>
				
				<div class="card " >
				
                    <form action="" method="post" >
                        <div class="form-group row mt-3" style="margin-left:5%;" >
                            <label class="col-lg-3 col-form-label form-control-label"><b>Category</b></label>
                            <div class="col-lg-7" >
                                
                                    <select style="font-size:16px" name="feed">
                                        <option value=""> ---Select Feedback---</option>
                                        <option value="Water Cleanliness"> Water Cleanliness </option>
                                        <option value="Water Delay"> Water Delay </option>
                                        <option value="Bad Quality"> Bad Quality</option>
                                        <option value="Regular Problems"> Regular Problems </option>
                                        <option value="Water Service"> Water Service</option>
                                    </select>
                                    <br>
    
                            </div>		
                        </div>
                        
                        <div class="form-group row mt-3" style="margin-left:5%;">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Name</b></label>
                            <div class="col-lg-7" >
                                
                                
                                    <input type="text" name="us_name" placeholder=" Enter Your Name " required=""> </input>
                                    
                                
                            </div>		
                        </div>
                        
                        
                        <div class="form-group row mt-3" style="margin-left:5%;">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Description</b></label>
                            <div class="col-lg-7" >
                                
                                
                                    <textarea rows="4" class="form-control" name="desc" id="basic-textarea" placeholder="Please, Describe Your Feedback..." > </textarea>
                                    
                                
                            </div>		
                        </div>
                        
                        <center  style="margin-bottom:150px;">
                            
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                            <button type="submit" name="btn_submit" class="btn btn-success" ><i class="fa fa-check-square-o"></i> SEND</button>						
                            
                            <!-- <button type="button" class="btn btn-primary btn-round waves-effect waves-light m-1">Submit</button> -->
    
                            
                            
                        </center>
                        </form>
						
						 <?php
	include 'join.php';
	if(isset($_POST["btn_submit"]))
	{
		extract($_POST);
		
		$insert = mysqli_query($x,"insert into feed_back(Category,Name,Description) values('$feed','$us_name','$desc')") or die(mysqli_error($x));
		
		if($insert)
			{
				echo '<script type="text/javascript">';
	            echo "alert('Feddback sent successfully');";
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
                        
                    </div>
						
					</center>
					
				</div>
				
			</div>`;
  });

</script>


    
</body>

<!-- Mirrored from codervent.com/rocker/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:32 GMT -->

</html>