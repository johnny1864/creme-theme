<?php 
    $section = get_field('contact_page');
    $bg_image = $section['background_image'];

    if(!empty($bg_image)) {
        $bg_image = getIMG($bg_image['ID'], 'xl', true);
    }

    $title = get_the_title();
    if($section['headline']) {
        $title = $section['headline'];
    }
?>
<section class="contact" <?php echo $bg_image;?> >
    <div class="container">
        <div class="section__header">
            <?php if($section['preheading']) : ?>
                <span class="preheading">
                    <?php echo $section['preheading']; ?>
                </span>
            <?php endif; ?>
            <h1>
                <?php echo $title; ?>
            </h1>
        </div>

        <div class="contact__blocks">
              <?php foreach($section['blocks'] as $block) : ?>
              <div class="contact__block">
                <div class="contact__block-left heading-font">
                    <?php echo $block['label']; ?>
                </div>
                <div class="contact__block-right">
                    <div class="h2">
                        <?php echo $block['text']; ?>
                    </div>
                    
                    <?php if(!empty($block['form_shortcode'])) {
                        echo do_shortcode( $block['form_shortcode'] );
                    } ?>
                </div>
              </div>
              <?php endforeach; ?>
        </div>
    </div>
</section>