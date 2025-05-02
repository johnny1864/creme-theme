<?php
	$heading = get_sub_field('heading');
	$cta = get_sub_field('cta');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="section__header">
            <h2 class="headline-label"><?php echo $heading; ?></h2>
        </div>
        <?php endif; ?>
        <div class="text-cta__content">
            <h3>
                <?php echo get_sub_field('text');  ?>
            </h3>
            <?php if(!empty($cta)):?>
                <a
                    class="btn btn--grey"
                    href="<?php echo esc_url( $cta['url'] ); ?>"
                    target="<?php echo esc_attr( $cta['target'] ); ?>"
                >
                    <?php echo esc_html( $cta['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>