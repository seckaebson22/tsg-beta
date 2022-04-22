<section class="section split-background" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="centering">

        <!--GRID SECTION-->
        <div class="grid">
            <?php if (have_rows('tabs_section')) : ?>
            <div class="grid-xs-12 grid-s-6 grid-m-6">
                <nav class="tabs">
                <ul class="tabs-nav menu">
                <?php while(have_rows('tabs_section')) : the_row();
                            $menu_title = get_sub_field('menu_title');
                            $str = str_replace(' ', '', $menu_title);
                            ?>

                    <?php if ($menu_title): ?>
                            <li class="tabs-link"><a href="#<?php echo $str; ?>"><?php echo $menu_title; ?></a></li>
                    <?php endif; ?>
                <?php endwhile; ?>
                </ul>
                </nav>
            </div>
            <?php endif; ?>

            <?php if (have_rows('tabs_section')) : ?>
            <div class="grid-xs-12 grid-s-6 grid-m-6">
            <ul class="tab-container tabs">
            <?php while(have_rows('tabs_section')) : the_row();
                        $section_title = get_sub_field('section_title');
                        $content = get_sub_field('content');
                        $menu_title = get_sub_field('menu_title');
                        $str = str_replace(' ', '', $menu_title);
                        ?>

                    <li id="<?php echo $str; ?>" class="tab">
                        <?php if ($section_title): ?>
                        <h2 class="section-title"><?php echo $section_title; ?></h2>
                        <?php endif; ?>

                        <?php if ($content): ?>
                        <div class="section-content">
                        <?php echo $content; ?>
                        </div>
                        <?php endif; ?>
                    </li>

            <?php endwhile; ?>
            </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
