<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <title> Admin Panel </title>
    <!--favicon-->
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../assets/css/app-style.css" rel="stylesheet" />

    <!-- Favicon -->
    <link href="../assets/images/logo.png" rel="icon">

    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> 

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/../assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <!--Sweet Alerts सेंड आणि कॅन्सल बटन च्या इफेक्ट साथी या फिलेस use केल्या आहेत  -->
    <script src="sweetalert.min.js"></script>
    <script src="sweet-alert-script.js"></script>

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="home.php">
                    <img src="../assets/images/jalsuchna.png" class="m-3" alt="logo icon" height="40px" width="190px">
                    <!-- <h5 class="logo-text" style="letter-spacing: 0px;"> जलसूचना </h5> -->
                </a>
            </div>

            <!-- yahi Dashboard wala content dalna hai  -->
            <ul class="sidebar-menu do-nicescrol gradient-telegram">

                <li>
                </li>
                <li id="bar">
                    <a href="home.php" class="waves-effect">
                        <center><span><i class="icon-home"></i></span> </center>

                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect" id="menuItem1">
                        <i class="fa fa-table"></i>
                        <span>Valvemen List</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect" id="menuItem2">
                        <i class="icon-map"></i>
                        <span>User List</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect" id="menuItem3">
                        <i class="icon-calendar"></i> <span>Water Route</span>
                    </a>
                </li>

                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="fa fa-address-card-o"></i>
                        <span>My Profile</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#" id="menuItem4"> <i class="fa " ></i> View Profile</a></li>
                        <li><a href="#" id="menuItem5"> <i class="fa "></i> Update Profile </a></li>
                    </ul>

                </li>

                <li>
                    <a href="#" class="waves-effect" id="menuItem6">
                        <i class="icon-layers"></i>
                        <span>Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="waves-effect" id="menuItem7">
                        <i aria-hidden="true" class="fa fa-newspaper-o"></i>
                        <span>Blogs</span>
                    </a>
                </li>



            </ul>

            <!-- yaha tak -->
        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand gradient-winter" style=" background: #a1c4fd; ">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <img src="../assets/images/jalsuchna.png" height="50px" width="140px" style="margin-left:5px;"
                            alt="logo icon">
                    </li> 

                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="icon-envelope-open"></i><span class="badge badge-danger badge-up">24</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 24 new messages
                                    <span class="badge badge-danger">24</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="../assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Vaibhav</h6>
                                                <p class="msg-info">pipeline broken in ayodhya nagar</p>
                                                <small>Today, 4:10 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="../assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Vinit</h6>
                                                <p class="msg-info"> Can't supply water to shivaji nagar today.</p>
                                                <small>Yesterday, 8:30 AM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="../assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Durvankur</h6>
                                                <p class="msg-info">Opening valve of Dashrath nagar</p>
                                                <small>5/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="../assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Jayesh Wankhede</h6>
                                                <p class="msg-info">Closing Valve of shiv colony</p>
                                                <small>1/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="../assets/images/valvemen_img.jpeg" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="../assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                        <div class="media-body">
                                            
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>

                            <li class="dropdown-divider"></li>
                            <a href="view-profile.php">
                                <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            </a>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->




        <div class="clearfix"></div>
		<div id="content">
        <div class="content-wrapper">
            <div class="container-fluid">

                <!-- counter suggestion start -->

                <center>

                <div class="container-xxl py-6">
                        <div class="container">
                            <div class="row g-4">


                                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                                        <p class="mb-2">Total Users</p>
                                        <?php
                        include "join.php";
                        $view = mysqli_query($x,"SELECT COUNT(UserID) as Users FROM user_form;") or die (mysqli_error($x));
                        // $view = mysqli_query($x,"SELECT COUNT(ValvemenID) as Valvemen FROM val_form;") or die (mysqli_error($x));
                       
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);

                         
                         ?>
                                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $Users; ?></h1>
                                    </div>
                                </div>
                                <?php } ?>


                                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                                        <p class="mb-2">Total Valveman</p>
                                        <?php
                                            include "join.php";
                                            $view = mysqli_query($x,"SELECT * FROM val_form;") or die (mysqli_error($x));
                                            // $view = mysqli_query($x,"SELECT COUNT(ValvemenID) as Valvemen FROM val_form;") or die (mysqli_error($x));
                                        
                       
                         
                                        ?>
                                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo mysqli_num_rows($view); ?></h1>
                                    </div>
                                </div>
                                

                            </div>
                        </div>

                    </div>
                </center>
              
              <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1" data-toggle="modal"
                    data-target="#modal-animation-14" value="Add Valvemen"> <a href="add-valvemen.php"> For Add and Delete Valveman Click here</button> 

                <div class="modal fade" id="modal-animation-14">
                    
                        <div class="modal-content animated fadeInUp">
                            

                            
                            </div>


                        </div>
                  

                <!-- <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1">Delete Valvemen
                </button> -->
                
                <br>
                <br>

                <div class="modal fade" id="modal-animation-15">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content animated fadeInUp">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-star"></i>  Valveman Deleted Successfully</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                        </div>
                    </div>
                </div>



                <h4 style="color:rgb(41, 53, 214) ; font-family: tie;">Valvemen List </h4>
                <hr
                    style=" position: relative ; top: 10px; border: none; height:2px; background: rgb(41, 116, 214); margin-bottom: 50px;">

                

                <br>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                Information about Valvemens
                                <div class="card-action">
                                    <div class="dropdown">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead>
                                            <tr>
                                                <th>ValvemenID</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>ResidentialArea</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                        </thead>
                                        
    
                                        <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from val_form") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <td><?php echo $ValvemenID; ?></td>
                                <td><?php echo $Name; ?></td>
                                <td><?php echo $Mobile; ?></td>
                                <td><?php echo $ResidentialArea; ?></td>
                                <td><?php echo $Email; ?></td>
                                
                                <td>
                                    <a href="valvemen-update-query.php?val_id=<?php echo $ValvemenID;?>">UPDATE</a>
                                    <a href="valvemen-delete-query.php?val_id=<?php echo $ValvemenID;?>">DELETE</a>
                                </td>
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
		</div>
		</div>
        
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    
                </div>
            </div>
        </footer>
        <!--End footer-->


    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="../assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="../assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="../assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="../assets/js/app-script.js"></script>

    <!-- Vector map JavaScript -->
    <script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Chart js -->
    <script src="../assets/plugins/Chart.js/Chart.min.js"></script>
    <script src="../assets/plugins/Chart.js/Chart.extension.js"></script>
    <!-- Index js -->
    <script src="../assets/js/index.js"></script>


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<script>
  // Get references to menu items and content area
  const menuItem1 = document.getElementById('menuItem1');
  const menuItem2 = document.getElementById('menuItem2');
  const menuItem3 = document.getElementById('menuItem3');
  const menuItem4 = document.getElementById('menuItem4');
  const menuItem5 = document.getElementById('menuItem5');
  const menuItem6 = document.getElementById('menuItem6');
  const menuItem7 = document.getElementById('menuItem7');
  
  const content = document.getElementById('content');

  // Add event listeners to menu items
  menuItem1.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `<div class="content-wrapper">
            <div class="container-fluid">

                <!-- counter suggestion start -->

                <center>

                <div class="container-xxl py-6">
                        <div class="container">
                            <div class="row g-4">


                                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                                        <p class="mb-2">Total Users</p>
                                        <?php
                        include "join.php";
                        $view = mysqli_query($x,"SELECT COUNT(UserID) as Users FROM user_form;") or die (mysqli_error($x));
                        // $view = mysqli_query($x,"SELECT COUNT(ValvemenID) as Valvemen FROM val_form;") or die (mysqli_error($x));
                       
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);

                         
                         ?>
                                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $Users; ?></h1>
                                    </div>
                                </div>
                                <?php } ?>


                                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                                        <p class="mb-2">Total Valveman</p>
                                        <?php
                                            include "join.php";
                                            $view = mysqli_query($x,"SELECT * FROM val_form;") or die (mysqli_error($x));
                                            // $view = mysqli_query($x,"SELECT COUNT(ValvemenID) as Valvemen FROM val_form;") or die (mysqli_error($x));
                                        
                       
                         
                                        ?>
                                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo mysqli_num_rows($view); ?></h1>
                                    </div>
                                </div>
                                

                            </div>
                        </div>

                    </div>
                </center>
              
              <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1" data-toggle="modal"
                    data-target="#modal-animation-14" value="Add Valvemen"> <a href="add-valvemen.php"> For Add and Delete Valveman Click here</button> 

                <div class="modal fade" id="modal-animation-14">
                    
                        <div class="modal-content animated fadeInUp">
                            

                            
                            </div>


                        </div>
                  

                <!-- <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1">Delete Valvemen
                </button> -->
                
                <br>
                <br>

                <div class="modal fade" id="modal-animation-15">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content animated fadeInUp">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-star"></i>  Valveman Deleted Successfully</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                        </div>
                    </div>
                </div>



                <h4 style="color:rgb(41, 53, 214) ; font-family: tie;">Valvemen List </h4>
                <hr
                    style=" position: relative ; top: 10px; border: none; height:2px; background: rgb(41, 116, 214); margin-bottom: 50px;">

                

                <br>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                Information about Valvemens
                                <div class="card-action">
                                    <div class="dropdown">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead>
                                            <tr>
                                                <th>ValvemenID</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>ResidentialArea</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                        </thead>
                                        
    
                                        <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from val_form") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <td><?php echo $ValvemenID; ?></td>
                                <td><?php echo $Name; ?></td>
                                <td><?php echo $Mobile; ?></td>
                                <td><?php echo $ResidentialArea; ?></td>
                                <td><?php echo $Email; ?></td>
                                
                                <td>
                                    <a href="valvemen-update-query.php?val_id=<?php echo $ValvemenID;?>">UPDATE</a>
                                    <a href="valvemen-delete-query.php?val_id=<?php echo $ValvemenID;?>">DELETE</a>
                                </td>
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
		</div>`;
  });
  
  menuItem2.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `  <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <center>
                    <h1 style="font-family: 'Times New Roman', Times, serif ;color:rgb(41, 53, 214) ;">Users List </h1>
                </center>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-uppercase mt-3">Users Information... </h3>
                        <hr>

                        <div class="row">
                        <?php
					include "join.php";
					$view = mysqli_query($x,"SELECT * FROM `areas`") or die (mysqli_error($x));
					
					while($asd = mysqli_fetch_array($view))
					{
						extract($asd);
					
				?>
                            <div class="col-12 col-lg-6 col-xl-3">
                                <div class="pricing-table pricing-table-color">
                                    <div class="card gradient-scooter">
                                        <div class="card-body text-center">
                                            <div class="price-title text-white" style="font-size:25px">
                                            <?php echo $name; ?>
                                            </div>


                                            <a href="area-users.php?area=<?php echo $name; ?>"
                                                class="btn btn-link text-info bg-white my-3 btn-round">Users</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          <?php
                          }
                          ?>

                            

                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="text-uppercase mt-3" id="users"> </h5>
                <hr>

                

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


menuItem4.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = ` <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <div class="card ">
                    <div class="card-header border-1">
                        <center>
                            <img class="profile-user-img rounded img-fluid mx-auto d-block"
                                src="assets/images/user_img.png" alt="User profile picture" height="150px"
                                width="150px">
                        </center>
                    </div>


                    <div id="edit" style="margin-left:25px;margin-right:25px;">
                        <form>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Mark" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Jhonsan" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Mobile No.</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="+91 9637313272" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="mark@example.comd" disabled>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text"
                                        value="In front of Ashtbhuja Temple, Samarth Nagar, Jalgaon" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Area</label>
                                <div class="col-lg-4">
                                    <input class="form-control" type="text" value="Dadawadi" placeholder="Area"
                                        disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Vaibhav123" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <center>
                                        <input type="reset" class="btn btn-secondary" value="Cancel"
                                            style="font-size:15px" l">
                                        <a href="update-profile.php">
                                            <input type="button" class="btn btn-primary" value="Edit Profile"
                                                style="font-size:15px">
                                        </a>
                                    </center>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
