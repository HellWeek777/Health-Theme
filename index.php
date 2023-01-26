<?php
 get_header();
 ?> 
     <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h">
          <div class="bg-img"><img style="background-color: rgb(0,0,0,0);" src="assets/images/99.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="slide__content">
                  <h2 style="color: #ffffff;" class="slide__title">Wybierz swój pakiet badań</h2>
                  
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="slide__content">
                  <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                    <!-- feature item #1 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart"></i>
                      </div>
                      <h2 style="color: #ffffff;" class="feature__title">Pakiety badań</h2>
                    </li><!-- /.feature-item-->
                    <!-- feature item #2 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-medicine"></i>
                      </div>
                      <h2 style="color: #ffffff;" class="feature__title">Profilaktyka </h2>
                    </li><!-- /.feature-item-->
                    <!-- feature item #3 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart2"></i>
                      </div>
                      <h2 style="color: #ffffff;" class="feature__title">Specjalistyczne</h2>
                    </li><!-- /.feature-item-->
                    <!-- feature item #4 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-blood-test"></i>
                      </div>
                      <h2 style="color: #ffffff;" class="feature__title">Podstawowe</h2>
                    </li><!-- /.feature-item-->
                  </ul><!-- /.features-list -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
       
      </div><!-- /.carousel -->
    </section><!-- /.slider -->


 <!-- ======================
    Features Layout 3
    ========================= -->
    <section style="background-color: #F1F2F6;" class="features-layout3 py-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="row row-no-gutter feature-wrapper">
              <!-- Feature item #1 -->
              <div class="col-sm-12 col-md-4">
                <a href="https://moje-zdrowie.pl/pakiety-badan/">
                <div class="feature-item">
                  <div class="feature__content">
                    <h4 class="feature__title">Pakiety Badań</h4>
                  </div><!-- /.feature__content -->
                </div><!-- /.feature-item -->
                </a>
              </div><!-- /.col-md-4 -->
              <!-- Feature item #2 -->
              <div class="col-sm-12 col-md-4">
                <a href="https://moje-zdrowie.pl/">
                  <div class="feature-item">
                  <div class="feature__content">
                    
                    <h4 class="feature__title">Promocje </h4>
                  </div><!-- /.feature__content -->
                  </div><!-- /.feature-item -->
                  </a>
              </div><!-- /.col-md-4 -->
              <!-- Feature item #3 -->
              <div class="col-sm-12 col-md-4">
                <a href="https://moje-zdrowie.pl/badania-koronawirus/">
                <div class="feature-item">
                  <div class="feature__content">
                    <h4 class="feature__title">Koronawirus</h4>
                  </div><!-- /.feature__content -->
                </div><!-- /.feature-item -->
                </a>
              </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="feature-item feature-item-custom">
              <div class="feature__content">
                <h2 style="font-size: 22px; margin: auto;" class="feature__title">Zamów badania do domu</h2>
                
                
              </div><!-- /.feature__content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 3 -->
   

       <!-- ========================
        Services Layout 2
    =========================== -->
    <section style="background-color:#F1F2F6; padding-top: 50px;" class="services-layout2 services-carousel">
      <div class="bg-img"><img src="" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout1 heading-light mb-60">
              <h3 style="color: #0E204D;" class="heading__title">Zamów badanie online</h3>
              <p style="color: #0E204D;" class="heading__desc">Wybierz jedno z badań odpowiednich dla Ciebie i zamów online!</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container">
              <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "autoplay": true, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 99999,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'popularne',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>
                <!-- service item #1 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="<?php the_field('obrazek'); ?>" alt="img" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__content">
                    <h4 class="service__title"><a style="color:#283B6A;" href="<?php the_permalink(); ?>"><?php the_field('tytul'); ?></a></h4>
                    <p class="service__desc"><?php echo custom_field_excerpt(); ?>
                    </p>
                    <a href="" class="btn btn__secondary btn__outlined btn__rounded">
                      <span>ZAMÓW</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__content -->
                </div><!-- /.service-item -->
               <?php } ?>
                <?php wp_reset_postdata(); ?>
              </div><!-- /.carousel -->
            </div><!-- /.carousel-container -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 d-flex justify-content-end mt--20">
            <a href="" class="btn btn__white btn__link">
              <span></span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

