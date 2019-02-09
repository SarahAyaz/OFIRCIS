
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
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/icofont.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/slidr.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('assets/css/AdminLTE.min.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/presets/preset1.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	 <link rel="icon" href="{{ URL::asset('images/ico/favicon.ico') }}">
 
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/imassets/ages/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/ico/apple-touch-icon-57-precomposed.png">
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
					<a class="navbar-brand" href="{{route('user.profile')}}"><img class="img-responsive" src="{{ URL::asset('images/logo.png') }}" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li ><a href="{{route('user.profile')}}">Home</a>
								
							</li>
							<li><a href="{{route('victim.contactus')}}">CONTACT US</a></li>
							
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					
					<!-- sign-in -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="{{route('sign.out')}}"> Sign Out </a></li>
						
					</ul><!-- sign-in -->					

					<a href="{{route('fir.form')}}" class="btn">Submit New FIR</a>
					<h4></h4>
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
					
						<h2> FIR DETAILS </h2>
						@foreach ($fir_detail as $i)
					
						<table border="2" align="center">
							<col width="250">
                            <col width="250">
                            
							<tr>
							<td><b><center>FIR id:</center></b></td>
							<td>{{$fid}}</td>
							</tr>
							<tr>
							<td><b><center>Date of Incident:</center></b></td>
							
							<td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->date_of_incident)->format('Y-m-d') }}</td> 
							
							</tr>
					
							<tr>
							<td><b><center>Time of Incident:</center></b></td>
							<td>{{$i->time_of_incident}}</td>

							
							
							</tr>
							<tr>
							<td><b><center>Place of Incident:</center></b></td>
							<td>{{$i->place_of_incident}}</td>
							</tr>
							<tr>
							<td><b><center>Details by Victim:</center></b></td>
							<td><textarea rows="4" cols="30" style="border: none" disabled="true">{{$i->detail_by_victim}}</textarea></td>
							</tr>
							<tr>
							<td><b><center>Details by Police Officer:</center></b></td>
							<td><textarea rows="4" cols="30" style="border: none" disabled="true">{{$i->detail_by_police}}</textarea></td>
							</tr>
							<tr>
							<td><b><center>FIR Status:</center></b>
							</td>
							 @if ($i->fir_status == 1) <td>Pending</td>
                     			@else 
                    			<td>In Process </span></td>
                     		@endif
							</tr>
							<tr>
							<td><b><center>FIR Type:</center></b></td>
							 @if ($i->fir_type == 1) <td>Open</td>
                     			@else 
                    			<td>Close </span></td>
                     		@endif
							</tr>
							<td><b><center>FIR Submission Date:</center></b></td>
							
							<td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->fir_submit_date)->format('Y-m-d') }}</td>
							</tr>
							</table>
							<br>
							<h2>Police Station Details</h2>
							<table border="2" align="center">
							<col width="250">
                            <col width="250">
							<tr>
							<td><b><center>Police Officer Name:</center></b></td>
							<td>{{$i->psw_officer}}</td>
							</tr>
							<td><b><center>Police Station Name:</center></b></td>
							<td>{{$i->ps_name}}</td>
							</tr>
							</table>
							<br>
							<h2>Investigation Officer Details</h2>
							<table border="2" align="center">
							<col width="250">
                            <col width="250">
							<tr>
							<td><b><center>Investigation Officer Name:</center></b></td>
							<td>{{$i->inv_off_name}}</td>
							</tr>
							<td><b><center>CNIC:</center></b></td>
							<td>{{$i->inv_off_cnic}}</td>
							</tr>
							<tr>
							<td><b><center>Officail No:</center></b></td>
							<td>{{$i->inv_off_ono}}</td>
							</tr>
							</table>
							<br>
							<h2>Prosecution Details</h2>
							<table border="2" align="center">
							<col width="250">
                            <col width="250">
							<tr>
							<td><b><center>Prosecution Lawyer:</center></b></td>
							<td>{{$i->pros_lawyer}}</td>
							</tr>
							<td><b><center>Defence Lawyer:</center></b></td>
							<td>{{$i->def_lawyer}}</td>
							</tr>
							<tr>
							<td><b><center>Judge:</center></b></td>
							<td>{{$i->judge}}</td>
							</tr>
							<tr>
							<td><b><center>Court:</center></b></td>
							<td>{{$i->court}}</td>
							
							</tr>
							<tr>
							<td><b><center>Judgement:</center></b></td>
							<td>{{$i->judgement}}</td>
							</tr>
							<tr>
							<td><b><center>Judgement Date:</center></b></td>
							
							<td></td> 
							</tr>
	
	
	
							</table>
                                                        
														
                               	@endforeach                         
							
                                                         
															
							<a href="{{ route('user.profile') }}"  class="btn" >Back to Profile</a>	
						
						<!-- checkbox -->
										
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	

		</div><!-- container -->
	</section><!-- signup-page -->
	
	
   	
    
  </body>
</html>