<?php
    $preheading = get_sub_field('preheading');
	$heading = get_sub_field('heading');
	$content = get_sub_field('content');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container container--medium text-center">
        <?php if(!empty($heading)): ?>
        <div class="section__header hover">
            <?php if(!empty($heading)): ?>
                <p class="preheading">
                <?php echo $preheading; ?>
                </p>
            <?php endif; ?>
            <h2><?php echo $heading; ?></h2>
        </div>
        <?php endif; ?>
        <?php if(!empty($content)): ?>
        <div class="section__content h6"><?php echo $content; ?></div>
        <?php endif; ?>
    </div>
</section>