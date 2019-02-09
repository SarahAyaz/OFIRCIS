
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>OFIR & CIS</title>

   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="myprofile"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
					<li ><a href="myprofile">Home</a>
								
							</li>
							<li><a href="contact-us">Contact Us</a></li>
							
						</ul>
					</div>
				</div>
				<!-- nav-right -->
				<div class="nav-right">
					
					<!-- sign-in -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="ofirclientsite"> Sign Out </a></li>
						
					</ul><!-- sign-in -->					

					<a href="fir-form" class="btn">Submit Your FIR</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- ad-profile-page -->
	<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="myprofile">Home</a></li>
					<li>FIR Submit</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">My Profile</h2>
			</div><!-- banner -->
			
			<div class="ad-profile section">	
				<div class="user-profile">
					<div class="user-images">
					@foreach ($info as $i)
						@if($i->gender=='Male')
						<img src="images/userm.jpg" alt={{Session::get('email')}} class="img-responsive">
						@else
						<img src="images/userf.jpg" alt={{Session::get('email')}} class="img-responsive">
						@endif

					</div>
					<div class="user">
				
						<h2>Hello,    <a href=""> {{$i->vic_fname}} {{$i->vic_lname}}</a></h2>
						
					</div>
						@endforeach

					<div class="favorites-user">
						<div class="my-ads">
							<a>{{session::get('firall')}}<small>My FIR's</small></a>
						</div>
						<div class="favorites">
							<a href="#">{{session::get('fir')}}<small>POST FIR</small></a>
						</div>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li><a href="myprofile">Profile</a></li>
					<li class="active"><a href="my-profile-all-firs">My FIR's</a></li>
					<li><a href="my-profile-running">Running FIR's</a></li>
					<li><a href="my-profile-pending">Pending FIR's</a></li>
					<li><a href="my-profile-delete-account">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->			
			
			<div class="ads-info">
				<div class="row">
					<div class="col-sm-8">
						<div class="my-ads section">
							<h2>My FIRs</h2>
							
							
							@foreach ($fir_info as $index=>$i)

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										
										<h4 class="item-title"><a href="view-fir-details/{{$i->fir_id}}" onclick={{ Session::put('fid',$i->fir_id)}}> {{$index+1}} . {{$i->fir_id}} &nbsp {{$i->crime_type}}</a></h4>
										
										<div class="item-cat">
											<p>{{$i->detail_by_victim}}</p>
										</div>	

									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									
								</div><!-- item-info -->

									
							</div><!-- ad-item -->


								@endforeach




							
						</div>
					</div><!-- my-ads -->

<div class="col-sm-4 text-center">
						<div class="recommended-cta">					
							<div class="cta">
								<!-- single-cta -->						
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="images/icon/13.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Verified FIR</h4>
									<p></p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="images/icon/14.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p></p>
								</div><!-- single-cta -->
							

								<!-- single-cta -->
								

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
									<p><span>Give a call on</span></p <br><a href="tellto:08048100000"> 0800-123120</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div><!-- recommended-cta-->
				</div><!-- row -->	
			</div>				
		</div><!-- container -->
	</section><!-- ad-profile-page -->
	
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
	
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016. Developed by <a href="#">Flexura Tech</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->

   	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->
	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/goMap.js"></script>
	<script src="js/map.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/scrollup.min.js"></script>
    <script src="js/price-range.js"></script>  
    <script src="js/jquery.countdown.js"></script>  
    <script src="js/custom.js"></script>
	<script src="js/switcher.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </body>
</html>