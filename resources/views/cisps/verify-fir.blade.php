

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OFIR & CIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}">
  <!-- Ionicons -->

  <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- daterange picker -->

  <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
 
  <link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/datepicker3.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->

  <link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
 
  <link rel="stylesheet" href="{{ URL::asset('plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->

  <link rel="stylesheet" href="{{ URL::asset('.plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->

  <link rel="stylesheet" href="{{ URL::asset('plugins/select2/select2.min.css') }}">
  <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <link rel="stylesheet" href="{{ URL::asset('dist/css/skins/_all-skins.min.css') }}">


  <link rel="stylesheet" href="{{ URL::asset('plugins/custom.css') }}">
  
    <link rel="icon" href="{{ URL::asset('images/ico/favicon1.ico') }}">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- jQuery 2.2.3 -->
<script src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
 <!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('js/query-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Morris.js charts -->
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
<script src="{{ URL::asset('plugins/morris/morris.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ URL::asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- jvectormap -->
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>

<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('plugins/knob/jquery.knob.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js') }}"></script>

<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>     

<!-- datepicker -->
<script src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>


<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>


<!-- Slimscroll -->
<script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->
<script src="{{ URL::asset('plugins/fastclick/fastclick.js') }}"></script>


<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/app.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('dist/js/pages/dashboard.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>




<!-- Select 2 -->
<script src="{{ URL::asset('plugins/select2/select2.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- ******************************************************************************************************************************************* -->
   <header class="main-header">
    <!-- Logo -->
    <a href="{{route('police.dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CI</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Criminal Info</b> System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
         <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src= "{{ URL::asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
             
              <span class="hidden-xs">{{Session::get('psname')}}</span>
            </a>
           
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ URL::asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
             

                  {{Session::get('psname')}} - {{Session::get('address')}}
                 
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="{{route('log.out')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
          <p>{{Session::get('psname')}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>
 </a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{route('police.dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Search FIR & Criminal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="{{route('search.fir')}}"><i class="fa fa-circle-o"></i> Search FIR</a></li>
            <li><a href="{{route('search.criminal')}}"><i class="fa fa-circle-o"></i> Search Criminal</a></li>
           
          </ul>
        </li>

         <li class="treeview">
          <a href="{{route('add.criminal')}}">
            <i class="fa fa-edit"></i> <span>Add Criminal</span>
           
          </a>
        
        </li>
        <li>
          <a href="{{route('search.fir')}}">
            <i class="fa fa-th"></i> <span>Verify FIR</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="{{route('search.fir')}}">
            <i class="fa fa-table"></i> <span>Complete FIR Details</span>
            <span class="pull-right-container">
              
            </span>
          </a>
         
        </li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-laptop"></i>
            <span>FIR's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('fir.pending')}}"><i class="fa fa-circle-o"></i> Pending</a></li>
            <li><a href="{{route('fir.inprocess')}}"><i class="fa fa-circle-o"></i> In-process</a></li>
            <li><a href="{{route('fir.closed')}}"><i class="fa fa-circle-o"></i> Closed</a></li>
       
          </ul>
        </li>
      

        <li><a href="{{route('help')}}"><i class="fa fa-book"></i> <span>Help</span></a></li>
        <li><li>
        <li></li>
        <li></i> <span> </span></a></li>
        <li></i> <span> </span></a></li>
        <li><span> </span></li>
        <li></i> <span></span></a></li>
        <li></i> <span></span></a></li>

        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!--********************************************************************************************************************************************* -->
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Dashboard
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('police.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<!--start of for each loop to show fir info data-->
 @foreach($firinfo as $i)
    <div class="container user-form">
      <div class="row">
        <div class="col-md-11">
           <div class="box box-primary">
            <div class="box-header with-border">
              <div class="form-group">
              <ol class="breadcrumb">
        
        <a  class="btn" style= "background-color: #3C8DBC; width: 150px;color: white;margin-left: 170px;"  href="{{route('verify.fir2')}}">FIR info</a>
        <input type="button" onclick="location.href='{{route('prosecution')}}';" class="btn" style= "background-color: #3C8DBC;width: 150px;color: white"  value="Prosecution">
        <input type="button" onclick="location.href='{{route('inv.officer')}}';" class="btn" style= "background-color: #3C8DBC;width: 150px;color: white"  value="Investigation Officer">
        <input type="button" onclick="location.href='{{route('witness.info')}}';" class="btn" style= "background-color: #3C8DBC;width: 150px;color: white"  value="Witness Info">
      </ol>
             </div>
            </div>
            @if ($alert = Session::get('alert-success'))
                <div class="alert alert-success">
               {{ $alert }}
              </div>
            @endif

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action='{{route('valid.verify.fir')}}' method="POST">
             
                <!--error loop-->
                @if ($errors->has(''))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

        <!--end loop error-->

             <div class="box-body">
               
                <div class="form-group @if ($errors->has('id')) has-error @endif">

               

                  <label> ID </label> 
                  <input type="text" class="form-control"  value= '{{$i->fir_id}}' name="id" style="width: 150px;" disabled>
                 
                 
                  @if ($errors->has('id')) <p class="help-block">{{ $errors->first('id') }}</p> @endif
                 
              </div>

               
                <div class="form-group">
                  <label> Attached Audio:</label> 
                  
                  &nbsp&nbsp&nbsp <a href={{asset('Audio/F002.mp3')}} download><i class="fa fa-download"></i> Download</a>

              </div>



              
               <div class="form-group  @if ($errors->has('date')) has-error @endif" style="width: 450px;float: left;">
                <label> Date of Incident </label>
                <input type="text" class="form-control" value= "{{ Carbon\Carbon::parse($i->date_of_incident)->format('d-m-Y') }}" name="date" disabled>
                @if ($errors->has('date')) <p class="help-block">{{ $errors->first('date') }}</p> @endif
                </div> 

                <div class="form-group  @if ($errors->has('time')) has-error @endif" style="width: 450px;float: right;">
                            <label>Time of Incident</label>
                <input type="time" class="form-control" placeholder="Time of Incident"  value= '{{$i->time_of_incident}}' name="time" disabled>
                @if ($errors->has('time')) <p class="help-block">{{ $errors->first('time') }}</p> @endif
              </div>
               @endforeach

               <div class="form-group" >
                  <label style="width: 450px;"> Place of Incident </label>
              </div>

              <div class="form-group @if ($errors->has('province')) has-error @endif">
                  <label> Province </label>
                  <select class="form-control "  name="province" id="province"  placeholder="Province">
                
              <option value="0">{{$i->province}}</option>    
             

 
                  </select>
                  @if ($errors->has('province')) <p class="help-block">{{ $errors->first('province') }}</p> @endif
                </div>   
                <div class="form-group @if ($errors->has('city')) has-error @endif" style="width: 450px;float: left;">
                  <label> City </label>
                  <select class="form-control" disabled placeholder="city" id="city" name="city">
                    <option value="0">{{$i->city}}</option>   
                    
                
                    
                  </select>
                  @if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
                </div> 

                <div class="form-group @if ($errors->has('district')) has-error @endif" style="width: 450px;float: right;">
                  <label> District </label>
                  <select class="form-control" disabled placeholder="District" id="district" name="district">
                    <option value="0">{{$i->district}}</option> 
                


                    </select>
                    @if ($errors->has('district')) <span class="help-block">{{ $errors->first('district') }}</span> @endif
                    </div>

                    <div class="form-group @if ($errors->has('place')) has-error  @endif">
                   
                <input type="text" class="form-control" placeholder="" value="{{$i->place_of_incident}}" name="place" disabled>
               
                  @if ($errors->has('place')) <p class="help-block">{{ $errors->first('place') }}</p> @endif
                    </div>
                
                <div class="form-group @if ($errors->has('detailvictim')) has-error @endif" >
                  <label style="width: 450px;">Detail by Victim</label>
                  <textarea class="form-control" rows="10" cols="75" name="detailvictim"  placeholder="Enter ..." disabled>{{$i->detail_by_victim}} </textarea>
                  @if ($errors->has('detailvictim')) <p class="help-block">{{ $errors->first('detailvictim') }}</p> @endif
                </div>

                <div class="form-group  @if ($errors->has('detailps')) has-error @endif">
                  <label style="width: 450px;">Detail by Police</label>
                  <textarea class="form-control" rows="10" cols="75" name="detailps" placeholder="Enter ...">{{$i->detail_by_police}}</textarea>
                  @if ($errors->has('detailps')) <p class="help-block">{{ $errors->first('detailps') }}</p> @endif
                </div>

                 <div class="form-group @if ($errors->has('ctype')) has-error @endif">
                  <label style="width: 450px;"> Crime Type </label>
                  <select class="form-control" placeholder="Crime Type " name="ctype" id="crimetype">
                   <option value="0">{{$i->crime_type}}</option>
              

                

                    
                  </select>
                  @if ($errors->has('ctype'))  <p class="help-block">{{ $errors->first('ctype') }}</p> @endif
                </div>   

                <div class="form-group @if ($errors->has('psoname')) has-error @endif" style="width: 450px;float: left;">
                  <label> Police Officer Name</label>
                <input type="text" class="form-control" value="{{$i->psw_officer}}" placeholder="Police Officer" name="psoname">
                @if ($errors->has('psoname')) <p class="help-block">{{ $errors->first('psoname') }}</p> @endif
              </div>
                <div class="form-group @if ($errors->has('psname')) has-error @endif" style="width: 450px;float: right;">
                  <label> Police Station Name </label>
                <input type="text" class="form-control" placeholder="Police Station" value="{{$i->ps_name}}" name="psname" disabled>
                @if ($errors->has('psname')) <p class="help-block">{{ $errors->first('psname') }}</p> @endif
              
                </div>  

              </div>
              <!-- /.box-body -->


              <div class="box-footer text-center" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" onclick="location.href='prosecution'"  class="btn btn-primary" value="Update"/>
                <input type="button" onclick="changeCrimeType()"   class="btn btn-primary" value="edit"/>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>


  </div>
  
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; -2017 <a href="#">Flexura FYP 2017</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


  <script type="text/javascript">
  

   function changeCrimeType(){  
   
    if (confirm('Are you really want to Edit this record ?')){
     
     
//function to fill crimetype


    
      $.ajax({
        type:'get',
        url:'{{URL::to('FindCtype')}}',
       
        success:function(data){
  //        console.log('success');
  //        console.log(data);
          var ctype=$('#crimetype');
          ctype.empty();
          ctype.append('<option value="' + 0 + '">'+'-Select Crime Type-'+'</option>')
          $.each(data,function(i,crime){
                ctype.append('<option value="' + data[i] + '">' + data[i] + '</option>')
          });
        },
        error: function(){
          console.log('error');
        }
      });

  } //endif






     
    

    
    else{
      alert("OK");
    }

  }

   
  </script>


</body>
</html>
