<?php
$images = get_field('gallery');
if ($images) : ?>
<section class="section main-section">
  <div class="hero slideshow" data-flickity-options='{"autoPlay": 6000, "prevNextButtons": false}'>
    <?php foreach ($images as $image):
        $bg_img = wp_get_attachment_image_url($image, 'full');
        ?>
    <div class="slideshow-slide"
      style="background-image: url('<?php echo $bg_img; ?>')"></div>
    <?php endforeach; ?>

    <div class="slideshow-content">
      <?php
            $logo_id = get_field('logo');
            $link = get_field('logo_link');
            $logo = wp_get_attachment_image_url($logo_id, 'full');
            $style_title = get_field('style_title');
            $text = get_field('text');
            ?>
      <?php if ($logo): ?>

      <?php if (!empty($link) && !empty($link['url']) && !empty($link['title'])): ?>
      <a href="<?php echo $link['url']; ?>">
        <img src="<?php echo $logo; ?>" alt="">
      </a>
      <?php endif; ?>

      <?php endif; ?>

      <?php if ($text): ?>
      <div class="title">
        <div class="h1 normal-title">
          <?php echo $text; ?>
        </div>

        <h1>
          <?php echo $style_title; ?>
        </h1>
      </div>      
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif;
