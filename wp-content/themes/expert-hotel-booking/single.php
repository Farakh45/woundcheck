<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Expert Hotel Booking
 */

get_header();
?>
<section class="blog-area inarea-blog-single-page-two">
	<div class="container">
		<div class="row">
            <?php 
                $expert_hotel_booking_single_post_sidebar_setting = get_theme_mod('expert_hotel_booking_single_post_sidebar_setting','1');
                $expert_hotel_booking_content_class = ($expert_hotel_booking_single_post_sidebar_setting == '') ? 'col-lg-12' : 'col-lg-8';
            ?>
            <div class="<?php echo esc_attr($expert_hotel_booking_content_class); ?>">
				<div class="singel-page-area">
					<?php if( have_posts() ): ?>
						<?php while( have_posts() ): the_post(); ?>
							<?php get_template_part('template-parts/content/content-post', get_post_format()); ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php comments_template( '', true ); // show comments  ?>
				</div>
			</div>
			<?php if( $expert_hotel_booking_single_post_sidebar_setting != '') { ?> 
                <?php get_sidebar(); ?>
            <?php } ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
