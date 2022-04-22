<?php if (have_rows('cards_section')) : ?>
<section class="section section-services">
    <div class="centering">
        <div class="grid service-center small-padding">
        <?php 
        $counter = 1;
        while(have_rows('cards_section')) : the_row();
            $bg_img_id = get_sub_field('background_image');
            $bg_img = wp_get_attachment_image_url($bg_img_id, 'full');
            $title = get_sub_field('title');
            $excerpt = get_sub_field('excerpt');
            $content = get_sub_field('content');
            $button = get_sub_field('button');
            ?>
            <div class="grid-m-4 grid-s-12 grid-xs-12 item-wrapper">
                <div class="item-image overlay" style="background-image: url('<?php echo $bg_img; ?>')">
                    
                </div>

                <div class="service-box">
                    <?php if ($title): ?>
                        <h3 class="section-title"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <div class="service-content">
                        <?php echo $excerpt; ?>
                    
                        <?php if (!empty($button) && !empty($button['url']) && !empty($button['title'])): ?>
                            <a href="<?php echo $button['url']; ?>" class="button"><?php echo $button['title']; ?></a>
                        <?php endif; ?>                                        
                    </div>
                
                </div>
            </div>           
            <?php 
            $counter++;
            endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>
