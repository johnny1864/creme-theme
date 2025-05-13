<?php
	
	$image = get_sub_field('image');

    $classList[] = "section";
	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<div <?php echo $attr; ?>>
    <div class="container">
        
        <?php if(!empty($image)): ?>
        <div class="image__wrapper"><?php echo getIMG($image['ID'], 'xl'); ?></div>
        <?php endif; ?>
    </div>
</div>