 <?php 

 /*
 Template Name: Integration Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			
			<?php while(have_posts()): the_post(); ?>
			<div class="str-post"> 
				<div class="row"> 
					<div class="col-md-6"> 
						<div class="kyc-title"> 
								<h2>Integration</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6"> 
						
						<div class="kyc-image"> 
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						
					</div>
					<div class="col-md-6"> 
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			
			
        </div>
      </div>
    </div>
	<?php geT_footer(); ?>
