
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OFIR & CIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
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
  <!-- ******************************************************************************************************************************************* -->
   <header class="main-header">
    <!-- Logo -->
    <a href="admin-dashboard" class="logo">
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
              <span class="hidden-xs">Admin IT Dept</span>

            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin IT Dept
                 
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="admin&12login" class="btn btn-default btn-flat">Sign out</a>
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
          <p>Admin IT Dept </p>
          <a href="admin-dashboard"><i class="fa fa-circle text-success"> Online</i>
 </a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="admin-dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
       
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage PS Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-PS"><i class="fa fa-circle-o"></i> Create New Account</a></li>
            <li><a href="View-PS"><i class="fa fa-circle-o"></i> Show Accounts</a></li>
            <li><a href="add-range-ps"><i class="fa fa-circle-o"></i> Add Range</a></li>
           
          </ul>
        </li>
       <li>
          <a href="rights">
            <i class="fa fa-envelope"></i> <span>Rights For PS</span>
           
          </a>
        </li>
        <li>
          <a href="view-request">
            <i class="fa fa-envelope"></i> <span>View Requests</span>
           
          </a>
        </li>

        <li>
          <a href="sms-service">
            <i class="fa fa-envelope"></i> <span>SMS Service</span>
           
          </a>
        </li>

        <li><a href="help-admin"><i class="fa fa-book"></i> <span>Help</span></a></li>
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Dashboard
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <div class="container user-form">
      <div class="row">
        <div class="col-md-11">
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Police Station</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="add-ps-acc" method="POST">
              <div class="box-body">
                
               <div class="form-group @if ($errors->has('psname')) has-error @endif" style="width: 450px; float: left;">
                  <label>Police Station Name</label>
                  <input type="text" class="form-control" name="psname" placeholder="Police Station Name">
                
                </div>
                <div class="form-group @if ($errors->has('psphno')) has-error @endif" style="width: 450px; float: right;">
                  <label>Police Station Phone</label>
                  <input type="text" class="form-control" name="psphno" placeholder="Phone Number">

                 @if ($errors->has('psphno')) <p class="help-block">{{ $errors->first('psphno') }}</p> @endif  
      
                </div>
               
                 <div class="form-group @if ($errors->has('plotno')) has-error @endif" style="width: 450px; float: left;">
                   
                  <label> Plot No </label>
                <input type="text" class="form-control" name="plotno" placeholder="Plot No">
                @if ($errors->has('plotno')) <p class="help-block">{{ $errors->first('plotno') }}</p> @endif  
      
              </div> 
                <div class="form-group @if ($errors->has('area')) has-error @endif" style="width: 450px; float: right;">
                  <label> Area </label>
                <input type="text" class="form-control" name="area" placeholder="Area">
                @if ($errors->has('area')) <p class="help-block">{{ $errors->first('area') }}</p> @endif  
      
              </div> 
              

                <div class="form-group  @if ($errors->has('province')) has-error @endif" style="width: 450px;float: left;">
                  <label> Province </label>
                  <select class="form-control" name="province" id="province" placeholder="Province">
                    
               <option value="0">-Select Province-</option>
                @foreach($province as $add )
                 <option value="{{$add->province}}">{{$add->province}}</option>
                 @endforeach
                 
                </select>
                @if ($errors->has('province')) <p class="help-block">{{ $errors->first('province') }}</p> @endif
              </div>

                <div class="form-group @if ($errors->has('city')) has-error @endif" style="width: 450px;float: right;">
                  <label> City </label>
                  <select class="form-control" id="city" name="city" placeholder="city">
                    
               <option value="0">-Select City-</option>
                </select>
                @if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
              
                </div>  

                  <div class="form-group @if ($errors->has('district')) has-error @endif" style="width: 450px; float: left;">
                  <label> District </label>
                  <select  id="district" class="form-control" placeholder="District" name="district">
               <option value="0">-Select District-</option>
                
               </select>
               @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
            
                </div> 


                <div class="form-group @if ($errors->has('town')) has-error @endif" style="width: 450px; float: right;">
                  <label> Town </label>
                  <select  id="town" class="form-control" placeholder="Town" name="town">
               <option value="0">-Select Town-</option>
                
               </select>
               @if ($errors->has('town')) <p class="help-block">{{ $errors->first('town') }}</p> @endif
            
                </div> 
                <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
  

  function changeCity(){  

    $(document).on('change','#province',function(){

      //console.log("Correct");
      var prov_name=$(this).val();
      
    //  console.log(prov_name);
      $.ajax({
                type:'get',
                 url:'{{URL::to('FindCity')}}',
                 data:{'pname':prov_name},
                 success:function(data){
            //         console.log('success');
          //         console.log(data);
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
  //    console.log("Correct");
      var city=$(this).val();     
  //    console.log(city);
      $.ajax({
        type:'get',
        url:'{{URL::to('FindDistrict')}}',
        data:{'cname':city},
        success:function(data){
  //        console.log('success');
  //        console.log(data);
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


  //<!-- end for district and city -->

  //<!--start for town -->
     
  function changeTown(){
    $(document).on('change','#district',function(){
  //    console.log("Correct");
      var district=$(this).val();     
    //  console.log(district);
      $.ajax({
        type:'get',
        url:'{{URL::to('FindTown')}}',
        data:{'dname':district},
        success:function(data){  
    //  console.log('success');
    //  console.log(data);
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




 $(document).ready(function(){  

        changeCity();
        changeDistrict();
        changeTown();
       
  });
  </script>

                <div class="form-group @if ($errors->has('psuname')) has-error @endif" style="width: 450px; float: left;">
                  <label>User Name</label>
                  <input type="text" class="form-control" placeholder="User Name" name="psuname">
                   @if ($errors->has('psuname')) <p class="help-block">{{ $errors->first('psuname') }}</p> @endif
            
                </div>
                <div class="form-group @if ($errors->has('password')) has-error @endif" style="width: 450px; float: right;">
                  <label>Password</label>
                  <input type="text" class="form-control" placeholder="Password" name="password">
                   @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            
                </div> 

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" '"  class="btn btn-primary" style="width: 100px;" value="Add Range"/>
              </div>


            </form>
          </div>

        </div>
      </div>
    </div>


  </div>
  
  <!-- /.content-wrapper -->
 
      <!-- /.tab-pane -->
    
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






<!-- AJAX for populalting Address combobox -->
  
  
</body>
</html>
