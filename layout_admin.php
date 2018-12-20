<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="favicon.ico">

  <?php include 'css.php' //CSS  ?>

<body>


  <?php include 'barra_navegacion.php' //Barra de navegación ?>


  <?php include 'menu_movil.php' //Menú para el móvil ?>

  <!-- container -->
  <div class="container-fluid">

    <!-- row -->
    <div class="row">

    <?php include 'sidebar.php' ?>

      <!-- main -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

        <?php include 'indicador.php' ?>

        <!-- row Contenido -->
        <div class="row">

          <?php  include $contenido_admin; ?>

          </div><!-- /.row Contenido-->

      </main><!-- /.main -->

    </div><!-- /.row-->

  </div><!-- /.container-->

<?php include 'js.php' ?>

</body>

</html>
