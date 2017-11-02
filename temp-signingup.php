 <?php 

 /*
 Template Name: Signingup Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			
			
			<?php while(have_posts()): the_post(); ?>
			<div class="signup-post"> 
				<div class="row"> 
					<div class="col-md-6 col-md-offset-6">   
						<div class="str-title"> 
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-6 signin-post"> 
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
	<?php get_footer(); ?>