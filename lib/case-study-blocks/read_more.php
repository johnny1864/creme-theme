<?php
    $case_studies = get_sub_field('case_studies');
    $service = get_field('hero')['services'][0];
    $service_handle = "";
    if($service) {
        $service = get_field('hero')['services'][0];
        $service_title = str_replace("&", "%26", get_the_title($service->ID));
        $service_title = str_replace( '#038;', '', $service_title );
        $service_handle = strtolower( str_replace( ' ', '-', $service_title ) );
    }
    
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
            <a class="heading-font" href="/case-studies?filter=<?php echo $service_handle; ?>">
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