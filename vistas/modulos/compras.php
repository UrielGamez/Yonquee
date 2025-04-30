<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>


</head>
<body>

<div class="container mt-4">
    <h2 class="text-center">🛒 MI CARRITO</h2>

    <div class="row">
        <div class="col-md-8">
            <?php if (empty($_SESSION['cart'])): ?>
                <div class="alert alert-light text-center">
                    <i class="fas fa-shopping-cart fa-3x"></i>
                    <p class="mt-3">Carrito vacío</p>
                    <a href="index.php" class="btn btn-dark">Seguir comprando</a>
                </div>
            <?php else: ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        <?php 
                        $total = 0;
                        foreach ($_SESSION['cart'] as $item): 
                            $subtotal = $item['price'] * $item['quantity'];
                            $total += $subtotal;
                        ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td>$<?php echo number_format($item['price'], 2); ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>$<?php echo number_format($subtotal, 2); ?></td>
                            <td>
                                <button class="btn btn-danger btn-sm remove-item" data-id="<?php echo $item['id']; ?>">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button id="clear-cart" class="btn btn-warning">Vaciar Carrito</button>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <div class="card p-3">
                <h5><strong>Resumen</strong></h5>
                <p>Subtotal: <strong>$<?php echo number_format($total, 2); ?></strong></p>
                <button class="btn btn-success btn-block">Finalizar compra</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $(".remove-item").click(function () {
        let id = $(this).data("id");
        $.post("carrito.php", { action: "remove", id }, function () {
            location.reload();
        });
    });

    $("#clear-cart").click(function () {
        $.post("carrito.php", { action: "clear" }, function () {
            location.reload();
        });
    });
});
</script>

</body>
</html>

<div class="content-wrapper">
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