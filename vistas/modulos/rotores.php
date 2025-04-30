 <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold">ROTORES</h2>
            <hr>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Array de categorías
                $categorias = [
                    ["img" => "vistas/dist/img/ro1.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO DELANTERA $850.00"],
                    ["img" => "vistas/dist/img/ro2.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO DELANTERA DURALAST $1000.00"],
                    ["img" => "vistas/dist/img/ro3.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO TRASEROS EBC $950.00"],
                    ["img" => "vistas/dist/img/ro4.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO $2500.00"],
                    ["img" => "vistas/dist/img/ro5.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO DELANTERA $650.00"],
                    ["img" => "vistas/dist/img/ro6.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO DELANTERA $750.00"],
                    ["img" => "vistas/dist/img/ro7.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO DELANTERA PEFORADOS $1200.00"],
                    ["img" => "vistas/dist/img/ro8.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO PARA CAMIONES $1000.00"],
                    ["img" => "vistas/dist/img/ro9.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO $800.00"],
                    ["img" => "vistas/dist/img/ro10.jpeg", "nombre" => "ROTORES DE FRENO DE DISCO PARA CAMIONES PESADOS $1300.00"]
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