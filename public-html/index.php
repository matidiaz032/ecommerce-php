<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ecommerce - PHP puro</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/index.css">
   <script src="https://kit.fontawesome.com/4baeadfaf1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="body">
   <header>
      <nav>
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
      <nav class="responsive-nav">
         <ul class="responsive-ul">
            <li class="responsive-elements nav-item"><a href="productos.php"><i class="fas fa-tshirt"></i> Productos</a></li>
            <li class="responsive-elements nav-item"><a href="pagos.php"><i class="fas fa-shopping-cart"></i> Pagos</a></li>
            <li class="responsive-elements nav-item"><a href="login.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesion</a></li>
            <li class="responsive-elements nav-item"><a href="register.php"><i class="fas fa-sign-out-alt"></i> Registrarse</a></li>
         </ul>
      </nav>
   </header>
   <section class="gorras">
      <div class="all-gorras">
         <div class="gorras-section">
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-adidas-originals-patch-trucker.jpg">
               </div>
               <div class="about-gorra">

               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/nikexjordan-jumpman-pro-classic.jpg">
               </div>
               <div class="about-gorra">

               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-ferrari-red.jpg">
               </div>
               <div class="about-gorra">

               </div>   
            </div>
         </div>
      </div>
         <div class="gorras-section">
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-lacoste-novak-djokovic.png">
               </div>
               <div class="about-gorra">

               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-puma-bmw-white.jpg">
               </div>
               <div class="about-gorra">

               </div>
            </div>
            <div class="gorra">
               <div class="img-gorra">
                  <img src="gorras/gorra-reebok-delta.jpg">
               </div>
               <div class="about-gorra">

               </div>   
            </div>
         </div>
      <div class="show-cart">

      </div>
   </section>

   <!-- scripts -->
   <script src="js/index.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>