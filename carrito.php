<?php
session_start();
function actualizar($producto)
{
    if (isset($_SESSION["carrito"][$producto]["cant"])) {
        $cantidad = $_SESSION["carrito"][$producto]["cant"];
        echo "<input type='number' name='cant' value='1' min='1' max='$cantidad' style='width: 50px'>";
    } else {
    }
}
?>
<?php

if (isset($_REQUEST['vaciar'])) {
    session_destroy();
    header("location:carrito.php");
}

if (isset($_REQUEST['producto'])) {
    $producto = $_REQUEST['producto'];
    unset($_SESSION["carrito"][$producto]);
    if (count($_SESSION["carrito"]) == 0) {
        session_destroy();
    }
    header("location:carrito.php");
}

if (isset($_REQUEST["btnActualizar"])) {
    $producto = $_REQUEST["txtProducto"];
    $cantidad = $_REQUEST["cant"];

    $_SESSION["carrito"][$producto]['cant'] = $cantidad;
    if ($_SESSION["carrito"][$producto]['cant'] == 0) {
        unset($_SESSION["carrito"][$producto]);
        echo "<script>alert('Se eliminó $producto del carrito');</script>";
    } else {
        echo "<script>alert('Se actualizó $cantidad $producto del carrito');</script>";
    }
    if (count($_SESSION["carrito"]) == 0) {
        session_destroy();
        header("location:carrito.php");
    }
    echo  "<meta http-equiv='Refresh' content='0.2;url=carrito.php'>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="CSS/carrito.css">
</head>

<body>

    <div class="wrapper">
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <ul>
                    <li>
                        <a class="button-menu-page" href="index.php">
                            <i class="bi bi-arrow-return-left"></i>
                            Seguir comprando
                        </a>
                    </li>
                </ul>
            </header>
            <nav>
                <ul>
                    <li>
                        <a class="button-menu button-cart active" href="carrito.php">
                            <i class="bi bi-cart4"></i>
                            Carrito
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <ul>
                    <li>
                        <a class="button-menu-page" href="login.html">
                            <i class="bi bi-people"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </footer>
        </aside>
        <main>
            <h2 class="main-title"> Carrito </h2>
            <div class="container-cart">


                <div class="p-3 table-responsive">
                    <?php
                    $total = 0;
                    if (isset($_SESSION["carrito"])) {
                        echo "<table class='table table-striped table-danger' style='width: 600px;' align='center'>
      <thead class='table-info'>
        <tr align='center'>
          <th colspan='2'><h1 class='h1'>Carrito de compras</h1></td>
        </tr>
      </thead>
      <tbody>";
                        foreach ($_SESSION["carrito"] as $indice => $arreglo) {
                            echo "<tr style='width: 600px;'>
          <td class='table-warning' style='width: 100px;' align='center'><img src='imagenes/$indice.jpeg' width='100'></td>
          <td style='width: 300px;'><h4 class='h4'>$indice</h4>";
                            $cantidad = $arreglo["cant"];
                            $precio = $arreglo["precio"];
                            $total +=  $cantidad * $precio;
                            echo "<form action='carrito.php' method='POST'>
                <input type='hidden' name='txtProducto' value='$indice'>
                Cantidad: <input type='number' name='cant' value='$cantidad' min='0' style='width: 50px'> &nbsp;&nbsp;
                <input type='submit' name='btnActualizar' value='Actualizar' class='btn btn-warning'>
              </form>";
                            echo "Precio: $$precio<br>";
                            echo "<a href= 'carrito.php?producto=$indice'> Eliminar producto</a> <br>";
                            echo "</td>
                  </tr>";
                        }
                        
                        echo "</tbody>
              </table>";
                    }

                    ?>
                </div>
                <div>
                    <?php
                    if (isset($_SESSION["carrito"])) {
                        echo "<br>
                        <div class='action-cart'>
                            <div class='total-action-cart'>
                                <p>Total:</p>
                                <p id='total'>$$total</p>
                            </div>
                            <button id='buy-action-cart' class='buy-action-cart'>
                                    Comprar ahora
                            </button>
                            
                        </div>
                        <br>
                        <div class='right-actions-cart'>
                                <div class='left-acciones-cart'>
                                <a href='carrito.php?vaciar=true'><button id='empty-actions-cart' class='empty-actions-cart'>
                                        Vaciar carrito
                                    </button></a>
                                </div>
                            </div>";
                    } else {
                        echo "<p id='empty-cart' class='empty-cart'>
                        Tu carrito está vacío.
                        <i class='bi bi-emoji-frown'></i>
                    </p>";
                    }
                    ?>
                </div>

            </div>
        </main>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="JS/carrito.js"></script>
    <script src="JS/menu.js"></script>

</body>

</html>