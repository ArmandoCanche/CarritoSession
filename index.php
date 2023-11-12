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
                            echo "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
                            <strong>Su carrito está vacío</strong> Agregue un producto para continuar con su compra.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        } 
                        ?>
            <div class="p-3 table-responsive">

                <table class="table table-striped table-secondary align-middle"  align="center">
                    <thead class="table-primary" >
                        <tr align="center">
                            <th>Producto</td>
                            <th>Tipo de postre</td>
                            <th>Precio</td>
                            <th>Agregar</td>
                            <th>Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="width: 600px;" align="center">
                            <td class="table-primary" style="width: 100px;"><img src="IMG/PastelChocolate.png" style="margin-left: 20px;" width="100"></td>
                            <td class="table-primary" style="width: 300px;">Pastel de chocolate</td>
                            <td class="table-primary" style="width: 100px;">$400</td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de chocolate">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px;" >
                                    <input type="hidden" name="txtPrecio" value="400">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-secondary">
                                </form>
                            </td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de chocolate">
                                    <?php
                                    borrar('Pastel de chocolate');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-secondary">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-primary" style="width: 100px;"><img src="IMG/PastelCoco.png" style="margin-left: 20px;" width="100"></td>
                            <td class="table-primary" style="width: 300px;">Pastel de coco</td>
                            <td class="table-primary" style="width: 100px;">$400</td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de coco">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="400">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-secondary">
                                </form>
                            </td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de coco">
                                    <?php
                                    borrar('Pastel de coco');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-secondary">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-primary" style="width: 100px;"><img src="IMG/PastelFresas.png" style="margin-left: 20px;" width="100"></td>
                            <td class="table-primary" style="width: 300px;">Pastel de fresas</td>
                            <td class="table-primary" style="width: 100px;">$450</td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de fresas">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="450">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-secondary">
                                </form>
                            </td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de fresas">
                                    <?php
                                    borrar('Pastel de fresas');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-secondary">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-primary" style="width: 100px;"><img src="IMG/PastelTresLeches.png"style="margin-left: 20px;" width="100"></td>
                            <td class="table-primary" style="width: 300px;">Pastel de tres leches</td>
                            <td class="table-primary" style="width: 100px;">$350</td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de tres leches">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px;" >
                                    <input type="hidden" name="txtPrecio" value="350">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-secondary">
                                </form>
                            </td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pastel de tres leches">
                                    <?php
                                    borrar('Pastel de tres leches');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-secondary">
                                </form>
                            </td>
                        </tr>

                        <tr style="width: 600px;" align="center">
                            <td class="table-primary" style="width: 100px;"><img src="IMG/PayQueso.png" style="margin-left: 20px;" width="100"></td>
                            <td class="table-primary" style="width: 300px;">Pay de queso</td>
                            <td class="table-primary" style="width: 100px;">$300</td>
                            <td class="table-primary" style="width: 300px;">
                                <form action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pay de queso">
                                    <input type="number" name="cant" value="1" min="1" style="width: 50px">
                                    <input type="hidden" name="txtPrecio" value="300">
                                    <p></p>
                                    <input type="submit" name="btnAgregar" value="Agregar" class="btn btn-secondary">
                                </form>
                            </td>
                            <td class="table-primary" style="width: 300px;">
                                <form  action="index.php" method="POST">
                                    <input type="hidden" name="txtProducto" value="Pay de queso">
                                    <?php
                                    borrar('Pay de queso');
                                    ?>
                                    <p></p>
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-secondary">
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