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
        <div class="logos-grid__grid text-center">
            <?php foreach($logos as $logo) : ?>
                <div class="logos-grid__grid-item">
                    <?= getIMG($logo['ID']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>