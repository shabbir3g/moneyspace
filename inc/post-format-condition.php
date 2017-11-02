<?php 



	add_action('admin_print_scripts','post_format_condition',1000);
	
	
	function post_format_condition(){
		
		
		 if(get_post_type() == 'post'):  ?>
		
		
		
		
		<script type="text/javascript"> 
		
		
		
		jQuery(document).ready(function(){
			
			
			
			var kamrul = jQuery('input[name="post_format"]:checked').attr('id');
				
				
				
				if('post-format-video' == kamrul){
					
					jQuery('.cmb2-id--extravid-post').show();
					
				}else{
					
					jQuery('.cmb2-id--extravid-post').hide();
					
				}
				
				
				if('post-format-audio' == kamrul){
					
					jQuery('.cmb2-id--extraaudio-post').show();
					
				}else{
					
					jQuery('.cmb2-id--extraaudio-post').hide();
					
				}
				
				
				if('post-format-0' == kamrul){
					
					jQuery('.cmb2-postbox').hide();
					
				}else{
					
					jQuery('.cmb2-postbox').show();
					
				}
			
			
			
			jQuery('input[name="post_format"]').change(function(){
				
				
				var kamrul = jQuery('input[name="post_format"]:checked').attr('id');
				
				
					if('post-format-video' == kamrul){
					
					jQuery('.cmb2-id--extravid-post').show();
					
				}else{
					
					jQuery('.cmb2-id--extravid-post').hide();
					
				}
				
				
				if('post-format-audio' == kamrul){
					
					jQuery('.cmb2-id--extraaudio-post').show();
					
				}else{
					
					jQuery('.cmb2-id--extraaudio-post').hide();
					
				}
				
				if('post-format-0' == kamrul){
					
					jQuery('.cmb2-postbox').hide();
					
				}else{
					
					jQuery('.cmb2-postbox').show();
					
				}
				
				
			});
			
			
			
			
		});
		
		
		
		</script>
		
		
		<?php  endif; 
		
	}



















?>