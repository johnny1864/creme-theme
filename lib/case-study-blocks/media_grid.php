<?php 
    
    $items = get_sub_field('items');

    $attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?> > 
    <div class="container">
        <div class="media-grid__grid">
            <?php foreach($items as $item) : ?>
                <div class="media-grid__grid-item <?php echo get_sub_field('aspect_ratio'); ?>">
                    <?php if($item['image']) : ?>
                        <?php echo getIMG($item['image']['ID'], 'lg') ?>
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
    </div>
</section>