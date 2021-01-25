<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CourseNation | Course</title>

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
          <a class="navbar-brand" href="index.php"><i class="fa fa-codepen"></i><span>courseNation</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>            
			<li class="active"> <a href="course.php?pg=1&filter=none">Courses</a></li>
          
            <li><a href="contact.php">Contact</a></li>
            <!--<li><a href="404.html">404 Page</a></li>  -->             
            <li>
				<form class="form-inline">
					<input type="Search" id="myInput" placeholder="Search..." aria-label="Search">
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
  
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Course</li>
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
                <div class="mu-course-container">
                  <div class="row">
                 <?php
					$con=mysqli_connect("localhost","root","");
					mysqli_select_db($con,"piug"); 
					if(!isset($_GET['pg']))
					{
						echo "<script type='text/javascript'>window.top.location='404.php';</script>"; exit;
					}
					
					$page=$_GET['pg'];
					$filter = $_GET['filter'];
					$nr=0;
					if(strcmp($filter,"none")==0)
					{
						 
						
						$lim1 = $page*6-6;
						$lim2 = $page*6;
						if(isset($_GET['year'])) 
						{
    						$year = $_GET['year'];
							$query=mysqli_query($con,"select * from cursuri where AnCurs=$year limit $lim1,$lim2");
						}
						else
						{
							$query=mysqli_query($con,"select * from cursuri limit $lim1,$lim2"); 
						}
						
						while ($row = mysqli_fetch_row($query))
						{
							echo("<div class='col-md-6 col-sm-6'>");
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
							//echo("<p>$row[4]</p>");
							echo("<div class='mu-latest-course-single-contbottom'>");
							echo("<a class='mu-course-details' href='course-detail.php?id=$row[0]'>Details</a>");
							//echo("<span class='mu-course-price' href='#''>$165.00</span>");
							echo("</div>");
							echo("</div>");
							echo("</div>");
							echo("</div>");	
							$nr = $nr + 1;
						}
					}
					else
					{
						$query=mysqli_query($con,"select * from cursuri where numeCurs like '%$filter%' limit 6");
						while ($row = mysqli_fetch_row($query))
						{
							echo("<div class='col-md-6 col-sm-6'>");
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
							//echo("<p>$row[4]</p>");
							echo("<div class='mu-latest-course-single-contbottom'>");
							echo("<a class='mu-course-details' href='course-detail.php?id=$row[0]'>Details</a>");
							//echo("<span class='mu-course-price' href='#''>$165.00</span>");
							echo("</div>");
							echo("</div>");
							echo("</div>");
							echo("</div>");	
							$nr = $nr + 1;
						}
					}
					
					
					if($nr == 0)
					{
						echo "<script type='text/javascript'>window.top.location='404.php';</script>"; exit;
					}
					mysqli_close($con);
					?>
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start course pagination -->
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      
					<?php
					$con=mysqli_connect("localhost","root","");
					mysqli_select_db($con,"piug"); 
					
					$page=$_GET['pg'];
					$filter = $_GET['filter'];
					$nrCursuri=0;
					$nrPagini=1;
						
					echo("<li>");
					if($page == 1)
					{
						echo("<a href='course.php?pg=1&filter=$filter' aria-label='Previous'>");
					}
					else
					{
						$newPage = $page-1;
						echo("<a href='course.php?pg=$newPage&filter=$filter' aria-label='Previous'>");
					}
                    echo("<span class='fa fa-angle-left'></span> Prev");
					echo("</a></li>");
                        
                      
					if($page == $nrPagini)
					{
						echo("<li class='active'><a href='course.php?pg=$nrPagini&filter=$filter'>$nrPagini</a></li>");
					}
					else
					{
						echo("<li><a href='course.php?pg=$nrPagini&filter=$filter'>$nrPagini</a></li>");	
					}
					if(strcmp($filter,"none")==0)
					{
						$query=mysqli_query($con,"select * from cursuri"); 
						while ($row = mysqli_fetch_row($query))
						{
							$nrCursuri = $nrCursuri + 1;
							if($nrCursuri==7)
							{
								$nrPagini = $nrPagini+1;
								if($page == $nrPagini)
								{
									echo("<li class='active'><a href='course.php?pg=$nrPagini&filter=$filter'>$nrPagini</a></li>");
								}
								else
								{
									echo("<li><a href='course.php?pg=$nrPagini&filter=$filter'>$nrPagini</a></li>");	
								}			
								$nrCursuri=0;
									
							}
						}
					}
					else
					{
						$query=mysqli_query($con,"select * from cursuri where topicCurs= '$filter'");
						while ($row = mysqli_fetch_row($query))
						{
							$nrCursuri = $nrCursuri + 1;
							if($nrCursuri==7)
							{
								$nrPagini = $nrPagini+1;
								echo("<li><a href='course.php?pg=$nrPagini&filter=$filter'>$nrPagini</a></li>");
								$nrCursuri=0;
									
							}
						}
					}
					
					
						
					mysqli_close($con);
					echo("<li>");
					if($page == $nrPagini)
					{
                    	echo("<a href='course.php?pg=$nrPagini&filter=$filter'' aria-label='Next'>");
					}
					else
					{
						$newPage = $page+1;
						echo("<a href='course.php?pg=$newPage&filter=$filter' aria-label='Previous'>");
					}
                    echo("Next <span class='fa fa-angle-right'></span>");
                    echo("</a></li>");
                      
					?>
					  
                    </ul>
                  </nav>
                </div>
                <!-- end course pagination -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
			 	  <div class="mu-single-sidebar">
                    <h3>Most Popular Categories</h3>
                    <ul class="mu-sidebar-catg">
					<?php
						$con=mysqli_connect("localhost","root","");
						mysqli_select_db($con,"piug"); 
						$query=mysqli_query($con,"SELECT topicCurs, SUM(nrAccesari) AS TotalQuantity FROM cursuri GROUP BY topicCurs ORDER BY SUM(nrAccesari) DESC LIMIT 5"); 
						while ($row = mysqli_fetch_row($query))
						{
							echo("<li><a href='course.php?pg=1&filter=$row[0]'>$row[0]</a></li>");
                      
						}
						
						mysqli_close($con);
					?>
                      
                    </ul>
                  </div>
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>All Categories</h3>
                    <ul class="mu-sidebar-catg">
					<?php
						$con=mysqli_connect("localhost","root","");
						mysqli_select_db($con,"piug"); 
						$query=mysqli_query($con,"select DISTINCT topicCurs from cursuri order by topicCurs"); 
						while ($row = mysqli_fetch_row($query))
						{
							echo("<li><a href='course.php?pg=1&filter=$row[0]'>$row[0]</a></li>");
                      
						}
						
						mysqli_close($con);
					?>
                      
                    </ul>
                  </div>
					<div class="mu-single-sidebar">
                    <h3>Course Year</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="course.php?pg=1&filter=none&year=2018">2018</a></li>
                      <li><a href="course.php?pg=1&filter=none&year=2019">2019</a></li>
						<li><a href="course.php?pg=1&filter=none&year=2020">2020</a></li>
                    
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
  <script>
	  function search()
	  {
		  var inputVal = document.getElementById("myInput").value;
		  
		  
		  var link = ("course.php?pg=1&filter=").concat(inputVal);
		
		  window.location.href = link;
	  }
   	  
	  
	  
  </script>
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>