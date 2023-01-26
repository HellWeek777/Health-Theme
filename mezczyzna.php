<?php 
/*
Template Name: Mężczyzna
*/

get_header();
?>
<?php while( have_posts() ): ?>
    <?php the_post(); ?>
    



    <section class="page-title">
      <div class="bg-img"><img src="<?php the_field('zdjecie'); ?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h1 class="pagetitle__heading" style="color: #ffffff; font-size: 55px;"><?php the_title(); ?></h1>
            
            
          </div>
        </div>
      </div>
    </section>


    <section class="services-layout2 pt-130">
      <div class="container">
        <div class="row">
           
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-60">
              <h3 class="heading__title">WYBIERZ BADANIE I ZAMÓW ONLINE</h3>
            </div>
          </div>
        </div>
        <div class="row">

          <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 99999,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => 'mezczyzna',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="<?php the_field('obrazek'); ?>" alt="img" loading="lazy">
              </div>
              <div class="service__content">
                <h4 class="service__title"><a style="color:#283B6A;" href="<?php the_permalink(); ?>"><?php the_field('tytul'); ?></a></h4>
                <p class="service__desc" style="text-align: justify;"><?php echo custom_field_excerpt(); ?></p>
                
                <div class="info__meta d-flex flex-wrap justify-content-between align-items-center">
                <div class="testimonials__rating">
                  <div class="testimonials__rating-inner d-flex align-items-center">
                    <span class="total__rate"><b><?php the_field('cena'); ?> PLN</b></span>
                    
                  </div>
                </div>
                <a style="color:#283B6A;" href="<?php the_permalink(); ?>" class="btn btn__secondary btn__outlined btn__rounded" style="margin-top: 20px;">
                      <span>ZOBACZ WIĘCEJ</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                <a href="" class="btn btn__primary btn__rounded" style="margin-top: 20px;">
                  <span>Kup teraz!</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
              </div>


            </div>

          </div>

         <?php } ?>
                <?php wp_reset_postdata(); ?>
         
        </div>
      </div>
    </section>

  
 
   <section class="" style="background-color: #F1F2F6;">
    <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-60">
              <h3 class="heading__title">WSZYSTKIE BADANIA</h3>
            </div>
          </div>
        </div>
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
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div style="background-color: #F1F2F6 !important;" class="widget widget-services">
                <h5 class="widget__title">Pakiety badań</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span>Dla każdego</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Kobieta</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Mężczyzna</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Dzieci</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Koronawirus</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Wszystkie pakiety</span><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </section>

<?php endwhile; ?> 
<?php get_footer(); ?>