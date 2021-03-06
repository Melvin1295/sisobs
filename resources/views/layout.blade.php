<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Observatorio | @section('module')Dashboard @show</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/vendor/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="/vendor/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/vendor/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/vendor/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE fonts OpenSans-->
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" />
  <link href="/css/styleFondo.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/vendor/ngprogress/ngProgress.css">

    <link href="/vendor/jquery-ui/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />

     <!-- <link href="/vendor/angular-bootstrap/ui-bootstrap-csp.css" rel="stylesheet" type="text/css" /> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @section('base_url')
    @show
    @section('css-customize')
    @show



  </head>
  <body class="skin-blue sidebar-mini ">
    <div class="wrapper ">

      <header class="main-header ">
        <!-- Logo -->
        <a href="/" class="logo" >
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CP</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" ><img src="/images/logotipo.png" style="height:30px;"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top"  role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas"  role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">



              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{Auth()->user()->image}}" class="user-image" alt="User Image" />
                  <span class="hidden-xs"> @if(!empty(Auth()->user())){{Auth()->user()->name}} @else Not user @endif</span>
                  <!--
                  @if(!empty(Auth::user()))
                  {{Auth::user()->name}}
                  @else
                  {{'No estas logueado'}}
                  @endif
                  </span>
                  -->
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{Auth()->user()->image}}" class="img-circle" alt="User Image" />
                    <p>
                    @if(!empty(Auth()->user()))
                      {{Auth()->user()->name}}
                      <small>Miembro desde {{Auth()->user()->created_at}}</small>
                    <p class="text-muted text-center">{{Auth()->user()->email}}</p>
                      @else
                        Not user
                        <small>Miembro desde --</small>
                      @endif
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/users/edit/{{Auth()->user()->id}}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="/auth/logout" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar menu vertical-->
      <aside class="main-sidebar" >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{Auth()->user()->image}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>@if(!empty(Auth()->user())){{Auth()->user()->name}} @else Not user @endif</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <?php $role = Auth()->user()->role_id; ?>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Navegación</li>
            <li><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
            @if($role == 1)
            <li><a href="/reclamos"><i class="fa fa-circle-o"></i>Reclamo </a></li>

                  <li><a href="/contacts"><i class="fa fa-circle-o"></i>Contáctanos </a></li>
            <li class=""><a href="/users" ><i class="fa fa-circle-o"></i>Usuarios</a></li>
             <li><a href="/ubigeos"><i class="fa fa-circle-o"></i>Ubigeos </a></li>

            <li><a href="/menus"><i class="fa fa-circle-o"></i>Menus </a></li>
                  <li><a href="/sliders"><i class="fa fa-circle-o"></i>Slider </a></li>
                  
                  <li><a href="/provinces"><i class="fa fa-circle-o"></i>Provincias </a></li>
                  <li><a href="/authors"><i class="fa fa-circle-o"></i>Autores </a></li>
                  <li><a href="/publishers"><i class="fa fa-circle-o"></i>Publicaciones </a></li>
                  <li><a href="/editorials"><i class="fa fa-circle-o"></i>Editoriales </a></li>
                  
                  <li><a href="/indicators"><i class="fa fa-circle-o"></i>Indicadores </a></li>
                  <li><a href="/colaboradores"><i class="fa fa-circle-o"></i>Colaboradores </a></li>

                  <li><a href="/tipomedicamentos"><i class="fa fa-circle-o"></i>Tipo Medicamentos </a></li>
                  <li><a href="/medicamentos"><i class="fa fa-circle-o"></i>Medicamentos </a></li>
                  @endif
                  
                  <li><a href="/reportemedicamentos"><i class="fa fa-circle-o"></i>Reporte Medicamentos </a></li>
                  <li><a href="/excels"><i class="fa fa-circle-o"></i>Carga Datos Indicadores </a></li>

                  


            <!--@if($role == 1)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i>
                <span>Configuración</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li class=""><a href="/users" ><i class="fa fa-circle-o"></i>Usuarios</a></li>
                  

              </ul>
            </li>-->
            <!-- @endif -->
            
           

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>



                    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
            @yield('content')
        

        @if(Request::is('/'))

          <section class="content-header">
            <h1>
              Bienvenidos!
              <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
              <li class="active"><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

            </ol>
          </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-home"></i> Obstetras del Perú</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">

                  </div><!-- /.row -->
                  <br>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                          <img src="/images/slideshow/slide-02.jpg"  alt="" class="img-thumbnail"/>
                      

                      </div><!-- /.box -->
                    </div>
                  </div>


                </div><!-- ./box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
        </section>
          @endif




        </div>
  <!-- END Content Wrapper. Contains page content -->


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.01
        </div>
        <strong>Copyright &copy; 2017 <a href="#"></a>.</strong> Todos los derechos reservados.
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
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3> 
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
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
                <a href="javascript::;">
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
                <a href="javascript::;">
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
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked />
                </label>                
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right" />
                </label>                
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>                
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="/vendor/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/vendor/jquery-ui/ui/minified/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript">
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/vendor/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Slimscroll -->
    <script src="/vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/vendor/adminlte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/vendor/adminlte/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="/vendor/adminlte/dist/js/demo.js" type="text/javascript"></script>

    <!--  <script src="/dev2/socket.io/socket.io.js"></script> -->
  <!-- bower:js -->
  <script src="/vendor/angular/angular.js"></script>
  <script src="/vendor/moment/moment.js"></script>
  <script src="/vendor/angular-route/angular-route.js"></script>
  <script src="/vendor/angular-sanitize/angular-sanitize.js"></script>
  <script src="/vendor/angular-ui-router/release/angular-ui-router.js"></script>
  <script src="/vendor/angular-socket-io/socket.js"></script>
    <script src="/vendor/ng-phpdebugbar/ng-phpdebugbar.js"></script>
    <script src="/vendor/angucomplete/angucomplete.js"></script>
    <script src="/vendor/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="/vendor/ngprogress/build/ngprogress.min.js"></script>
  <!-- endbower -->
  <!-- inject:js -->
    <script src="/js/app/routes.js"></script>
    <script src="/js/app/servicesglobal.js"></script>

    <script src="/js/app/stores/app.js"></script>
    <script src="/js/app/stores/controllers.js"></script>
    <script src="/vendor/angular-ui-slider/src/slider.js"></script>
    <!-- endinject -->
    @section('js-customize')
    @show
<script>

$(document).ready(function(){
    $("body").on("click", '#myTabs2',function(e){
        //alert("The paragraph was clicked.");
        e.preventDefault()
                          $(this).tab('show')
    });
});
</script>

  </body>
</html>
