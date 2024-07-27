<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentes Oftálmicos - Optica Centro Visual</title>
    <link rel="stylesheet" href="../styles/oftalmicos.css"> <!-- Enlaza tu archivo CSS externo -->
    <!-- Font Awesome para iconos (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<header>
    <h1>Lentes Oftálmicos</h1>
    <nav>
        <ul>
            <li><a href="../homedos.php">Home</a></li>
            <li><a href="../productos.php">Productos</a></li>
            <li><a href="../contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <!-- Barra de navegación adicional -->
    <nav class="product-categories">
        <ul>
            <li><a href="../productos-pags/marcas.php">Marcas</a></li>
            <li><a href="../productos-pags/oftalmicos.php">Oftálmicos</a></li>
            <li><a href="../productos-pags/gafas.php">Lentes solares</a></li>
            <li><a href="../productos-pags/promociones.php">Promociones</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="product-description">
        <div class="container">
            <h2>¿Qué son los Lentes Oftálmicos?</h2>
            <p>Los lentes oftálmicos son dispositivos ópticos diseñados para corregir problemas de visión como la miopía, hipermetropía, astigmatismo, y presbicia. Estos lentes están destinados para uso diario y suelen ser prescritos por profesionales de la salud visual.</p>
        </div>
    </section>

    <section class="product-list">
        <div class="container">
            <h2>Productos Destacados</h2>
            <div class="product">
                <img src="../../img/lente1.jpeg" alt="Producto 1">
                <h3>Lentes Ray-ban</h3>
                <p>RX 3548V-2500 ORO Gafas de vista Unisex</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente2.jpeg" alt="Producto 2">
                <h3>Lentes Ray-ban </h3>
                <p>Rx5388 3887 Rojo Original</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente3.jpeg" alt="Producto 3">
                <h3>Lentes Ray-ban</h3>
                <p>Rx3625V New Aviator.</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente4.jpeg" alt="Producto 4">
                <h3>Lentes Ray-ban</h3>
                <p>RB3681 Optics</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente5.jpeg" alt="Producto 5">
                <h3>Lentes Ray-ban</h3>
                <p>ClubMaster Blue-Light Clear</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente6.jpeg" alt="Producto 5">
                <h3>Lentes Lacoste</h3>
                <p>2861 220 Havana Verde</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente7.jpeg" alt="Producto 5">
                <h3>Lentes Lacoste</h3>
                <p>L2909 Azul mate oftalmico</p>
                <a href="#">Ver detalles</a>
            </div>
            <div class="product">
                <img src="../../img/lente8.jpeg" alt="Producto 5">
                <h3>Lentes Lacoste</h3>
                <p>L 2237 002 Negro Mate</p>
                <a href="#">Ver detalles</a>
            </div>
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


<!-- Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <img id="modal-img" src="#" alt="Producto">
    <div id="modal-text">
      <h2 id="modal-title">Título del Producto</h2>
      <p id="modal-description">Descripción detallada del producto.</p>
    </div>
  </div>
</div>

</body>
</html>
<script>
// Obtener elementos del DOM
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("modal-img");
var modalTitle = document.getElementById("modal-title");
var modalDesc = document.getElementById("modal-description");

// Obtener todos los elementos "Ver detalles"
var btns = document.querySelectorAll(".product a");

// Agregar eventos a cada botón "Ver detalles"
btns.forEach(function(btn) {
  btn.addEventListener("click", function() {
    // Mostrar el modal
    modal.style.display = "block";
    
    // Obtener información del producto
    var productImg = this.parentNode.querySelector("img").src;
    var productTitle = this.parentNode.querySelector("h3").innerText;
    var productDesc = this.parentNode.querySelector("p").innerText;
    
    // Actualizar contenido del modal con la información del producto
    modalImg.src = productImg;
    modalTitle.innerText = productTitle;
    modalDesc.innerText = productDesc;
  });
});

// Cerrar el modal al hacer clic en la "x" (cerrar)
var closeBtn = document.getElementsByClassName("close")[0];
closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

// Cerrar el modal al hacer clic fuera del contenido del modal
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
</script>
