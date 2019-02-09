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
 
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->

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
              <h3 class="box-title">Add Criminal</h3>
            </div>
            <!-- /.box-header -->


 


              @if ($errors->has(''))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif


            <!-- form start -->
            <form  action="criminal_add" method="POST">


              <div class="box-body">
                <div class="form-group @if ($errors->has('fname')) has-error @endif" style="width: 450px; float: left;">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="First Name" name="fname">
                  @if ($errors->has('fname')) <p class="help-block">{{ $errors->first('fname') }}</p> @endif
                </div>
                <div class="form-group @if ($errors->has('lname')) has-error @endif" style="width: 450px; float: right;">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" name="lname">
                  @if ($errors->has('lname')) <p class="help-block">{{ $errors->first('lname') }}</p> @endif
                </div>
                <div class="form-group @if ($errors->has('father')) has-error @endif" style="width: 450px; float: left;">
                  <label>Father Name</label>
                  <input type="text" class="form-control" placeholder="Father Name" name="father">
                  @if ($errors->has('father')) <p class="help-block">{{ $errors->first('father') }}</p> @endif
                </div>

                <div class="form-group @if ($errors->has('mother')) has-error @endif" style="width: 450px; float: right;">
                  <label>Mother Name</label>
                  <input type="text" class="form-control" placeholder="Mother Name" name="mother">
                  @if ($errors->has('mother')) <p class="help-block">{{ $errors->first('mother') }}</p> @endif
                </div>
                <div class="form-group @if ($errors->has('cnic')) has-error @endif" style="width: 450px; float: left;">
                  <label>CNIC</label>
                  <input type="text" class="form-control" placeholder="00000-0000000-0" name="cnic">
                  @if ($errors->has('cnic')) <p class="help-block">{{ $errors->first('cnic') }}</p> @endif
                </div>

                <div class="form-group @if ($errors->has('nationality')) has-error @endif" style="width: 450px;float: right;">
                  <label> Nationality </label>
                  <input type="text" class="form-control" placeholder="Nationality" name="nationality">
                  @if ($errors->has('cnic')) <p class="help-block">{{ $errors->first('cnic') }}</p> @endif
                </div> 

                <div class="form-group @if ($errors->has('religion')) has-error @endif" style="width: 450px;float: left;">
                  <label> Religion </label>
                  <input type="text" class="form-control" placeholder="Religion" name="religion">
                  @if ($errors->has('religion')) <p class="help-block">{{ $errors->first('religion') }}</p> @endif
                </div>    

                <div class="form-group @if ($errors->has('cast')) has-error @endif" style="width: 450px; float: right;">
                  <label> Cast </label>
                <input type="text" class="form-control" placeholder="Cast" name="cast">
                @if ($errors->has('cast')) <p class="help-block">{{ $errors->first('cast') }}</p> @endif
              </div>  
               <div class="form-group @if ($errors->has('language')) has-error @endif" style="width: 450px;float: left;">
                <label> Language </label>
                <input type="text" class="form-control" placeholder="Language" name="language" >
                @if ($errors->has('language')) <p class="help-block">{{ $errors->first('language') }}</p> @endif
              </div>




              <div class="form-group @if ($errors->has('province')) has-error @endif" style="width: 450px;float: right;">
                  <label> Province </label>
                  <select class="form-control"  id="province"  name="province" placeholder="Province">
                    
               <option value="0">-Select Province-</option>
                @foreach($province as $add )
                 <option value="{{$add->province}}">{{$add->province}}</option>
                 @endforeach     
                  </select>
             @if ($errors->has('province')) <p class="help-block">{{ $errors->first('province') }}</p> @endif
                  </div>
            

               <div class="form-group @if ($errors->has('city')) has-error @endif" style="width: 450px;float: left;">
                  <label> City </label>
                  <select class="form-control"  id="city" name="city">
                    
                 <option value="0">-Select City-</option>
                    
                  </select>
                  @if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
                </div>  

              <div class="form-group  @if ($errors->has('district')) has-error @endif" style="width: 450px;float: right;">
                  <label> District </label>
                   <select class="form-control" id="district" name="district">
                <option value="0">-Select District-</option>
                
                    </select>
                    @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
                    </div>
               
                          <script src="js/jquery.min.js"></script>
<script type="text/javascript">

