<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">

        <!-- plugins css -->
        <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/PACE/themes/blue/pace-theme-minimal.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" />

        <!-- page plugins css -->
        <link rel="stylesheet" href="{{asset('assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/nvd3/build/nv.d3.min.css')}}" />

        <!-- core css -->
        <link href="{{asset('assets/css/ei-icon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <scr src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scr>
     <scr src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></scr>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    
    </head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
           @include('includes.sidenav')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                @include('includes.header')
                <!-- Header END -->

                <!-- Side Panel START -->
                @include('includes.sidepanel')
                <!-- Side Panel END -->

             @yield('content')

                <!-- Footer START -->
                @include('includes.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="{{asset('assets/js/vendor.js')}}"></script>

    <!-- page plugins js -->
    <script src="{{asset('assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/js/maps/jquery-jvectormap-us-aea.js')}}"></script>
    <script src="{{asset('assets/vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/vendors/nvd3/build/nv.d3.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery.sparkline/index.js')}}"></script>
    <script src="{{asset('assets/vendors/chart.js/dist/Chart.min.js')}}"></script>
    
  <!-- <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" /> -->



    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- page js -->
    <script src="{{asset('assets/js/dashboard/dashboard.js')}}"></script>

</body>

</html>
