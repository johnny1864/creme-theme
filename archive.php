<?php 
get_header();

$hero = get_field('hero', 'option');
$title = $hero['headline'];
?>

<section class="hero hero--basic">
    <div class="container">
        <?php if(!empty($hero['preheading'])):?>
            <p class="preheading">
                <?php echo $hero['preheading']; ?>
            </p>
        <?php endif; ?>
        <h1 class="hero__title"><?php echo $title; ?></h1>
        <?php if(!empty($hero['content'])):?>
        <div class="hero__content h6"><?php echo $hero['content'];  ?></div>
        <?php endif; ?>
    </div>
</section>

<section class="archive-content">
    <div class="container">

        <div class="blog-roll-sort">
            <p class="blog-roll-sort__label heading-font">CASE STUDIES</p>

            <div class="categories-filter ">
            <button data-cat="all"
            class="category-tag active">All Categories</button>
             <?php 
                $args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => -1, // Get all services
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                );

                $services_query = new WP_Query($args);

                if ($services_query->have_posts()) : 
                while ($services_query->have_posts()) : $services_query->the_post();
             ?>

             <button data-cat="<?php echo strtolower( str_replace( ' ', '-', get_the_title() ) ); ?>"
                            class="category-tag"><?php echo the_title(); ?></button>

             <?php 
                endwhile;
                wp_reset_postdata();
                endif; 
            ?>
            </div>
        </div>

        <div class="blog-posts loadmore-container">

            <?php if( have_posts() ):
				while( have_posts() ): the_post();
                    if($post_type = "case-study") {
                        get_template_part('lib/parts/case-study-card');
                    } else {
                        get_template_part('lib/parts/post-card');
                    }
					
				endwhile;

				else : ?>
            <h2>No Posts Found</h2>
            <?php endif; ?>

        </div>

        <?php if(have_posts()) get_template_part('lib/parts/loadmore'); ?>

    </div>
</section>

<?php get_template_part('lib/layout/flexible'); ?>

<?php get_footer(); ?>