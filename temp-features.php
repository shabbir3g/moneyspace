 <?php 

 /*
 Template Name: Featrues Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
			
			
			<?php while(have_posts()): the_post(); ?>
				<div class="col-md-10 col-md-offest-2"> 
					<div class="featrues-side"> 
						
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<div class="featrues-img"> 
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						
					</div>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
				
				
			</div>
		
        </div>
      </div>
    </div>
	<?php get_footer(); ?>