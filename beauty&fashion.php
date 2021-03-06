
<?php 
 include('connect.php');
 include('process.php');
 ?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Coastlands College</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 



        <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item  "><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item "><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Courses </a>
							<div class="dropdown-menu " aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="beauty&fashion.html">Beauty & Fashion Courses </a>
								<a class="dropdown-item" href="management.html">Management Courses </a>
								<a class="dropdown-item" href="computer-courses.html">Computer Courses </a>
								<a class="dropdown-item" href="others.html">Other Courses </a>
							</div>
						</li>
						
						
						<li class="nav-item"><a class="nav-link" href="fee-structure.html">Fee Structure</a></li>
						<li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">More </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="gallery.html">Gallery </a>
								<a class="dropdown-item" href="branches.html">Branches </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Beauty, Fashion & Design Courses<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center ">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Introduction</p>
                </div>
            </div>
            <!-- end title -->

            <hr class="invis"> 

            <div class="row">

<?php 
 

                      if(mysqli_num_rows($result)>0){
                     while ($unit = mysqli_fetch_assoc($result)) {
                       ?>
            	
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="course-item">
						<!--<div class="image-blog">
							<img src="images/courses/b4.jpg" alt="" class="img-fluid">
						</div>-->
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title=""><?php echo $unit['course_name'];?></a></h2>
							</div>
							<div class="course-desc">
								<p><?php echo $unit['description'];?> </p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $unit['duration'];?> months</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> Ksh. <?php echo $unit['cost'];?>p/m(<?php echo $unit['category'];?>)</li>
							</ul>

						
						
<button class="button button1">Read More</button>
<!--Creates the popup body-->
<div class="popup-overlay">
  <!--Creates the popup content-->
  <div class="popup-content">
    <h2>Pop-Up</h2>
    <p> This is an example pop-up that you can make using jQuery.</p>
    <!--popup's close button-->
    <button class="end">Close</button> </div>
</div>
<!--Content shown when popup is not displayed-->

<button class="start">Open</button>
</div>
					</div>





                </div><!-- end col -->
               <?php 

}
}?>

               
				
				
            </div><!-- end row -->
        </div><!-- end container -->

    </div><!-- end section -->

        <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo1.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo2.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo3.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo4.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo5.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo6.png" alt="" class="img-repsonsive"></a>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo7.jpg" alt="" class="img-repsonsive"></a>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo8.png" alt="" class="img-repsonsive"></a>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo9.png" alt="" class="img-repsonsive"></a>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo10.png" alt="" class="img-repsonsive"></a>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/gallery/logo/logo11.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Established in 2010, Coastlands College of professional studies is one of the leading computer firms that have a centre that is specialized in providing training services on Information Technology
                        <a href="about.html" class="hover-btn-new "><span>Read More</span></a></p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/Coastlands-college-of-professional-studies-438257066197696"><i class="fa fa-facebook"></i></a></li>
								
								<li><a href="https://twitter.com/Coastlandscolle"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.coastlandscollege.co.ke/"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="beauty&fashion.html">Courses</a></li>
							<li><a href="fee-structure.html">Fee Structure</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="team.html">Team</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">coastlandscollege@gmail.com</a></li>
                            
                            <li> Coastlands College<br>P.O BOX 42102-80100,
									Mombasa</li>
                            <li> (254) 721-220-718</li>
                            <li> (254) 710-926-050</li>
                            <li> (254) 715-495-221</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 CoastLands College</a> Design By : <a href="https://www.facebook.com/brian.bunyolia">Brian</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/popup.js"></script>

</body>
</html>