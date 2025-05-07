<?php /* Template Name: Services Overview */ ?>


<?php get_header(); ?>

<?php if( have_posts() ):
	while( have_posts() ): the_post();
		get_template_part('lib/blocks/services-overview');
	endwhile;
endif; ?>

<?php get_footer(); ?>