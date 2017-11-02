 <?php 

 /*
 Template Name: Sign In Template
 */
 get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			<div class="signin-post"> 
			
			<?php while(have_posts()): the_post(); ?>
				<div class="row"> 
					
					<div class="col-md-6 leftpart">

						<div class="str-title"> 
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
						<div class="sign-form"> 
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
	
	<?php get_footer(); ?>