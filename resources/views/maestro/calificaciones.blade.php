<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Calificacion</title>

 <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

  <!-- Bootstrap CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
  <link href="{{asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link href="{{asset('css/widgets.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" >
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/lity.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.0/css/rowGroup.dataTables.min.css">
 
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
 	<div class="row">
        <div class="col-md-12 portlets">
            <div class="panel panel-default">
            	<div class="panel-heading">
                	<h3 class="panel-title">x</h3>
                		<div class="panel-actions">
                  		<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  		<a href="#" class="wclose"><i class="fa fa-times"></i></a>
                		</div>
              	</div>
              	<div class="panel-body">
                <section>
                	<h2>Calificacion</h2>
  					@if($existe == null)
     					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalsub">Subir Calificacion</button> <br><br>
  
  					@else
    					<button class="btn btn-warning" data-toggle="modal" data-target="#editModalsubedi" onclick="fun_sub('{{$idr}}')" id="editarsub" value="{{route('user.viewsub')}}">Editar Calificacion </button>
  					@endif
 				@include('maestro.subir')
 				@include('maestro.editacalificacion')
                </section>
              </div>
            </div>
        </div>
    </div>

  <!-- javascripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ URL::asset('js/jquery.js')}}"></script>
  <script src="{{ URL::asset('js/metodos.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ URL::asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="{{ URL::asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{ URL::asset('js/owl.carousel.js')}}"></script>
 
    <!--script for this page only-->
    <script src="{{ URL::asset('js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{ URL::asset('js/jquery.customSelect.min.js')}}"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="{{ URL::asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ URL::asset('js/xcharts.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.autosize.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.placeholder.min.js')}}"></script>
    <script src="{{ URL::asset('js/gdp-data.js')}}"></script>
    <script src="{{ URL::asset('js/morris.min.js')}}"></script>
    <script src="{{ URL::asset('js/sparklines.js')}}"></script>
    <script src="{{ URL::asset('js/charts.js')}}"></script>
    <script src="{{ URL::asset('js/lity.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.0/js/dataTables.rowGroup.min.js"></script>
</body>
</html>
