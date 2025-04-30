<div class="content-wrapper">
    <section class="content-header">
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        form { width: 300px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        input, button { width: 100%; margin: 5px 0; padding: 10px; }
    </style>
</head>
<body>
    

    <h2>Registro de Usuario </h2>
    <div class="carousel">
    <form action="guardar_usuario.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre Completo" required>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <input type="text" name="telefono" placeholder="Teléfono">
        <input type="date" name="fecha_nacimiento" required>
        <button type="submit">Registrar</button>
</div>
    </form>

</body>
</html>

     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->