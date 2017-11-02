<?php


	add_action('cmb2_admin_init',function(){


		 $prefix = "_extra";

		$postformat = new_cmb2_box(array(
				'id'            => $prefix . 'metabox',
				'title'         => esc_html__( 'Post Format Field', 'cmb2' ),
				'object_types'  => array( 'post' ), // Post type

			));

		$postformat-> add_field(array(
				'id'            => $prefix . 'audio-post',
				'name'         => esc_html__( 'Audio Post', 'cmb2' ),
				'type' 		 	=> 'oembed', // Post type

		));

		$postformat-> add_field(array(
				'id'            => $prefix . 'vid-post',
				'name'         => esc_html__( 'Video Post', 'cmb2' ),
				'type' 		 	=> 'oembed', // Post type

		));



	});

	






