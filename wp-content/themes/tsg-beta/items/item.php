<div class="item-post">
	<div  <?php post_class('grid align-vertically'); ?> id="<?php echo get_post_type(); ?>-<?php echo get_the_ID(); ?>"  role="listitem">
			<div class="grid-xs-12 grid-s-6 grid-md-6 section-img">
				<div class="item-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">	<a href="<?php the_permalink(); ?>"></a>	</div>
			</div>
			<div class="grid-xs-12 grid-s-6 grid-md-6 item-content">
					<span class="item-date"><?php echo get_the_date('F d, Y'); ?></span>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
					<div class="item-text">
							<?php the_excerpt(); ?>
					</div>
					<a href="<?php echo get_bloginfo('url'); ?>/contact" class="button">Read More</a>
			</div>
	</div>
</div>
