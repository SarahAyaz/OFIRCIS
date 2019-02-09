
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
  <body onload="window.print();">
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
							</li>
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
				

					<!-- sign-out -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="ofirclientsite"> Sign Out </a></li>
						
					</ul><!-- sign-out -->					

					
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- signup-page -->
	<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				@foreach($firdetail as $i) @endforeach
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="width:600px;">
					<div class="user-account" style="width:600px;">
						<h5><b>Note: FIR is submitted succesfully</b></h5>
						<h2>FIR</h2>
						<table border="2" align="center">
							<col width="250">
                            <col width="250">
                            <tr>
							<td><b><center>FIR ID</center></b></td>
							<td>{{$i->fir_id}}</td>
							</tr>
							<tr>
							<td><b><center>Crime Type</center></b></td>
							<td>{{$i->crime_type}}</td>
							</tr>
							<tr>
							<td><b><center>Date of Incident:</center></b></td>
							<td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->date_of_incident)->format('Y-m-d')}}</td>
							</tr>
							<tr>
							<td><b><center>Time of Incident:</center></b></td>
							<td>{{$i->time_of_incident}}</td>
							</tr>
							<tr>
							<td><b><center>Place of Incident:</center></b></td>
							<td><textarea rows="4" cols="30" style="border: none">{{$i->place_of_incident}}</textarea></td>
							</tr>
							<tr>
							<td><b><center>Details of Incident:</center></b></td>
							<td><textarea rows="4" cols="30" style="border: none">{{$i->detail_by_victim}}</textarea></td>
							</tr>
							<td><b><center>FIR Submission Date:</center></b></td>
							<td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->fir_submit_date)->format('Y-m-d')}}</td>
							</tr>
							</table>
							<br>		
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->
	
	
   		 
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