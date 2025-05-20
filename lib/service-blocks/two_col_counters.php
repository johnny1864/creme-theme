<?php
	$heading = get_sub_field('heading');
	$counters = get_sub_field('counter');

    $arr_count = count($counters);
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
    <div class="container"> 
        <div class="two-col-counters__grid">
            <?php $half = ceil( count($counters) / 2 ); ?>
            
            <?php 
                foreach($counters as $index => $block) : 
            ?>
                <div class="two-col-counters__block">
                    <div class="two-col-counters__block-wrapper">
                        <div class="two-col-counters__block-title">
                            <span class="two-col-counters__block-count h6">
                                (0<?php echo $index + 1; ?>)
                            </span>
                            <h6>
                                <?php echo $block['title']; ?>
                            </h6>
                        </div>
                        <div class="two-col-counters__block-content">
                            <p>
                                <?php echo $block['content']; ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if( $arr_count % 2 != 0 ) : ?>
                <div class="two-col-counters__block"></div>
            <?php endif; ?> 
        </div>
    </div>
</section>