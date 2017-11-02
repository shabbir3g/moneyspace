 <?php 

 /*
 Template Name: On Press Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="rec-left-side"> 
						
						<?php while(have_posts()): the_post(); ?>
						<div class="onepress-img"> 
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<div class="one-post"> 
				<div class="single-one row"> 
				
				
					<?php 
					
					$onpress = new WP_Query(array(
						'post_type'			=> 'moneyspace_Press',
						'posts_per_page'	=> 9,
					));
					
					
					
					while($onpress->have_posts()): $onpress->the_post(); ?>
					<div class="col-md-4 col-sm-6 col-xs-12"> 
						<div class="blog-feature-onpress"> 
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="blog-rext">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<p><?php echo wp_trim_words(get_the_content(),15, '</p>
						</div>
						<div class="read-more"> 
							<a href="'.get_the_permalink().'">More</a>
						</div>'); ?>
					</div>
						
				
					<?php endwhile; ?>
					
					
				</div>
				
				
			</div>
			<div class="posts-pagination">
			<?php 

			the_posts_pagination(array(
				'screen_reader_text'		=> ' ',
				'prev_text'					=> '&lt;',
				'next_text'					=> '&gt;',
				'type'						=> 'list',
			));
			
			?>
			</div>
        </div>
      </div>
    </div>
	<?php get_footer(); ?>