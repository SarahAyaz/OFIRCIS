<!DOCTYPE html>
<html lang="en" class="no-js cookie_used_true">
  
<head>

  
  

  

  <title>OFIR & CIS</title>

  <link href='//fonts.googleapis.com/css?family=Lato:400,900,400italic,700italic' rel='stylesheet'>

  <link rel="stylesheet" media="all" href="bootstrap\css\login css\form.css" />
  <link rel="stylesheet" media="all" href="bootstrap\css\login css\global-MQ.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
  <link id="preset" rel="stylesheet" href="css/presets/preset1.css">  
    <link rel="stylesheet" href="css/responsive.css">

  

  <link rel="stylesheet" media="screen" href="bootstrap\css\login css\page-MQ.css" />

  <link rel="stylesheet" media="screen" href="bootstrap\css\login css\signup.css" />



  <link rel="shortcut icon" type="image/x-icon" href="" />
  <link rel="mask-icon" type="" href="" color="#111" />
   

   <link rel="icon" href="images/ico/favicon1.ico"> 

</head>

<body class="body-login">

  
 

<div class="login-wrap" style="margin-top: 120px;">

  <header class="login-header">
    <h1 style="color: #f5e1a6">Criminal Information System <br></h1>
    <h2 class="little-big-header">
    Log in!</h2>
  </header>

  <div class="flex-grid">

    <div class="login-half left">

      <div class="login-area">
     

 @if ($errors->has(''))
                 <div class="alert alert-success">
                 @foreach ($errors->all() as $error)
                     {{ $error }}<br>        
                   @endforeach
                  </div>
                 @endif


                 @if ($alert = Session::get('alert-success'))
                <div class="alert alert-danger">
               {{ $alert }}
              </div>
            @endif

                @if ($alert = Session::get('alert-invalid'))
                <div class="alert alert-danger">
               {{ $alert }}
              </div>
            @endif
            



 <form action="police-login" method="POST">


            

            
            
              <div class="form-group  @if ($errors->has('uname')) has-error @endif ">
              
              
                <input type="text" class="form-control" placeholder="Username" name='uname'> 
                @if ($errors->has('uname')) <p class="help-block">{{ $errors->first('uname') }}</p> @endif  
                

              </div>
              <div class="form-group  @if ($errors->has('password')) has-error @endif ">
                <input type="password" class="form-control" placeholder="Password" name='password'>
                @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif  
                

              </div>

              
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
              <input type="submit" style="width: 100px; background-color:#f5e1a6; "  class="btn" value="login"/>
              
            </form><!-- form -->
            <img style="float: left; margin-top:-220px; margin-left: 400px; position: fixed;" src="dist\img\logo.png" >

       
      </div>

    </div>

  </div>
</div>

<input type="hidden" id="init-data" value="{&quot;__mobile&quot;:false,&quot;__cookieUsed&quot;:true,&quot;__turnOffJS&quot;:false,&quot;__CPDATA&quot;:{&quot;host&quot;:&quot;codepen.io&quot;,&quot;asset_host&quot;:&quot;production-assets.codepen.io&quot;,&quot;embed_asset_host&quot;:&quot;production-assets.codepen.io&quot;,&quot;host_port&quot;:&quot;&quot;,&quot;host_secure_subdomain&quot;:&quot;s.&quot;,&quot;iframe_sandbox&quot;:&quot;allow-scripts allow-pointer-lock allow-same-origin allow-popups allow-modals allow-forms&quot;},&quot;__env&quot;:&quot;prod&quot;,&quot;__browserName&quot;:&quot;Firefox&quot;,&quot;__remote_addr&quot;:&quot;111.88.188.116&quot;,&quot;__user&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;Captain Anonymous&quot;,&quot;username&quot;:&quot;anon&quot;,&quot;base_url&quot;:&quot;/anon/&quot;,&quot;current_team_id&quot;:0,&quot;paid&quot;:false,&quot;plan_type&quot;:&quot;free&quot;,&quot;session_hash&quot;:&quot;&quot;},&quot;__fbAppID&quot;:&quot;123845574663321&quot;,&quot;__fbErrors&quot;:{&quot;not_authorized&quot;:&quot;Log in failed because you haven&#39;t authorized CodePen to use your Facebook account. Please try again and click \&quot;Okay\&quot; when Facebook asks for you to grant permissions.&quot;,&quot;not_logged_in&quot;:&quot;Log in failed because you aren&#39;t logged in to Facebook. Please try again and log in to Facebook when prompted.&quot;},&quot;__createAccountWithGitHub&quot;:null}">

  <script src="bootstrap\css\login css\everypage.js"></script>


  
  <script src="bootstrap\css\login css\login.js"></script>

  <script src="bootstrap\css\login css\index.js"></script>






  

</body>

</html>
