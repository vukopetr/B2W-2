<?php
 // ACF fields
 $instructor_title			= get_field( 'instructor_title' );
 $instructor_name			= get_field( 'instructor_name' );
 $bio_excerpt				= get_field( 'bio_excerpt' );
 $full_bio					= get_field( 'full_bio' );
 $instructor_twitter		= get_field( 'instructor_twitter' );
 $instructor_facebook		= get_field( 'instructor_facebook' );
 $instructor_google_plus	= get_field( 'instructor_google_plus' );
 $num_students				= get_field( 'num_students' );
 $num_reviews				= get_field( 'num_reviews' );
 $num_courses				= get_field( 'num_courses' );
?>

	<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructor_title; ?> <small><?php echo $instructor_name; ?></small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<?php if( !empty( $instructor_twitter ) ) : ?>
								<a href="https://twitter.com/<?php echo $instructor_twitter; ?>" class="badge social twitter" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
							<?php endif; ?>
							<?php if( !empty( $instructor_facebook ) ) : ?>
								<a href="https://facebook.com/<?php echo $instructor_facebook; ?>" class="badge social facebook" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							<?php endif; ?>
							<?php if( !empty( $instructor_google_plus ) ) : ?>
								<a href="https://plus.google.com/<?php echo $instructor_google_plus; ?>" class="badge social gplus" target="_blank">
									<i class="fa fa-google-plus"></i>
								</a>
							<?php endif; ?>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead"><?php echo $bio_excerpt; ?><p>
					
					<p><?php echo $full_bio; ?></p>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_students; ?><span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_reviews; ?> <span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_courses; ?> <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
 