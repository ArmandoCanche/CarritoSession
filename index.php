<?php
session_start();
function borrar($producto)
{
    if (isset($_SESSION["carrito"][$producto]["cant"])) {
        $cantidad = $_SESSION["carrito"][$producto]["cant"];
        echo "<input type='number' name='cant' value='1' min='1' max='$cantidad' style='width: 50px'>";
    } else {
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>

<body>

    <div class="wrapper">
        <aside>
            <header>
                <li>
                    <a class="button-menu button-cart" href="carrito.php">
                        <i class="bi bi-cart4"></i>
                        Carrito
                        <span>
                            <?php
                            if (isset($_SESSION["carrito"])) {
                                echo count($_SESSION["carrito"]);
                            } else {
                                echo "0";
                            }
                            ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <a class="button-menu" href="login.html">
                            <i class="bi bi-people"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main>
            <h1 class="h1" align="center">Productos disponibles</h1>
            <?php
                        if (!isset($_SESSION["carrito"])) {
                            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong>Su carrito está vacío</strong> Agregue un producto para continuar con su compra.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        } 
                        ?>
            <div class="p-3 table-responsive">

                <table class="table table-striped table-secondary align-middle" style="" align="center">
                    <thead class="table-dark">
                        <tr align="center">
                            <th>Producto</td>
                            <th>Descripción</td>
                            <th>Precio</td>
                            <th>Agregar</td>
                            <th>Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="width: 600px;" align="center">
                            <td class="table-dark" style="width: 100px;"><img src="IMG/PastelChocolate.png" width="100"></td>
                            <td class="table-dark" style="width: 300px;">Pulsera corazón con hilo sencillo rojo</td>
                            <td style="width: 100px;">$40</td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera corazón con hilo sencillo rojo">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="40">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-warning">
                                </form>
                            </td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera corazón con hilo sencillo rojo">
                                    <?php
                                    borrar('Pulsera corazón con hilo sencillo rojo');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-dark" style="width: 100px;"><img src="imagenes/Pulsera corazón con hilo de cera azul.jpeg" width="100"></td>
                            <td class="table-dark" style="width: 300px;">Pulsera corazón con hilo de cera azul</td>
                            <td style="width: 100px;">$45</td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera corazón con hilo de cera azul">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="45">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-warning">
                                </form>
                            </td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera corazón con hilo de cera azul">
                                    <?php
                                    borrar('Pulsera corazón con hilo de cera azul');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-dark" style="width: 100px;"><img src="imagenes/Pulsera caracol tejida.jpeg" width="100"></td>
                            <td class="table-dark" style="width: 300px;">Pulsera caracol tejida</td>
                            <td style="width: 100px;">$45</td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera caracol tejida">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="45">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-warning">
                                </form>
                            </td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera caracol tejida">
                                    <?php
                                    borrar('Pulsera caracol tejida');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-dark" style="width: 100px;"><img src="imagenes/Pulsera tejida rosa.jpeg" width="100"></td>
                            <td class="table-dark" style="width: 300px;">Pulsera tejida rosa</td>
                            <td style="width: 100px;">$30</td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera tejida rosa">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="30">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-warning">
                                </form>
                            </td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera tejida rosa">
                                    <?php
                                    borrar('Pulsera tejida rosa');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-dark" style="width: 100px;"><img src="imagenes/Pulsera perla tejida.jpeg" width="100"></td>
                            <td class="table-dark" style="width: 300px;">Pulsera perla tejida</td>
                            <td style="width: 100px;">$33</td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera perla tejida">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="33">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-warning">
                                </form>
                            </td>
                            <td style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pulsera perla tejida">
                                    <?php
                                    borrar('Pulsera perla tejida');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </main>
    </div>
    <?php
    if (isset($_REQUEST["btnAgregar"])) {
        $producto = $_REQUEST["txtProducto"];
        $cantidad = $_REQUEST["cant"];
        $precio = $_REQUEST["txtPrecio"];

        if (isset($_SESSION["carrito"][$producto]["cant"])) {
            $_SESSION["carrito"][$producto]["cant"] += $cantidad;
        } else {
            $_SESSION["carrito"][$producto]["cant"] = $cantidad;
        }

        $_SESSION["carrito"][$producto]["precio"] = $precio;
        echo "<script>alert('Producto $producto agregado con éxito al carrito de compras')</script>;";
        echo $producto . ", " . $cantidad . ", " . $precio;

        echo  "<meta http-equiv='Refresh' content='0;url=index.php'>";
    }
    if (isset($_REQUEST["btnBorrar"])) {
        $producto = $_REQUEST["txtProducto"];
        $cantidad = $_REQUEST["cant"];

        if (isset($_SESSION["carrito"][$producto])) {
            $_SESSION["carrito"][$producto]['cant'] -= $cantidad;
            if ($_SESSION["carrito"][$producto]['cant'] == 0) {
                unset($_SESSION["carrito"][$producto]);
                echo "<script>alert('Se eliminó $producto del carrito');</script>";
            } else {
                echo "<script>alert('Se eliminó $cantidad $producto del carrito');</script>";
            }
            if (count($_SESSION["carrito"]) == 0) {
                session_destroy();
            }
        } else {
            echo "<script>alert('No tienes $producto agregado en su carrito de compras')</script>;";
        }

        echo  "<meta http-equiv='Refresh' content='0.5;url=index.php'>";
    }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>