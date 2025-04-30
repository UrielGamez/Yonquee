 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold">BUJIAS</h2>
            <hr>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Array de categorías
                $categorias = [
                    ["img" => "vistas/dist/img/20w-50.jpg", "nombre" => "ACEITE MOVIL 20W-50 $110.00"],
                    ["img" => "vistas/dist/img/5w-30.jpeg", "nombre" => "ACEITE MOVIL 5w-30 $1200.00"],
                    ["img" => "vistas/dist/img/25w-60.jpeg", "nombre" => "ACEITE MOVIL 25w-60 $500.00"],
                    ["img" => "vistas/dist/img/10w-30.jpeg", "nombre" => "ACEITE MOVIL 10w-30 $180.00"],
                    ["img" => "vistas/dist/img/0w-30.jpeg", "nombre" => "ACEITE MOVIL 0w-30 $340.00"],
                    ["img" => "vistas/dist/img/motul.jpeg", "nombre" => "MOTUL 4T $600.00"],
                    ["img" => "vistas/dist/img/0w-40.jpeg", "nombre" => "ACEITE MOVIL 0w-40 $500.00"],
                    ["img" => "vistas/dist/img/cas.jpeg", "nombre" => "CASTROL 20W-50 $550.00"],
                    ["img" => "vistas/dist/img/15w-40.jpeg", "nombre" => "ACEITE MOVIL 15w-40 $800.00"],
                    ["img" => "vistas/dist/img/res.jpeg", "nombre" => "RESPTOL 4T $550.00"]
                ];

                // Mostrar categorías en un grid
                foreach ($categorias as $categoria) {
                    echo '
                    <div class="col-md-3 col-sm-6">
                        <div class="card text-center shadow-sm category-card">
                            <img src="' . $categoria["img"] . '" class="card-img-top img-fluid" alt="' . $categoria["nombre"] . '">
                            <div class="card-body">
                                <h6 class="font-weight-bold">' . $categoria["nombre"] . '</h6>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
</div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
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