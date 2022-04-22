<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage xtheme
 * @since xtheme 1.0
 */
;?>


<section id="<?php echo get_post_type()."-".get_the_ID(); ?>" class="section whole-background post-wrapper">
		<div class="centering">
				<div class="post-content">
					<div class="post-meta">
							<h2 class="h2"><?php echo get_page_title(); ?></h2>
					</div>
						<p><?php _e("It seems we can't find what you're looking for. Perhaps searching can help.", 'xtheme');?></p>
				</div>
		</div>
</section>
