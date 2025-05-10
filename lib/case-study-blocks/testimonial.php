<?php
	$testimonial = get_sub_field('testimonial');
	$attr = buildAttr($section_attrs);

    $section_attrs['class'][] = 'testimonial';
	$attr = buildAttr($section_attrs);
    if(!empty($testimonial)) :
?>


<section <?php echo $attr; ?>>
    <div class="container">   
                <?php $post = $testimonial[0];  ?>
                
                <?php setup_postdata($post); ?>
                <div class="testimonial__card">
                    <?php if ( ! empty( get_field('quote') ) ) : ?>
                        <div class="testimonial__card-quote h2">
                            <?php echo get_field('quote'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="testimonial__card-meta">                        
                        <p class="testimonial__card-author heading-font">
                            <?php echo get_the_title(); ?>
                        </p> 
                        <?php if ( ! empty( get_field('author_title') ) ) : ?>
                            <span class="heading-font">
                                <?php echo get_field('author_title'); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php  wp_reset_postdata(); ?>      
    </div>
</section>

<?php endif; ?>