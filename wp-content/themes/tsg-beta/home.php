<?php get_header(); ?>

<section class="section split-background post-wrapper">
    <h1 class="screen-reader-text"><?php echo get_page_title(); ?></h1>
    <div class="centering">
    <?php	if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'items/item', get_post_type() ); ?>
				<?php endwhile; ?>

			<?php else :
				get_template_part( 'items/item-empty', get_post_type() );
			endif;
		?>
    <?php get_template_part( 'components/pagination' ); ?>
  </div>
</section>

<?php get_footer(); ?>
