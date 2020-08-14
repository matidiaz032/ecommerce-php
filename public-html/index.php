<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Ecommerce - PHP puro</title>
   <!-- Estilos barra navegacion -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Estilos pagina -->
   <link rel="stylesheet" href="css/index.css">
   <!-- Fuentes -->
   <script src="https://kit.fontawesome.com/4baeadfaf1.js" crossorigin="anonymous"></script>
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="body">
   <header>

   <!-- Barra de Navegacion pantallas grandes -->
      <nav class="barra">
         <ul class="nav justify-content-end">
            <li class="nav-item">
               <a class="nav-link active" href="productos.php"><i class="fas fa-tshirt"></i> Productos</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="pagos.php"><i class="fas fa-shopping-cart"></i> Pagos</a>
            </li>
            <li class="nav-item">
            <button type="button" class="btn btn-light"><a class="nav-link nav-button" href="login.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesion</a></button>
            </li>
            <li class="nav-item">
            <button type="button" class="btn btn-light"><a class="nav-link nav-button" href="register.php"><i class="fas fa-sign-out-alt"></i> Registrarse</a></button>
            </li>
         </ul>
      </nav>

      <!-- Barra de Navegacion celulares -->
      <nav class="responsive-nav">
         <i class="fas fa-angle-down icon-for-slide"></i>
         <ul class="responsive-ul">
            <li class="elements"><a href="productos.php"><i class="fas fa-tshirt"></i> Productos</a></li>
            <li class="elements"><a href="pagos.php"><i class="fas fa-shopping-cart"></i> Pagos</a></li>
            <li class="elements"><a href="login.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesion</a></li>
            <li class="elements"><a href="register.php"><i class="fas fa-sign-out-alt"></i> Registrarse</a></li>
         </ul>
      </nav>
   </header>

   <!-- Productos -->
   <section class="gorras">
      <div class="all-gorras">
      
      <!-- Seccion 1 -->
         <div class="gorras-section">
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-adidas-originals-patch-trucker.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Adidas Originals Patch</b>
                  <p>Precio: <span>$2309</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-nike-sb-gris-performance-trucker.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Nike SB Performance</b>
                  <p>Precio: <span>$1299</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-ferrari-red.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Ferrari Red</b>
                  <p>Precio: <span>$1590</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>   
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/ve3-gorra.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Collabs Vegeta SSJ</b>
                  <p>Precio: <span>$3299</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>   
            </div>
         </div>

      <!-- Seccion 2 -->
         <div class="gorras-section">
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-lacoste-novak-djokovic.png">
               </div>
               <div class="about-gorra">
                  <b class="name">Gorra Lacoste Novak Djokovic</b>
                  <p>Precio: <span>$2995</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-puma-bmw-white.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Puma BMW White</b>
                  <p>Precio: <span>$3499</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-reebok-delta.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Reebok Delta</b>
                  <p>Precio: <span>$1799</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>   
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-jordan-snapback-gris-dorado.jpg">
               </div>
               <div class="about-gorra">
                  <b>Gorra Jordan Snapback</b>
                  <p>Precio: <span>$3400</span></p>
                  <button class="buy"><i class="fas fa-shopping-cart"></i> Agregar</button>
               </div>   
            </div>
         </div>
      </div>

      <!-- Carrito -->
      <div class="show-cart">
         <?php include("../private/show-cart.php"); ?>
      </div>
   </section>

   <!-- scripts -->
   <script src="js/index.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>