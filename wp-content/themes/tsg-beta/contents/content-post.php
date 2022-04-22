<section class="section whole-background post-wrapper" >
    <div class="centering">
        <div class="post-content">
            <div class="post-meta">
                <p class="date"><?php echo get_the_date('F d, Y'); ?></p>
                <h2 class="h2"><?php the_title(); ?></h2>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</section>
