 <?php 

 /*
 Template Name: Sing UP Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			<div class="str-post"> 
			
			
				<?php while(have_posts()): the_post(); ?>
				<div class="row"> 
					
					<div class="col-md-6">

						<div class="str-title"> 
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
						<div class="str-rext">
							
							<?php the_content(); ?>
							
						</div>
						
					</div>
					<div class="col-md-6"> 
						
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						
					</div>
				</div>
				<?php endwhile; ?>
				
				
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
			
			<div class="str-post"> 
				<div class="row"> 
					<div class="col-md-7"> 

						<?php $create_account_form =  get_field('create_account_form'); 

						if($create_account_form): ?>
							
							<?php echo $create_account_form; ?>
							
						<?php endif;  ?>
						
					</div>
					<div class="col-md-5"> 
						<div class="red-color"> 
						
						
						<?php $right_area_red_text =  get_field('right_area_red_text'); 

						if($right_area_red_text): ?>
							
							<?php echo $right_area_red_text; ?>
							
						<?php endif;  ?>
						
							
						</div>
						
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-8"> 
						<?php $footer_image =  get_field('footer_image'); 

						if($footer_image): ?>
						
							<img src="<?php echo $footer_image['url']; ?>" alt="" />
							
							
						<?php endif;  ?>
						
					</div>
				</div>
				
				
				
			</div>
        </div>
      </div>
    </div>
	
<?php get_footer(); ?>