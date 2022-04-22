<?php
  $title = get_sub_field('title');
  $form = get_sub_field('form');
  $heading = get_sub_field('heading');
  $sub_heading = get_sub_field('sub_heading');
  $address = get_sub_field('address');
  $contact_details = get_sub_field('contact_details');
  ?>

<section class="section form-wrapper split-background" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="centering">
        <div class="grid">            
            <div class="grid-md-6 grid-s-6 grid-xs-12 get-grid">
                <div class="section-content">
                    <?php if ($heading): ?>
                    <h1 class="section-title h2"><?php echo $heading; ?></h1>
                    <?php endif; ?>
                    <div class="get-content">
                    <?php if ($sub_heading): ?>
                        <?php echo $sub_heading; ?>
                        <?php endif; ?>

                        <?php if ($address): ?>
                        <div class="contact-information">
                            <?php echo $address; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($contact_details): ?>
                        <div class="contact-details">
                        <?php echo $contact_details; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="grid-md-6 grid-s-6 grid-xs-12 get-grid form-wrapper">
                <?php if ($title): ?>
                <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($form): ?>
                    <div class="form">
                    <?php echo $form; ?>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
