<?php
	$heading = get_sub_field('heading');
	$top_gallery = get_sub_field('top_gallery');
    $bottom_gallery = get_sub_field('bottom_gallery');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        
            <div class="section__header">
                <h2 class="headline-label"><?php echo $heading; ?></h2>
            </div>
        
        <?php endif; ?>
        <div class="image-slides__gallery text-center">
            <div class="inner">
                <div class="image-slides__track image-slides__track--top"> 
                <?php foreach($top_gallery as $image) : ?>
                    <div class="image-slides__image">
                        <?= getIMG($image['ID']) ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="image-slides__track image-slides__track--bottom"> 
                <?php foreach($bottom_gallery as $image) : ?>
                    <div class="image-slides__image">
                        <?= getIMG($image['ID']) ?>
                    </div>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
</section>