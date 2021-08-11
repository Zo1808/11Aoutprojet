<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}" defer></script>
  
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet">
    <link href="{{asset('lib/advanced-datatable/css/demo_table_jui.css')}}" rel="stylesheet">
    <link href="{{asset('lib/advanced-datatable/css/jquery.dataTables.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/table-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>
  <script src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('datatables/dataTables.checkboxes.min.js')}}"></script>
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  
  <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('datatables/dataTables.checkboxes.css')}}">
</head>
<body>
    <div id="app">
        <main class="py-4">
        <section id="container">
    <section id="main-content">
      <section class="wrapper">
      <br/>
      <br/>
      <br/>
      
      &nbsp &nbsp&nbsp&nbsp&nbsp @yield('content')
      </section>
    </section>
 
    
  </section>
           
        </main>
    </div>
 
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/jquery.sparkline.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('lib/common-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
<!--script for this page-->
<script src="{{asset('lib/sparkline-chart.js')}}"></script>
<script src="{{asset('lib/zabuto_calendar.js')}}"></script>
</body>
@yield('js')

</html>
