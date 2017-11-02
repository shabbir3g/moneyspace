<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cometwp
 */

get_header(); ?>

	<div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
			
				<?php while(have_posts()): the_post(); ?>
				<div class="col-md-10"> 
					<div class="blog-feature embed-responsive embed-responsive-16by9"> 
						
						<a href="<?php the_permalink(); ?>">
						<?php 

							 $prefix = "_extra";
							 
							 $videopost = get_post_meta(get_the_id(),$prefix . 'vid-post', true);
							 $audiopost = get_post_meta(get_the_id(),$prefix . 'audio-post', true);
							 
							 
							 if($videopost){
								 
								  echo wp_oembed_get($videopost);
							 }elseif($audiopost){
								  echo wp_oembed_get($audiopost);
								 
							 }else{
								 
								   the_post_thumbnail();
							 }
							 
							

						?>
							</a>
					</div>
					<div class="blog-rext-single blog-rext">
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<?php the_content(); ?>
						
					</div>
				</div>
				<?php endwhile; ?>
				
				
			</div>
			
        </div>
      </div>
    </div>

<?php
get_footer();
