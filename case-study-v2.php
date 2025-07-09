<?php 
/*
Template Name: General
Template Post Type: case-study
*/
?>

<?php get_header(); ?>

<?php if( have_posts() ):
	while( have_posts() ): the_post();
        get_template_part('lib/case-study-blocks/hero-use-case');
		get_template_part('lib/layout/use-case');
	endwhile;
endif; ?>

<?php get_footer(); ?>