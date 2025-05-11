<?php
    $label = 'Conclusion';

    if(!empty(get_sub_field('label'))) {
        $label = get_sub_field('label');
    }
	$content = get_sub_field('content');
    $case_studies = get_sub_field('case_studies');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <div class="section__header">
            <span class="headline-label">
                <?php echo $label; ?>
            </span>
            <span class="section__count">
                (0<?php echo $section_counter; ?>)
            </span>
        </div>
  
        <?php if(!empty($content)): ?>
            <div class="section__content section__block"><?php echo $content; ?></div>
        <?php endif; ?>

        <?php if( $case_studies ): ?>
        <div class="conclusion-case-studies__headline">
            <h2 class="h1">
                <span>Read</span>
                <span>More</span>
            </h2>
            <a class="heading-font" href="">
                SEE more CASE STUDIES
            </a>
        </div>
        <div class="featured-case-studies__grid">
                <?php foreach( $case_studies as $post ) :
                    setup_postdata($post); 
                    get_template_part('lib/parts/case-study-card');
                    ?>
                <?php 
                endforeach;
                wp_reset_postdata(); ?>
            
        </div>
        
        <?php endif; ?>
       
    </div>
</section>