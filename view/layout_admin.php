/**
  Layout Admin

  */

  <!doctype html>
  <html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">

    <!--  CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard2.css">


    <style media="screen">
      /* Tamaño de la fuente general*/
        body {
          font-size: .875rem;
        }

      </style>

    <title>Agenda de Contactos</title>
  </head>

  <body>


    <!-- Barra de navegación  -->
    <nav class="navbar sticky-top navbar-dark bg-primary navbar-expand-md flex-md-nowrap">

      <!-- Nombre aplicación -->
      <a class="navbar-brand" href="#">
        <img src="address-book.svg" width="30" height="30" class="d-inline-block align-top mr-1" alt="">
        <span>Agenda de Contactos</span>
      </a><!-- /. Nombre Aplicación -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <!--span class="navbar-toggler-icon"></span-->
        <i data-feather="align-justify"></i>
      </button>
      <!-- Salir -->
      <div class="navbar-nav ml-auto dropdown d-none d-md-flex">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="power" class="mr-2"></i>Jesús Dasilva
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="font-size: .875rem;">
          <a class="dropdown-item" href="#"><i data-feather="user-check"></i>Información del usuario</a>
          <a class="dropdown-item" href="#"><i data-feather="lock"></i>Cambiar clave</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Salir</a>
        </div>
      </div><!-- /. Salir -->

    </nav><!-- /. Barra de navegación -->

    <!-- Menú para móvil-->
    <div class="bg-light">
      <div class="collapse" id="navbarToggleExternalContent">
        <nav class="nav flex-column">
          <a class="nav-link" href="resumen.html"><i data-feather="home"></i>Resumen</a></li>
          <a class="nav-link" href="grupo_buscar.html"><i data-feather="grid" class="mr-2"></i>Grupos</a>
          <a class="nav-link" href="#"><i data-feather="book-open" class="mr-2"></i>Contactos</a>
          <a class="nav-link" href="#"><i data-feather="trending-up" class="mr-2"></i>Reportes</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="#"><i data-feather="user-check"></i>Información del usuario</a>
          <a class="nav-link" href="#"><i data-feather="lock"></i>Cambiar clave</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="#"><i data-feather="help-circle" class="mr-2"></i>Ayuda</a>
          <a class="nav-link" href="#"><i data-feather="layers"></i>Acerca de</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link disabled" href="#"><i data-feather="log-out"></i>Salir</a>
        </nav>
      </div>
    </div><!-- /.Menú usuario para móvil-->

    <!-- container -->
    <div class="container-fluid">

      <!-- row -->
      <div class="row">

        <!-- Sidebar----------------------------------------------------------->
        <nav class="col-md-3 col-lg-2 bg-light d-none d-md-block sidebar pt-5">
          <div class="sidebar-sticky flex-column w-100 mt-2">
            <ul class="nav flex-column pt-1">
              <li class="nav-item">
                <a class="nav-link" href="resumen.html"><i data-feather="globe"></i>Resumen</a></li>
              <li class="nav-item">
                <a class="nav-link" href="grupo_buscar.html"><i data-feather="grid" class="mr-2"></i>Grupos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="book-open" class="mr-2"></i>Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="trending-up" class="mr-2"></i>Reportes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="help-circle" class="mr-2"></i>Ayuda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="layers"></i>Acerca de</a>
              </li>
            </ul>
            <!-- Menú Administrativo -->
            <hr>
            <p class="sidebar-heading">Administración<span data-feather="shield" class="ml-2"></span></p>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="users" class="mr-2"></i>Perfiles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i data-feather="user"></i>Usuario</a>
              </li>
            </ul><!-- /.Menú Administrativo -->
          </div>
        </nav>
        <!-- /.Sidebar--------------------------------------------------------->

        <!-- main -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <!-- Indicador-->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h4">Resumen</h1>
          </div><!-- /.Indicador-->

          <!-- row Contenido -->
          <div class="row">

            <!--/.cards------------------------------------------------------>

            <div class="col-sm-6 col-md-3 d-flex justify-content-center">
              <!-- Grupos -->
              <div class="card border-info mb-3 w-100" style="max-width: 18rem;">
                <div class="card-header text-white bg-info">
                  <p class="h6"><span data-feather="grid"></span>Grupos</p>
                </div>
                <div class="card-body text-white bg-info text-center">
                  <h5 class="card-text">Total: 5</h5>
                </div>
                <div class="card-footer text-right bg-light">
                  <p class="h6">Ver detalles<span data-feather="arrow-right-circle" class="ml-2"></span></p>
                </div>
              </div><!-- /.Grupos-->
            </div>

            <div class="col-sm-6 col-md-3 d-flex justify-content-center">
              <!-- Contactos-->
              <div class="card border-warning mb-3 w-100" style="max-width: 18rem;">
                <div class="card-header text-white bg-warning">
                  <p class="h6"><span data-feather="book-open"></span>Contactos</p>
                </div>
                <div class="card-body text-white bg-warning text-center">
                  <h5 class="card-text h-75">Total: 764</h5>
                </div>
                <div class="card-footer text-right bg-light">
                  <p class="h6">Ver detalles<span data-feather="arrow-right-circle" class="ml-2"></span></p>
                </div>
              </div><!-- /.Contactos-->
            </div>

            <div class="col-sm-6 col-md-3 d-flex justify-content-center">
              <!-- Usuarios -->
              <div class="card border-success mb-3 w-100" style="max-width: 18rem;">
                <div class="card-header text-white bg-success ">
                  <p class="h6"><span data-feather="trending-up"></span>Reportes</p>
                </div>
                <div class="card-body text-white bg-success text-center">
                  <h5 class="card-text">Total: 3</h5>
                </div>
                <div class="card-footer text-right bg-light">
                  <p class="h6">Ver detalles<span data-feather="arrow-right-circle" class="ml-2"></span></p>
                </div>
              </div><!-- /.Usuarios -->
            </div>

            <div class="col-sm-6 col-md-3 d-flex justify-content-center">
              <!-- Grupos -->
              <div class="card border-danger mb-3 w-100" style="max-width: 18rem;">
                <div class="card-header text-white bg-danger">
                  <p class="h6"><span data-feather="user"></span>Usuarios</p>
                </div>
                <div class="card-body text-white bg-danger text-center">
                  <h5 class="card-text">Total: 5</h5>
                </div>
                <div class="card-footer text-right bg-light">
                  <p class="h6">Ver detalles<span data-feather="arrow-right-circle" class="ml-2"></span></p>
                </div>
              </div><!-- /.Grupos-->
            </div>

            <!------------------------------------------------------------->

            <!-- Contenedor de tabla -->
            <div class="col-sm-12 col-md-12 d-flex justify-content-center pt-2">

              <!-- tabla -->
              <div class="card w-100 mb-3">
                <div class="card-header">
                  <span data-feather="book-open"></span>Últimos Contactos incluidos o modificados
                </div>
                <div class="card-body">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Contactos</th>
                        <th class="text-center" scope="col">Grupos</th>
                        <th class="text-center" scope="col">Fecha</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="text-center" style="width:10%;" scope="row">1</th>
                        <td>José Perez</td>
                        <td class="text-center w-25">Trabajador</td>
                        <td class="text-center w-25">23-12-2018</td>
                      </tr>
                      <tr>
                        <th class="text-center" style="width:10%;" scope="row">2</th>
                        <td>Jacob Barreto</td>
                        <td class="text-center w-25">Contratista</td>
                        <td class="text-center w-25">23-12-2018</td>
                      </tr>
                      <tr>
                        <th class="text-center" style="width:10%;" scope="row">3</th>
                        <td>Roberto Zamora</td>
                        <td class="text-center w-25">Proveedor</td>
                        <td class="text-center w-25">23-12-2018</td>
                      </tr>
                      <tr>
                        <th class="text-center" style="width:10%;" scope="row">4</th>
                        <td>Juan Garcia</td>
                        <td class="text-center w-25">Proveedor</td>
                        <td class="text-center w-25">23-12-2018</td>
                      </tr>
                      <tr>
                        <th class="text-center" style="width:10%;" scope="row">5</th>
                        <td>León Contreras</td>
                        <td class="text-center w-25">Trabajador</td>
                        <td class="text-center w-25">02-05-2018</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.tabla -- >

  </div><!-- /. Contenedor de tabla-->


            </div><!-- /.row Contenido-->

        </main><!-- /.main -->

      </div><!-- /.row-->

    </div><!-- /.container-->

    <!-- JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script>
      //feather.replace({width: 16,height: 16,color: '#999', class:'mr-2'});
      feather.replace({
        width: 16,
        height: 16,
        class: 'mr-2'
      });
    </script>
  </body>

  </html>