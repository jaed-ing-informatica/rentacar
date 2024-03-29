<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RENTACAR | www.rentacarmaule.cl</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--<link rel="stylesheet" href="{{asset('css/bootstrap2.min.css')}}">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link href="{{asset('select2-4.0.13/dist/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('select2-4.0.13/dist/js/select2.full.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <style>
      @media only screen and (max-width: 800px) {
	#unseen table td:nth-child(2), 
	#unseen table th:nth-child(2) {display: none;}
}
 
@media only screen and (max-width: 640px) {
	#unseen table td:nth-child(4),
	#unseen table th:nth-child(4),
	#unseen table td:nth-child(7),
	#unseen table th:nth-child(7),
	#unseen table td:nth-child(8),
	#unseen table th:nth-child(8){display: none;}
}
      .my-flex-container {
        border: 2px solid green;
        height: 100px;
        margin-bottom: 20px;
      }
      .my-flex-container-column {
        border: 2px solid green;
        height: 200px;
        margin-bottom: 20px;
      }
      .my-flex-item {
        background-color: lightgrey;
        border: 1px dotted grey;
        height: 48px;
      }
      .my-flex-item-2 {
        background-color: lightgrey;
        border: 1px dotted grey;
        height: 96px;
      }
    </style>
    
    <style>
      .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }


    div#container {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

div video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;








    .fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
    </style>
    

  </head>
  <body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">

      <header class="main-header left">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="navbar-brand">
        
        <img src="{{URL::asset('/img/logo_rentacar.png')}}" alt="profile Pic" height="50" width="50">
        <!--<img src="/img/logo_rentacar.png" alt="RENTACAR" class="brand-image img-circle elevation-3"
           style="text-align:left;
            opacity: .8;
             min-height:50px;
              max-height:50px;
               position: static;
                margin: 5px;
                left: 5px;
                 padding-top: 0px;">-->
         
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p><h3>RENTACAR</h3></p>
                    <p>
                      www.rentacarmaule.com 
                      <small>{{ Auth::user()->email }}</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">

                   
                    <div class="pull-right">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                          </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- menu vehiculos -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-automobile"></i>
                <span>Vehiculos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('vehiculos/create') }}"><i class="fa fa-car"></i> Registrar</a></li>
              <li><a href="{{ url('vehiculos') }}"><i class="fa fa-car"></i> Lista</a></li>
              </ul>
            </li>
            <!-- menu Clientes -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-group"></i>
                <span>Clientes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('clientes/create') }}"><i class="fa fa-child"></i> Agregar Cliente</a></li>
              <li><a href="{{ url('clientes') }}"><i class="fa fa-car"></i> Lista</a></li>
              </ul>
            </li>
            <!-- menu Conductores -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Conductores</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('conductores/create') }}"><i class="fa fa-street-view"></i> Agregar Conductor</a></li>
                <li><a href="{{ url('conductores') }}"><i class="fa fa-street-view"></i> Lista</a></li>
              </ul>
            </li>
            <!-- menu kilometros -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span>Kilometros</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('kilometros') }}"><i class="fa fa-circle-o"></i> Lista</a></li>
               
              </ul>
            </li>
             <!-- menu kilometros -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span>Precios Arriendos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('precios') }}"><i class="fa fa-circle-o"></i> Lista</a></li>
               
              </ul>
            </li>
             <!-- menu kilometros -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span>Mantenimientos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('mantenimiento') }}"><i class="fa fa-circle-o"></i> Lista</a></li>
               
              </ul>
            </li>
             <!-- menu kilometros -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span>Arrendados</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('arrendados') }}"><i class="fa fa-circle-o"></i> Lista</a></li>
               
              </ul>
            </li>
             <!-- menu kilometros -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('usuarios') }}"><i class="fa fa-circle-o"></i> Lista</a></li>
               
              </ul>
            </li>
             <!-- menu kilometros -->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span>Reportes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('reportes') }}"><i class="fa fa-circle-o"></i> Lista</a></li>
               
              </ul>
            </li>
            <!--
                 <li><a href="/vehiculos"><i class="fa fa-circle-o"></i> Stock</a></li>
                <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Arriendos</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>-->
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
     <!-- <div class="content-wrapper" style="background-image: url(img/vehiculo6.jpg); background-size:cover;background-repeat: no-repeat;" >-->
      <div class="content-wrapper" >  
     
        <!-- Main content -->
        <section class="content">
     <!--     <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{ url('/img/videos/video.MP4') }}" type="video/mp4">
        
    </video>-->
    <!--<source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4"> antes del cierre video-->
    <div class="container h-150">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          
          <div class="row">
            <div class="col-md-12">
              <!--<div class="box" style="opacity: 0.87; background-image: url('/img/fondeks/mar.jpg'); background-repeat: no-repeat;  background-size:cover;">-->
                <div class="box" style="opacity: 0.87;">
                <!-- /.box-header -->
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title">Sistema de RENTACAR</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                      </div>
                      <!-- /.fin_box-header -->
                      <!-- /.box-body -->
                      <div class="box-body">
                  	    <div class="row">
	                  	    <div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
                              @yield('content')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
                  		</div> <!-- /.fin_box-body -->
                  	</div><!-- /.box -->
                </div><!-- /.fin_col -->
              </div><!-- /.row -->
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div> <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0.0
        </div>
        <strong>Derechos de Copia &copy; 2020 <a href="www.rentacarmaule.com">RENTACAR</a>.</strong> Todos los derechos reservados.
      </footer>

    <script src="{{ asset('js/jQuery-2.1.4.min.js') }}"></script>
    
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/vistaPrevia.js') }}"></script>
    <script src="{{ asset('js/comunasyregiones.js') }}"></script>
    <script src="{{ asset('js/marcasymodelos.js') }}"></script>

  <!-- <script src="{{ asset('js/jquery.slim.min.js') }}"></script>-->
  </body>
</html>
