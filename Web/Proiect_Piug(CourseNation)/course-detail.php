<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CourseNation | Course Detail</title>
	<style>
	.iframe-container{
  		position: relative;
  		width: 100%;
  		padding-bottom: 56.25%; 
  		height: 0;
	}
	.iframe-container iframe{
  		position: absolute;
  		top:0;
  		left: 0;
  		width: 100%;
  		height: 100%;
	}
	</style>
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
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
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
            <li><a href="index.php">Home</a></li>            
			<li> <a href="course.php?pg=1&filter=none">Courses</a></li>
          
            <li><a href="contact.php">Contact</a></li>
            <!--<li><a href="404.html">404 Page</a></li> -->              
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
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course Detail</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Course Detail</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
							
                          		<?php

								$con=mysqli_connect("localhost","root","");

								mysqli_select_db($con,"piug"); 

								$id=$_GET['id'];
								$query=mysqli_query($con,"select * from cursuri where idCurs='$id'"); 

								while ($row = mysqli_fetch_row($query))
								{
									echo("<div class = 'iframe-container'>");
									echo("$row[3]");
									echo("</div>");
									echo("<figcaption class='mu-latest-course-imgcaption'>");
									echo("<a href=''>$row[2]</a>");
									echo("<span><i class='fa fa-clock-o'></i>$row[7] hours</span>");
									echo("</figcaption>");
									echo("</figure>");
									echo("<div class='mu-latest-course-single-content'>");
									echo("<h2><a href='#'>$row[1]</a></h2>");
									echo("<h4>Creator</h4>");
									echo("<p>$row[8]</p>");
									echo("<h4>Description</h4>");
									echo("<p>$row[4]</p>");
									
								}

								mysqli_close($con);
								?> 

        
                          
                        
                        </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
						<?php
						$id=$_GET['id'];
						$con=mysqli_connect("localhost","root","");
						mysqli_select_db($con,"piug"); 
						$query=mysqli_query($con,"select * from cursuri where idCurs='$id'");
						$row = mysqli_fetch_row($query);
						$curs = $row[8];
                  		echo("<h3>More courses from $row[8]</h3>");
						mysqli_close($con);
                  		echo("<div class='mu-related-item-area'>");
                    	echo("<div id='mu-related-item-slide'>");
            
                      
						$con=mysqli_connect("localhost","root","");
						mysqli_select_db($con,"piug"); 
						$query=mysqli_query($con,"select * from cursuri where creatorCurs='$curs' order by rand() limit 4"); 
			
						while ($row = mysqli_fetch_row($query))
						{
							echo("<div class='col-md-6'>");
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
                           	echo("<div class='mu-latest-course-single-contbottom'>");
                            echo("<a class='mu-course-details' href='course-detail.php?id=$row[0]'>Details</a>");
							//echo("<span class='mu-course-price' href='#''>$165.00</span>");
							echo("</div>");
							echo("</div>");
							echo("</div>");
							echo("</div>");	
						}
					
						
						mysqli_close($con);
					?>
                      
                    		</div>
                  		</div>
                </div>
                  </div>
                </div>
                <!-- end start related course item -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="course.php?pg=1&filter=Python">Python</a></li>
                      <li><a href="course.php?pg=1&filter=C#">C#</a></li>
                      <li><a href="course.php?pg=1&filter=Java">Java</a></li>
                      <li><a href="course.php?pg=1&filter=HTML">HTML</a></li>
                      <li><a href="course.php?pg=1&filter=CSS">CSS</a></li>
                      <li><a href="course.php?pg=1&filter=C++">C++</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Latest Courses</h3>
                    <div class="mu-sidebar-popular-courses">
					<?php
						$con=mysqli_connect("localhost","root","");
						mysqli_select_db($con,"piug"); 
						$query=mysqli_query($con,"select * from cursuri order by idCurs desc limit 3"); 
						
						while ($row = mysqli_fetch_row($query))
						{
							echo("<div class='media'>");
                        	echo("<div class='media-left'>");
                          	echo("<a href='course-detail.php?id=$row[0]'>");
                            echo("<img class='media-object' src='$row[5]' alt='img'>");
                          	echo("</a>");
                        	echo("</div>");
                        	echo("<div class='media-body'>");
                          	echo("<h4 class='media-heading'><a href='course-detail.php?id=$row[0]'>$row[2]</a></h4>");                     
                          	//echo("<span class='popular-course-price'>$row[2]</span>");
                        	echo("</div>");
							echo("</div>");
                      
						}
						
						mysqli_close($con);
						?>
						
						
                      
                      
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                 <!-- <div class="mu-single-sidebar">
                    <h3>Archives</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                      <li><a href="#">May <span>(25)</span></a></li>
                      <li><a href="">June <span>(35)</span></a></li>
                      <li><a href="">July <span>(20)</span></a></li>
                      <li><a href="">August <span>(125)</span></a></li>
                      <li><a href="">September <span>(45)</span></a></li>
                      <li><a href="">October <span>(85)</span></a></li>
                    </ul>
                  </div> -->
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <!--<div class="mu-single-sidebar">
                    <h3>Tags Cloud</h3>
                    <div class="tag-cloud">
                      <a href="#">Health</a>
                      <a href="#">Science</a>
                      <a href="#">Sports</a>
                      <a href="#">Mathematics</a>
                      <a href="#">Web Design</a>
                      <a href="#">Admission</a>
                      <a href="#">History</a>
                      <a href="#">Environment</a>
                    </div>
                  </div>-->
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
				
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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
  <?php
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"piug"); 
	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from cursuri where idCurs='$id'"); 
	$row = mysqli_fetch_row($query);
	$nrAccesari = $row[6] + 1;
	mysqli_close($con);
	  
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"piug"); 
	$query=mysqli_query($con,"UPDATE cursuri SET nrAccesari='$nrAccesari' WHERE idCurs='$id'"); 
	mysqli_close($con);
  ?>
	  <script>
	  function search()
	  {
		  var inputVal = document.getElementById("myInput").value;
		  
		  
		  var link = ("course.php?pg=1&filter=").concat(inputVal);
	
		  window.location.href = link;
	  }
   	  
	  
	  
  </script>
  </body>
</html>