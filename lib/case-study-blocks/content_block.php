<?php
	$content = get_sub_field('content');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <div class="content-block__wrapper <?php echo get_sub_field('align'); ?>">
            <?php if(!empty($content)): ?>
            <div class="section__content h6"><?php echo $content; ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>