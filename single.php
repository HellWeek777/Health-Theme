<?php

get_header();
?>
<?php while( have_posts() ): ?>
    <?php the_post(); ?>
    <div class="content-container">

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
                </div>
              </div>
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
          </div>
        </div>
      </div>
    </section>


    <section class="pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              <h2 class="info__ttile"><?php the_field('tytul_3'); ?></h2>
              
              <p class="text-block__desc mb-20 font-weight-bold color-secondary" style="text-align: justify;"><?php the_field('tekst'); ?></p>
<h5 class="text-block__title"><?php the_field('srodtytul'); ?></h5>
              <p class="text-block__desc mb-20 font-weight-bold color-secondary" style="text-align: justify;"><?php the_field('tekst_2'); ?></p>
              
            </div>
            
            <div class="text-block mb-50">
              <h5 class="text-block__title">Przygotowanie do badań</h5>
              <p class="text-block__desc mb-20 font-weight-bold color-secondary"><?php the_field('przygotowanie_do_badan'); ?>

              </p>
              
            </div>
            
            
                     
            <div class="widget-plan">
              <div class="widget__body" style="background-color: #DEF8F6;3">
                <h5 class="widget__title">Pakiet zawiera następujące badania</h5>
                <p class="text-block__desc mb-20 font-weight-bold color-secondary">
                </p>
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items" style="margin-bottom: 20px;">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_1'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_2'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                   <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_3'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items" style="margin-bottom: 20px;">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_4'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_5'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                   <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_6'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items" style="margin-bottom: 20px;">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_7'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_8'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="plan__items">
                      <ul class="list-items list-items-layout2 list-unstyled mb-0">
                        <li><?php the_field('badanie_9'); ?></li>
                        
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="widget__footer d-flex flex-wrap justify-content-between align-items-center">
                <div style="margin-bottom: 20px;" class="plan__price"><span style="font-size: 40px;"><b><?php the_field('cena'); ?> PLN</b></span></div>
                <div class="d-flex align-items-center">
                  <a href="#" class="btn btn__secondary btn__rounded mr-30">
                    <span>Kup Teraz</span> <i class="icon-arrow-right"></i>
                  </a>
                  
                </div>
              </div>
            </div>

            <section class="team-layout2 pb-30">
              <div class="heading mb-40">
                <h3 class="heading__title">Może zainteresuję Cię również</h3>
                <p class="heading__desc">
                </p>
              </div>
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                 <?php 
                
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 99999,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'post__not_in' => array(get_the_ID()),
                    
                );
                   
                
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>
      
                <div class="member">

                  <div class="member__img">
                    <a href="#"><img src="<?php the_field('obrazek'); ?>" alt="member img"></a>
                  </div>
                  <div class="member__info">
                    <h5 class="member__name"><a href="<?php the_permalink(); ?>"><?php the_field('tytul'); ?></a></h5>
                    
                  </div>
                </div>
                
                  <?php } ?>
                <?php wp_reset_postdata(); ?> 

              </div>
            </section>
            
          </div>
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
                </div>
              </div>
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="" alt="background"></div>
                <div class="widget-content">
                 
                  <h4 style="margin-bottom: 40px; font-size: 30px;" class="widget__title"><?php the_field('cena'); ?> PLN</h4>
                  
                  <a href="" class="btn btn__primary btn__rounded">
                  <span>Kup teraz!</span> <i class="icon-arrow-right"></i>
                </a>
                </div>
              </div>
              
            </aside>
          </div>
        </div>
      </div>
    </section>
    </div>
<?php endwhile; ?> 
<?php get_footer(); ?>