 <?php 

 /*
 Template Name: Before You Start
 */
 get_header(); ?>
 <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			
			<?php while(have_posts()): the_post(); ?>
			<div class="str-post"> 
				<div class="row"> 
					<div class="col-md-6"> 
						<div class="str-title"> 
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="str-rext">
							<?php the_content(); ?>
							
						</div>
					</div>
					<div class="col-md-6"> 
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			
			
        </div>
      </div>
    </div>
	
<?php get_footer(); ?>