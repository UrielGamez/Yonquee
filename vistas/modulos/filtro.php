 <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold">FILTROS DE ACEITE</h2>
            <hr>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Array de categorías
                $categorias = [
                    ["img" => "vistas/dist/img/fil1.jpeg", "nombre" => "FILTRO DE ACEITE PARA MOTOR DE COMBUSTION $110.00"],
                    ["img" => "vistas/dist/img/fil2.jpeg", "nombre" => "FILTRO DE ACEITE TNT $100.00"],
                    ["img" => "vistas/dist/img/fil3.jpeg", "nombre" => "FILTRO DE ACEITE NISSAN $80.00"],
                    ["img" => "vistas/dist/img/fil4.jpeg", "nombre" => "FILTRO DE ACEITE RIDEX $120.00"],
                    ["img" => "vistas/dist/img/fil5.jpeg", "nombre" => "FILTRO DE ACEITE DE CARTUCHO GONHER $150.00"],
                    ["img" => "vistas/dist/img/fil6.jpeg", "nombre" => "FILTRO DE ACEITE SINTETICO FRAM $600.00"],
                    ["img" => "vistas/dist/img/fil7.jpeg", "nombre" => "FILTRO DE ACEITE GC $90.00"],
                    ["img" => "vistas/dist/img/fil8.jpeg", "nombre" => "FILTRO DE ACEITE MOTORFIL $130.00"],
                    ["img" => "vistas/dist/img/fil9.jpeg", "nombre" => "FILTRO DE ACEITE MWM $150.00"],
                    ["img" => "vistas/dist/img/fil10.jpeg", "nombre" => "FILTRO DE ACEITE MOTORCRAFT $100.00"]
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