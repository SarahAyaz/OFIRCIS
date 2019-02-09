

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OFIR & CIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href=".plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="plugins/custom.css">
    <link rel="icon" href="images/ico/favicon1.ico"> 

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
    <a href="police-dashboard" class="logo">
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
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
             
              <span class="hidden-xs">{{Session::get('psname')}}</span>
            </a>
           
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
             

                  {{Session::get('psname')}} - {{Session::get('address')}}
                 
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="signout-login" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
          <a href="police-dashboard">
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
           
            <li><a href="search-fir"><i class="fa fa-circle-o"></i> Search FIR</a></li>
            <li><a href="search-criminal"><i class="fa fa-circle-o"></i> Search Criminal</a></li>
           
          </ul>
        </li>

         <li class="treeview">
          <a href="add-criminal">
            <i class="fa fa-edit"></i> <span>Add Criminal</span>
           
          </a>
        
        </li>
        <li>
          <a href="search-fir">
            <i class="fa fa-th"></i> <span>Verify FIR</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a href="search-fir">
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
            <li><a href="fir-pending"><i class="fa fa-circle-o"></i> Pending</a></li>
            <li><a href="fir-inprocess"><i class="fa fa-circle-o"></i> In-process</a></li>
            <li><a href="fir-closed"><i class="fa fa-circle-o"></i> Closed</a></li>
       
          </ul>
        </li>
      

        <li><a href="help"><i class="fa fa-book"></i> <span>Help</span></a></li>
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
              <div class="form-group">
              <ol class="breadcrumb">
       <input type="button" onclick="location.href='{{route('verify.fir2')}}'" class="btn" style= "background-color: #3C8DBC; width: 150px;color: white;margin-left: 170px;" value="FIR info">
        <input type="button" onclick="location.href='prosecution';" class="btn" style= "background-color: #3C8DBC;width: 150px;color: white"  value="Prosecution">
        <input type="button" onclick="location.href='investigation-officer';" class="btn" style= "background-color: #3C8DBC;width: 150px;color: white"  value="Investigation Officer">
        <input type="button" onclick="location.href='witness-info';" class="btn" style= "background-color: #3C8DBC;width: 150px;color: white"  value="Witness Info">
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
            @if($inv_officer->count()>0)
            @foreach ($inv_officer as $i)
            
            <form role="form" action="add-officer" method="POST">
              <div class="box-body">
               
                <div class="form-group @if ($errors->has('no')) has-error @endif" style="width: 450px;float: left;">
                  <label> Officer O.No </label>
                <input type="text" class="form-control" placeholder="Officer O.No" name="no" value="{{$i->inv_off_ono}}">
                @if ($errors->has('no')) <p class="help-block">{{ $errors->first('no') }}</p> @endif
              </div>
                <div class="form-group @if ($errors->has('oname')) has-error @endif" style="width: 450px;float: right;">
                  <label> Officer Name </label>
                <input type="text" class="form-control" placeholder="Officer Name" name="oname" value="{{$i->inv_off_name}}" >
              @if ($errors->has('oname')) <p class="help-block">{{ $errors->first('oname') }}</p> @endif
                </div>

                 <div class="form-group @if ($errors->has('cnic')) has-error @endif">
                  <label style="width: 450px;"> CNIC </label>
                <input type="text" class="form-control" placeholder="CNIC" name="cnic" value="{{$i->inv_off_cnic}}">
                @if ($errors->has('cnic')) <p class="help-block">{{ $errors->first('cnic') }}</p> @endif
              </div> 

              </div>
              <!-- /.box-body -->
              
              <div class="box-footer text-center" >
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-primary" value="Update">

              </div>
            </form>
            @endforeach
            @endif
            
            @if($inv_officer->count()==0)

            <form role="form" action="add-officer" method="POST">
              <div class="box-body">
               
                <div class="form-group @if ($errors->has('no')) has-error @endif" style="width: 450px;float: left;">
                  <label> Officer O.No </label>
                <input type="text" class="form-control" placeholder="Officer O.No" name="no" value="">
                @if ($errors->has('no')) <p class="help-block">{{ $errors->first('no') }}</p> @endif
              </div>
                <div class="form-group @if ($errors->has('oname')) has-error @endif" style="width: 450px;float: right;">
                  <label> Officer Name </label>
                <input type="text" class="form-control" placeholder="Officer Name" name="oname" value="" >
              @if ($errors->has('oname')) <p class="help-block">{{ $errors->first('oname') }}</p> @endif
                </div>

                 <div class="form-group @if ($errors->has('cnic')) has-error @endif">
                  <label style="width: 450px;"> CNIC </label>
                <input type="text" class="form-control" placeholder="CNIC" name="cnic" value="">
                @if ($errors->has('cnic')) <p class="help-block">{{ $errors->first('cnic') }}</p> @endif
              </div> 

              </div>
              <!-- /.box-body -->
              
              <div class="box-footer text-center" >
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-primary" value="Add">

              </div>
            </form>
  @endif
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
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Select 2 -->
<script src="plugins/select2/select2.min.js"></script>
<script type="text/javascript">
  $('select').select2();
</script> 

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