<!-- ======================
    Features Layout 2
    ========================= -->
    <section style="padding-top: 50px; padding-bottom: 50px; background-color: #1D2A4D !important;" class="features-layout2 bg-overlay bg-overlay-primary">
      
      <div sttle="background-color: #1D2A4D !important;" class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
            <div class="heading__layout2 mb-50">
              <h3 class="heading__title color-white">NAJPOPULARNIEJSZE PAKIETY BADAŃ</h3>
            </div>
          </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        
        <div class="row">
          <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 99999,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'pakiety',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              
              <div class="feature__content">
                
                <h4 class="feature__title"><a style="color:#283B6A;" href="<?php the_permalink(); ?>"><?php the_field('tytul'); ?></a></h4>
              </div><!-- /.feature__content -->
              <a href="<?php the_permalink(); ?>" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <?php } ?>
                <?php wp_reset_postdata(); ?>
          
        </div><!-- /.row -->
        
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->


   <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="heading-layout2">
              <h3 class="heading__title mb-40">Polepsz jakość swojego życia robiąc regularnie badania dla całej rodziny.</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
              <p class="mb-30">Naszym celem jest dostarczanie usług najwyższej jakości.
              </p>
              <p class="mb-30">Postaw na odporność. Wybierz e-pakiety badań w obniżonych cenach!</p>
              
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
              <p class="mb-30">Bądź świadomy – bądź bezpieczny! 
              </p>
              <p class="mb-30">Postaw na odporność. Wybierz e-pakiety badań w obniżonych cenach!</p>
              
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

<!-- ========================
     Banner Layout 1
    =========================== -->
    <section class="banner-layout1 py-0">
      <div class="bg-img"><img src="assets/images/backgrounds/8.jpg" alt="backgrounds"></div>
      <div class="top-banner bg-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
             
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.top-banner -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="banner-text">
              <div class="heading-layout2 heading-light">
                <h2 class="heading__title">Przy zakupie pakietu dla całej rodziny, oszczędzasz 20%.</h2>
                <p style="text-align: justify;" class="heading__desc mb-40">Misją <b>Moje Zdrowie</b> jest przede wszystkim promocja profilaktyki.

