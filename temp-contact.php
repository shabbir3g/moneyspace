 <?php 

 /*
 Template Name: Contact Us Template
 */
 get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-3 main">
			
			<div class="str-post"> 
					<div class="contact-title">
						<?php while(have_posts()): the_post(); ?>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<?php endwhile; ?>
					</div>
						
				<div class="row"> 
					<div class="col-md-7"> 

					<?php if(have_posts()):  ?>
						<div class="contact-form"> 
						
							<h2><img src="<?php echo get_template_directory_uri(); ?>/images/envelope-contact.png" alt="" /> Send us a Message</h2>
							
							<?php while(have_posts()): the_post(); ?>
							
							<?php the_content(); ?>
								
							<?php endwhile; ?>
							
							
						</div>
						
						<?php endif; ?>
						
					</div>
					<div class="col-md-5"> 
						<address> 
							<h2><img src="<?php echo get_template_directory_uri(); ?>/images/chacked.png" alt="" /> Visit Us</h2>
							<div class="addr-cont"> 
							<?php 
							$country_name = get_field('second_country', 'options');
							if($country_name):  ?>
								<h2><?php echo $country_name['country_name_2']; ?></h2>
								<p><?php echo $country_name['s_address_line_01']; ?> <?php echo $country_name['s_address_line_02']; ?></p>
								<p><?php echo $country_name['s_address_line_03']; ?></p>
							<?php endif; ?>
							</div>
							<div class="addr-cont"> 
							<?php 
							$country_name = get_field('first_country', 'options');
							if($country_name):  ?>
								<h2><?php echo $country_name['country_name_1']; ?></h2>
								<p><?php echo $country_name['f_address_line_01']; ?> <?php echo $country_name['f_address_line_02']; ?></p>
								<p><?php echo $country_name['f_address_line_03']; ?></p>
							<?php endif; ?>
							</div>
							<div class="addr-cont"> 
								<?php 
								$country_name = get_field('second_country', 'options');
								if($country_name):  ?>
								<h2>Email Us</h2>
								<h2><?php echo $country_name['country_name_2']; ?></h2>
								<p><?php echo $country_name['s_e_mail_address']; ?></p>
								<?php endif; ?>
								
							</div>
							<div class="addr-cont"> 
							<?php 
									$country_name = get_field('first_country', 'options'); 
									if($country_name): ?>
								<h2><?php echo $country_name['country_name_1']; ?></h2>
								<p><?php echo $country_name['f_e_mail_address']; ?></p>
								<?php endif; ?>
							</div>
							
						</address>
						
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-8"> 
					<?php while(have_posts()): the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php endwhile; ?>
					</div>
				</div>
				
				
				
			</div>
        </div>
      </div>
    </div>
	<?php get_footer(); ?>