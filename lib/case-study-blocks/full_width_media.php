<?php 
    $attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?> > 
    <div class="container">
        <div class="full-width-media__wrapper <?php echo get_sub_field('aspect_ratio'); ?>">
            <?php if(get_sub_field('image')) : ?>
                <?php echo getIMG(get_sub_field('image')['ID'], 'xl') ?>
            <?php elseif(get_sub_field('video')) : ?>
                <video loading="lazy" autoplay loop muted playsinline>
                        <source
                            src="<?php echo esc_url( get_sub_field('video') ); ?>"
                            type="video/mp4"
                        >
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        </div>
    </div>
</section>