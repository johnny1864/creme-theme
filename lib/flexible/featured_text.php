<?php
	$heading = get_sub_field('heading');
	$content = get_sub_field('featured_text');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="section__header">
            <h2 class="headline-label"><?php echo $heading; ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($content)): ?>
        <div class="featured-text__text h2"><?php echo $content; ?></div>
        <?php endif; ?>
    </div>
</section>