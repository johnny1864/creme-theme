<?php
    $thumbnail_id = get_field('blog_default_thumbnail', 'option')['ID'];

    if(!empty(get_post_thumbnail_id())) $thumbnail_id = get_post_thumbnail_id();

    $feat_img = getIMG($thumbnail_id, 'lg');
    $permalink = get_the_permalink();
?>

<article class="case-study-card hover-wrapper">
    <a class="case-study-card__thumb" href="<?php echo $permalink; ?>">
        <div class="positioner"><?php echo $feat_img; ?></div>
    </a>
    <div class="case-study-card__content">
        <h4 class="case-study-card__title"><?php the_title(); ?></h4>
        <p class="heading-font text-uppercase">
            <?php echo get_field('featured_service'); ?>
        </p>
        <a class="case-study-card__btn btn" href="<?php echo $permalink; ?>">
            <span class="dot">&#9679;</span> Read More
        </a>
    </div>
</article>