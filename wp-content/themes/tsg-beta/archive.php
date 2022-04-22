<?php get_header(); ?>

<section class="section section-services">
    <h1 class="screen-reader-text"><?php echo get_page_title(); ?></h1>
    <?php	if ( have_posts() ) : ?>
      <div class="slideshow gallery-slideshow service-center" data-flickity-options='{ "wrapAround": true}'>
				<?php while ( have_posts() ) : the_post(); ?>
            <div class="slideshow-slide item-service" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
  					     <?php get_template_part( 'items/item', get_post_type() ); ?>
            </div>
          <?php
				endwhile; ?>
      </div>
			<?php else :
				get_template_part( 'items/item-empty', get_post_type() );
			endif;
		?>


</section>

<?php get_footer(); ?>
