<?php
	$heading = get_sub_field('heading');
	$testimonials = get_sub_field('testimonials');

    $section_attrs['class'][] = 'testimonials-slider';
	$attr = buildAttr($section_attrs);
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
            <div class="section__header">
                <h2 class="headline-label"><?php echo $heading; ?></h2>
            </div>
        <?php endif; ?>
        <div>
            <div class="swiper">
                <div class="swiper-buttons">
                    <span class="swiper-counter"></span>  
                </div>

                <div class="swiper-wrapper">
                    <?php foreach ( $testimonials as $post ) : ?>
                        <?php setup_postdata($post); ?>
                        <div class="swiper-slide">
                            <div class="testimonials__card">
                                <?php if ( ! empty( get_field('quote') ) ) : ?>
                                    <div class="testimonial__card-quote h4">
                                        <?php echo get_field('quote'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="testimonials__card-meta">
                                    <?php if ( ! empty( get_field('author_icon') ) ) : ?>
                                        <span class="testimonials__card-author-icon">
                                            <div class="positioner">
                                            <?php echo getIMG(get_field('author_icon'), 'sm'); ?>
                                            </div> 
                                        </span>
                                    <?php endif; ?>
                                    
                                    <span class="testimonials__card-author heading-font">
                                        <?php echo get_the_title(); ?>
                                    </span>   
                                </div>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

                <div class="swiper-buttons desk-only">
                    <span class="swiper-counter"></span>  
                </div>

                <span class="h1 testimonials__quote-mark desk-only">&#8220;</span>
                <div class="testimonials__brands">
                    <?php foreach ( $testimonials as $index => $testimonial ) : ?>
                        <button data-index="<?php echo $index; ?>" class="testimonials__brands-btn <?php if($index == 0) echo 'active'; ?>">
                            <?php echo get_field('brand', $testimonial->ID); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>