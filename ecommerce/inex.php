<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eCommerce Website</title>
  <!-- Bootstrap Css CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Slick Css CDN -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" type="text/css" href="Globalstyle.css">
  <link rel="stylesheet" type="text/css" href="media.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>

<body>
  <!-- Header -->
  <header id="header">
  
  <?php
    //require MySQL Connection
    require('./database/Dbcontroller.php');
  ?>
    <!-- Header — Logo And Navigation Menu -->
    <nav class="navbar m-0 p-0 navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="./assets/Images/images (1).png" class="d-inline-block align-top img-fluid img-logo" alt="" loading="lazy">
        <span class="julius brand">Brand</span>
      </a>
      <a class="text-right text-dark icons" href="#">
        <i class="fas fa-shopping-bag d-inline-block align-top img-fluid " alt="" loading="lazy"></i>
        <span class="julius "> <i class="fas fa-search d-inline-block align-top img-fluid " alt="" loading="lazy"></i></span>
        <!-- Hamburger -->
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
          <div class="menu-toggle_burger"></div>
        </div>
      </a>
    </nav>
    <nav class="custom_navbar">
      <ul>
        <li><a href="#" class="active-link">Home</a></li>
        <li><a href="./Pages/shop.html">Shop</a></li>
        <li><a href="./Pages/Categories.html">Categories</a></li>
        <li><a href="./Pages/Check_out.html">Check Out</a></li>
        <li><a href="./Pages/account.html">My Account</a></li>
      </ul>
    </nav>
  </header>
  <!-- Main -->
  <main id="main">
    <!-- Banner -->
    <div class="container-fluid p-0">
      <div class="banner">
        <img src="./assets/Images/images (1).png" alt="Banner 1" class="img-fluid banner-img" />
        <div class="banner-content">
          <h2 class="banner-heading">Shop</h2>
          <p class="banner-text">Some Text Here....</p>
          <a class="button1" href="./Pages/product.html"><span>Shop Now</span></a>
        </div>
      </div>
    </div>
    <!-- New Arrivals -->
    <section class="new-arrivals">
      <h2 class="heading1 p-10 m-10">New Arrivals</h2>
      <div class="container-fluid  p-0">
        <div class="site-slider ">
          <div class="slider-one">
            <div class="newArrivalsBx">
              <img src="./assets/Images/images (5).png" alt="Product 1" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 1</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$ 500.75</span></p>
              </span>
            </div>
            <div class="newArrivalsBx">
              <img src="./assets/Images/images (1).png" alt="Product 2" class="img-fluid img-product text-center" />
              <span>
                <h2 class="heading2 text-center">Product 2</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">₹ — Price</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (2).png" alt="Product 3" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 3</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$ — Price-Tag</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (1).png" alt="Product 4" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 4</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$ 778.97</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (5).png" alt="Product 5" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 5</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">₹ — Pricing</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (2).png" alt="Product 6" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 6</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$576.89</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (1).png" alt="Product 7" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 7</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">Your Price</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (4).png" alt="Product 8" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 8</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$26</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (1).png" alt="Product 9" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 9</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$579.75</span></p>
              </span>
            </div>
            <div>
              <img src="./assets/Images/images (2).png" alt="Product 10" class="img-fluid img-product" />
              <span>
                <h2 class="heading2 text-center">Product 10</h2>
                <p class="text-center heading3 ">Sub-Title
                  <span class="text-right small-text">$500.75</span></p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Trending -->
    <section id="trending">
      <span class="heading1"> Trending </span>
      <div class="trending_container">
        <div class="trendingBx">
          <img src="./assets/Images/images (5).png" alt="Trending Image 1" class="img-fluid trendingImg" />
          <div class="trending_content">
            <h2 class="heading2">Mens Watch</h2>
            <p>The intended recipient You should have</p>
            <a href="./Pages/Watches.html" class="button1"> <span>Shop Now</span></a>
          </div>
        </div>
        <div class="trendingBx">
          <img src="./assets/Images/images (5).png" alt="Trending Image 1" class="img-fluid trendingImg" />
          <div class="trending_content">
            <h2 class="heading2"> Suits</h2>
            <p>The intended recipient You should have</p>
            <a href="./Pages/suites.html" class="button1"> <span>Shop Now</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured -->
    <section id="featured">
      <span class="heading1">Featured</span>
      <div class="container-fluid p-0">
        <div class="featured">
          <img src="./assets/Images/images (1).png" alt="Banner 1" class="img-fluid banner-img" />
          <div class="featured_content">
            <h2 class="banner-heading">Shop</h2>
            <p class="banner-text">Some Text Here....</p>
            <a class="button1" href="./Pages/shop.html"><span>Shop Now</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- More \\ Categories -->
    <section id="more">
      <span class="heading1"> Categories </span>
      <div class="more_container">
        <div class="trendingBx">
          <img src="./assets/Images/images (5).png" alt="Trending Image 1" class="img-fluid trendingImg" />
          <div class="trending_content">
            <h2 class="heading2">T Shirt</h2>
            <p>The intended recipient You should have</p>
            <a href="./Pages/t-shirts.html" class="button1"> <span>Shop Now</span></a>
          </div>
        </div>
        <div class="trendingBx">
          <img src="./assets/Images/images (5).png" alt="Trending Image 1" class="img-fluid trendingImg" />
          <div class="trending_content">
            <h2 class="heading2"> Casual's</h2>
            <p>The intended recipient You should have</p>
            <a href="./Pages/Casuals.html" class="button1"> <span>Shop Now</span></a>
          </div>
        </div>
        <div class="trendingBx">
          <img src="./assets/Images/images (5).png" alt="Trending Image 1" class="img-fluid trendingImg" />
          <div class="trending_content">
            <h2 class="heading2"> Suits</h2>
            <p>The intended recipient You should have</p>
            <a href="./Pages/suites.html" class="button1"> <span>Shop Now</span></a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h4 class="galada f-16">Brand</h4>
          <p class="text-white-50">Location and Information about your company</p>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="kosugi font-300 text-white-50 ">Legal </h4>
          <div class="d-flex flex-column justify-content-center flex-wrap">
            <a href="#" class="text-white-50 pb-1 mont">About Us</a>
            <a href="#" class="text-white-50 pb-1 mont">Career</a>
            <a href="#" class="text-white-50 pb-1 mont">Sell </a>
            <a href="#" class="text-white-50 pb-1 mont">Terms Of Services</a>
            <a href="#" class="text-white-50 pb-1 mont">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Copyright -->
  <div class="copyright text-center bg-dark white py-2 ">
    <p class="julius font-16">&copy; copyright 2020 <small class="small ">Designed By...</small></p>
  </div>
  <!-- Bootstrap JavaScript CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- Fontawesome CDN -->
  <script src="https://kit.fontawesome.com/ec2ebb3023.js" crossorigin="anonymous"></script>
  <!-- Slick JavaScript CDN -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Project JavaScript -->
  <script src="main.js"></script>
</body>

</html>