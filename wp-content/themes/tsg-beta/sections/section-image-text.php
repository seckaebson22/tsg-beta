<?php 
    $text = get_sub_field('text');
    $title = get_sub_field('title');
    $image_id = get_sub_field('image');
    $button = get_sub_field('button');
?>

<?php if($image_id) : ?>
    <section class="section text-image whole-background post-wrapper">
        <div class="centering"> 
            <div class="section-image">
                <?php echo wp_get_attachment_image($image_id, 'large'); ?>
            </div>

            <?php if ($text || $title) : ?>
                <div class="section-content">	
                    <h2 class="section-title"><?php echo $title; ?></h2>
                    <?php echo $text; ?>

                    <?php if(!empty($button) && $button['title'] && $button['url']) { ?>
                        <div class="section-actions align-center">
                            <a href="<?php echo $button['url']; ?>" class="button" target="<?php echo esc_attr( $target ); ?>"><?php echo $button['title']; ?></a>
                        </div>
                    <?php } ?>
                </div>   
            <?php endif; ?>  								     
        </div>
    </section>
<?php endif; ?> 