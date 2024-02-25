<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/admin_ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:05 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> GP Admin Panel </title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logo-icon.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="home.php">
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text" style="letter-spacing: 0px;"> जलसूचना </h5>
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
                    <a href="home.php" class="waves-effect">
                        <i class="fa fa-table"></i>
                        <span>Valvemen List</span>
                    </a>
                </li>

                <li>
                    <a href="users-list.php" class="waves-effect">
                        <i class="icon-map"></i>
                        <span>User List</span>
                    </a>
                </li>

                <li>
                    <a href="water-route.php" class="waves-effect">
                        <i class="icon-calendar"></i> <span>Water Route</span>
                    </a>
                </li>

                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="fa fa-address-card-o"></i>
                        <span><b>My Profile</b></span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="view-profile.php"> <i class="fa "></i> View Profile</a></li>
                        <li><a href="update-profile.php"> <i class="fa "></i> Update Profile </a></li>
                    </ul>

                </li>

                <li>
                    <a href="user-feedback.php" class="waves-effect">
                        <i class="icon-layers"></i>
                        <span>Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="news.php" class="waves-effect">
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
            <nav class="navbar navbar-expand" style=" background: #a1c4fd; ">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
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
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
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
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
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
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
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
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
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
                    <!-- <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 10 Notifications
                                    <span class="badge badge-primary">10</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="icon-people fa-2x mr-3 text-info"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Registered Users</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="icon-cup fa-2x mr-3 text-warning"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Received Orders</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="icon-bell fa-2x mr-3 text-danger"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Updates</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" >
                            <span class="user-profile"><img src="assets/images/valvemen_img.jpeg" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Jay wan</h6>
                                            <p class="user-subtitle">jayu@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>

                            <li class="dropdown-divider"></li>
                            <a href="view profile.php">
                                <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            </a>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="Lapjal/HOME.php"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->




        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <!--End Row-->
                <!--End Row-->
                

                <div class="modal fade" id="modal-animation-14">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content animated fadeInUp">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-star"></i> Adding Valveman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div>
                                <form>
                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">
                                            <label for="input-1" class="col-sm-3 col-form-label">Name</label>
                                            <input type="text" id="exampleInputName"
                                                class="form-control form-control-rounded" placeholder="Enter your Name">
                                            <div class="form-control-position">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">
                                            <label for="input-1" class="col-sm-6 col-form-label">Email ID</label>

                                            <input type="email" id="exampleInputEmailId"
                                                class="form-control form-control-rounded"
                                                placeholder="Enter your Email ID">
                                            <div class="form-control-position">
                                                <i class="icon-envelope-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">
                                            <label for="input-1" class="col-sm-6 col-form-label">Mobile No.</label>

                                            <input type="number" id="exampleInputEmailId"
                                                class="form-control form-control-rounded"
                                                placeholder="Enter your Mobile Number">
                                            <div class="form-control-position">
                                                <i class="ti-mobile"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">
                                            <label for="input-1" class="col-sm-6 col-form-label">Residental Area</label>
                                            <div class="col-sm-10">
                                                <small class="text-muted">Choose Your Residental Area</small>
                                                <br>
                                                <select class="form-control" id="basic-select">
                                                    <option>
                                                        --SELECT--
                                                    </option>
                                                    <option>
                                                        Baliram Peth
                                                    </option>
                                                    <option>
                                                        Kanchan Nagar
                                                    </option>
                                                    <option>
                                                        ShaniPeth
                                                    </option>
                                                    <option>
                                                        Shivaji Nagar
                                                    </option>
                                                    <option>
                                                        NaviPeth
                                                    </option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    
									
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <center>
                                        <button type="button"
                                            class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light"
                                            style="width: 120px;">ADD</button>

                                    </center>

                                    <div class="text-center pt-3">

                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>


               
                <br>
                <br>

                <div class="modal fade" id="modal-animation-15">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content animated fadeInUp">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-star"></i> Deleting Valveman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <!-- delete form starting -->
                            <div>
                                <form>
                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">
                                            <label for="input-1" class="col-sm-3 col-form-label">Name</label>
                                            <input type="text" id="exampleInputName"
                                                class="form-control form-control-rounded" placeholder="Enter your Name">
                                            <div class="form-control-position">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">
                                            <label for="input-1" class="col-sm-6 col-form-label">Valveman ID</label>

                                            <input type="number" id="exampleInputEmailId"
                                                class="form-control form-control-rounded"
                                                placeholder="Enter your Valvemen ID">
                                            <div class="form-control-position">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">


                                    </div>

                                    <div class="form-group">

                                        <div class="position-relative has-icon-right">


                                        </div>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <center>
                                        <button type="button" class="btn btn-info waves-effect waves-light btn-sm"
                                            id="confirm-btn-alert">Delete</button>

                                    </center>



                                    <div class="text-center pt-3">

                                    </div>
                                </form>

                            </div>

                            <!-- delete form ending -->
                        </div>
                    </div>
                </div>

                <h4 style="color:rgb(41, 53, 214) ;"><?php $area=$_REQUEST['area']; echo " ".$area." "; ?>Users List </h4>
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
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead>
                                        <tr>
                                            <th>UserID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>ResidentialArea</th>
                                            <th>Email</th>
                                           
                                    </thead>
                                    

                                    <?php
                                    $area=$_REQUEST['area'];
					include "join.php";
					$view = mysqli_query($x,"SELECT * FROM `user_form` WHERE `ResidentialArea` LIKE '$area'") or die (mysqli_error($x));
					
					while($asd = mysqli_fetch_array($view))
					{
						extract($asd);
					
				?>
				<tbody>
						<tr>
                        <td><?php echo $UserID; ?></td>
							<td><?php echo $Name; ?></td>
							<td><?php echo $Mobile; ?></td>
							<td><?php echo $ResidentialArea; ?></td>
							<td><?php echo $Email; ?></td>
							
							
						</tr>
				</tbody>
				<?php } ?>
                                  <!--  <tr>
                                        <td>Rahul</td>
                                        <td>#053</td>
                                        <td><span class="badge gradient-quepal text-white shadow">pratap nagar</span>
                                        </td>
                                        <td> 8762500180</td>
                                        <td>20</td>

                                    </tr>

                                    <tr>
                                        <td>Vaibha</td>
                                        <td>#072</td>
                                        <td><span class="badge gradient-quepal text-white shadow">sadoba nagar</span>
                                        </td>
                                        <td> 9654400852</td>
                                        <td>4</td>

                                    </tr>
                                    <tr>
                                        <td>Vinit</td>
                                        <td>#032</td>
                                        <td><span class="badge gradient-quepal text-white shadow"> khedi </span>
                                        </td>
                                        <td> 9563432400</td>
                                        <td>2</td>

                                    </tr>
                                    <tr>
                                        <td>Durvankur</td>
                                        <td>#0322</td>
                                        <td><span class="badge gradient-quepal text-white shadow">ganesh nagar</span>
                                        </td>
                                        <td> 9466740012</td>
                                        <td>7</td>

                                    </tr>
                                    <tr>
                                        <td>Arnav</td>
                                        <td>#0652</td>
                                        <td><span class="badge gradient-quepal text-white shadow">khote nagar</span>
                                        </td>
                                        <td> 9000634545</td>
                                        <td>6</td>

                                    </tr> -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->


                <!--End Row-->


                <!--End Row-->

                <!--End Dashboard Content-->
                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    GP Capstone Project 2022
                </div>
            </div>
        </footer>
        <!--End footer-->



    </div>
    <!--End wrapper-->

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

</body>

<!-- Mirrored from codervent.com/rocker/demo/admin_ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:32 GMT -->

</html>