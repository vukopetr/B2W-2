<?php 
	/* Template Name: Resources */

	get_header(); 

	$feature_image_url = get_the_post_thumbnail_url( $post->ID );
?>

	<!-- FEATURE IMAGE
	================================================== -->
	
	<?php if ( has_post_thumbnail() ) { ?>
	
		<section class="feature-image" style="background: url('<?php echo $feature_image_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
			<h1><?php the_title(); ?></h1>
		</section>
	
	<?php } else { ?>
		<section class="feature-image feature-image-default" data-type="background" data-speed="2">
			<h1><?php the_title(); ?></h1>
		</section>
	<?php } ?>
	
	
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
				
					<?php while( have_posts() ) : the_post(); ?>
					
						<?php the_content(); ?>
						
					<?php endwhile; ?>
						    	
			    	<hr>
			    	
			    	<div class="resource-row clearfix">
					
						<?php 
					
							$loop = new WP_Query( array(
								'post_type' => 'resources_cpt',
								'orderby' => 'id',
								'order'   => 'ASC'						
							) );
							
						?>
						
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
							<div class="resource">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php endif; ?>
								<h3><a href="http://bradhussey.ca/justhost"><?php the_title(); ?></a></h3>
								<?php the_content(); ?>
								<?php if ( !empty( get_field( 'button_text' ) ) ) : ?>
								<a href="<?php the_field( 'resource_url' ); ?>" class="btn btn-success"><?php the_field( 'button_text' ); ?></a>
								<?php endif; ?>
							</div>
							
						<?php endwhile; ?>
						
						<?php wp_reset_query(); ?>
					
			    	</div>
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>