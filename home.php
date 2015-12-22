<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Home</title>
	<meta name="description" content="">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />

	<!-- mmenu -->
	<link type="text/css" rel="stylesheet" href="css/mmenu/jquery.mmenu.css" />

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- loadscreen -->
	<link rel="stylesheet" href="css/loadscreen/normalize-load.css">
	<link rel="stylesheet" href="css/loadscreen/main-load.css">

	<!-- back to top -->
	<link rel="stylesheet" href="css/back-top/reset-top.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/back-top/style-top.css"> <!-- Gem style -->

	<!-- slider+content-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/slider/reset-slider.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/slider/style-slider.css"> <!-- Resource style -->

	<!-- Modernizr -->
	<script src="js/modernizr.js"></script>
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->

	<!--bootstrap-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	    <style>
	      a.list-group-item {
	          height:auto;
	          min-height:230px;
	      }
	      a.list-group-item.active small {
	          color:#fff;
	      }
	      .stars {
	          margin:20px auto 1px;    
	      }
	     </style>

  	<!-- sidebar -->
  	<link rel="stylesheet" href="css/sidebar/style.css">

</head>

<body class="demo" data-spy="scroll" data-target=".navbar">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

	<section>
	<!-- loadscreen -->
		<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
	<!-- /loadscreen -->	
	</section>

	<section class="cd-hero">
		<ul class="cd-hero-slider autoplay">
			<li class="selected">
				<div class="cd-full-width">
					<h2>Pelabuhan Ratu</h2>
					<p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
					<a href="http://codyhouse.co/?p=675" class="cd-btn" style="text-decoration:none">Begin Tour</a>
				</div> <!-- .cd-full-width -->
			</li>

			<li>
				<div class="cd-full-width">
					<h2>Green Canyon</h2>
					<p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
					<a href="http://codyhouse.co/?p=675" class="cd-btn" style="text-decoration:none">Begin Tour</a>
				</div> <!-- .cd-full-width -->
			</li>

			<li>
				<div class="cd-full-width">
					<h2>Taman Safari Bogor</h2>
					<p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
					<a href="http://codyhouse.co/?p=675" class="cd-btn" style="text-decoration:none">Begin Tour</a>
				</div> <!-- .cd-full-width -->
				
			</li>

			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>Tari Jaipong</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
					<a href="#0" class="cd-btn" style="text-decoration:none">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="images/slider/video/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>

			<li>
				<div class="cd-full-width">
					<h2>Kampung Naga</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
					<a href="#0" class="cd-btn" style="text-decoration:none">Start</a>
					<a href="#0" class="cd-btn secondary" style="text-decoration:none">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
		</ul> <!-- .cd-hero-slider -->


		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				
				<ul>
					<li class="selected"><a href="#0" style="text-decoration:none">Pelabuhan Ratu</a></li>
					<li><a href="#0" style="text-decoration:none">Green Canyon</a></li>
					<li><a href="#0" style="text-decoration:none">Taman Safari</a></li>
					<li><a href="#0" style="text-decoration:none">Tari Jaipong</a></li>
					<li><a href="#0" style="text-decoration:none">Kampung Naga</a></li>
				</ul>
			</nav> 
		</div> <!-- .cd-slider-nav -->
	</section> <!-- .cd-hero || end of slider & nav-->

	    <!-- Main Navigasi -->
	<header  class="header-part">
	    <!-- Fixed navbar -->
	   	<div class="container">
		    <div class="navi navbar-default" role="navigation">

				<nav id="topnav" class="navbar navbar-default" role="navigation">
			      <div id="cd-logo"><a href="index.php"><img src="images/slider/cd-logo.svg" alt="Logo"></a></div>
			      <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
			        </div>

		        	<div class="collapse navbar-collapse navbar-ex1-collapse">
		          		<ul class="cd-primary-nav">
							<li><a href="home.php" style="text-decoration:none">Home</a></li>
							<li><a href="about.php" style="text-decoration:none">About</a></li>
							<li><a href="explore.php" style="text-decoration:none">Explore</a></li>
							<li><a href="#headline" style="text-decoration:none">News</a></li>
							<li><a href="explore.php" style="text-decoration:none">Search</a></li>
							<li><a href="explore.php" style="text-decoration:none">Login</a></li>
		        		</ul>
		      		</div><!--/.nav-collapse -->
		  	</div><!-- End of Nav -->
	  	</div>
				</nav>
	</header>

