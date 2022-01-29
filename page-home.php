<?php

/**
 *
	Template Name: Home
 *
 */

 get_header();
 
?>

	<?php get_template_part( 'template-parts/home', 'hero' ); ?>
	
	<?php get_template_part( 'template-parts/home', 'optin' ); ?>

	<?php get_template_part( 'template-parts/home', 'boost' ); ?>

	<?php get_template_part( 'template-parts/home', 'who' ); ?>
	
	<?php get_template_part( 'template-parts/home', 'course_features' ); ?>
	
	<?php get_template_part( 'template-parts/home', 'project_features' ); ?>
	
	<?php get_template_part( 'template-parts/home', 'video' ); ?>
	
	<?php get_template_part( 'template-parts/home', 'instructor' ); ?>

	<?php get_template_part( 'template-parts/home', 'testimonials' ); ?>

<?php
get_footer();
