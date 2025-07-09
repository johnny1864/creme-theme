<?php
	$heading = get_sub_field('heading');
	$partners = get_sub_field('partners');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        
            <div class="section__header">
                <h2 class="headline-label"><?php echo $heading; ?></h2>
            </div>
        
        <?php endif; ?>
        <div class="partners__grid text-center">
            <?php foreach($partners as $partner) : ?>
                <div class="partners__grid-item h2 text-uppercase heading-font <?php if(!empty($partner['hover_logo'])) : ?> has-image <?php endif; ?>">
                    <?php if(!empty($partner['hover_logo'])) : ?>
                        <figure>
                        <?php echo getIMG($partner['hover_logo']['id'], 'md'); ?>
                        </figure>
                    <?php endif; ?>
                    <span>
                        <?php echo $partner['name']; ?> 
                    </span>
                    /
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>