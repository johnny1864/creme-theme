<?php 
/*
Template Name: Creative
Template Post Type: case-study
*/
?>
<?php get_header(); ?>

<?php if( have_posts() ):
	while( have_posts() ): the_post();
        get_template_part('lib/case-study-blocks/hero');
		get_template_part('lib/layout/case-study');
	endwhile;
endif; ?>

<?php get_footer(); ?>