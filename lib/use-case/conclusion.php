<?php
    $label = 'Conclusion';

    if(!empty(get_sub_field('label'))) {
        $label = get_sub_field('label');
    }
	$content = get_sub_field('content');

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
       
    </div>
</section>