 <?php 

 /*
 Template Name: kyc Document Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			<div class="str-post"> 
				<div class="row"> 
					<div class="col-md-6"> 
						<div class="kyc-title"> 
						<?php while(have_posts()): the_post(); ?>
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<?php endwhile; ?>
						</div>
						<div class="kyc-image">
						
						<?php $kyc_left_image =  get_field('kyc_left_image'); 

						if($kyc_left_image): ?>
							<img src="<?php echo $kyc_left_image['url']; ?>" alt="" />
								
						<?php endif;  ?>
							
							
						</div>
						<?php $kyc_right_text =  get_field('kyc_right_text'); 

							if($kyc_right_text): ?>
								<?php echo $kyc_right_text; ?>
									
						<?php endif;  ?>
					</div>
					<div class="col-md-6"> 
						<?php $kyc_left_text =  get_field('kyc_left_text'); 

							if($kyc_left_text): ?>
								<?php echo $kyc_left_text; ?>
									
						<?php endif;  ?>
						
						
						<div class="kyc-image"> 
						<?php $kyc_right_image =  get_field('kyc_right_image'); 

						if($kyc_right_image): ?>
							<img src="<?php echo $kyc_right_image['url']; ?>" alt="" />
								
						<?php endif;  ?>
						</div>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-12"> 
						<?php $customer_big_image =  get_field('customer_big_image'); 

						if($customer_big_image): ?>
							<img src="<?php echo $customer_big_image['url']; ?>" alt="" />
								
						<?php endif;  ?>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-6"> 
						<?php $terms_conditions_left_text =  get_field('terms_conditions_left_text'); 

							if($terms_conditions_left_text): ?>
								<?php echo $terms_conditions_left_text; ?>
									
						<?php endif;  ?>
					</div>
					<div class="col-md-6"> 
						<?php $customer_big_image =  get_field('customer_big_image'); 

						if($customer_big_image): ?>
							<img src="<?php echo $customer_big_image['url']; ?>" alt="" />
								
						<?php endif;  ?>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-4"> 
					<?php $left_circle_text =  get_field('left_circle_text'); 

						if($left_circle_text): ?>	
						<div class="b-ball">
											
							<h2><?php echo $left_circle_text; ?></h2>
						
						</div>
						<?php endif;  ?>
					</div>
					<div class="col-md-8"> 
						<?php $right_circle_image =  get_field('right_circle_image'); 

						if($right_circle_image): ?>
							<img src="<?php echo $right_circle_image['url']; ?>" alt="" />
								
						<?php endif;  ?>
					</div>
				</div>
			
			
			<?php $bottom_kyc_details =  get_field('bottom_kyc_details'); 

			if($bottom_kyc_details): ?>
				
				<?php echo $bottom_kyc_details; ?>
					
			<?php endif;  ?>
			
			
			<div class="row kyc-bottomarea"> 
				<div class="col-md-6">
				
				
			<?php $bottom_left_text =  get_field('bottom_left_text'); 

			if($bottom_left_text): ?>
				
				<?php echo $bottom_left_text; ?>
					
			<?php endif;  ?>
					
				</div>
				<div class="col-md-6">
					<div class="ladis-mark"> 
						<?php $bottom_kyc_image =  get_field('bottom_kyc_image'); 

						if($bottom_kyc_image): ?>
							<img src="<?php echo $bottom_kyc_image['url']; ?>" alt="" />
								
						<?php endif;  ?>
					</div>
				</div>
			</div>
			
			
			</div>
			
			
			
        </div>
      </div>
    </div>
	<?php get_footer(); ?>