<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moneyspace
 */

?>

<div class="single-post row"> 
	<div class="col-md-6"> 
	
	
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
	</div>
	<div class="col-md-6"> 
		<div class="blog-rext">
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<p><?php echo wp_trim_words(get_the_content(),45,'</p>
		</div>
		<div class="read-more"> 
			<a href="'.get_the_permalink().'">More</a>
		</div>'); ?>
	</div>
</div>