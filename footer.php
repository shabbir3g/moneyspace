<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moneyspace
 */

?>

	<div class="footer-area"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-3 col-sm-6 col-sx-12"> 
					<div class="row footer-menu"> 
						<div class="col-md-6"> 
							<ul>
								<?php 
								$footer_menus01 = get_field('footer_menus01', 'options');
									
								if($footer_menus01): 
								foreach($footer_menus01 as $menusfirst): ?>
								
								<?php $menusicons =  $menusfirst['footer_menus_1'];

									if($menusicons): ?>
								
								<li><a href="<?php echo $menusicons['url']; ?>"><?php echo $menusicons['title']; ?></a></li>
								
								<?php 
								
								endif;
								
								endforeach;
								
								endif; ?>
									
							</ul>
						</div>
						<div class="col-md-6"> 
							<ul>
								<?php 
								$footer_menus02 = get_field('footer_menus02', 'options');
									
								if($footer_menus02): 
								foreach($footer_menus02 as $menussecond): ?>
								
								<?php $menusicons =  $menussecond['footer_menus_2'];

									if($menusicons): ?>
								
								<li><a href="<?php echo $menusicons['url']; ?>"><?php echo $menusicons['title']; ?></a></li>
								
								<?php 
								
								endif;
								
								endforeach;
								
								endif; ?>
							</ul>
						</div>
					</div>
					<div  class="copytext" >
						<a href="#">&copy; 2017 Copyright Money Space</a>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-sx-12"> 
					<ul class="address" >
						<?php 
						$country_name = get_field('first_country', 'options');
						
						
							
						if($country_name):  ?>
						<li><a class="bold"  href="#">Address</a></li>
						<li><a class="bold"  href="#"><?php echo $country_name['country_name_1']; ?></a></li>
						<li><a href="#"><?php echo $country_name['f_address_line_01']; ?></a></li>
						<li><a href="#"><?php echo $country_name['f_address_line_02']; ?></a></li>
						<li><a href="#"><?php echo $country_name['f_address_line_03']; ?></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-sx-12"> 
					<ul>
						<li><a href="#"></a></li>
						<?php 
						$country_name = get_field('second_country', 'options');
						
						
							
						if($country_name):  ?>
						<li><a class="bold"  href="#"><?php echo $country_name['country_name_2']; ?></a></li>
						<li><a href="#"><?php echo $country_name['s_address_line_01']; ?></a></li>
						<li><a href="#"><?php echo $country_name['s_address_line_02']; ?> <?php echo $country_name['s_address_line_03']; ?></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="col-md-2 col-sm-6 col-sx-12"> 
				<ul>
					<li><a class="bold"  href="#">Contact</a></li>
					<?php 

					$country_name = get_field('first_country', 'options'); 
					if($country_name): ?>
					<li><a class="bold"  href="#"><?php echo $country_name['country_name_1']; ?></a></li>
					<li><a href="mailto:<?php echo $country_name['f_e_mail_address']; ?>"><?php echo $country_name['f_e_mail_address']; ?></a></li>
					
					
					<?php endif; ?>
					
					<?php 
					$country_name = get_field('second_country', 'options');
					
					
						
					if($country_name):  ?>
					<li><a class="bold"  href="#"><?php echo $country_name['country_name_2']; ?></a></li>
					<li><a href="mailto:<?php echo $country_name['s_e_mail_address']; ?>"><?php echo $country_name['s_e_mail_address']; ?></a></li>
					<?php endif; ?>
				</ul>
				</div>
				<div class="col-md-2 col-sm-6 col-sx-12"> 
				<ul class="social-icon">
				
					  
					<?php 
					$social_icons = get_field('social_icons', 'options');
						
						
						
					if($social_icons): 
					
					
					foreach($social_icons as $socialmmmm):


					$socialendia =  $socialmmmm['icons_with_url'];
					if($socialendia): ?>
					<li><a href="<?php echo $socialendia['url']; ?>"><i class="fa fa-<?php echo $socialendia['title']; ?>"></i></a></li>
					<?php 
					
					endif;
					
					endforeach;
					
					endif; ?>
					
					
				</ul>
				</div>
			</div>
		</div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
	<?php wp_footer(); ?>
   
  </body>
</html>
