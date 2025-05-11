<?php
    $label = 'Challenges';

    if(!empty(get_sub_field('label'))) {
        $label = get_sub_field('label');
    }
	$content = get_sub_field('content');
    $media_blocks =get_sub_field('media_gallery');

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

        <?php if(!empty($media_blocks)): ?>
            <div class="media__grid">
                <?php foreach($media_blocks as $item) : ?>
                <div class="media-wrap <?php echo $item['width']; ?>">
                    <?php if($item['image']) : ?>
                        <?php echo getIMG($item['image']['ID']) ?>
                    <?php elseif($item['video']) : ?>
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
        <?php endif; ?>
       
    </div>
</section>