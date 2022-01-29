<?php
 // ACF fields 
 $project_features_title	= get_field( 'project_features_title' );
 $project_features_body		= get_field( 'project_features_body' );
?>

	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">

			<h2><?php echo $project_features_title; ?></h2>
			<p class="lead"><?php echo $project_features_body; ?></p>
			
			<div class="row">
			
				<?php 
					
					$loop = new WP_Query( array(
						'post_type' => 'project_features',
						'orderby' => 'post_id',
						'order'   => 'ASC'						
					) );
					
				?>
				
				<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<div class="col-sm-4">	
					
						<?php 
							$image = get_field('project_features_cpt_image');
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_field('project_features_cpt_body'); ?></p>
						
					</div><!-- col -->
					
				<?php endwhile; endif; ?>

				<?php wp_reset_query(); ?>			
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->