<section  id="headline">
	<div class="well">      
		<br>
		<br>
		<br>
		<h1 class="text-center">HEADLINE</h1>
	</div>


	<div class="blog-sidebar"><!--sidebar-->
	    <div class="container">
	      <div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-8">
	          <div class="blog-content">
	            <div class="sidebar-blog-content">
	              <div class="row">
			        <div class="list-group">
			          <a href="#" class="list-group-item">
			                <div class="media col-md-3">
			                    <figure class="pull-left">
			                        <img class="media-object img-rounded img-responsive" src="images/home/taman safari bogor.jpg" alt="image size 242x200" >
			                    </figure>
			                </div>
			                <div class="col-md-6">
			                    <h4 class="list-group-item-heading"> Taman Safari Bogor </h4>
			                    <p class="list-group-item-text"> Eu eum corpora torquatos, ne postea constituto mea, quo tale lorem facer no. Ut sed odio appetere partiendo, quo meliore salutandi ex. Vix an sanctus vivendo, sed vocibus accumsan petentium ea. 
			                        Sed integre saperet at, no nec debet erant, quo dico incorrupte comprehensam ut. Et minimum consulatu ius, an dolores iracundia est, oportere vituperata interpretaris sea an. Sed id error quando indoctum, mel suas saperet at.                         
			                    </p>
			                </div>
			                <div class="col-md-3 text-center">
			                    <h2> 12424 <small> visitors </small></h2>
			                    <button type="button" class="btn btn-primary btn-lg btn-block">Begin Tour</button>
			                    <div class="stars">
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star-empty"></span>
			                    </div>
			                    <p> Average 3.9 <small> / </small> 5 </p>
			                </div>
			          </a>
			        </div>
	              </div><!-- row -->
	            </div><!-- sidebar-blog-content -->
	          </div><!-- blog-content -->

	          <div class="blog-content">
	            <div class="sidebar-blog-content">
	              <div class="row">
			        <div class="list-group">
			          <a href="#" class="list-group-item">
			                <div class="media col-md-3">
			                    <figure class="pull-left">
			                        <img class="media-object img-rounded img-responsive" src="images/home/green canyon.jpg" alt="image size 242x200" >
			                    </figure>
			                </div>
			                <div class="col-md-6">
			                    <h4 class="list-group-item-heading"> Green Canyon </h4>
			                    <p class="list-group-item-text"> Eu eum corpora torquatos, ne postea constituto mea, quo tale lorem facer no. Ut sed odio appetere partiendo, quo meliore salutandi ex. Vix an sanctus vivendo, sed vocibus accumsan petentium ea. 
			                        Sed integre saperet at, no nec debet erant, quo dico incorrupte comprehensam ut. Et minimum consulatu ius, an dolores iracundia est, oportere vituperata interpretaris sea an. Sed id error quando indoctum, mel suas saperet at.                         
			                    </p>
			                </div>
			                <div class="col-md-3 text-center">
			                    <h2> 12424 <small> visitors </small></h2>
			                    <button type="button" class="btn btn-primary btn-lg btn-block">Begin Tour</button>
			                    <div class="stars">
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star-empty"></span>
			                    </div>
			                    <p> Average 3.9 <small> / </small> 5 </p>
			                </div>
			          </a>
			        </div>
	              </div><!-- row -->
	            </div><!-- sidebar-blog-content -->
	          </div><!-- blog-content -->

	                    <div class="blog-content">
	            <div class="sidebar-blog-content">
	              <div class="row">
			        <div class="list-group">
			          <a href="#" class="list-group-item">
			                <div class="media col-md-3">
			                    <figure class="pull-left">
			                        <img class="media-object img-rounded img-responsive" src="images/home/kampung naga.jpg" alt="image size 242x200" >
			                    </figure>
			                </div>
			                <div class="col-md-6">
			                    <h4 class="list-group-item-heading"> Kampung Naga </h4>
			                    <p class="list-group-item-text"> Eu eum corpora torquatos, ne postea constituto mea, quo tale lorem facer no. Ut sed odio appetere partiendo, quo meliore salutandi ex. Vix an sanctus vivendo, sed vocibus accumsan petentium ea. 
			                        Sed integre saperet at, no nec debet erant, quo dico incorrupte comprehensam ut. Et minimum consulatu ius, an dolores iracundia est, oportere vituperata interpretaris sea an. Sed id error quando indoctum, mel suas saperet at.                         
			                    </p>
			                </div>
			                <div class="col-md-3 text-center">
			                    <h2> 12424 <small> visitors </small></h2>
			                    <button type="button" class="btn btn-primary btn-lg btn-block">Begin Tour</button>
			                    <div class="stars">
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star"></span>
			                        <span class="glyphicon glyphicon-star-empty"></span>
			                    </div>
			                    <p> Average 3.9 <small> / </small> 5 </p>
			                </div>
			          </a>
			        </div>
	              </div><!-- row -->
	            </div><!-- sidebar-blog-content -->
	          </div><!-- blog-content -->
	        </div>

	        <div class="wow zoomIn col-xs-12 col-sm-12 col-md-4 "> <!-- col-xs-12 col-sm-12 col-md-4  -->
	          <div class="blog-sidebar sidebar">
	            <div class="sidebar-heading">
	              recent posts
	            </div>
	            <div class="media"><!-- media -->
	              <div class="media-left"><!-- media-left -->
	                <a href="#">
	                  <img class="media-object" src="images/home/taman safari bogor.jpg" alt="thumb-01">
	                </a>
	              </div><!-- /.media-left -->
	              <div class="media-body"><!-- media-body -->
	                <h3 class="media-heading"><a href="taman_safari.php">Taman Safari Bogor</a></h3>
	                <p>December 31, 2014</p>
	                <a href="#"><span>0 Conmments</span></a>
	              </div><!-- /.media-body -->
	            </div> <!-- /.media -->

	            <div class="media"> <!-- media -->
	              <div class="media-left">
	                <a href="#">
	                  <img class="media-object" src="images/home/green canyon.jpg" alt="thumb-02">
	                </a>
	              </div><!-- media-left -->
	              <div class="media-body">
	                <h3 class="media-heading"><a href="#">Green Canyon</a></h3>
	                <p>December 31, 2014</p>
	                <a href="#"><span>0 Conmments</span></a>
	              </div><!-- media-body -->
	            </div> <!-- /.media -->


	            <div class="media">
	              <div class="media-left">
	                <a href="#">
	                  <img class="media-object" src="images/home/kampung naga.jpg" alt="thumb-03">
	                </a>
	              </div><!-- media-left -->
	              <div class="media-body">
	                <h3 class="media-heading"><a href="#">Kampung Naga</a></h3>
	                <p>December 31, 2014</p>
	                <a href="#"><span>0 Conmments</span></a>
	              </div><!-- media-body -->
	            </div><!-- /.media -->

	          </div><!-- blog-sidebar -->

	          <div class="blog-sidebar sidebar">
	            <div class="sidebar-heading">
	              tags
	            </div>
	            <ul>
	              <li><a href="#">logo</a></li>
	              <li><a href="#">html</a></li>
	              <li><a href="#">design</a></li>
	              <li><a href="#">bootstrap</a></li>
	              <li><a href="#">css</a></li>
	              <li><a href="#">development</a></li>
	            </ul>
	          </div><!-- blog-sidebar -->
	        </div>
	      </div><!-- row -->
	    </div><!-- container -->

	      <div class="blog-content pagination-content"><!--pagination begin-->
            <div class="container-fluid">
              <div class="row">
                <div class="wow zoomIn col-xs-12 col-sm-10 col-sm-offset-2 ">
                    <ul class="pagination  pagination-lg">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&larr; </span><small>previous</small>
                        </a>
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <small>next</small><span aria-hidden="true"> &rarr;</span>
                        </a>
                      </li>
                    </ul><!-- pagination -->
                </div>
              </div><!-- row -->
            </div><!-- container-fluid -->
          </div><!-- /.pagination- content|| pagination end-->
    </div>
