
 <div class="content-wrapper">
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
<?php
if (isset($_GET['productos'])) {
    $producto = $_GET['productos'];

    $productos = [
        "aceites" => [
            ["nombre" => "Mobil Super", "imagen" => "mobil.jpg", "descripcion" => "Aceite sintético 10W-30"],
            ["nombre" => "Castrol GTX", "imagen" => "castrol.jpg", "descripcion" => "Aceite multigrado 20W-50"]
        ],
        "filtros" => [
            ["nombre" => "Filtro Bosch", "imagen" => "bosch.jpg", "descripcion" => "Filtro de aceite Bosch Premium"],
            ["nombre" => "Filtro K&N", "imagen" => "kn.jpg", "descripcion" => "Filtro de alto rendimiento"]
        ],
        "baterias" => [
            ["nombre" => "LTH", "imagen" => "lth.jpg", "descripcion" => "Batería de larga duración"],
            ["nombre" => "Optima", "imagen" => "optima.jpg", "descripcion" => "Batería de alto rendimiento"]
        ]
    ];

    if (array_key_exists($producto, $productos)) {
        echo "<h3>" . ucfirst($producto) . "</h3><div class='row'>";
        foreach ($productos[$producto] as $item) {
            echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='images/" . $item['imagen'] . "' class='card-img-top' alt='" . $item['nombre'] . "'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $item['nombre'] . "</h5>
                            <p class='card-text'>" . $item['descripcion'] . "</p>
                        </div>
                    </div>
                </div>
            ";
        }
        echo "</div>";
    } else {
        echo "<p>No hay productos disponibles para esta categoría.</p>";
    }
}
?>
