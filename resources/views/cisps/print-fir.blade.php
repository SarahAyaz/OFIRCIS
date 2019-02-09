


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
<body onload="window.print();" ">
<div class="wrapper">

<!-- ******************************************************************************************************************************************* -->
 
  <!--********************************************************************************************************************************************* -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- ****
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

-->
    
            <form role="form">
              <div class="box-body">
                <div class="row text-center">

              <div class="col-xs-12 table-responsive">
        <h3>FIR DETAILS</h3>
         <table border="2" align="center">

              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>FIR id:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Date of Incident:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Time of Incident:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Place of Incident:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Details by Victim:</center></b></td>
              <td><textarea rows="4" cols="30" style="border: none" readonly></textarea></td>
              </tr>
              <tr>
              <td><b><center>Details by Police Officer:</center></b></td>
              <td><textarea rows="4" cols="30" style="border: none" readonly></textarea></td>
              </tr>
              <tr>
              <td><b><center>FIR Status:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>FIR Type:</center></b></td>
              <td></td>
              </tr>
              <tr><td><b><center>FIR Submission Date:</center></b></td>
              <td></td>
              </tr>
              </tbody></table>
              
              <h3>POLICE STATION DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Police Officer Name:</center></b></td>
              <td></td>
              </tr>
              <tr><td><b><center>Police Station Name:</center></b></td>
              <td></td>
              </tr>
              </tbody></table>
              
              <h3>INVESTIGATION OFFICER DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Investigation Officer Name:</center></b></td>
              <td></td>
              </tr>
              <tr><td><b><center>CNIC:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Phone No:</center></b></td>
              <td></td>
              </tr>
              </tbody></table>
              
              <h3>PROSECUTION DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Prosecution Lawyer:</center></b></td>
              <td></td>
              </tr>
              <tr><td><b><center>Defence Lawyer:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Judge:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Court:</center></b></td>
              <td></td>
              
              </tr>
              <tr>
              <td><b><center>Judgement:</center></b></td>
              <td></td>
              </tr>
              <tr>
              <td><b><center>Judgement Date:</center></b></td>
              <td></td>
              </tr>
              </tbody></table>
              
              <h3>CRIMINAL DETAILS</h3>
              <table border="2" align="center">
              <colgroup><col width="250">
                            <col width="250">
              </colgroup><tbody><tr>
              <td><b><center>Criminal Name:</center></b></td>
              <td></td>
              </tr>
              <tr><td><b><center>Crime:</center></b></td>
              <td></td>
              </tr>
              </tbody></table>
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


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
   
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
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
