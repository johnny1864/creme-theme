<?php
	$heading = get_sub_field('heading');
    $team = get_sub_field('members');
    $heading2 = get_sub_field('second_heading');

	$attr = buildAttr(array('id'=>$id,'class'=>$classList));
?>

<section <?php echo $attr; ?>>
    <div class="container">
        <?php if(!empty($heading)): ?>
        <div class="section__header">
            <h2 class="display-1"><?php echo $heading; ?></h2>
             <h2 class="display-1 second-heading"><?php echo $heading2; ?></h2>
        </div>
        <?php endif; ?>
        

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ( $team as $post ) : ?>
                    <?php setup_postdata($post); ?>
                    <div class="swiper-slide">
                        <?php get_template_part('lib/parts/team-card'); ?>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>