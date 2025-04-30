<div class="content-wrapper">
<div class="container-fluid">
    <section class="content-header">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="vistas/dist/css/inicio.css"> 
</head>
<body>
    <section class="content-header">
        <div class="container-fluid">
            <h1 class="text-center font-weight-bold">YONQUE</h1>
            <div class="carousel">
                <img src="vistas/dist/img/2.0.png" class="active">
                <img src="vistas/dist/img/che.jpeg">
                <img src="vistas/dist/img/che1.jpg">
                <img src="vistas/dist/img/che3.jpg">
                <img src="vistas/dist/img/che4.jpeg">
                <img src="vistas/dist/img/che5.jpeg">
                <img src="vistas/dist/img/che6.jpeg">
            </div>
        </div>
    </section>

    <script src="vistas/dist/js/inicio.1.js"></script> 
</body>
</section>
<br>
    <section class="content-header">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold">PRODUCTOS CON LOS QUE CONTAMOS</h2>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                $categorias = [
                    ["img" => "vistas/dist/img/aceite.png", "nombre" => "ACEITES"],
                    ["img" => "vistas/dist/img/filtro.jpeg", "nombre" => "FILTROS DE ACEITE"],
                    ["img" => "vistas/dist/img/bala.jpeg", "nombre" => "BALATAS"],
                    ["img" => "vistas/dist/img/roto.jpeg", "nombre" => "ROTORES"],
                    ["img" => "vistas/dist/img/bate.jpeg", "nombre" => "BATERÍAS"],
                    ["img" => "vistas/dist/img/ama.jpeg", "nombre" => "AMORTIGUADORES Y STRUTS"],
                    ["img" => "vistas/dist/img/bu.jpeg", "nombre" => "BUJÍAS"],
                    ["img" => "vistas/dist/img/sus.jpeg", "nombre" => "PARTES DE SUSPENSIÓN"],
                    ["img" => "vistas/dist/img/radi.jpeg", "nombre" => "SISTEMA DE ENFRIAMIENTO"],
                    ["img" => "vistas/dist/img/aran.jpeg", "nombre" => "MARCHAS"],
                    ["img" => "vistas/dist/img/alt.jpeg", "nombre" => "ALTERNADORES"],
                    ["img" => "vistas/dist/img/acce.jpeg", "nombre" => "ACCESORIOS"]
                ];

              
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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
    </section>
    </section>
</div>