 <?php 

 /*
 Template Name: Our Recognition Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
		
		
			<?php while(have_posts()): the_post(); ?>
			<div class="row"> 
				<div class="col-md-6"> 
					<div class="rec-left-side"> 
						<h2 class="rec-left" ><?php the_title(); ?></h2>
						
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-6"> 
					<div class="rec-right-side"> 
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
				</div>
			</div>
         <?php endwhile; ?>
		 
		 
		 
        </div>
      </div>
    </div>
	<?php get_footer(); ?>