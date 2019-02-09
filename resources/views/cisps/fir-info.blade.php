


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OFIR & CIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
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
                  <a href="{{route('sign.out')}}" class="btn btn-default btn-flat">Sign out</a>
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
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="police-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <div class="container user-form">
      <div class="row">
        <div class="col-md-11">
           <div class="box box-primary">
            <div class="box-header with-border">
             <h3 class="box-title"> FIR Info </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="row text-center">

              <div class="col-xs-12 table-responsive">
        <h3>FIR DETAILS</h3>
         <table border="2" align="center">

              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              @foreach($firinfo as $i) @endforeach
              <td><b><center>FIR id:</center></b></td>
              <td>{{$i->fir_id}}</td>
              </tr>
              <tr>
              <td><b><center>Date of Incident:</center></b></td>
              @if($i->date_of_incident=="")
              
                <td></td>
              
              @else
              
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->date_of_incident)->format('Y-m-d') }}</td>
              
              @endif
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
              <td><textarea readonly rows="4" cols="30" style="border: none">{{$i->detail_by_victim}}</textarea></td>
              </tr>
              <tr>
              <td><b><center>Details by Police Officer:</center></b></td>
              <td><textarea readonly rows="4" cols="30" style="border: none">{{$i->detail_by_police}}</textarea></td>
              </tr>
              <tr>
              <td><b><center>FIR Status:</center></b></td>
              <td>{{$i->fir_status}}</td>
              </tr>
              <tr>
              <td><b><center>FIR Type:</center></b></td>
              <td>{{$i->fir_type}}</td>
              </tr>
              <tr><td><b><center>FIR Submission Date:</center></b></td>
              @if($i->fir_submit_date=="")
                <td></td>
              @else
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->fir_submit_date)->format('Y-m-d') }}</td>
              @endif
              </tr>
              </tbody></table>
              <br>
              <h3>POLICE STATION DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Police Officer Name:</center></b></td>
              <td>{{$i->psw_officer}}</td>
              </tr>
              <tr><td><b><center>Police Station Name:</center></b></td>
              <td>{{$i->ps_name}}</td>
              </tr>
              </tbody></table>
              <br>
              <h3>INVESTIGATION OFFICER DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Investigation Officer Name:</center></b></td>
              <td>{{$i->inv_off_name}}</td>
              </tr>
              <tr><td><b><center>CNIC:</center></b></td>
              <td>{{$i->inv_off_cnic}}</td>
              </tr>
              <tr>
              <td><b><center>Officer No:</center></b></td>
              <td>{{$i->inv_off_ono}}</td>
              </tr>
              </tbody></table>
              <br>
              <h3>PROSECUTION DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Prosecution Lawyer:</center></b></td>
              <td>{{$i->pros_lawyer}}</td>
              </tr>
              <tr><td><b><center>Defence Lawyer:</center></b></td>
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
              <td><textarea readonly rows="4" cols="30" style="border: none">{{$i->judgement}}</textarea></td>
              </tr>
              <tr>
              <td><b><center>Judgement Date:</center></b></td>
              @if($i->judgement_date=="")
                <td></td>
              @else
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $i->judgement_date)->format('Y-m-d') }}</td>
              @endif
              </tr>
              </tbody></table>
              <br>
              <h3>CRIMINAL DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Criminal Name:</center></b></td>
              <td>{{$i->cr_fname}} {{$i->cr_lname}}</td>
              </tr>
              <tr><td><b><center>Crime:</center></b></td>
              <td>{{$i->cr_crime_type}}</td>
              </tr>
              </tbody></table>
              <br>
              <input type="button" onclick="location.href='verify-fir';"  class="btn btn-primary" style="width: 3cm;float: center" value="Edit"/>
              <a href="print-fir" target="_blank" style="width: 3cm; float: center" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>

        </div>
              <!--
               <div class="form-group" style="width: 450px;float: left;">
                <label> Date of incident </label>
                <input type="date" class="form-control">
                </div> 

                <div class="form-group" style="width: 450px;float: right;">
                            <label>Time of Incident</label>
                <input type="time" class="form-control" placeholder="Time of Incident">
              </div>

               <div class="form-group" >
                  <label style="width: 450px;"> Place of incident </label>
                <input type="text" class="form-control" placeholder="Place of incident">
              </div>
                
                <div class="form-group">
                  <label style="width: 450px;">Detail by victim</label>
                  <textarea class="form-control" rows="10" cols="75" placeholder="Enter ..."></textarea>
                </div>

                <div class="form-group">
                  <label style="width: 450px;">Detail by Police</label>
                  <textarea class="form-control" rows="10" cols="75" placeholder="Enter ..."></textarea>
                </div>

                 <div class="form-group">
                  <label style="width: 450px;"> FIR type </label>
                  <select class="form-control" placeholder="FIR type ">
                    <option>FIR type</option>
                    <option>Pakistan</option>
                    <option>India</option>
                    <option>Srilanka</option>
                    <option>Srilanka</option>
                    <option>Srilanka</option>
                    
                  </select>
                </div>   

                <div class="form-group" style="width: 450px;float: left;">
                  <label> PSW_Officer </label>
                <input type="text" class="form-control" placeholder="PSW_Officer">
              </div>
                <div class="form-group" style="width: 450px;float: right;">
                  <label> PS_Name </label>
                <input type="text" class="form-control" placeholder="Name" >
              
                </div>  

              -->

              </div>
              <!-- /.box-body -->

              
            </form>
          </div>

        </div>
      </div>
    </div>
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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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


<script type="text/javascript">
document.getElementById('getval').addEventListener('change', readURL, true);
function readURL(){
   var file = document.getElementById("getval").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('clock').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}</script>
<script type="text/javascript">
document.getElementById('getval1').addEventListener('change', readURL, true);
function readURL(){
   var file = document.getElementById("getval1").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('clock1').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}</script>
<script type="text/javascript">
document.getElementById('getval2').addEventListener('change', readURL, true);
function readURL(){
   var file = document.getElementById("getval2").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('clock2').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}</script>
</body>
</html>
