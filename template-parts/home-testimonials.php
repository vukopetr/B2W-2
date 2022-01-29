<!-- TESTIMONIALS
================================================== -->
<section id="kudos">
	<div class="container">
		<div class="row">
		
			<div class="col-sm-8 col-sm-offset-2">
				<h2>What People Are Saying About Brad</h2>
				
				<?php 
				
					$loop = new WP_Query( array(
						'post_type' => 'testimonials',
						'orderby' => 'post_id',
						'order'   => 'ASC'						
					) );
					
				?>
				
				<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<?php the_post_thumbnail( array( 200, 200 ) ); ?>
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								<?php the_content(); ?>	
								<cite>&mdash; <?php the_title(); ?></cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
				
				
				<?php endwhile; endif; ?>
				
				<?php wp_reset_query(); ?>	
				
				
				
			</div><!-- end col -->
			
		</div><!-- row -->
	</div><!-- container -->
</section><!-- kudos -->