<?php
    $thumbnail_id = get_field('blog_default_thumbnail', 'option')['ID'];

    if(!empty(get_post_thumbnail_id())) $thumbnail_id = get_post_thumbnail_id();

    $feat_img = getIMG($thumbnail_id, 'lg');
    $permalink = get_the_permalink();

    $lightbox_content = "<p class='team-card__title'>" . get_the_title() . "</p>";
    if(!empty( get_field('position_title') ) ){
        $lightbox_content .= "<span class='team-card__position'>" . get_field('position_title') . "</span>";
    }
    $lightbox_content .= "<div class='h5 team-modal__bio'>" . get_the_content() . "</div?"; 
?>

<article class="team-card">
    <div class="team-card__thumb" href="<?php echo $permalink; ?>">
        <div class="positioner">
            <?php echo $feat_img; ?>
            <?php 
                if(!empty( get_field('hover_image') )) {
                    echo getIMG(get_field('hover_image')['ID'], 'lg', false, array('class'=>"hover-image"));
                }
            ?>
        </div>
        <button class="btn btn--blur pdm-lightbox__content" data-lightbox-content="<?php echo $lightbox_content; ?>" >
            Learn More
        </button>
    </div>
    <div class="team-card__content">
        <p class="team-card__title"><?php the_title(); ?></p>
        <?php if(!empty( get_field('position_title') ) ) : ?>
            <span class="team-card__position">
                <?php echo get_field('position_title'); ?>
            </span>
        <?php endif; ?>
    </div>
</article>