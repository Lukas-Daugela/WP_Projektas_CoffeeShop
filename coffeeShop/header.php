<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php wp_head(); ?>

<header class="nav-header">
  <nav class="navigation-bar">
    <a href="/" class="branding-link">
      <div class="nav-branding"></div>
    </a>
  
    <?php 
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul class="navigation-menu">%3$s</ul>'
        )
      );        
    ?>
    
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
  </nav>
</header>



    <!-- Navbar -->
    <!-- <section class="navigation-bar">
      <div class="container">
        <div class="logo-container">
          <a href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="links-container">
          <a class="link" href="coffeeShop\homePage.php">
            Home
          </a>
          <a class="link" href="coffeeShop\coffee.php">
            Coffee
          </a>
          <a class="link" href="">
            Cake
          </a>
          <a class="link" href="">
            Contacts
          </a>

        </div>
      </div>
    </section> -->


    <!-- Bootstrap navbar not working atm -->
     <!-- <nav class="navbar navbar-expand-md navbar-dark">
      <div class="container">
      <a class="navbar-brand" href="index.php">
          <img
            src="images\coffee_logo_2.png"
            class="coffee-logo"
            alt=""
          />
        </a>

        <?php 
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="navbarSupportedContent" class="collapse navbar-collapse">%3$s</ul>'
            )
          );        
        ?>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="coffee_menu.php"
                >Coffee</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="food_menu.php"
                >Cakes</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="about.php"
                >About us</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contants">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>  -->


