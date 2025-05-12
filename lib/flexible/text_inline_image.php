<?php
    $preheading = get_sub_field('preheading');
	$text = get_sub_field('text');
	$text2 = get_sub_field('second_text');
    $image = get_sub_field('image');
    $cta = get_sub_field('cta');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($preheading)): ?>
            <p class="preheading">
                <?php echo $preheading; ?>
            </p>
        <?php endif; ?>
       
        <div class="section__content heading-font">
            <?php if(!empty($text)): ?>
                <span>
                    <?php echo $text; ?>
                </span>
            <?php endif; ?>

            <?php if(!empty($image)): ?>
                <?php echo getIMG($image['ID'], 'md'); ?>
            <?php endif; ?>

            <?php if(!empty($text2)): ?>
                <span>
                    <?php echo $text2; ?>
                </span>
            <?php endif; ?>
            <?php if(!empty($cta)):?>     
                <div class="section__cta">
                    <a
                        class="btn btn--grey"
                        href="<?php echo esc_url( $cta['url'] ); ?>"
                        target="<?php echo esc_attr( $cta['target'] ); ?>"
                    >
                        <?php echo esc_html( $cta['title'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>