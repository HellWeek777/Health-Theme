<!DOCTYPE html>
<html <?php language_attributes(); ?>> 

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="">
  <link href="" rel="icon">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
<?php wp_head() ?>
</head>

<body>
  <div class="wrapper">



    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="trigger" type="button">BIURO OBSŁUGI</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="mailto:" class="phone__number">
                        <i class="fas fa-envelope"></i> <span>badania@moje-zdrowie.pl</span>
                      </a>
                      <p>Jeśli masz pytania, napisz do nas.
                      </p>
                      
                    </div>
                  </li>
                  <li>
                    <i class="fas fa-envelope"></i><a href="">badania@moje-zdrowie.pl</a>
                  </li>
                  
                </ul>
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Szukaj...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <?php the_custom_logo(); ?>
            
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item has-dropdown">
                <a href="" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>
                
              </li>
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Katalog Badań</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Dla kobiet</a>
                  </li>
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Dla mężczyzn</a>
                  </li>
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Dla każdego</a>
                  </li>
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Pakiety badań</a>
                  </li>
                  
                </ul>
              </li>
              
            <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Oferta</a>
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
              </li>
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div>
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <a href="">Koronawirus</a>
            </div>
            <ul id="miniPopup-departments" class="dropdown-menu">
              <li class="nav__item">
                <a href="" class="nav__item-link">Test COVID-19</a>
              </li>
              <li class="nav__item">
                <a href="" class="nav__item-link">Rodzaje testów w kierunku COVID-19</a>
              </li>
              <li class="nav__item">
                <a href="" class="nav__item-link">Badania przeciwciał anty-SARS-COV-2</a>
              </li>
              <li class="nav__item">
                <a href="" class="nav__item-link">Badania SARS-COV-2 testy antygenowe</a>
              </li>
              <li class="nav__item">
                <a href="" class="nav__item-link">Oferta badań dla podróżujących</a>
              </li>
              <li class="nav__item">
                <a href="" class="nav__item-link">Badanie COVID dla pracowników</a>
              </li>
            </ul> 
            <a href="" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Wyniki online</span>
            </a>
          </div>
        </div>
      </nav>
    </header>