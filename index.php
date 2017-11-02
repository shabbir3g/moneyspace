<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moneyspace
 */

get_header(); ?>

	

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="rec-left-side"> 
						
						
						<div class="blog-img"> 
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-head.png" alt="" /></a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="blog-post">

		<?php
		if ( have_posts() ) :

			

			 while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; ?>

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
        
			
			
			
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div>
      </div>
    </div>

<?php

get_footer();


