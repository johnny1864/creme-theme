<?php
/**
 * Template Name: Blog Page
 */

get_header();

$headline = get_field( 'headline' ) ? get_field( 'headline' ) : get_the_title();
?>

<?php get_template_part( 'lib/parts/featured-post' ); ?>

<section class="blog-roll">
    <div class="container">
        <div class="blog-roll-sort">
            <p class="blog-roll-sort__label heading-font">CATEGORIES</p>

            <div class="categories-filter ">
            <button data-cat="all"
            class="category-tag active">All Categories</button>
                <?php
                $categories = get_categories();
                if ( ! empty( $categories ) ) :
                    foreach ( $categories as $cat ) : ?>
                        <button data-cat="<?php echo strtolower( str_replace( ' ', '-', $cat->name ) ); ?>"
                            class="category-tag"><?php echo $cat->name; ?></button>
                    <?php endforeach;
                endif;
                ?>
            </div>
        </div>

        <div class="blog-roll__posts">
            <?php
            $query = new WP_Query( [
                'post_type'         => 'post',
                'posts_per_page'    => -1,
            ] );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();

                    ?>
                    <div class="blog-post-item">
                        <?php get_template_part('lib/parts/post-card'); ?>
                    </div>
                    <?php
                endwhile;

                // Pagination
                the_posts_pagination();

            else :
                echo '<h1>No posts found.</h1>';
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php

get_footer();
