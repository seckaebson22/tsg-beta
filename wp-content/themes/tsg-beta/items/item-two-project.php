<?php
  $images = get_field('gallery');
  $counter = 0;
  $loopcounter = count($images);
  foreach( $images as $image_id ): ?>
  <?php
        $loop = $counter + 1;
        if ($counter == 0): ?>
        <div class="slideshow-slide">
          <div class="item-wrapper">
          <?php endif; ?>
                    <div class="gallery-item gallery-item-full-width" style="background-image: url('<?php echo wp_get_attachment_image_url( $image_id, $size ); ?>')"><a href="<?php echo wp_get_attachment_image_url( $image_id, $size ); ?>"></a> </div>
          <?php if ($loop == $loopcounter ): ?>
        </div>
      </div>
  <?php endif; ?>
<?php
$counter++;
if ($counter == 4 ) {
$counter = 0;
}
endforeach; ?>
