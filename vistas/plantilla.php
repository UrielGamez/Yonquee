<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YONQUE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php
  include "vistas/modulos/cabecera.php";
  include "vistas/modulos/menu.php";
  if (isset($_GET["ruta"]))
  {
    if ($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "productos" ||
        $_GET["ruta"] == "filtro" ||
        $_GET["ruta"] == "aceites" ||
        $_GET["ruta"] == "balatas" ||
        $_GET["ruta"] == "rotores" ||
        $_GET["ruta"] == "baterias" ||
        $_GET["ruta"] == "amor" ||
        $_GET["ruta"] == "bujias" ||
        $_GET["ruta"] == "sus" ||
        $_GET["ruta"] == "enfri" ||
        $_GET["ruta"] == "marchas" ||
        $_GET["ruta"] == "alte" ||
        $_GET["ruta"] == "acce" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "compras" ||
        $_GET["ruta"] == "ventas")
    {
      include "modulos/" .$_GET["ruta"].".php";
    }
    else
    {
      include "modulo/404.php";
    }
  }
  else
  {
    include "modulos/inicio.php";
  }
  include "vistas/modulos/piedepagina.php";
  ?>
  
<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>
</body>
</html>
