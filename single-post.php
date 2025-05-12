<?php 
get_header(); 

$feat_img = "";
if (!empty(get_post_thumbnail_id())) {
    $thumbnail_id = get_post_thumbnail_id();
    $feat_img = getIMG($thumbnail_id, 'xl', false);
}

$categories = get_the_category();
$categories_tags = ! empty( $categories ) ? array_slice( $categories, 0, 3 ) : array();
$data_cat = [];

foreach ( $categories as $cat ) {
    $single_cat = strtolower( str_replace( ' ', '-', $cat->name ) );
    array_push( $data_cat, $single_cat );
}

?>


<section class="single-post__hero hero">
    <div class="container">
        <div class="hero__breadcrumbs">
            <a href="/blog">Blog > </a>
            <span>
                <?php echo get_the_title($post_id); ?>
            </span>
        </div>

        <div class="single-post__hero-content text-center">
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
            <h1>
                <?php echo get_the_title($post_id); ?>
            </h1>
            <div class="single-post__hero-meta">
                <div class="single-post__hero-meta-block">
                    <p>Date</p>
                    <span>
                        <?php echo get_the_date(); ?>
                    </span>
                </div>
                <div class="single-post__hero-meta-block">
                    <p>Read time</p>
                    <span>
                        <?php
                        $content = get_the_content( $post_id );
                        echo readTime($content); ?>
                    </span>
                </div>
            </div>
        </div>
        <?php if($feat_img) : ?>
        <div class="single-post__hero-image">
            <div class="positioner">
                <?php echo $feat_img; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="single-post__content">
    <div class="container">
       
        <?php if( have_posts() ): ?>
           <?php while( have_posts() ): the_post(); ?>
               
                <?php the_content(); ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>