function changeCity(){  
    $(document).on('change','#province',function(){
   //   console.log("Correct");
      var prov_name=$(this).val();
      
  //    console.log(prov_name);
      $.ajax({
                type:'get',
                 url:'{{URL::to('FindCity')}}',
                 data:{'pname':prov_name},
                 success:function(data){
    //                 console.log('success');
    //               console.log(data);
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
 //     console.log("Correct");
      var city=$(this).val();     
 //     console.log(city);
      $.ajax({
        type:'get',
        url:'{{URL::to('FindDistrict')}}',
        data:{'cname':city},
        success:function(data){
 //         console.log('success');
 //         console.log(data);
          var district=$('#district');
          district.empty();
          district.append('<option value="'+ '-select District-' +'">'+'-Select District-'+'</option>')
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


  
                  
                <div class="form-group @if ($errors->has('hno')) has-error @endif" style="width: 450px; float: left;">
                  <label>House No.</label>
                  <input type="text" class="form-control" placeholder="House No" name="hno">
                  @if ($errors->has('hno')) <p class="help-block">{{ $errors->first('hno') }}</p> @endif
                </div>

                <div class="form-group @if ($errors->has('street')) has-error @endif" style="width: 450px; float: right;">
                  <label>Street</label>
                  <input type="text" class="form-control" placeholder="Street" name="street">
                  @if ($errors->has('street')) <p class="help-block">{{ $errors->first('street') }}</p> @endif
                </div>
                <div class="form-group @if ($errors->has('area')) has-error @endif" style="width: 450px; float: left;">
                  <label>Area</label>
                  <input type="text" class="form-control" placeholder="Area" name="area">
                  @if ($errors->has('area')) <p class="help-block">{{ $errors->first('area') }}</p> @endif
                </div>

                <div class="form-group @if ($errors->has('town')) has-error @endif" style="width: 450px; float: right;">
                  <label>Town</label>
                  <input type="text" class="form-control" placeholder="Town" name="town">
                  @if ($errors->has('town')) <p class="help-block">{{ $errors->first('town') }}</p> @endif
                </div> 
              <div class="form-group @if ($errors->has('age')) has-error @endif" style="width: 450px;float: left;">
                <label> Age </label>
                <input type="text" class="form-control" placeholder="Age" name="age">
                @if ($errors->has('age')) <p class="help-block">{{ $errors->first('age') }}</p> @endif
              </div>  
              <div class="form-group @if ($errors->has('dob')) has-error @endif" style="width: 450px;float: right;">
                <label> Date Of Birth </label>
                <input type="date" class="form-control" name="dob"  >
                @if ($errors->has('dob')) <p class="help-block">{{ $errors->first('dob') }}</p> @endif
                 </div>
                <div class="form-group @if ($errors->has('imark')) has-error @endif" style="width: 450px;float: left;">
                  <label> Identity Mark </label>
                <input type="text" class="form-control" placeholder="Identity Mark" name="imark">
                @if ($errors->has('imark')) <p class="help-block">{{ $errors->first('imark') }}</p> @endif
              </div>
              <div class="form-group @if ($errors->has('complexion')) has-error @endif" style="width: 450px;float: right;">
                <label> Complexion </label>
                <input type="text" class="form-control" placeholder="Complexion" name="complexion">
                @if ($errors->has('complexion')) <p class="help-block">{{ $errors->first('complexion') }}</p> @endif
              </div>
                <div class="form-group @if ($errors->has('height')) has-error @endif" style="width: 450px;float: left;">
                  <label> Height </label>
                <input type="text" class="form-control" placeholder="Height" name="height" >
                @if ($errors->has('height')) <p class="help-block">{{ $errors->first('height') }}</p> @endif
              </div>
              <div class="form-group @if ($errors->has('ecolor')) has-error @endif" style="width: 450px;float: right;">
                <label> Eye color </label>
                <input type="text" class="form-control" placeholder="Eye Color" name="ecolor" >
                @if ($errors->has('ecolor')) <p class="help-block">{{ $errors->first('ecolor') }}</p> @endif
              </div>
               
                  <div class="form-group @if ($errors->has('ctype')) has-error @endif" style="width: 450px;float: left;">
                    <label> Crime Type </label>
                  <select class="form-control" name="ctype">

                <option value="0">-Select One-</option>
                @foreach($crimetype as $add )
               <option style="text-align:center" value="{{$add->crime_type}}">{{$add->crime_type}}</option>
                 @endforeach
              </select>
              @if ($errors->has('ctype')) <p class="help-block">{{ $errors->first('ctype') }}</p> @endif
              </div>
                <div class="form-group @if ($errors->has('fid')) has-error @endif" style="width: 450px;float: right;">
                  <label> FIR ID </label>
                  <input type="text" class="form-control" placeholder="FIR ID" name="fid" >
                  @if ($errors->has('fid')) <p class="help-block">{{ $errors->first('fid') }}</p> @endif
                </div>
              </div>
            

          

<!--  uploading criminal images -->

    


              <div class="box-body">
            

 <div class="form-group" style="width: 450px;">
                 <label > Criminal Pictures </label>
               </div></br>
                      
          
          
   
                <input type="hidden" id="imgdata1" name="imageData1" value="">
                
                <input type="hidden" id="imgdata2" name="imageData2" value="">
                
                <input type="hidden" id="imgdata3" name="imageData3" value="">
                
                <input type="button" id="showCamera" class="btn btn-success" value="Access Camera" onClick="setup(); $(this).hide().next().show(); ShowCamera();">
                <input type="button" id="takeSnap" class="btn btn-success" value="Take Snapshot" onClick="take_snapshot(); $(this).next().show();" style="display:none">
               <input type="button" class="btn btn-danger" value="Clear" onClick="erase_snaps()" style="display:none">
              
                <div id="my_camera"></div></br>
              </br>
                 <label  style="width: 340px;float: left;"> left </label>
                <label  style="width: 340px;float: left;"> front </label>
                <label  style="width: 325px;float: left;"> right </label>
                <div class="form-group" style="width: 340px;float: left;"> 
                 <div id='clock'>
                  <img id="pic1" name="" src="" />
                  </div>
                  @if ($errors->has('imageData1')) <p class="label-danger">{{ $errors->first('imageData1') }}</p> @endif
                  </div>
                  <div class="form-group " style="width: 325px;float: left;">
                  
                  <div id='clock1'>
                    <img id="pic2" name="" src="" />
                  </div>
                  @if ($errors->has('imageData2')) <p class="label-danger">{{ $errors->first('imageData2') }}</p> @endif
                  </div>
                  <div class="form-group" style="width: 325px;float: left;">
                  
                  <div id='clock2'>
                    <img id="pic3" name="saveimage" src=""/>
                  </div>
                  @if ($errors->has('imageData3')) <p class="label-danger">{{ $errors->first('imageData3') }}</p> @endif
                  </div>

                  <div class="form-group" style="width: 340px;float: left;">
                 <input type='file' id='getval' name="image1" style="width: 180px;" >
               </div>
               <div class="form-group" style="width: 325px;float: left;">
                 <input type='file' id='getval1' name="image2" style="width: 180px;" >
               </div>
               <div class="form-group" style="width: 325px;float: left;">
                 <input type='file' id='getval2' name="image3" style="width: 180px;" >
               </div> </br>
          <!-- <input type="file" name="image" id="file"/> -->
          <input type="hidden" value="{{ csrf_token() }}" name="_token">
          <input type="button" id="stopCamera" class="btn btn-success" value="Stop Camera" style="display:none" onClick="StopCamera();">
                </div>
           

                
                <!-- /.criminal pictures -->
<!--                 <div class="form-group" style="width: 450px;">
                 <label > Criminal Pictures </label>
               </div></br>
                <input type="button" value="Access Camera" onClick="setup(); $(this).hide().next().show();">
                <input type="button" value="Take Snapshot" onClick="take_snapshot(); $(this).next().show();" style="display:none">
                <input type="button" value="Clear" onClick="erase_snaps()" style="display:none">
                 
                <div id="my_camera"></div></br>
                 <label  style="width: 340px;float: left;"> left </label>
                <label  style="width: 340px;float: left;"> front </label>
                <label  style="width: 325px;float: left;"> right </label>
                <div class="form-group" style="width: 340px;float: left;"> 
                 <div id='clock' class="pic1">
                  </div></div>
                  <div class="form-group"style="width: 325px;float: left;">
                  
                  <div id='clock1' class="pic2">
                  </div></div>
                  <div class="form-group"style="width: 325px;float: left;">
                  
                  <div id='clock2' class="pic3" >
                  </div></div>
 -->
                    <!-- /.criminal pictures -->


                  <!-- <div class="form-group" style="width: 340px;float: left;">
                 <input type='file' id='getval' name="background-image" style="width: 180px;" >
               </div>
               <div class="form-group" style="width: 325px;float: left;">
                 <input type='file' id='getval1' name="background-image" style="width: 180px;" >
               </div>
               <div class="form-group" style="width: 325px;float: left;">
                 <input type='file' id='getval2' name="background-image"style="width: 180px;" >
               </div> </br> -->

               <!-- /.Web Cam -->
              <!-- <div class="form-group" style="width: 175px;float: left;">
                 
               </div>
               <div class="form-group" style="width: 175px;float: left;">
                 
               </div>
               <div class="form-group" style="width: 175px;float: left;">
                 
               </div> -->
               <!-- /.Web Cam -->
                 
               
              <div class="box-body">

                 <!-- /.criminal thumb prints -->
                 <div class="form-group" style="width: 450px;">
                 <label> Criminal Thumb prints </label>
               </div>
                 
                 <div id='clock3' style="width: 200px;float: left;" >
                  </div>
 
                  <div id='clock4'style="width: 200px;float: left;">
                  </div>

                  <div id='clock5' style="width: 200px;float: left;">
                  </div>
                   
                 <div id='clock6'style="width: 200px;float: left;" >
                  </div>
                  
                  
                  <div id='clock7'style="width: 200px;float: left;">
                  </div>
                  
                  
                  <div id='clock8'style="width: 200px;float: left;" >
                  </div>
                  
                 <div id='clock9' style="width: 200px;float: left;">
                  </div>
                  
                  
                  <div id='clock10' style="width: 200px;float: left;">
                  </div>
                  
                  
                  <div id='clock11' style="width: 200px;float: left;">
                  </div>
                   
                  
                  <div id='clock12' style="width: 200px;float: left;" >
                  </div>

                 <!-- /.criminal thumb prints -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center" >
                <input type="submit" onclick="location.href='search-criminal'"  class="btn btn-primary" value="Submit"/>
              </div>
            



      </div>
    </div>
 

          </div>

        </div>
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

<script src="plugins/file1/file1.js">
</script>
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

<script type="text/javascript">
function testfunction() { 

        alert('test');

}
</script>






<!-- <script src="//code.jquery.com/jquery-2.1.4.min.js"></script> -->
<script type="text/javascript" src="js/webcam.min.js"></script>

<!-- Configure a few settings and attach camera -->
   <script language="JavaScript">
    Webcam.set({
      width: 250,
      height: 250,
      image_format: 'jpeg',
      jpeg_quality: 90
    });
  </script>
<script>
var counter=0;
var picid=1;
  function setup() {
      Webcam.reset();
      Webcam.attach( '#my_camera' );
    }
function take_snapshot(){
  if(counter<3)
  {

  counter+=1;
  }
      Webcam.set({

      // final cropped size
      crop_width: 165,
      crop_height: 150,
    });
      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
        //assigning image data to hidden input type to post
        document.getElementById('imgdata'+counter).setAttribute("value",data_uri);

        // display results in page
        document.getElementById('pic'+counter).src=data_uri;
        // document.getElementsByClassName('pic'+counter)[0].innerHTML = 
        //   '<img name="saveimage" src="'+data_uri+'"/>';
      } );
    }

    //funtion to erase all snaps

     function erase_snaps() {
      //
      //remove image from display
      document.getElementById('pic'+counter).src = ''; 
      //remove image from the hidden field 
      document.getElementById('imgdata'+counter).setAttribute("value","");
      if(counter>0)
      {

      counter-=1;
      }
      //picid+=1;
      //}
    }
    function ShowCamera()
    {
      document.getElementById('getval').setAttribute('disabled','true');
      document.getElementById('getval1').setAttribute('disabled','true');
      document.getElementById('getval2').setAttribute('disabled','true');
      document.getElementById('stopCamera').style.display='block';
      document.getElementById('stopCamera').style.float='left';
    }

    function StopCamera()
    {
      Webcam.reset();
      document.getElementById('showCamera').style.display='block';
      document.getElementById('showCamera').style.float='left';
      document.getElementById('stopCamera').style.display='none';
      document.getElementById('takeSnap').style.display='none';
      document.getElementById('getval').removeAttribute('disabled');
      document.getElementById('getval1').removeAttribute('disabled');
      document.getElementById('getval2').removeAttribute('disabled');
      document.getElementById('my_camera').style.display='none';
    }
</script>
</body>
</html>
