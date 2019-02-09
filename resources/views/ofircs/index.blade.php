
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
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


	<section class="home-banner">
		<div class="banner-overlay">
			<a class="navbar-brand" href="ofirclientsite"><img class="img-responsive" src="" alt=""></a>
			<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
					<li ><a href="ofirclientsite">Home</a>

								
							</li>
							<li><a href="contact-us">contact</a></li>

						
							
						</ul>
					</div>
				</div>

		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="car-info">
											
						<h1> Online FIR System
					<?php
					echo getenv("HOMEDRIVE").getenv("HOMEPATH");
					?>

						</h1>
						<img style="width: 350px;height: 100px;" src="images/main logo.png">
					</div>
				</div>
				<div class="col-sm-4 col-sm-offset-2">
					<div class="user-account">
						<h2>User Login</h2>
						<!-- form -->

						  @if ($errors->has(''))
       					 <div class="alert alert-success">
         			   @foreach ($errors->all() as $error)
               			 {{ $error }}<br>        
           				 @endforeach
        					</div>
       					 @endif


       					 @if ($alert = Session::get('alert-success'))
  							<div class="alert alert-success">
     					 {{ $alert }}
  						</div>
						@endif

       					@if ($alert = Session::get('alert-invalid'))
  							<div class="alert alert-danger">
     					 {{ $alert }}
  						</div>
						@endif
						<form action="vic_login" method="POST">


						

						
						
							<div class="form-group  @if ($errors->has('uname')) has-error @endif ">
							
							
								<input type="text" class="form-control" placeholder="Username" name='uname'> 
								@if ($errors->has('uname')) <p class="help-block">{{ $errors->first('uname') }}</p> @endif	
								

							</div>
							<div class="form-group  @if ($errors->has('password')) has-error @endif ">
								<input type="password" class="form-control" placeholder="Password" name='password'>
								@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif	
								

							</div>

						

							
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
							<input type="submit" onclick="location.href='myprofile';"  class="btn" value="SignIn"/>
							<input type="button" onclick="location.href='signup';" value="SignUp" class="btn" id="btnA" />
						</form><!-- form -->
					
						<!-- forgot-password -->
						<div class="user-option">
							
							<div class="pull-right forgot-password">
								<a href="reset-password">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
						</div>
					</div>
				</div>
			
	</section><!-- home banner -->

	
	</body>

	
	
	
	
	
	
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
    <script src="js/outer.js"></script>

    <script src="js/switcher.js"></script>
    



    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
	
  </body>
</html>