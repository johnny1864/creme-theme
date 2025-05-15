<?php
    $label = 'Strategy';

    if(!empty(get_sub_field('label'))) {
        $label = get_sub_field('label');
    }
	$content = get_sub_field('content');
    $media_blocks = get_sub_field('media_gallery');
    $second_media_blocks = get_sub_field('second_media_gallery');
    $counters = get_sub_field('counters');
    $testimonial = get_sub_field('testimonial');

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

        <?php if(!empty($counters)): ?>
            <div class="strategy__counters section__block">
                <?php foreach($counters as $block) : ?>
                    <div class="counter__block text-center">
                        <span class="h1 count">
                            <?php echo $block['number']; ?>
                        </span>
                        <p class="heading-font">
                            <?php echo $block['label']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if(!empty($media_blocks)): ?>
            <div class="media__grid section__block">
                <?php foreach($media_blocks as $item) : ?>
                <div class="media-wrap <?php echo $item['width']; ?>">
                    <?php if($item['image']) : ?>
                        <?php echo getIMG($item['image']['ID']) ?>
                    <?php elseif($item['video']) : ?>
                        <video loading="lazy" autoplay loop muted playsinline>
                                <source
                                    src="<?php echo esc_url( $item['video']['url'] ); ?>"
                                    type="video/mp4"
                                >
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php 
        if($testimonial) :
            $post = $testimonial[0]; 
            setup_postdata($post); 
         ?>
        <div class="testimonial__card section__block">
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
       <?php wp_reset_postdata(); endif; ?>  

       <?php if(!empty($second_media_blocks)): ?>
            <div class="media__grid">
                <?php foreach($second_media_blocks as $item) : ?>
                <div class="media-wrap <?php echo $item['width']; ?>">
                    <?php if($item['image']) : ?>
                        <?php echo getIMG($item['image']['ID']) ?>
                    <?php elseif($item['video']) : ?>
                        <video loading="lazy" autoplay loop muted playsinline>
                                <source
                                    src="<?php echo esc_url( $item['video']['url'] ); ?>"
                                    type="video/mp4"
                                >
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>