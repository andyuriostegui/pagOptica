<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="styles/producto.css"> <!-- Enlaza tu archivo CSS externo -->
    <!-- Font Awesome para iconos (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<header>
    <h1>Nuestros Productos</h1>
    <nav>
        <ul>
        <li><a href="homedos.php">Home</a></li>
                    <li><a href="servicios2.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="miperfil.php">Mi perfil</a></li>
        </ul>
    </nav>
    <!-- Barra de navegación adicional -->
    <nav class="product-categories">
        <ul>
            <li><a href="productos-pags/marcas.php">Marcas</a></li>
            <li><a href="productos-pags/oftalmicos.php">Oftálmicos</a></li>
            <li><a href="productos-pags/gafas.php">Lentes solares</a></li>
            <li><a href="productos-pags/promociones.php">Promociones</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Sección de Productos Más Vendidos -->
    <section id="mas-vendidos" class="product-section">
        <h2>Más Vendidos</h2>
        <div class="products-grid">
            <!-- Ejemplo de producto -->
            <div class="product">
                <img src="../img/lente1.jpeg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$99.99</span>
            </div>

            <div class="product">
                <img src="../img/lente2.jpeg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$99.99</span>
            </div>

            <div class="product">
                <img src="../img/lente3.jpeg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$99.99</span>
            </div>

            <div class="product">
                <img src="../img/lente4.jpeg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$99.99</span>
            </div>

            <!-- Puedes agregar más productos aquí -->
        </div>
    </section>

    <!-- Sección de Productos Recomendados -->
    <section id="recomendados" class="product-section">
        <h2>Recomendados</h2>
        <div class="products-grid">
            <!-- Ejemplo de producto -->
            <div class="product">
                <img src="../img/lente5.jpeg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$129.99</span>
            </div>

            <div class="products-grid">
                <!-- Ejemplo de producto -->
                <div class="product">
                    <img src="img/producto2.jpg" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>Descripción corta del producto.</p>
                    <span class="price">$129.99</span>
                </div>
                <div class="product">
                    <img src="img/producto2.jpg" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>Descripción corta del producto.</p>
                    <span class="price">$129.99</span>
                </div>
                <div class="product">
                    <img src="img/producto2.jpg" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>Descripción corta del producto.</p>
                    <span class="price">$129.99</span>
                </div>
                <div class="product">
                    <img src="img/producto2.jpg" alt="Producto 2">
                    <h3>Producto 2</h3>
                    <p>Descripción corta del producto.</p>
                    <span class="price">$129.99</span>
                </div>


            <!-- Puedes agregar más productos aquí -->
        </div>
    </section>

    <!-- Sección de Productos para Mujeres -->
    <section id="mujeres" class="product-section">
        <h2>Para Mujeres</h2>
        <div class="products-grid">
            <!-- Ejemplo de producto -->
            <div class="product">
                <img src="img/producto3.jpg" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$89.99</span>
            </div>
            

            <div class="product">
                <img src="img/producto3.jpg" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$89.99</span>
            </div>

            <div class="product">
                <img src="img/producto3.jpg" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$89.99</span>
            </div>

            <div class="product">
                <img src="img/producto3.jpg" alt="Producto 3">
                <h3>Producto 3</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$89.99</span>
            </div>  

            <!-- Puedes agregar más productos aquí -->
        </div>
    </section>

    <!-- Sección de Productos para Hombres -->
    <section id="hombres" class="product-section">
        <h2>Para Hombres</h2>
        <div class="products-grid">
            <!-- Ejemplo de producto -->
            <div class="product">
                <img src="img/producto4.jpg" alt="Producto 4">
                <h3>Producto 4</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$79.99</span>
            </div>
            <div class="product">
                <img src="img/producto4.jpg" alt="Producto 4">
                <h3>Producto 4</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$79.99</span>
            </div>
            <div class="product">
                <img src="img/producto4.jpg" alt="Producto 4">
                <h3>Producto 4</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$79.99</span>
            </div>
            <div class="product">
                <img src="img/producto4.jpg" alt="Producto 4">
                <h3>Producto 4</h3>
                <p>Descripción corta del producto.</p>
                <span class="price">$79.99</span>
            </div>

            <!-- Puedes agregar más productos aquí -->
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="footer-text">
                <p>Derechos Reservados &copy; 2024 Optica Centro Visual</p>
                <p>Hecho por CowyC0de</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
