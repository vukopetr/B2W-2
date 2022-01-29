<?php
 // ACF Fields
 $course_features_image		= get_field( 'course_features_image' );
 $course_features_title		= get_field( 'course_features_title' );
 $course_features_body		= get_field( 'course_features_body' );
?>	
	
	
	<!-- COURSE FEATURES
	================================================== -->
	<section id="course-features">
		<div class="container">
		
			<div class="section-header">
			
				<?php if( !empty($course_features_image) ) : ?>
					<img src="<?php echo $course_features_image['url']; ?>" alt="<?php echo $course_features_image['alt']; ?>">
				<?php endif; ?>
				
				<h2><?php echo $course_features_title; ?></h2>
				
				<?php if( !empty($course_features_body) ) : ?>
					<p class="lead"><?php echo $course_features_body; ?></p>
				<?php endif; ?>
				
			</div><!-- section-header -->
			
			<div class="row">
			
				<?php 
					
					$loop = new WP_Query( array(
						'post_type' => 'course_features',
						'orderby' => 'id',
						'order'   => 'ASC'						
					) );
					
				?>
				
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<div class="col-sm-2">
						<i class="<?php the_field('course_features_icons'); ?>"></i>
						<h4><?php the_title(); ?></h4>
					</div><!-- end col -->
					
				<?php endwhile; ?>
				
				<?php wp_reset_query(); ?>
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- course-features -->