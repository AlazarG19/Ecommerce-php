<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <!-- owl carousel css  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
    <?php include("./Functions.php") ?>
  </head>
  <body>
    <!-- start header -->
    <header>
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">
          Jordan Calseron 430-985 Elefiend St.Duluth
        </p>
        <div class="font-rale font-size-14">
          <a href="" class="px-3 border-right border-left text-dark">Login</a>
          <a href="" class="px-3 border-right text-dark">WishList</a>
        </div>
      </div>
      <!-- primary navigation  -->
      <nav class="navbar navbar-expand-lg navbar-dar color-second-bg">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Moblie Shopee</a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav m-auto font-rubik">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="#"
              >
                On Sale
              </a>
              <a class="nav-link text-white" href="#">Category</a>
              <a class="nav-link text-white" href="#">
                Product
                <i class="fas fa-chevron-down"></i>
              </a>
              <a class="nav-link text-white" href="#">Blog</a>
              <a class="nav-link text-white" href="#">Category</a>
              <a class="nav-link text-white" href="#">Coming soon</a>
            </div>
            <form action="#" class="font-size-14 font-rale">
              <a href="Cart.php" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white">
                  <i class="fas fa-shopping-cart"></i>
                </span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData("cart")) ?></span>
              </a>
            </form>
          </div>
        </div>
      </nav>
      <!-- end of primary navigation  -->
    </header>
    <!-- endheader -->
    <!-- start main -->
    <main class="main-site">