<?php
	$heading = get_sub_field('heading');
    $heading2 = get_sub_field('second_heading');
	$case_studies = get_sub_field('case_studies');
    $label = get_sub_field('label');
    $cta = get_sub_field('cta');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="section__header">
            
            <div class="section__header--wrapper">
                <?php if(!empty($label)): ?>
                    <p class="section__header-label heading-font">
                        <?php echo $label; ?>
                    </p>
                <?php endif; ?>
                <h2 class="display-1 headline-1"><?php echo $heading; ?></h2>
                <h2 class="display-1 headline-2">
                    <?php echo $heading2; ?>
                </h2>
            </div>
            <div class="text-center featured-case-studies__cta">
                <?php if(!empty($cta)):?>
                    <a
                        class="heading-font text-uppercase"
                        href="<?php echo esc_url( $cta['url'] ); ?>"
                        target="<?php echo esc_attr( $cta['target'] ); ?>"
                    >
                        <?php echo esc_html( $cta['title'] ); ?>
                    </a>
                <?php endif; ?>
                
            </div>
        </div>
        <?php endif; ?>
        <?php if( $case_studies ): ?>

            <?php foreach( $case_studies as $post ) :
                setup_postdata($post); 
                get_template_part('lib/parts/case-study-card');
                ?>
            <?php 
            endforeach;
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>