<?php 
    $bg_image = get_sub_field('bg_image');

    if(!empty($bg_image)) {
        $bg_image = getIMG($bg_image['ID'], 'xl', true);
    }

    $heading = get_sub_field('heading');
    $form = get_sub_field('form_shortcode');
    $blocks = get_sub_field('blocks');
?>
<section class="contact-block" <?php echo $bg_image;?> >
    <div class="container">
        <div class="contact-block__intro">
            
            <h2 class="section-title h1">
                <?= $heading ?>
            </h2>
        </div>

        <div class="contact-block__block contact-block__block--form">
            <?php if(!empty($form)) {
                echo do_shortcode( $form );
            } ?>
        </div>

        <div class="contact-block__blocks">
              <?php foreach($blocks as $block) : ?>
              <div class="contact-block__block">
                <div class="contact-block__block-left heading-font">
                    <span class="contact-block__block-label">
                        <?php echo $block['label']; ?>
                    </span>
                    <p class="contact-block__block-title h4">
                        <?php echo $block['text']; ?>
                    </p>
                </div>
                
              </div>
              <?php endforeach; ?>
        </div>
    </div>
</section>