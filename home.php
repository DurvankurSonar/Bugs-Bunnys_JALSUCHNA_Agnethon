
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en" >

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link
    href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<style>
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    z-index: 999;
  }

  .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f4d806; 
    padding: 20px;
    border-radius: 10px; 
    box-shadow: 0 0 20px rgba(247, 4, 4, 0.2);
    z-index: 1000;
    width: 80%;
    max-width: 800px; 
    text-align: center;
    color: orange; 
  }

  .popup button {
    background-color: blue;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin-top: 20px;
    cursor: pointer;
    border-radius: 5px;
  }

</style>
<body>
  <!--header-->

  <!-- Pop-up window -->
  <?php
	$conn=mysqli_connect("localhost","root","","cpp_form");
	
	
	
	$q="select Blog from news_admin order by NewsID desc limit 1";
	
	$res=mysqli_query($conn,$q);
	
	$row = mysqli_fetch_array($res);
	
	
  ?>
<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
  <h2>Important News</h2>
  <p><?php echo $row['Blog']; ?></p>
  <button onclick="closePopup()">Close</button>
</div>

<!-- JavaScript to show the pop-up window automatically -->
<script>
  // Function to show the pop-up window
  function showPopup() {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup');
    overlay.style.display = 'block';
    popup.style.display = 'block';
  }

  // Function to close the pop-up window
  function closePopup() {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup');
    overlay.style.display = 'none';
    popup.style.display = 'none';
  }

  // Show the pop-up window when the page loads
  window.onload = function() {
    showPopup();
  };
</script>

  <section class="w3l-header">
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
          <h1><a class="navbar-brand" href="HOME.php">
              <img src="assets/images/logowithname.png"  height="70px" width="220px;" >
            </a></h1>
          <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
            <ul class="navbar-nav ml-auto" >
              <li class="nav-item active">
                <a class="nav-link" href="#" style="font-size:18px;">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user-registration-form.php"style="font-size:18px;">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user-login.php" style="font-size:18px;">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about.php" style="font-size:18px;">About</a>
              </li>
             
            </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container py-1">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!--/header-->
  </section>
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <p>Water is Life</p>
                    <h5>Save Water , Save Life</h5>
                 </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h4>Kantai Dam</h4> 
					<h2>Biggest Water Storage</h2>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        
		
		<div class="item">
          <li>
            <div class="slider-info banner-view banner-top4 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                   <h1>Tapi River</h1>
				   <h2>Leading Water Reservoir</h2>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
		
		
		<div class="item">
          <li>
            <div class="slider-info banner-view banner-top5 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
					<h1>Water Treatment Plant</h1>
					<h3>Water Cleaning & Purification</h3>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
		
		
		
		
		
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  
 
 
 
  <!--/features-->
  

  
  
  <section class="w3l-ab-features py-5">
     <div class="header-section text-center mx-auto mt-5">
          
          <h3 class="hny-title">Steps to get notified </h3>

        </div>
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main" id="features">
        <div class="col-lg-4 col-md-6 feature-gird">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">01</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">Visit website www.jalsuchna.in</a></h4>
			  <hr>
              
            </div>
          </div>
        </div>
		
		
		
        <div class="col-lg-4 col-md-6 feature-gird mt-md-0 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">02</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">Click on sign in button </a></h4>
             <hr>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4" >
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">03</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">
                  Fill details and create account</a></h4>
              <hr>
            </div>
          </div>
        </div>
		
		
		
		
		<div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">04</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">
                  you will receive username and password on your email</a></h4>
              
            </div>
          </div>
        </div>
		
		
		<div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">05</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">
                  Click on login button and enter username and password</a></h4>
              
            </div>
          </div>
        </div>
		
		
		<div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">06</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">
                  You will now able to receive notification</a></h4>
              
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
		
      </div>
    </div>
  </section>
  
  <!--/grids-->
 
   <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5 py-3">
      <div class="row bottom-ab-grids align-items-center">

        <div class="col-lg-6 bottom-ab-left">
          
          <h3 class="hny-title">Preserve water, Preserve life</h3>
          <p class="my-3">		  As the world faces an increasingly critical need to address climate change,
		  the impact that water conservation has on a sustainable environment is undeniable.
		  Groundwater is the primary source of freshwater that caters to the demand of ever-growing domestic,
		  agrarian and industrial sectors of the country.  </p>
          <a href="https://blog.mygov.in/water-conservation-rainwater-harvesting/" target="_blank" class="btn btn-style btn-primary mt-4">Read More</a>
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5 pl-lg-4">
          <img src="assets/images/waterconservation.jpg" alt="" class="img-fluid">
        </div>

      </div>
    </div>
  </section>
  
   <!--//grids-->
  
  <!--//features-->

  
  
  
  


  <!--/w3l-cwp4-->
  



  <!--//w3l-grids-->
  <!-- stats -->
  
  
  
  <!-- //stats -->

  <!-- /blog-posts-->
  
  <!-- //blog-Section -->
  
  
  <!--//news-grids-->
  <section class="w3l-news-sec">
    <div class="news-mainhny py-5">
      <div class="container text-center py-lg-3">
        <div class="title-content text-center mb-lg-5 mb-4">
          
          <h3 class="hny-title">
            Water Safety Guidelines</h3>
        </div>
      </div>
      <div class="owl-news owl-carousel owl-theme">
        <div class="item">
          <div class="news-img position-relative">
            <a href="#"><img src="assets/images/purifier.jpeg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="https://en.wikipedia.org/wiki/Water_purification" target="_blank">
                <h4 class="title">Water Purifier</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/boil.jpeg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="https://en.wikipedia.org/wiki/Boiling" target="_blank">
                <h4 class="title">Boiling</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/iodine.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="https://en.wikipedia.org/wiki/Iodine" target="_blank">
                <h4 class="title">Iodine</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
		<div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/alum.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="https://en.wikipedia.org/wiki/Alum" target="_blank">
                <h4 class="title">Alum</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
		
		
		
		
        
      </div>
    </div>
  </section>


  <!--//w3l-footer-29-main-->
  <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-4">
        <div class="container pt-lg-4">
          <div class="row footer-border">
            <div class="col-lg-3 col-md-5 column pr-md-0">
             <center> <a href="HOME.php"> <img src="assets/images/logowithname.png"  height="80px" width="220px;" ></a></center>
			 
             
              
            </div>

            
            <div class="col-lg-6 col-md-5 column pl-md-5 mt-md-0 mt-5">
              <center><h3 style="font-family:'Georgia';font-size:35px;">Jalsuchna - Automated </h3>
			  <h3 style="font-family:'Georgia';font-size:35px;padding-top:-5px;">Water Supply System</h3>
			  </center>
              <a class="d-grid twitter-feed" href="services.html">
                
                <p class="twitter-title"><br>

                  
                </p>
              </a>
             
              </ul>
            </div>
			
		
			
			
			
          </div>
         
		 
		 
		 
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <!-- script for testimonials -->
  <script>
    $(document).ready(function () {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script for testimonials -->

  <script src="assets/js/theme-change.js"></script>

  <!-- js for portfolio lightbox -->
  <!-- libhtbox -->
  <script src="assets/js/lightbox-plus-jquery.min.js"></script>
  <!-- libhtbox -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <script>
    $(document).ready(function () {
      $('.owl-news').owlCarousel({
        stagePadding: 200,
        loop: true,
        margin: 30,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            stagePadding:40,
            nav: false
          },
          480: {
            items: 1,
            stagePadding:40,
            nav: true
          },
          667: {
            items: 2,
            stagePadding: 50,
            nav: true
          },
          1000: {
            items: 2,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
