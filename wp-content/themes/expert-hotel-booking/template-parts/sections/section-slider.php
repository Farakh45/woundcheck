<?php 
  $expert_hotel_booking_slider = get_theme_mod('expert_hotel_booking_slider_setting','1');
  $expert_hotel_booking_slider_search = get_theme_mod('expert_hotel_booking_slider_search_setting','1');
  $expert_hotel_booking_slider_button = get_theme_mod('expert_hotel_booking_slider_button_setting','1');
  
  if($expert_hotel_booking_slider == '1') {
?>
<section id="slider-section" class="slider-area home-slider">
  <!-- start of hero -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <?php $expert_hotel_booking_pages = array();
      for ( $count = 1; $count <= 3; $count++ ) {
        $mod = intval( get_theme_mod( 'slider' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $expert_hotel_booking_pages[] = $mod;
        }
      }
      if( !empty($expert_hotel_booking_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $expert_hotel_booking_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){ ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
          <?php }else { ?><div class="slider-color-box"></div> <?php } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              <?php if($expert_hotel_booking_slider_button == '1') { ?>
                <div class="read-btn">
                  <a href="<?php the_permalink(); ?>"><?php echo esc_html('Explore Now','expert-hotel-booking'); ?><span class="screen-reader-text"><?php echo esc_html('Explore Now','expert-hotel-booking'); ?></span></a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; 
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif;
    endif;?>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
    <i class="fas fa-angle-left" aria-hidden="true"></i>
    <span class="screen-reader-text"><?php echo esc_html('Previous','expert-hotel-booking'); ?></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
    <i class="fas fa-angle-right" aria-hidden="true"></i>
    <span class="screen-reader-text"><?php echo esc_html('Next','expert-hotel-booking'); ?></span>
    </button>
  </div> 
  <div id="slider-inner">
    <div class="owl-carousel" id="carousel-thumbs">
      <?php $expert_hotel_booking_pages = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'slider' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $expert_hotel_booking_pages[] = $mod;
          }
        }
        if( !empty($expert_hotel_booking_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $expert_hotel_booking_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="slider-box">
          <?php if(has_post_thumbnail()){
            the_post_thumbnail();
          } ?>
          <div class="log-content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
          </div>
        </div>
      <?php endwhile; 
      wp_reset_postdata();?>
      <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
      endif;?>
    </div>
  </div>
  <!-- end of hero slider -->
  <?php if($expert_hotel_booking_slider_search == '1') { ?>
    <div class="slider-search-area">
      <?php get_search_form(); ?>
    </div>
  <?php } ?>
</section>
<?php } ?>