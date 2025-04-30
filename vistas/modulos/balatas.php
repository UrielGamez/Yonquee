 <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold">BALATAS</h2>
            <hr>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Array de categorías
                $categorias = [
                    ["img" => "vistas/dist/img/bal1.jpeg", "nombre" => "BALATAS BRIDGESTONE $500.00"],
                    ["img" => "vistas/dist/img/bal2.jpeg", "nombre" => "BALATAS DELANTERAS TEXTAR $450.00"],
                    ["img" => "vistas/dist/img/bal3.jpeg", "nombre" => "BALATAS CHEBROLET AVEO $500.00"],
                    ["img" => "vistas/dist/img/bal4.jpeg", "nombre" => "BALATAS FRITEC CERAMICAS $600.00"],
                    ["img" => "vistas/dist/img/bal5.jpeg", "nombre" => "BALATAS GRC ULTRA DELANTERAS $420.00"],
                    ["img" => "vistas/dist/img/bal6.jpeg", "nombre" => "BALATAS FP $480.00"],
                    ["img" => "vistas/dist/img/bal7.jpeg", "nombre" => "BALATAS GRC $500.00"],
                    ["img" => "vistas/dist/img/bal8.jpeg", "nombre" => "BALATAS DELANTERAS BRUCK $550.00"],
                    ["img" => "vistas/dist/img/bal9.jpeg", "nombre" => "BALATAS DURALAST $600.00"],
                    ["img" => "vistas/dist/img/bal10.jpeg", "nombre" => "BALATAS PARA CAMIONES $800.00"]
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