Po sukcesach naszych akcji profilaktycznych prowadzonych od kilku lat w Internecie oraz w związku z wieloma prośbami ich uczestników, zdecydowaliśmy się dać naszym pacjentom stałą możliwość zakupu on-line voucherów na e-Pakiety badań dla siebie lub dla swoich bliskich w atrakcyjnych cenach.
                </p>
              </div>
              <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled mb-50">
                <li>Pakiety badań</li>
                <li>Atrakcyjne ceny</li>
                <li>Pełna oferta profilaktyki</li>
                <li>Możliwość łączenia pakietów</li>
                
              </ul>
              <div class="d-flex flex-wrap">
                <a href="" class="btn btn__white btn__rounded mr-30">
                  <span>ZAMÓW PAKIET</span> <i class="icon-arrow-right"></i>
                </a>
                <a href="" class="btn btn__white btn__outlined btn__rounded">
                  SPRAWDŹ PROMOCJĘ
                </a>
              </div>
            </div><!-- /.banner-text -->
            <div class="fancybox-layout3">
              <!-- fancybox item #1 -->
              <div class="fancybox-item d-flex">
                
                  <h3 style="padding: 10px;">15% </h3>
                <!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title mb-0">Taniej na pakiet dla Dzieci</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #2 -->
              <div class="fancybox-item d-flex">
                <h3 style="padding: 10px;">10% </h3>
                <div class="fancybox__content">
                  <h4 class="fancybox__title mb-0">Taniej na pakiet dla Mężczyzn</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #3 -->
              <div class="fancybox-item d-flex">
                <h3 style="padding: 10px;">10% </h3>
                <div class="fancybox__content">
                  <h4 class="fancybox__title mb-0">Taniej na pakiet dla Kobiet</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.fancybox-layout3 -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 banner-img">
            <div class="bg-img">
              <img src="assets/images/10.jpeg" alt="backgrounds" loading="lazy">
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner Layout 1 -->


   <section class="">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
         <div class="col-sm-12 col-md-6 col-lg-4">
              <div style="background-color: #F1F2F6 !important;" class="widget widget-services">
                <h5 class="widget__title">Koronawirus</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span>Test COVID-19</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Badania Przeciwciał</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Testy Antygenowe</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Badania dla podróżujących</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Badania dla pracowników</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Rodzaje testów</span><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div style="background-color: #F1F2F6 !important;" class="widget widget-services">
                <h5 class="widget__title">Pakiety badań</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="https://moje-zdrowie.pl/dla-kazdego/"><span>Dla każdego</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="https://moje-zdrowie.pl/badania-dla-kobiet/"><span>Kobieta</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="https://moje-zdrowie.pl/badania-dla-mezczyzn/"><span>Mężczyzna</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Dzieci</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="https://moje-zdrowie.pl/badania-koronawirus/"><span>Koronawirus</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="https://moje-zdrowie.pl/pakiety-badan/"><span>Wszystkie pakiety</span><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div style="background-color: #F1F2F6 !important;" class="widget widget-services">
                <h5 class="widget__title">Katalog badań</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span>Badania podstawowe</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Badania biochemiczne</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Choroby tarczycy</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Alergologia</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Badania krwi</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Mikrobiologia</span><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
     
    </section><!-- /.Footer -->
  
    <!-- ======================
     Work Process 
    ========================= -->
    <section style="background-color: #F1F2F6; padding=top: 50px;" class="work-process work-process-carousel  pb-0 bg-overlay bg-overlay-secondary kolof">
      
      <div class="container">
        <div class="row heading-layout2">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary">Jak skorzystać z usług Moje Zdrowie</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h3 style="color: #0E204D;" class="heading__title">CZTERY KROKI NA DRODZE DO ZDROWIA DLA CIEBIE.
            </h3>
          </div><!-- /.col-xl-5 -->
          
        </div><!-- /.row -->
        <div class="row kolof">
          <div class="col-12">
            <div class="carousel-container mt-90 ">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- process item #1 -->
                <div class="process-item">
                  <span class="process__number">01</span>
                  <div class="process__icon">
                    <i class="icon-health-report"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">WYBIERZ BADANIE</h4>
                  <p class="process__desc">Wybierz spośród oferty badań lub pakietów.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>ZAMÓW ONLINE</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #2 -->
                <div class="process-item">
                  <span class="process__number">02</span>
                  <div class="process__icon">
                    <i class="icon-dna"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">ZAPŁAĆ ONLINE</h4>
                  <p class="process__desc">Skorzystaj z błyskawicznej realizacji badania dzięki płatności online.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>ZAMÓW ONLINE</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #3 -->
                <div class="process-item">
                  <span class="process__number">03</span>
                  <div class="process__icon">
                    <i class="icon-medicine"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">ZRÓB BADANIE</h4>
                  <p class="process__desc">Przygotuj się do badania i wykonaj je zgodnie z instrukcją.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>ZAMÓW ONLINE</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #4 -->
                <div class="process-item">
                  <span class="process__number">04</span>
                  <div class="process__icon">
                    <i class="icon-stethoscope"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">ODBIERZ WYNIKI</h4>
                  <p class="process__desc">Odbierz wyniki online w panelu Klienta. </p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>ZAMÓW ONLINE</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #5 -->
               
              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
     
      </div><!-- /.cta -->
    </section><!-- /.Work Process -->

    


    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              
              <h3 class="heading__title">Poradnik Pacjenta</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="">
                  <img src="assets/images/12.jpeg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Dla pacjenta</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">20 paź, 2021</span>
                  <a class="post__meta-author" href="#"></a>
                </div>
                <h4 class="post__title"><a href="#">Jak przygotować się do badania</a></h4>

                <p class="post__desc">Zmiany w naszym organizmie spowodowane przyjęciem posiłku i porą dnia często nie są możliwe do określenia, dlatego zaleca się pobieranie krwi rano, na czczo, najlepiej po około 12-godzinnym nieprzyjmowaniu pokarmów.
                </p>
                <a href="" class="btn btn__secondary btn__link btn__rounded">
                  <span>Czytaj więcej</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="">
                  <img src="assets/images/as.jpeg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Porady</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Wrz 30, 2021</span>
                  <a class="post__meta-author" href="#"></a>
                </div>
                <h4 class="post__title"><a href="#">Jak Czytać Wyniki</a></h4>
                <p class="post__desc">Najważniejsze informacje na temat analizy otrzymanych wyników.
                </p>
                <a href="" class="btn btn__secondary btn__link btn__rounded">
                  <span>Czytaj więcej</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="">
                  <img src="assets/images/fre.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Dla pacjenta</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Wrz 28, 2021</span>
                  <a class="post__meta-author" href="#"></a>
                </div>
                <h4 class="post__title"><a href="#">Zasady pobierania krwi </a></h4>

                <p class="post__desc">Przyjdź na pobranie na czczo. Przed badaniem możesz wypić niewielką ilość wody. Dzień przed badaniem unikaj spożywania alkoholu. Dzień przed badaniem unikaj wysiłku fizycznego

                </p>
                <a href="" class="btn btn__secondary btn__link btn__rounded">
                  <span>Czytaj więcej</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
 <?php 
 get_footer(); 
 ?>