<?php
    $case_studies = get_sub_field('case_studies');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<?php if( $case_studies ): ?>
<section <?php echo $attr; ?>>
    <div class="container">
        <div class="conclusion-case-studies__headline">
            <h2 class="h1">
                <span>Read</span>
                <span>More</span>
            </h2>
            <a class="heading-font" href="/case-study">
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
    </div>
</section>
<?php endif; ?>