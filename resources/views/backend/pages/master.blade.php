<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blank</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backend/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{url('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{url('backend/css/style-responsive.css')}}" rel="stylesheet" />
     <link href="{{url('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{url('backend/css/owl.carousel.css')}}" type="text/css">
    <!-- Custom styles for this template -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  @include('backend.blocks.header')
  <section id="container" class="">
      <!--main content start-->
      <section id="main-content">
         
              <!-- page start-->
              @yield('content')
              <!-- page end-->
          
      </section>
      <!--main content end-->
      <!--footer start-->
      @include('backend.blocks.footer')
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{url('backend/js/jquery.js')}}"></script>
     <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
     <script src="{{url('backend/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
     <script src="{{url('backend/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('backend/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{url('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('backend/js/owl.carousel.js')}}" ></script>
    <script src="{{url('backend/js/jquery.customSelect.min.js')}}" ></script>
    <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    
    <script src="{{url('backend/js/respond.min.js')}}" ></script>

    <!--common script for all pages-->
    <script src="{{url('backend/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    <script src="{{url('backend/js/sparkline-chart.js')}}"></script>
    <script src="{{url('backend/js/easy-pie-chart.js')}}"></script>
    <script src="{{url('backend/js/count.js')}}"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  </body>
</html>
