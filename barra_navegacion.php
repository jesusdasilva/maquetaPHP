<!-- Barra de navegación  -->
<nav class="navbar sticky-top navbar-dark bg-primary navbar-expand-md flex-md-nowrap">

  <!-- Nombre aplicación -->
  <a class="navbar-brand" href="#">
    <img src="<?php echo RUTA_IMG ?>address-book.svg" width="30" height="30" class="d-inline-block align-top mr-1" alt="">
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
