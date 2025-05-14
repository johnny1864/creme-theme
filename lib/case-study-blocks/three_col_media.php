<?php 
    
    $columns = get_sub_field('columns');

    $attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?> > 
    <div class="container">
        <div class="three-col-media__grid">
            <?php foreach($columns as $column) : ?>
                <div class="three-col-media__grid-item <?php if( empty($column['image']) && empty($column['video']) ) : ?> empty <?php endif; ?> <?php echo get_sub_field('aspect_ratio'); ?>">
                    <?php if($column['image']) : ?>
                        <?php echo getIMG($column['image']['ID']) ?>
                    <?php elseif($column['video']) : ?>
                        <video loading="lazy" autoplay loop muted playsinline>
                                <source
                                    src="<?php echo esc_url( $fields['video'] ); ?>"
                                    type="video/mp4"
                                >
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>