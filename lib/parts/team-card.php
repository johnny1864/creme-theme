<?php
    $thumbnail_id = get_field('blog_default_thumbnail', 'option')['ID'];

    if(!empty(get_post_thumbnail_id())) $thumbnail_id = get_post_thumbnail_id();

    $feat_img = getIMG($thumbnail_id, 'lg');
    $permalink = get_the_permalink();
?>

<article class="team-card">
    <div class="team-card__thumb" href="<?php echo $permalink; ?>">
        <div class="positioner"><?php echo $feat_img; ?></div>
        <button class="btn btn--blur">
            Learn More
        </button>
    </div>
    <div class="team-card__content">
        <p class="team-card__title heading-font"><?php the_title(); ?></p>
        <?php if(!empty( get_field('position_title') ) ) : ?>
            <span class="team-card__position">
                <?php echo get_field('position_title'); ?>
            </span>
        <?php endif; ?>
    </div>
</article>