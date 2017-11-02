 <?php 

 /*
 Template Name: Pricing Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="rec-left-side"> 
						<div class="pricing-img"> 
						<?php $top_image_pricing =  get_field('top_image_pricing'); 

						if($top_image_pricing): ?>
						
							<a href="#"><img src="<?php echo $top_image_pricing['url']; ?>" alt="" /></a>
							
						<?php endif;  ?>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
	
	
	<div class="divider"> 
		<hr />
	</div>
	
	<div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12"> 
				
				<?php $country_name_t =  get_field('country_name_t'); 

				if($country_name_t): ?>
					<h2 class="title"><?php echo $country_name_t; ?></h2>
					
				<?php endif;  ?>
					
				</div>
			</div>
			<div class="row"> 
				<div class="col-md-4"> 
					
				<?php $country_image_t =  get_field('country_image_t'); 

				if($country_image_t): ?>
					<img src="<?php echo $country_image_t['url']; ?>" alt="" />
						
				<?php endif;  ?>
				</div> 
				<div class="col-md-8"> 
					<?php $pay_as_text_t =  get_field('pay_as_text_t'); 

					if($pay_as_text_t): ?>
					<h2 class="payas"><?php echo $pay_as_text_t; ?></h2>
					<?php endif;  ?>
					
					<?php $black_ball_text_01 =  get_field('black_ball_text_01'); 

					if($black_ball_text_01): ?>
					
						<?php echo $black_ball_text_01; ?>
					
					<?php endif;  ?>
					
				</div>
			</div>
        </div>
      </div>
    </div>
	
	
	<!--<div class="divider"> 
		<hr />
	</div>
	
	<div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12"> 
					<?php $country_name_s =  get_field('country_name_s'); 

				if($country_name_s): ?>
					<h2 class="title"><?php echo $country_name_s; ?></h2>
					
				<?php endif;  ?>
				</div>
			</div>
			<div class="row"> 
				
				<div class="col-md-8"> 
					
					<?php $black_ball_text_02 =  get_field('black_ball_text_02'); 

					if($black_ball_text_02): ?>
					
						<?php echo $black_ball_text_02; ?>
					
					<?php endif;  ?>
					
				</div>
				<div class="col-md-4"> 
					<?php $country_image_s =  get_field('country_image_s'); 

					if($country_image_s): ?>
						<img src="<?php echo $country_image_s['url']; ?>" alt="" />
							
					<?php endif;  ?>
				</div> 
			</div>
        </div>
      </div>
    </div> -->
	
	
	
	<div class="black-bg">
	
	
	<?php $withdrawal_fee_text_t =  get_field('withdrawal_fee_text_t'); 

	if($withdrawal_fee_text_t): ?>
	
		
	
	
	<div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12 withdrawal text-center"> 
					<h2>Withdrawal Fee</h2>
					<h2>(TM)</h2>
				</div>
			</div>
			<div class="row"> 
				<?php echo $withdrawal_fee_text_t; ?>
				
				<div class="col-md-5"> 
					<?php $withdrawal_fee_image_t =  get_field('withdrawal_fee_image_t'); 

					if($withdrawal_fee_image_t): ?>
						<img src="<?php echo $withdrawal_fee_image_t['url']; ?>" alt="" />
							
					<?php endif;  ?>
				</div> 
			</div>
        </div>
      </div>
    </div>
	<?php endif;  ?>
	<div class="divider-white"> 
		<hr />
	</div>
	
	<?php $withdrawal_fee_text_s =  get_field('withdrawal_fee_text_s'); 

	if($withdrawal_fee_text_s): ?>
<!--	<div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12 withdrawal text-center"> 
					<h2>Withdrawal Fee</h2>
					<h2>(SG)</h2>
				</div>
			</div>
			<div class="row"> 
				<?php echo $withdrawal_fee_text_s; ?>
				 
				<div class="col-md-5"> 
					<?php $withdrawal_fee_image_s =  get_field('withdrawal_fee_image_s'); 

					if($withdrawal_fee_image_s): ?>
						<img src="<?php echo $withdrawal_fee_image_s['url']; ?>" alt="" />
							
					<?php endif;  ?>
				</div> 
			</div>
			
			<div class="row"> 
				<div class="col-md-12 priching-b"> 
				<?php $charge_more_text =  get_field('charge_more_text'); 

					if($charge_more_text): ?>
					<h4 class="text-left" ><?php echo $charge_more_text; ?></h4>
				<?php endif;  ?>
				
				<?php $email_text =  get_field('email_text'); 

					if($email_text): ?>
					<p class="text-left"><?php echo $email_text; ?></p>
				<?php endif;  ?>
				</div>
				
			</div>
			
        </div>
      </div>
    </div> -->
	<?php endif;  ?>
	</div>
	
	
	
	<div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main pric-bot">
			<div class="row"> 
				<div class="col-md-12 "> 
					<?php $surprising_text =  get_field('surprising_text'); 

					if($surprising_text): ?>
					<h2 class="withd"><?php echo $surprising_text; ?></h2>
					<?php endif;  ?>
					<?php $surprising_image =  get_field('surprising_image'); 

					if($surprising_image): ?>
						<img src="<?php echo $surprising_image['url']; ?>" alt="" />
							
					<?php endif;  ?>
				</div>
			</div>
			<?php $surprising_description =  get_field('surprising_description'); 

			if($surprising_description): ?>
				<?php echo $surprising_description; ?>
			<?php endif;  ?>
			
				
			
			
        </div>
      </div>
    </div>
	
	
<?php get_footer(); ?>