</section><!--end of sidebar-->
    
			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>



<!-- script main-->
<script src="js/slider/jquery-2.1.1.js"></script>
<script src="js/slider/main.js"></script> <!-- Resource jQuery -->

<!-- script loadscreen -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../js/jquery.min.js"><\/script>')</script>
<script src="js/loadscreen/main-load.js"></script>

<!-- script mmenu (menu on top)-->
<script>
$(window).on('scroll', function(){
  if( $(window).scrollTop()>670 ){
    $('.navbar-default').addClass('navbar-fixed-top');
  } else {
    $('.navbar-default').removeClass('navbar-fixed-top');
  }
});
</script>
<script type="text/javascript" src="js/mmenu/jquery.mmenu.min.js"></script><!-- end of mmenu (menu on top)-->

<!-- script back to top -->
<a href="#0" class="cd-top">Top</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/back-top/main-top.js"></script> <!-- Gem jQuery -->

<script type="text/javascript">
	$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $("#cd-logo").height();
        ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
    });
});
</script><!--end of back to top-->

<!--script one page scroll-->
<script type="text/javascript" src="js/onepagescroll/jquery.nicescroll.min.js"></script>
<script src="js/onepagescroll/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="js/onepagescroll/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="js/onepagescroll/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>

<script>
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll({offset: {top:0}});
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	//jQuery('#section-1').parallax("50%", 0.1);
	//jQuery('#section-2').parallax("50%", 0.1);
	//jQuery('#section-3').parallax("50%", 0.1);

})
</script><!-- NICE Scroll plugin -->

<script>//scroll bar custom
	jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#333"});
  }
);
</script>
<script>//hide menu after click on mobile
jQuery('.navbar .nav > li > a').click(function(){
		jQuery('.navbar-collapse.navbar-ex1-collapse.in').removeClass('in').addClass('collapse').css('height', '0');

		});
</script><!--end of one page scroll-->


</body>
</html>

