
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
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="width:600px;">
					<div class="user-account" style="width:600px;">
						<h2>Online FIR</h2>

						@if ($errors->has(''))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
						<form action="fir-submit" method="POST" enctype="multipart/form-data">
						<!-- select 1-->
						<div class="form-group @if ($errors->has('ctype')) has-error @endif">  
						<label>Crime Type</label>
							<select  class="form-control" name="ctype">

								<option value="0">-Select one-</option>
								@foreach($crimetype as $add )
							 <option style="text-align:center" value="{{$add->crime_type}}">{{$add->crime_type}}</option>
								 @endforeach
							</select>
							@if ($errors->has('ctype')) <p class="help-block">{{ $errors->first('ctype') }}</p> @endif
						<!-- select 1 -->
						</div>


							<div class="form-group @if ($errors->has('date')) has-error @endif" style="width: 200px;float: left;">
							<label>Date of Incident</label>
								<input type="date" class="form-control" name="date" placeholder="Date Of Incident" style="width: 200px;float: left;">
								@if ($errors->has('date')) <p class="help-block">{{ $errors->first('date') }}</p> @endif
							</div>
							
                                <div class="form-group  @if ($errors->has('time')) has-error @endif" style="width: 200px;float: right;">
								<label>Time of Incident</label>
								<input type="time" class="form-control" name="time" placeholder="Time of Incident" style="width: 200px;float: right;">
								@if ($errors->has('time')) <p class="help-block">{{ $errors->first('time') }}</p> @endif
							</div>
							
							
							<label>Place of Incident</label>
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

                                                         <!-- select 2 -->
                       


								<!-- select 2 -->
                     		 <div class="form-group @if ($errors->has('city')) has-error @endif" style="float: left;">
                                 <select id="city" class="form-control"  style="width: 200px;float: left;" name="city">
                              	<option value="0">-Select City-</option>
								</select>
								@if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
							</div>
							<!-- select 2 -->




							
                              <div class="form-group  @if ($errors->has('district')) has-error @endif"  style="width: 200px;float: right;">
   
                                                      <!-- select 3 -->
                                <select id="district" class="form-control" style="width: 200px;float: right;" name="district">
							 <option value="0">-Select District-</option>
								
							 </select>
							 @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
							 </div>

							<!-- select 3 -->
							 <div class="form-group  @if ($errors->has('town')) has-error @endif"  style="width: 200px;float: left;">
   
	                         <!-- select 4 -->
                             <select class="form-control" style="width: 200px;float: left;" id="town" name="town">
								<option value="0">Select Town</option>
								
							</select>
							@if ($errors->has('town')) <p class="help-block">{{ $errors->first('town') }}</p> @endif
							 </div>

							 <div class="form-group  @if ($errors->has('area')) has-error @endif"  style="width: 200px;float: right;">
   
							 <select class="form-control" style="width: 200px;float: right;" id="area" name="area">
								<option value="0">Select Area</option>
								
							</select>
							@if ($errors->has('area')) <p class="help-block">{{ $errors->first('area') }}</p> @endif
							</div>
                            <div class="form-group @if ($errors->has('detail')) has-error @endif">
		                   <label>Details of Incident</label>
								<textarea cols="35" rows="6" class="form-control" wrap="soft" name="detail"></textarea>
							@if ($errors->has('detail')) <p class="help-block">{{ $errors->first('detail') }}</p> @endif
							
							</div>
							<label>Record an audio</label><br>
							<!-- <ul id="recordingslist"></ul> -->
							<audio controls id="audio" src="" name="audio"></audio>
							<div>
							<input type="hidden" id="audiofile" name="audiofile" value="">
							<a class="button recordButton" id="record">Record</a>
      						<a class="button disabled one" id="pause">Pause</a>
      						<a class="button disabled one" id="stop">Reset</a>
							<a class="button disabled one" id="play">Play</a>
							<a class="button disabled one" id="stop">Stop</a>							
							</div><br>
							<canvas id="level" height="200" width="500"></canvas>
							 <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="Submit" onclick="location.href='fir-verify';"  class="btn" value="Submit FIR"/>
							<input type="button" onclick="location.href='myprofile';"  class="btn" value="Back to Profile"/>
						</form>
						<!-- checkbox -->
										
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->
	
	
   	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
	
	
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/scrollup.min.js"></script>
    <script src="js/price-range.js"></script> 
    <script src="js/jquery.countdown.js"></script>   
    
	<script src="js/switcher.js"></script>
	<script src="src/recorder.js"></script>
	<script src="src/Fr.voice.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/app.js"></script>


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
                     city.append('<option value="'+ '-select city-' +'">'+'-Select City-'+'</option>')    
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
					district.append('<option>'+'-Select District-'+'</option>')
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

	// function save()
	// {
	// 	alert("savin");
	// 	$data_uri=document.getElementById('audio').getAttribute("src");
	// 	document.getElementById('imgdata'+counter).setAttribute("value",data_uri);
	// 	console.log($data_uri);
	// }
	//<!-- end for district and city -->

	//<!--start for town -->
     
	function changeTown(){
		$(document).on('change','#district',function(){
	//		console.log("Correct");
			var district=$(this).val();			
		//	console.log(district);
			$.ajax({
				type:'get',
				url:'{{URL::to('FindTown')}}',
				data:{'dname':district},
				success:function(data){
		//	console.log('success');
		//	console.log(data);
					var town=$('#town');
					town.empty();
					town.append('<option value="'+ '-Select Town-' +'">'+'-Select Town-'+'</option>')
					$.each(data,function(i,district){
				        town.append('<option value="' + district.t_name + '">' + district.t_name + '</option>')
					});
				},
				error: function(){
					console.log('error');
				}
			});
		});
	}	


//function to get area from ranges and police stations


function changeArea(){
		$(document).on('change','#town',function(){
	//		console.log("Correct");
			var town=$(this).val();			
			//console.log(town);
			$.ajax({
				type:'get',
				url:'{{URL::to('FindArea')}}',
				data:{'tname':town},
				success:function(data){
			//console.log('success');
			//console.log(data);
					var area=$('#area');
					area.empty();
					area.append('<option value="'+ '-Select Area-' +'">'+'-Select Area-'+'</option>')
					$.each(data,function(i,town){
				        area.append('<option value="' + town.ps_range + '">' + town.ps_range + '</option>')
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
        changeTown();
        changeArea();
	});
	</script>

	<style>
		.button{
			display: inline-block;
			vertical-align: middle;
			margin: 0px 5px;
			padding: 5px 12px;
			cursor: pointer;
			outline: none;
			font-size: 13px;
			text-decoration: none !important;
			text-align: center;
			color:#fff;
			background-color: #4D90FE;
			background-image: linear-gradient(top,#4D90FE, #4787ED);
			background-image: -ms-linear-gradient(top,#4D90FE, #4787ED);
			background-image: -o-linear-gradient(top,#4D90FE, #4787ED);
			background-image: linear-gradient(top,#4D90FE, #4787ED);
			border: 1px solid #4787ED;
			box-shadow: 0 1px 3px #BFBFBF;
		}
		a.button{
			color: #fff;
		}
		.button:hover{
			box-shadow: inset 0px 1px 1px #8C8C8C;
		}
		.button.disabled{
			box-shadow:none;
			opacity:0.7;
		}
    canvas{
      display: block;
    }
		</style>
  </body>
</html>