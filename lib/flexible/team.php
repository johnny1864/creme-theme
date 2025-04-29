<?php
	$heading = get_sub_field('heading');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="section__header">
            <h2><?php echo $heading; ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($content)): ?>
        <div class="section__content"><?php echo $content; ?></div>
        <?php endif; ?>
    </div>
</section>