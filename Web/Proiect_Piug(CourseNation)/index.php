<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CourseNation | Home</title>
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/codepen.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>info@markups.io</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(568) 986 652</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><i class="fa fa-codepen"></i><span>CourseNation</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>            
			  <li> <a href="course.php?pg=1&filter=none">Courses</a></li>
          
            <li><a href="contact.php">Contact</a></li>
            <!--<li><a href="404.html">404 Page</a></li>   -->            
            <li>
				<form class="form-inline">
					<input type="search" id="myInput" placeholder="Search..." aria-label="Search">
    				<button onClick="search();" class="fa fa-search" type="reset"></button>
				</form>
			</li>
			
          </ul>
			
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/color.png" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To CourseNation</h4>
        <span></span>
        <h2>Making Learning Great Again! </h2>
        <p></p>
        <a href="course.php?pg=1&filter=none" class="mu-read-more-btn">Start Now</a>
      </div>
    </div>
     <!-- <div class="mu-slider-content">
        <h4></h4>
        <span></span>
        <h2></h2>
        <p></p>
        <a></a>
      </div> -->
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <!--<div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/2.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Premiumu Quality Free Template</h4>
        <span></span>
        <h2>Best Education Template Ever</h2>
        <p>b ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>-->
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <!--<div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/3.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Exclusivly For Education</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <p>c ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>-->
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Learn Online</h3>
              <p>Learn from anywhere, when you want!</p><br>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Best Teachers</h3>
              <p>Learn from the best programming teachers</p><br>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-mobile"></span>
              <h3>Mobile Friendly</h3>
              <p>Learn from your phone with our mobile friendly platfom</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->
 <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Our Features</h2>
              <p></p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>Professional Courses</h4>
                    <p>Learn from the best courses you can find online and start your programming career</p>
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Expert Teachers</h4>
                    <p>Here you can learn from the best teachers. What are you wainting for? Start programming!</p>
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Online Learning</h4>
                    <p>Here you can learn from the confort of your home. Just pick a course and start learning!</p>
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-microphone"></span>
                    <h4>Audio Lessons</h4>
                    <p>Want to learn programming on the go? Now you can with our new feauture!</p>
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Video Lessons</h4>
                    <p>Every video is checked by our team to make sure its the best quality you can get</p>
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-certificate"></span>
                    <h4>Professional Certificate</h4>
                    <p>After you complete our course you will get a certificate that afirms that!</p>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start about us -->
 
  <!-- End about us -->

  <!-- Start about us counter -->
	
 
  <!-- End about us counter -->

  <!-- Start features section -->
 
  <!-- End features section -->

  <!-- Start latest course section -->
 <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12" >
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Most Popular Courses</h2>
              <p></p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
			<?php
			echo("<div id='mu-latest-course-slide' class='mu-latest-courses-content'>");
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"piug"); 
			$query=mysqli_query($con,"select * from cursuri order by nrAccesari DESC limit 6"); 
			
			while ($row = mysqli_fetch_row($query))
			{
				echo("<div class='col-lg-4 col-md-4 col-xs-12'>");
				echo("<div class='mu-latest-course-single'>");
				echo("<figure class='mu-latest-course-img'>");
				echo("<a href='course-detail.php?id=$row[0]''><img src='$row[5]' alt='img'></a>");
				echo("<figcaption class='mu-latest-course-imgcaption'>");
				echo("<a href='#'>$row[2]</a>");
				echo("<span><i class='fa fa-clock-o'></i>$row[7] Hours</span>");
				echo("</figcaption>");
				echo("</figure>");
				echo("<div class='mu-latest-course-single-content'>");
				echo("<h4><a href='course-detail.php?id=$row[0]'>$row[1]</a></h4>");
				if(strlen($row[1]) < 35)
					echo("<br>");
				//echo("<p>$row[4]</p>");
				echo("<div class='mu-latest-course-single-contbottom'>");
				echo("<a class='mu-course-details' href='course-detail.php?id=$row[0]'>Details</a>");
				//echo("<span class='mu-course-price' href='#''>$165.00</span>");
				echo("</div>");
				echo("</div>");
				echo("</div>");
				echo("</div>");
			}
			echo("</div>");	
			mysqli_close($con);
			?>

            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End latest course section -->
  
  

  <!-- Start our teacher -->
 
  <!-- End our teacher -->

  <!-- Start testimonial -->
 
  <!-- End testimonial -->

  <!-- Start from blog -->
 
  <!-- End from blog -->

  <!-- Start footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6" style="position: initial !important;">
            <h6>About</h6>
            <p class="text-justify">CourseNation is a platform destinated for every person that is willing to start learning programming. We are focused on providing the best courses and the best teachers to make your learning experience the best possible. We will help you learn programming langeages such ass: Java, Python, C# and much more. 
				</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Some Categories</h6>
            <ul class="footer-links">
              <li><a href="course.php?pg=1&filter=C">C</a></li>
              <li><a href="course.php?pg=1&filter=Python">Python</a></li>
              <li><a href="course.php?pg=1&filter=php">PHP</a></li>
              <li><a href="course.php?pg=1&filter=Java">Java</a></li>
              
             
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="course.php?pg=1&filter=none">Courses</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text"> 
         
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/eduard.coras" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://www.youtube.com/channel/UC8fke7iMNZNNH6XHO_3NrNA?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li><a class="dribbble" href="https://www.instagram.com/eduard.coras.13/?hl=ro" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/eduard-coras-a05573195/" target="_blank"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  <script>
	  function search()
	  {
		  var inputVal = document.getElementById("myInput").value;
		  
		  
		  var link = ("course.php?pg=1&filter=").concat(inputVal);
		 
		  window.location.href = link;
	  }
   	 
	  
	  
  </script>
	  <script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
  </body>
</html>