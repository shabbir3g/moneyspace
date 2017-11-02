 <?php 

 /*
 Template Name: Front Page Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			<div class="row"> 
				<div class="col-md-6 home-top-left"> 
				
				<?php $top_left_image =  get_field('top_left_image'); 

				if($top_left_image): ?>
					<img src="<?php echo $top_left_image['url']; ?>" alt="" />
					
				<?php endif;  ?>
				</div>
				<div class="col-md-6 home-top-right"> 
					<?php $top_right_image =  get_field('top_right_image'); 

				if($top_right_image): ?>
					<img src="<?php echo $top_right_image['url']; ?>" alt="" />
					
				<?php endif;  ?>
				</div>
			</div>
			<div class="row customer-top"> 
				<div class="col-md-3 customer"> 
				<?php $customer_image =  get_field('customer_image'); 

				if($customer_image): ?>
					<img src="<?php echo $customer_image['url']; ?>" alt="" />
				<?php endif; ?>
				
				
				<?php $customer =  get_field('customer'); 

				if($customer): ?>
					<a href="#"><h2><?php echo $customer; ?></h2></a>
				<?php endif; ?>
				</div>
				<div class="col-md-4 maerchent"> 
					<?php $merchant_image =  get_field('merchant_image'); 

					if($merchant_image): ?>
						<img src="<?php echo $merchant_image['url']; ?>" alt="" />
					<?php endif; ?>
					
					
					<?php $merchant =  get_field('merchant'); 

					if($merchant): ?>
						<a href="#"><h2><?php echo $merchant; ?></h2></a>
					<?php endif; ?>
				</div>
				<div class="col-md-5 bank"> 
					<?php $bank_image =  get_field('bank_image'); 

					if($bank_image): ?>
						<img src="<?php echo $bank_image['url']; ?>" alt="" />
					<?php endif; ?>
					
					
					<?php $bank =  get_field('bank'); 

					if($bank): ?>
						<a href="#"><h2><?php echo $bank; ?></h2></a>
					<?php endif; ?>
				</div>
			</div>
			
			
			<div class="home-page-blog"> 
			
			<?php $features_pages =  get_field('features_pages'); 
			
					

					if($features_pages ): 
					
					foreach($features_pages as  $feat_page): ?>
			
				<div class="row signgle-blog"> 
					<?php $image =  $feat_page['feature_image']; 
					if($image): ?>
					<div class="col-md-6 blog-image"> 
						<img src="<?php echo $image['url']; ?>" alt="" />
					</div>
					<?php endif; ?>
					<div class="col-md-6 blog-text"> 
						<?php $featurepage =  $feat_page['more_link'];
						if($featurepage): ?>
						<h2><?php echo $featurepage['title']; ?></h2> 
						<?php endif; ?>
						<?php $featuresirial =  $feat_page['sirial_number'];
						if($featuresirial): ?>
						<h3><?php echo $featuresirial; ?></h3>
						<?php endif; ?>
						
						<?php $page_content =  $feat_page['page_content'];
						if($page_content): ?>
						<p><?php echo $page_content; ?></p>
						<?php endif; ?>
						<?php $featurepage =  $feat_page['more_link'];
						if($featurepage): ?>
						<div class="read-more"> 
							<a href="<?php echo $featurepage['url']; ?>">More</a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				
				
				<?php endforeach; endif; ?>
				
		
				
				<div class="signup-button"> 
					<a href="#">SignUp</a>
				</div>
			
			</div>
			<div class="contact-home"> 
				<?php $conact_link =   get_field('conact_link');
				if($conact_link): ?>
				<h2><?php echo $conact_link['title']; ?></h2>
				<a href="<?php echo $conact_link['url']; ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/envelope.png" alt="" /></a>
				<div class="more"> 
					<a href="<?php echo $conact_link['url']; ?>">More</a>
				</div>
				<?php endif; ?>
				<div class="row footer-button"> 
					<div class="col-md-4 col-sm-12 totop"> 
					<?php $back_to_top =   get_field('back_to_top');
						if($back_to_top): ?>
						<a href="#"><?php echo $back_to_top; ?> <i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
						<?php endif; ?>
					</div>
					
					<div class="col-md-4 col-sm-12"> 
					<?php $sign_up =   get_field('sign_up');
						if($sign_up): ?>
						<a href="<?php echo $sign_up['url']; ?>"><?php echo $sign_up['title']; ?></a>
					<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-12">
						<?php $get_started =   get_field('get_started');
						if($get_started): ?>					
						<a href="<?php echo $get_started['url']; ?>"><?php echo $get_started['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
	<?php get_footer(); ?>