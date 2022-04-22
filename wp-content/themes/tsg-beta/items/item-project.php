<?php
      $project_logo = get_field('project_logo');
      $project_logo = wp_get_attachment_image( $project_logo, 'full' );
      $location = get_field('location');
 ?>

    <div class="slide-box content-box">
      <?php if ($project_logo): ?>
        <a href="<?php the_permalink(); ?>" class="gallery-image"><?php echo $project_logo; ?></a>
      <?php endif; ?>

        <h3 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
        <div class="slide-content">
          <?php if ($location): ?>
              <div class="project-location">
                <?php echo $location ?>
              </div>
          <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="button">View Project</a>
        </div>
    </div>
