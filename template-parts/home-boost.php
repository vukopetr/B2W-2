<?php
 // ACF Fields	
 $boost_your_income_icon	= get_field( 'boost_your_income_icon' );
 $boost_your_income_title	= get_field( 'boost_your_income_title' );
 $boost_your_income_content	= get_field( 'boost_your_income_content' );
 $reason_1_title			= get_field( 'reason_1_title' );
 $reason_1_content			= get_field( 'reason_1_content' );
 $reason_2_title			= get_field( 'reason_2_title' );
 $reason_2_content			= get_field( 'reason_2_content' );
?>	
	
	<!-- BOOST YOUR INCOME
	================================================== -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
			
				<?php if( !empty($boost_your_income_icon) ) : ?>
					<img src="<?php echo $boost_your_income_icon['url']; ?>" alt="<?php echo $boost_your_income_icon['alt']; ?>">
				<?php endif; ?>
							
				<h2><?php echo $boost_your_income_title; ?></h2>
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $boost_your_income_content; ?></p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason_1_title; ?></h3>
					<p><?php echo $reason_1_content; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3><?php echo $reason_2_title; ?></h3>
					<p><?php echo $reason_2_content; ?></p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->		