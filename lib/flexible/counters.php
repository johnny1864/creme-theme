<?php
	$heading = get_sub_field('heading');
	$counters = get_sub_field('counter');


	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
   
    <?php if(!empty($heading)): ?>
        <div class="section__header">
            <div class="container">
                <h2 class="headline-label"><?php echo $heading; ?></h2>
            </div>
        </div>
    <?php endif; ?>
    <div class="counters">
        <?php foreach($counters as $count => $block) : ?>
            <?php $cta = $block['cta']; ?>
            <a href="<?php echo $cta['url'] ?>" class="counters__block">
                <div class="counters__block-wrapper">
                    <div class="counters__block-title">
                        <span class="counters__block-count h6">
                            (0<?php echo $count + 1; ?>)
                        </span>
                        <h3>
                            <?php echo $block['title']; ?>
                        </h3>
                    </div>
                    <div class="counters__block-content">
                        <p>
                            <?php echo $block['content']; ?>
                        </p>
                        <span class="counters__block-cta-text text-uppercase heading-font">
                            <?php echo $cta['title'] ?>
                        </span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

</section>