<?php
    $preheading = get_sub_field('preheading');
	$heading = get_sub_field('heading');
	$content = get_sub_field('content');
    $cta = get_sub_field('cta');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container container--medium text-center">
        <?php if(!empty($heading)): ?>
        <div class="section__header hover-wrapper">
            <?php if(!empty($heading)): ?>
                <p class="preheading">
                <?php echo $preheading; ?>
                </p>
            <?php endif; ?>
            <h2><?php echo $heading; ?></h2>
            <?php if(!empty($cta)):?>     
                
                <a
                    class="btn btn--grey desk-only"
                    href="<?php echo esc_url( $cta['url'] ); ?>"
                    target="<?php echo esc_attr( $cta['target'] ); ?>"
                >
                    <?php echo esc_html( $cta['title'] ); ?>
                </a>
          
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if(!empty($content)): ?>
        <div class="section__content h6"><?php echo $content; ?></div>
        <?php endif; ?>
        <?php if(!empty($cta)):?>     
                <div class="section__cta mob-only">
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
</section>