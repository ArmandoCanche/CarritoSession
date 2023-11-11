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
                <p id="empty-cart" class="empty-cart"> 
                    Tu carrito está vacío. 
                    <i class="bi bi-emoji-frown"></i>
                </p>

                <div id="products-cart" class="products-cart disabled">
                    <!-- Esto se va a completar con el JS -->
                </div>

                <div id="action-cart" class="action-cart disabled">
                    <div class="left-acciones-cart">
                        <button id="empty-actions-cart" class="empty-actions-cart">
                            Vaciar carrito
                        </button>
                    </div>
                    <div class="right-actions-cart">
                        <div class="total-action-cart">
                            <p>Total:</p>
                            <p id="total">$3000</p>
                        </div>
                        <button id="buy-action-cart" class="buy-action-cart">
                            Comprar ahora
                        </button>
                    </div>
                </div>

                <p id="purchased-cart" class="purchased-cart disabled">
                    Muchas gracias por tu compra. 
                    <i class="bi bi-emoji-laughing"></i>
                </p>

            </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="JS/carrito.js"></script>
    <script src="JS/menu.js"></script>
    
</body>
</html>