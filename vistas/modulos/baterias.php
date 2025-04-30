 <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold">BATERIAS</h2>
            <hr>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Array de categorías
                $categorias = [
                    ["img" => "vistas/dist/img/ba1.jpeg", "nombre" => "BATERIA PARA AUTO LTH $2400.00"],
                    ["img" => "vistas/dist/img/ba2.jpeg", "nombre" => "BATERIA PARA AUTO GOHNER $3000.00"],
                    ["img" => "vistas/dist/img/ba3.jpeg", "nombre" => "BATERIA PARA AUTO DURACEL $2800.00"],
                    ["img" => "vistas/dist/img/ba4.jpeg", "nombre" => "BATERIA PARA AUTO AMERICA $2500.00"],
                    ["img" => "vistas/dist/img/ba5.jpeg", "nombre" => "BATERIA PARA AUTO OPTIMA $3000.00"],
                    ["img" => "vistas/dist/img/ba6.jpeg", "nombre" => "BATERIA PARA AUTO AUTO DRIVE $5500.00"],
                    ["img" => "vistas/dist/img/ba7.jpeg", "nombre" => "BATERIA PARA AUTO BOSCH $3200.00"],
                    ["img" => "vistas/dist/img/ba8.jpeg", "nombre" => "BATERIA PARA AUTO POWER G $1800.00"],
                    ["img" => "vistas/dist/img/ba9.jpeg", "nombre" => "BATERIA PARA AUTO MODURA $2200.00"],
                    ["img" => "vistas/dist/img/ba10.jpeg", "nombre" => "BATERIA PARA AUTO RECORD $1900.00"]
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