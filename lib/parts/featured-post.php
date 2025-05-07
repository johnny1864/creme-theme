<?php

$post = get_field('featured_post');
setup_postdata($post);
$thumbnail_id = get_field('blog_default_thumbnail', 'option')['ID'];

if(!empty(get_post_thumbnail_id())) $thumbnail_id = get_post_thumbnail_id();
$feat_img = getIMG($thumbnail_id, 'lg');

$permalink = get_the_permalink();
$categories = get_the_category();
$categories_tags = ! empty( $categories ) ? array_slice( $categories, 0, 3 ) : array();
$data_cat = [];

foreach ( $categories as $cat ) {
    $single_cat = strtolower( str_replace( ' ', '-', $cat->name ) );
    array_push( $data_cat, $single_cat );
}

?>
<section class="featured-post">
    <div
        class="post-card"
    >
        <div class="row">
            <a class="post-card__thumb" href="<?php echo $permalink; ?>">
            <div class="positioner"><?php echo $feat_img; ?></div>
            </a>

            <div class="post-card__content">
                <?php
                if ( ! empty( $categories_tags ) ) :
                    ?>
                    <div class="post-categories">
                        <?php foreach ( $categories_tags as $cat ) : ?>
                            <span
                                class="category-tag"
                            ><?php echo $cat->name; ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <h2 class="post-card__title">
                    <?php the_title(); ?>
                </h2>

                <div class="post-card__meta heading-font text-uppercase">
                    <p class="post-card__meta-author">
                        <?php the_author(); ?>
                    </p>
                    <span class="post-card__meta-date">
                        Article on <?php echo get_the_date( 'F j' ) ?>
                    </span>
                </div>

                <a class="heading-font" href="<?php echo $permalink; ?>">
                    learn More
                </a>
            </div>
        </div>
    </div>
</section>

<?php wp_reset_postdata(); ?>