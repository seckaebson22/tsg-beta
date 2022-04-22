<?php
  $content = get_sub_field('content_block');
	if($content) { ?>
		<section id="<?php echo get_post_type()."-".get_the_ID(); ?>" class="section whole-background post-wrapper">
		    <div class="centering">
		        <div class="post-content">
              <div class="post-meta">
                  <h1 class="h2"><?php the_title(); ?></h1>
              </div>
		            <?php  echo $content; ?>
		        </div>
		    </div>
		</section>

	<?php }?>
