 <?php 

 /*
 Template Name: Go Live template
 */
 get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			<div class="live-post"> 
			
				<?php while(have_posts()): the_post(); ?>
				<div class="row"> 
					<div class="col-md-6"> 
						<div class="kyc-title"> 
							<h2><?php the_title(); ?></h2>
						</div>
						<?php the_content(); ?>
					</div>
					<div class="col-md-6"> 
						<div class="kyc-image"> 
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				
				
			</div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>