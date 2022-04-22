<?php
$images = get_field('background_images');
$width =  get_field('width');
if($width === true) {
    $width = 'half-width';
}
$size = 'full'; // (thumbnail, medium, large, full or custom size)ail, medium, large, full or custom size)
if( $images ): ?>
    <div class="slideshow bg-slideshow <?php echo $width; ?>" data-flickity-options='{"fade": true, "prevNextButtons": false, "autoPlay": 6000}'>
        <?php foreach( $images as $image_id ): ?>
            <div class="slideshow-slide" style="background-image: url('<?php echo wp_get_attachment_image_url( $image_id, $size ); ?>')">
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
