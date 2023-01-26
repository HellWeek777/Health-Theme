<?php

get_header();
?>
<?php while( have_posts() ): ?>
    <?php the_post(); ?>
    <div class="content-container">
            <!-- ========================
    title 
    =========================== -->
    <section class="page-title  page-title-layout7 bg-overlay pb-0">
      <div class="bg-img"><img src="<?php the_field('obrazek'); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            
            <div class="info-card">
              <div class="row">
                
                <div class="col-sm-12 col-md-12">
                  <h2 class="info__ttile"><?php the_field('tytul'); ?></h2>
                  <p class="info__desc"></p>
                </div><!-- /.col-md-7 -->
              </div><!-- /.row -->
              <div class="info__meta d-flex flex-wrap justify-content-between align-items-center">
                <div class="testimonials__rating">
                  <div class="testimonials__rating-inner d-flex align-items-center">
                  <span class="total__rate"><b><?php the_field('cena'); ?> PLN</b></span>
                  </div>
              </div>
                <a href="" class="btn btn__primary btn__rounded">
                  <span>Kup teraz!</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
        </div><!-- /.col-xl-6 -->
      </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section class="pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              
              <p class="text-block__desc mb-20 font-weight-bold color-secondary" style="text-align: justify;"><?php the_field('tekst'); ?></p>
<h5 class="text-block__title"><?php the_field('srodtytul'); ?></h5>
              <p class="text-block__desc mb-20 font-weight-bold color-secondary" style="text-align: justify;"><?php the_field('tekst2'); ?></p>
              
            </div><!-- /.text-block -->
            
            <div class="text-block mb-50">
              <h5 class="text-block__title">Przygotowanie do badań</h5>
              <p class="text-block__desc mb-20 font-weight-bold color-secondary"><?php the_field('przygotowanie_do_badan'); ?>

              </p>
              
            </div><!-- /.text-block -->
            
            
                     
            <div class="widget-plan">
              <div class="widget__body">
                <h5 class="widget__title">Pakiet zawiera następujące badania</h5>
                <p class="text-block__desc mb-20 font-weight-bold color-secondary">
                </p>
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items" style="margin-bottom: 20px;">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li>IgE całkowite Kod badania: 700</li>
                        
                      </ul>
                    </div>
                  </div><!-- /.col-md-6 -->
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li>Morfologia krwi (pełna) Kod badania: 3</li>
                        
                      </ul>
                    </div>
                  </div><!-- /.col-md-6 -->
                   <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li>Panel pediatryczny (28 alergenów) Kod badania: 805</li>
                        
                      </ul>
                    </div>
                  </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
              </div><!-- /.widget__body -->
              <div class="widget__footer d-flex flex-wrap justify-content-between align-items-center">
                <div style="margin-bottom: 20px;" class="plan__price"><span style="font-size: 40px;"><b><?php the_field('cena'); ?> PLN</b></span></div>
                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn__secondary btn__rounded mr-30">
                    <span>Kup Teraz</span> <i class="icon-arrow-right"></i>
                  </a>
                  
                </div>
              </div><!-- /.widget__footer -->
            </div><!-- /.widget-plan -->
            <!-- ======================
                 Team
             ========================= -->
            <section class="team-layout2 pb-30">
              <div class="heading mb-40">
                <h3 class="heading__title">Może zainteresuję Cię również</h3>
                <p class="heading__desc">
                </p>
              </div><!-- /.heading -->
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- Member #1 -->
                <div class="member">
                  <div class="member__img">
                    <a href="http://moje-zdrowie.pl/e-pakiet-nowotworowy-podstawowy.html"><img src="assets/images/team/2.jpg" alt="member img"></a>
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="e-pakiet-nowotworowy-podstawowy.html">e-PAKIET NOWOTWOROWY PODSTAWOWOWY</a></h5>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                
                <!-- Member #3 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/family.jpeg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="e-pakiet-dla-kazdego-maksimum.html">e-PAKIET DLA KAŻDEGO MAKSIMUM</a></h5>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #4 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/fit.jpeg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="e-pakiet-fit-med.html">e-PAKIET FIT MED</a></h5>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #5 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/maluch.jpeg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="e-pakiet-maluch.html">e-PAKIET MALUCH</a></h5>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
                <!-- Member #6 -->
                <div class="member">
                  <div class="member__img">
                    <img src="assets/images/team/kobiety.jpeg" alt="member img">
                  </div><!-- /.member-img -->
                  <div class="member__info">
                    <h5 class="member__name"><a href="e-pakiet-nowotworowy-u-kobiet.html">e-PAKIET NOWOTWOROWY DLA KOBIET</a></h5>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
              </div><!-- /.carousel -->
            </section><!-- /.Team -->
            
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
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
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                 
                  <h6 style="margin-bottom: 40px;" class="widget__title"> 219 PLN</h6>
                  
                  <a href="" class="btn btn__primary btn__rounded">
                  <span>Kup teraz!</span> <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    </div>
<?php endwhile; ?> 
<?php get_footer(); ?>