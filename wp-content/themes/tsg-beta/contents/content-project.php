<?php
      $location = get_field('location');
      $gallery = get_field('gallery');
 ?>
<section class="section main-section single-gallery">
      <div class="slide-row">
          <?php
          $images = get_field('gallery');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          $counter = 0;
          $loopcounter = count($images);
          // var_dump($imagescounter);
          if( $images ): ?>
              <div class="gallery-wrapper slideshow"  data-flickity-options='{ "watchCSS": true}'>
                <?php if ($loopcounter == 2): ?>
                    <?php get_template_part('items/item-two-project'); ?>
                <?php endif; ?>
                <?php if ($loopcounter > 2): ?>
                    <?php get_template_part('items/item-regular-project'); ?>
                <?php endif; ?>
            </div>
          <?php endif; ?>


            <div class="gallery-wrapper gallery-details-wrapper" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                    <div class="slide-box content-box">
                        <h1 class="section-title h2"><?php echo the_title(); ?></h1>
                        <div class="slide-content">
                          <?php if ($location): ?>
                              <div class="project-location">
                                <?php echo $location ?>
                              </div>
                          <?php endif; ?>
                        <?php the_content(); ?>
                       </div>
                </div>
            </div>
     </div>

</section>
