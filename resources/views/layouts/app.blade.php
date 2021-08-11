<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GESTNOTE</title>

    <!-- Scripts -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}" defer></script>
    <link rel='shortcut icon' href='{{asset("favicon.png")}}' type='image/x-icon'>
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
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>GEST<span>NOTE</span></b></a>
     
      <div class="top-menu">
      
        <ul class="nav pull-right top-menu">
        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('homeLogin') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{('Register') }}</a>
                                </li>
                            @endif
        @else
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @guest
     
    @else
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/IESSI.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">
          @guest
           
          @else
              {{Auth::user()->name}}
          @endguest
          </h5>
           
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="active fa fa-desktop"></i>
              <span>DEPARTEMENTS</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('departement')}}">Listes des département</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="">
              <i class="fa fa-book"></i>
              <span>FILIERES</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('filiere')}}">Liste des filières</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>CLASSE</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('classe')}}">Liste</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a  href="#">
              <i class="fa fa-user"></i>
              <span>ETUDIANTS</span>
              </a>

            <ul class="sub">
              <li><a href="{{url('etudiant')}}">Listes des Etudiants</a></li>
            </ul>

          <ul class="sub">
              <li><a href="{{url('zffi')}}">Extraire Fiche de Présence</a></li>
            </ul>

            
            <ul class="sub">
              <li><a href="{{url('card')}}">Generer Carte</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="active fa fa-desktop"></i>
              <span>UNITE D'ENSEIGNEMENT</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('unite')}}">Listes des UE</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>MATIERES</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('matiere')}}">Liste</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>NOTES</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('saisir/note')}}">Saisir Notes</a></li>
              <li><a href="{{url('ListeNoteSaisi')}}">Les Notes Saisie</a></li>
              <li><a href="{{url('results')}}">Extraire Relevé de note</a></li>
              <li><a href="{{url('ListeResultats')}}">Extraire Resultats</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>PARAMETRE</span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
              <ul class="sub">
              <li><a href="{{url('comment')}}">Commentaires</a></li>
              <li><a href="{{url('responsable')}}">Responsable</a></li>
              <li><a href="{{url('listeNV')}}">Voir les notes NV</a></li>
              <li><a href="{{url('typeExam')}}">Année d'examen</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    @endguest
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      <br/>
      <br/>
      <br/>
     
       @yield('content')
      
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
