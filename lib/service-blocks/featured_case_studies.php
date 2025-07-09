<?php
	$heading = get_sub_field('heading');
    $heading2 = get_sub_field('second_heading');
	$case_studies = get_sub_field('case_studies');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));

    $service_title = get_the_title();
    $service_title = str_replace("&", "%26", $service_title);
    $service_title = str_replace( '#038;', '', $service_title );
    $service_handle = strtolower( str_replace( ' ', '-', $service_title ) );
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="section__header">
            
            <div class="section__header--wrapper">
                <h2 class="display-1 headline-1"><?php echo $heading; ?></h2>
                <h2 class="display-1 headline-2">
                    <?php echo $heading2; ?>
                </h2>
            </div>
            <div class="text-center featured-case-studies__cta">
                <a class="heading-font" href="/case-studies?filter=<?php echo $service_handle; ?>">
                    SEE ALL CASE STUDIES
                </a>
            </div>
        </div>
        <?php endif; ?>
        <div class="featured-case-studies__grid">
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
    </div>
</section>