`;
  });


menuItem5.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `    <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <center>
                    <h2 style="font-family: 'Times New Roman', Times, serif ;color:rgb(41, 53, 214) ;">Edit Profile Page
                    </h2>
                </center>
                <div class="card ">
                    <div class="card-header border-1">
                        <center>
                            <img class="profile-user-img rounded img-fluid mx-auto d-block"
                                src="assets/images/user_img.png" alt="User profile picture" height="150px"
                                width="150px">
                            <h4 style="margin-top:5px">Edit Information</h4>
                        </center>
                    </div>


                    <div id="edit" style="margin-left:25px;margin-right:25px;">
                        <form>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Mark">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Jhonsan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Mobile No.</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="+91 9637313272">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="mark@example.comd">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text"
                                        value="In front of Ashtbhuja Temple, Samarth Nagar, Jalgaon">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Area</label>
                                <div class="col-lg-7">
                                    <select style="font-size:16px">
                                        <option value=""> ---Select Your Area---</option>
                                        <option value=""> Bablu Member Galli </option>
                                        <option value=""> Dadawadi </option>
                                        <option value=""> Navi Peth</option>
                                        <option value=""> Baliram Peth </option>
                                        <option value=""> Jaykisan Wadi</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="Vaibhav123">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <center>
                                        <input type="reset" class="btn btn-secondary" value="Cancel"
                                            style="font-size:15px">
                                        <a href="User Edit Profile.php">
                                            <input type="button" class="btn btn-primary" style="font-size:15px"
                                                value="Save Changes">
                                        </a>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>`;
  });


menuItem6.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `  <div class="content-wrapper">

            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <Center>
                    <h1 style="font-family: 'Times New Roman', Times, serif ;color:rgb(41, 53, 214) ;">Feedback</h1>
                </Center>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                
                                <div class="card-action">
                                    <div class="dropdown">
                                        <!-- <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a> -->
                                        <!-- <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead>
                                            <tr>
                                                <!-- <th>FeedID</th> -->
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                                
                                        </thead>
                                        
    
                                        <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from feed_back") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <!-- <td> </td> -->
                                <td><?php echo $Category; ?></td>
                                <td><?php echo $Name; ?></td>
                                <td style="border: 1px  width: 200px; 
    word-wrap: break-word;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    white-space: normal;">
    <?php echo $Description; ?>
                                
                                
                                <td>
                                   
                                    <a href="user-feedback-delete-query.php?feed_id=<?php echo $FeedID;?>">Delete</a>
                                </td>
                            </tr>
                    </tbody>
                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>

    </div>`;
  });


menuItem7.addEventListener('click', function(event) {
    event.preventDefault(); 
    content.innerHTML = `<?php
	include 'join.php';
	if(isset($_POST["btn_submit"]))
	{
		extract($_POST);
		
		$insert = mysqli_query($x,"insert into news_admin(Blog) values('$ad_blog')") or die(mysqli_error($x));
		
		if($insert)
			{
				echo '<script type="text/javascript">';
	            echo "alert('Blog Send  successfully');";
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
<div class="content-wrapper">

            <div class="alert alert-outline-info alert-dismissible alert-round" role="alert">
                <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
                <div class="alert-icon">
                    <i class="icon-info"></i>
                </div>
                <div class="alert-message">
                    <span style="font-size: large;"><strong>जलसूचना!!!...</strong> Enter Blog to show user <a
                            href="javascript:void();" class="alert-link">
                        </a></span>
                </div>
            </div>
            <form action="" method="post">
            <textarea rows="15" class="form-control" id="basic-textarea" name="ad_blog" value="">  
                 </textarea>
                 <br>
            <center style="margin-bottom:150px;">

                <button type="" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                <button type="submit" name="btn_submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SEND</button>

            </center>

</form>

            
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>`;
  });


</script>


</body>

<!-- Mirrored from codervent.com/rocker/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:32 GMT -->

</html>