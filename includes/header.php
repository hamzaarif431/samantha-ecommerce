<!DOCTYPE html>
<html>
   <head>
      <title> Home  </title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="John Doe">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="css/custom.css" rel="stylesheet" type="text/css">
      <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
      <link href="slick/slick.css" rel="stylesheet" type="text/css">

      <link href="css/animate.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="icon" href="images/fav-icon.png" type="image/png" sizes="">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-lg">
            <div class="container header-container">
               <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="img"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="review.php">Photoshoot</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="products.php">Wardrobing</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about-us.php">Custom Created Garments</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                     </li>
                  </ul>
                  <div class="d-flex icons">
                     <a href="#search" class="sidebar-toggle"><i class="far fa-search"></i></a>
                    <a href="wishlist.php"><i class="fal fa-heart"></i></a>
                     <div class="basket">
                     <a href="product-detail.php"><i class="far fa-cart-plus"></i></a> 
                    <span class="notification">0</span></div>
                  </div>
               </div>
            </div>
         </nav>
      </header>



   <div id="search">
    <button type="button" class="close"> ×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-search-items">Search</button>
    </form>
</div>