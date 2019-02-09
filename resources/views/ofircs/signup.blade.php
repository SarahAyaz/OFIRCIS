
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
					<a class="navbar-brand" href="ofirclientsite"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li ><a class="active" href="ofirclientsite">Home</a>
								
							</li>
							<li><a href="contact-us">CONTACT US</a></li>
							
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- signup-page -->
	<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="width:600px;">
					<div class="user-account" style="width:600px;">
						 <h2> Create Your Account</h2>

                          @if ($errors->has(''))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif


						<form action="vic_signup"   method="POST">
					<div class="form-group @if ($errors->has('fname')) has-error @endif" style="width: 200px;float: left;">
		   <input type="text" class="form-control" placeholder="First-Name" name="fname" style="width: 200px;float: left;">
							@if ($errors->has('fname')) <p class="help-block">{{ $errors->first('fname') }}</p> @endif	
							</div>
                                                        <div class="form-group  @if ($errors->has('lname')) has-error @endif" style="width: 200px;float: right;">
								<input type="text" class="form-control" placeholder="Last-Name" name="lname" style="width: 200px;float: right;">
								@if ($errors->has('lname')) <p class="help-block">{{ $errors->first('lname') }}</p> @endif
							</div>

							<div class="form-group @if ($errors->has('gender')) has-error @endif">

								<select class="form-control"  name="gender" id="province" >
							
							
								<option value="0">-Select Gender-</option>
							
								 <option value="Male">Male</option>
								 <option value="Female">Female</option>
							</select>
								@if ($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
							</div>
							<div class="form-group @if ($errors->has('cnic')) has-error @endif">
								<input type="CNIC" class="form-control" placeholder="CNIC" name="cnic">
								@if ($errors->has('cnic')) <p class="help-block">{{ $errors->first('cnic') }}</p> @endif
							</div>
							<div class="form-group @if ($errors->has('phoneno')) has-error @endif">
								<input type="PhoneNo" class="form-control" placeholder="PhoneNo" name="phoneno">
								@if ($errors->has('phoneno')) <p class="help-block">{{ $errors->first('phoneno') }}</p> @endif
							</div>
                                                    <div class="form-group @if ($errors->has('email')) has-error @endif">
								<input type="text" class="form-control" placeholder="Email" name="email">
								@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
							</div>
							<div class="form-group @if ($errors->has('password')) has-error @endif" >
								<input type="password" class="form-control" placeholder="Password" name="password">
								@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
							</div>
                                                  <div class="form-group @if ($errors->has('cpassword')) has-error @endif">
							<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
							@if ($errors->has('cpassword')) <p class="help-block">{{ $errors->first('cpassword') }}</p> @endif
							</div>
							<div class="form-group @if ($errors->has('province')) has-error @endif">
							<!-- select 1-->
								<select class="form-control"  name="province" id="province" >
							
							
								<option value="0">-Select Province-</option>
								@foreach($province as $add )
								 <option value="{{$add->province}}">{{$add->province}}</option>
								 @endforeach
								 
								</select>
								@if ($errors->has('province')) <p class="help-block">{{ $errors->first('province') }}</p> @endif
							
								</div>
							<!-- select 1 -->
                     		 <!-- select 2 -->
                     		 <div class="form-group @if ($errors->has('city')) has-error @endif" style="float: left;">
                                 <select id="city" class="form-control"  style="width: 200px;float: left;" name="city">
                              	<option value="0">-Select City-</option>
								</select>
								@if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
							</div>
							<!-- select 2 -->
							
                            <!-- select 3 -->
                            <div class="form-group @if ($errors->has('district')) has-error @endif" style="float: right;">
                            <select id="district" class="form-control" style="width: 200px;float: right;" name="district">
							 <option value="0">-Select District-</option>
								
							 </select>
							 @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
							 </div>
							<!-- select 3 -->

							 <div class="form-group @if ($errors->has('town')) has-error @endif" style="float: left;">
							<input type="text" class="form-control" placeholder="Enter Town" style="width: 200px;float: left;" name="town">
							@if ($errors->has('town')) <p class="help-block">{{ $errors->first('town') }}</p> @endif
	                             
							</div>
                            
                             <div class="form-group @if ($errors->has('area')) has-error @endif" style="float: right;">                          
                            <input type="text" class="form-control" placeholder="Enter Area" style="width: 200px;float: right;" name="area">
							@if ($errors->has('area')) <p class="help-block">{{ $errors->first('area') }}</p> @endif
								
							</div>

							<div class="form-group @if ($errors->has('street')) has-error @endif" style="float: left;">
	                                                
                    		<input type="text" class="form-control" placeholder="Enter Street" style="width: 200px;float: left;" name="street">

                     		@if ($errors->has('street')) <p class="help-block">{{ $errors->first('street') }}</p> @endif
								
							</div>

							<div class="form-group @if ($errors->has('hno')) has-error @endif" style="float: right;">
	                        
                   			 <input type="text" class="form-control" placeholder="Enter House No" style="width: 200px;float: right;" name="hno">
                   			 @if ($errors->has('hno')) <p class="help-block">{{ $errors->first('hno') }}</p> @endif
								
							</div>

							
                   			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
								
							<input type="submit"  onclick="location.href='myprofile';"  class="btn" value="Register Now"/>	
						</form>
						<!-- checkbox -->
										
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->
	
	
   	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	
	

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/scrollup.min.js"></script>

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

	<!-- AJAX for populalting Address combobox -->
	
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
	

	function changeCity(){	
		$(document).on('change','#province',function(){
			//console.log("Correct");
			var prov_name=$(this).val();
			
		//	console.log(prov_name);
			$.ajax({
                type:'get',
                 url:'{{URL::to('FindCity')}}',
                 data:{'pname':prov_name},
                 success:function(data){
            //         console.log('success');
          //       	 console.log(data);
                     var city=$('#city');
                     city.empty();
                     city.append('<option value="0">'+'-Select City-'+'</option>')    
                 	 $.each(data, function(i, province) { 

                          
                 	 city.append('<option value="' + province.city + '">' + province.city + '</option>')
                 	 });

                 },
                 error: function(){
                        console.log('error');
                 }
			});
		});

	}

	function changeDistrict(){
		$(document).on('change','#city',function(){
	//		console.log("Correct");
			var city=$(this).val();			
	//		console.log(city);
			$.ajax({
				type:'get',
				url:'{{URL::to('FindDistrict')}}',
				data:{'cname':city},
				success:function(data){
	//				console.log('success');
	//				console.log(data);
					var district=$('#district');
					district.empty();
					district.append('<option value="0">'+'-Select District-'+'</option>')
					$.each(data,function(i,city){
				        district.append('<option value="' + city.district + '">' + city.district + '</option>')
					});
				},
				error: function(){
					console.log('error');
				}
			});
		});
	}	

     
     $(document).ready(function(){  

        changeCity();
        changeDistrict();
	});
	</script>
  </body>
</html>