<?php
class B3M_Divi_FLip_Cards extends ET_Builder_Module {
	protected $module_credits = array(
		'module_uri' => 'https://www.b3multimedia.ie/',
		'author'     => 'B3 Multimedia Solutions',
		'author_uri' => 'https://www.b3multimedia.ie/',
	);
	function init() {
		$this->name				= esc_html__( 'Flip Cards', 'b3m' );
		$this->slug				= 'b3m_flip_card';
		$this->vb_support		= 'on';
		$this->main_css_element	= '%%order_class%% .b3m_flip_blurb_inner';		
	}
	function get_settings_modal_toggles() {
		return array(
					'general'	=> array(
						'toggles'	=> array(
							'main_content'			=> esc_html__( 'Front Card', 'b3m' ),
							'main_back_content'		=> esc_html__( 'Back Card', 'b3m' ),
							'image'					=> esc_html__( 'Front Image & Icon', 'b3m' ),
							'back_image'			=> esc_html__( 'Back Image & Icon', 'b3m' ),
							'background'			=> array(
								'title'				=> esc_html__( 'Front Background', 'b3m' ),
							),
							'back_background'		=> array(
								'title'				=> esc_html__( 'Back Background', 'b3m' ),
							)
						),
					),
					'advanced'						=> array(
						'toggles'					=> array(
							'a_front'				=> array(
								'priority'			=> 1,
								'sub_toggles'		=> array(
									'f_title'		=> array(
										'name'		=> 'Title',
									),
									'f_content'		=> array(
										'name'		=> 'Content',
									),
								),
								'tabbed_subtoggles'	=> true,
								'title' 			=> 'Front Card Text',
							),
							'a_back' 				=> array(
								'priority' 			=> 2,
								'sub_toggles'		=> array(
									'b_title'		=> array(
										'name'		=> 'Title',
									),
									'b_content'		=> array(
										'name'		=> 'Content',
									),
								),
								'tabbed_subtoggles'	=> true,
								'title' 			=> 'Back Card Text',
							),
  							'icon_settings'			=> array(
								'title'				=> esc_html__( 'Front Image & Icon', 'b3m' ),
								'priority'			=> 3,
							),
 							'back_icon_settings'	=> array(
								'title'				=> esc_html__( 'Back Image & Icon', 'b3m' ),
								'priority'			=> 4,
							),
							'primary_button'		=> array(
								'title'				=> esc_html__( 'Back Button Style', 'b3m' ),
								'priority'			=> 5,
							),
							'front_box_style'   	=> array(
								'title'    			=> esc_html__( 'Front Card Style', 'b3m' ),
								'priority' 			=> 7,
							),
 							'back_box_style'		=> array(
								'title'				=> esc_html__( 'Back Card Style', 'b3m' ),
								'priority'			=> 8,
							),
							'text'					=> false,
							'flip_direction'        => array(
								'title'    			=> esc_html__( 'Flip Animation', 'b3m' ),
								'priority' 			=> 9,
							),
							'width'         		=> array(
								'title'    			=> esc_html__( 'Sizing', 'b3m' ),
								'priority' 			=> 10,
							),
							'image_filters'         => array(
								'title'    			=> esc_html__( 'Image Filter', 'b3m' ),
								'priority' 			=> 99,
							),
						),
					),
					'custom_css'					=> array(
						'toggles'					=> array(
							'animation'				=> array(
								'title'    				=> esc_html__( 'Animation', 'b3m' ),
								'priority' 				=> 90,
							),
							'attributes' 			=> array(
								'title'    				=> esc_html__( 'Attributes', 'b3m' ),
								'priority' 				=> 95,
							),
						),
					),
		);
	} 	
	function get_advanced_fields_config() {
		return  array(
					'fonts'							=> array(
						'header'					=> array(
							'label'					=> esc_html__( 'Front Card Title', 'b3m' ),
							'css'					=> array(
								'main'				=> 
									"%%order_class%% .et_pb_blurb_content_front h1, 
									%%order_class%% .et_pb_blurb_content_front h2, 
									%%order_class%% .et_pb_blurb_content_front h3, 
									%%order_class%% .et_pb_blurb_content_front h4, 
									%%order_class%% .et_pb_blurb_content_front h5, 
									%%order_class%% .et_pb_blurb_content_front h6",
										'important' => 'all',
							),		
							'font_size'				=> array(
								'default' 				=> '20px',
							),
							'header_level'			=> array(
								'default' 				=> 'h4',
							),
							'text_orientation'		=> array(
								'default'				=> 'center'
							),
							'line_height'    		=> array(
  								'default' 			=> '1.2em',
  							),
    						'important' 			=> 'all',
							'tab_slug'				=> 'advanced',
							'toggle_slug'			=> 'a_front',
							'sub_toggle'			=> 'f_title',
						),
						'body'						=> array(
							'label'					=> esc_html__( 'Front Card Body', 'b3m' ),
							'css'					=> array(
								'main'  				=> "%%order_class%% .et_pb_blurb_content_front .et_pb_blurb_description.front_description p",
							),	
							'font_size'				=> array(
									'default'		=> '14px',
							),
							'line_height'    		=> array(
  								'default' 			=> '1.6em',
  							),
    						'important' 			=> 'all',
							'tab_slug'				=> 'advanced',
							'toggle_slug'			=> 'a_front',
							'sub_toggle'			=> 'f_content',
						),
						'back_header'				=> array(
							'label'					=> esc_html__( 'Back Card Title', 'b3m' ),
							'css'					=> array(
							'main'					=> 
								"%%order_class%% .et_pb_blurb_content_back h1, 
								%%order_class%% .et_pb_blurb_content_back h2, 
								%%order_class%% .et_pb_blurb_content_back h3, 
								%%order_class%% .et_pb_blurb_content_back h4, 
								%%order_class%% .et_pb_blurb_content_back h5, 
								%%order_class%% .et_pb_blurb_content_back h6",
										'important' => 'all',
							),
							'font_size'				=> array(
								'default' 				=> '20px',
							),
							'header_level'			=> array(
								'default'			=> 'h4',
							),
							'line_height'    		=> array(
  								'default' 			=> '1.2em',
  							),
    						'important' 			=> 'all',
							'tab_slug'				=> 'advanced',
							'toggle_slug'			=> 'a_back',
							'sub_toggle'			=> 'b_title',
							),	
						'body_back'					=> array(	
							'label'					=> esc_html__( 'Back Card Body', 'b3m' ),
							'css'					=> array(
								'main'  				=> "%%order_class%% .et_pb_blurb_content_back .et_pb_blurb_description.back_description p,%%order_class%% .et_pb_blurb_content_back .et_pb_blurb_description.back_description",
							),	
							'font_size'				=> array(
									'default'		=> '14px',
							),	
							'line_height'    		=> array(
  								'default' 			=> '1.6em',
  							),
    						'important' 			=> 'all',					
							'tab_slug'				=> 'advanced',
							'toggle_slug'			=> 'a_back',
							'sub_toggle'			=> 'b_content',
						),
				 	),
					'button'						=> array(
						'primary_button' 			=> array(
							'box_shadow'    		=> false,
							'css'           		=> array(
								'main' 				=> "%%order_class%% .et_pb_button_module_wrapper .et_pb_button.back_btn",
								'alignment'   			=> "%%order_class%% .et_pb_button_module_wrapper",
								'important' 			=> 'all',
							),
							'label'         		=> esc_html__( 'Back Button Style', 'b3m' ),
							'use_alignment' 		=> true,
 							'depends_on'      		=> array( 'display_button_back' ),
							'depends_show_if' 		=> 'on',
						),
					),
					'background'					=> array(
						'options'					=> array(
							'parallax'				=> array(
								'default_on_front'	=> 'off',
							),
						),
						'settings' 					=> array(
							'color' 					=> 'alpha'
						),
						'css'						=> array(
							'main'						=>"%%order_class%% .et_pb_blurb_content_front",
							'important' 				=> 'all'
						),
						'use_background_video' 		=> false, 
					),
					'custom_margin_padding'			=> array(
						'css'						=> array(
							'margin'					=> "%%order_class%%",
							'padding'   				=> "%%order_class%% .et_pb_blurb_content_front,  %%order_class%% .et_pb_blurb_content_back",
							'important' 				=> 'all',
						),
					),
					'max_width'						=> array(
						'css' 						=> array(
							'main' 					=> $this->main_css_element,
							'module_alignment' 		=> '%%order_class%% .b3m_flip_blurb_inner.et_pb_blurb',
						),
					),
					'height'                => false,
					'text'							=> false,
					'filters'						=> array(	
						'toggle_name'				=> 'Box Filters'	,			
						'css'                  		=> array(
							'main' 					=>'%%order_class%% .b3m_flip_blurb_inner.et_pb_blurb',
						),					
						'child_filters_target' 		=> array(
							'tab_slug' 				=> 'advanced',
							'toggle_slug' 			=> 'image_filters',
							//'depends_show_if' 	=> 'off',
						), 
					),
					'image'			=> array(
						'css' 		=> array(
							'main' 	=> '%%order_class%% .b3m_flip_blurb_inner .et_pb_main_blurb_image',
						),
					),

					'borders'		=> array(
						'default'	=> false,

						'front_image_border'	=> array(
							'css'				=> array(
								'main'			=> array(
								'border_radii'	=> "%%order_class%% .et_pb_image_wrap.et_pb_image_wrap-front",
								'border_styles'	=> "%%order_class%% .et_pb_image_wrap.et_pb_image_wrap-front",
								)
							),
							'label_prefix'    	=> esc_html__( 'Front Image', 'b3m' ),
							'tab_slug'        	=> 'advanced',
							'toggle_slug'     	=> 'icon_settings',
							'depends_on'      	=> array( 'use_icon' ),
							'depends_show_if' 	=> 'off',
						),
						
						'back_image_border'		=> array(
							'css'				=> array(
								'main'			=> array(
								'border_radii'	=> "%%order_class%% .et_pb_image_wrap.et_pb_image_wrap-back",
								'border_styles'	=> "%%order_class%% .et_pb_image_wrap.et_pb_image_wrap-back",
								)
							),
							'label_prefix'    	=> esc_html__( 'Back Image', 'b3m' ),
							'tab_slug'        	=> 'advanced',
							'toggle_slug'     	=> 'back_icon_settings',
							'depends_on'      	=> array( 'use_back_icon' ),
							'depends_show_if' 	=> 'off',
						),

						'front_box'		=> array(
							'css'				=> array(
								'main'			=> array(
								'border_radii'	=> "%%order_class%% .et_pb_blurb_content_front",
								'border_styles'	=> "%%order_class%% .et_pb_blurb_content_front",
								)
							),
							'label_prefix'    	=> esc_html__( 'Front Box', 'b3m' ),
							'tab_slug'        	=> 'advanced',
							'toggle_slug'     	=> 'front_box_style'
						),

						'back_box'		=> array(
							'css'				=> array(
								'main'			=> array(
								'border_radii'	=> "%%order_class%% .et_pb_blurb_content_back",
								'border_styles'	=> "%%order_class%% .et_pb_blurb_content_back",
								)
							),
							'label_prefix'    	=> esc_html__( 'Back Box', 'b3m' ),
							'tab_slug'        	=> 'advanced',
							'toggle_slug'     	=> 'back_box_style'
						),

					),

					'box_shadow' => false,
			);
	}

	function get_custom_css_fields_config() {
			return array(
					//Front Custom CSS
					'b3m_front_container' 				=> array(
						'label'    					=> esc_html__( 'Front Card Container', 'b3m' ),
						'selector' 					=> '%%order_class%% .et_pb_blurb_content_front',	
					),
					'b3m_use_icon_in_front_side' 		=> array(
						'label'    					=> esc_html__( 'Front/Back Card Image/Icon', 'b3m' ),
						'selector' 					=> '%%order_class%% .et_pb_main_blurb_image',
					),
					'b3m_front_title' 					=> array(
						'label'   	 				=> esc_html__( 'Front Card Title', 'b3m' ),
						'selector' 					=> '%%order_class%% .front_title',
					),
					'b3m_front_content' 				=> array(
						'label'    					=> esc_html__( 'Front Card Content', 'b3m' ),
						'selector' 					=> '%%order_class%% .front_description',
					),
					//Front Custom CSS
					'b3m_back_container' 				=> array(
						'label'    					=> esc_html__( 'Back Card Container', 'b3m' ),
						'selector' 					=> '%%order_class%% .et_pb_blurb_content_back_side',
					),
					'b3m_back_title' 					=> array(
						'label'    					=> esc_html__( 'Back Card Title', 'b3m' ),
						'selector' 					=> '%%order_class%% .back_side_title',
					),
					'b3m_back_content' 					=> array(
						'label'    					=> esc_html__( 'Back Card Content', 'b3m' ),
						'selector' 					=> '%%order_class%% .back_description',
					),
					'b3m_back_button' 					=> array(
						'label'    					=> esc_html__( 'Back Card Button', 'b3m' ),
						'selector' 					=> '%%order_class%% .back_btn',
					)
			);
	}
	// For removing parallax options
	function generate_background_options( $base_name = 'background', $background_tab, $tab_slug, $toggle_slug, $context = null ) {
		$options = parent::generate_background_options($base_name, $background_tab, $tab_slug, $toggle_slug, $context = null);
		if(array_key_exists('parallax', $options)) {
			unset($options['parallax']);
		}
		if(array_key_exists('parallax_method', $options)) {
			unset($options['parallax_method']);
		}
		return $options;
	}
	
	function get_fields() {
		$fields = [];
		$fields = $this->flip_get_frontcard_fields($fields);
		$fields = $this->flip_get_backcard_fields($fields);
		$fields = $this->flip_get_backcard_image_fields($fields);
		$fields = $this->flip_get_frontcard_design_fields($fields);
		$fields = $this->flip_get_backcard_design_fields($fields);
		$fields = $this->flip_get_flips_fields($fields);
		$fields = $this->flip_get_others_fields($fields);
		return $fields;
	}
	
	function flip_get_frontcard_fields($fields){
			//Front Card Option 
			$fields['title'] = array(
				'label'           			=> esc_html__( 'Front Title', 'b3m' ),
				'type'            			=> 'text',
				'option_category' 			=> 'basic_option',
				'description'     			=> esc_html__( 'Display Title on Front Card.', 'b3m' ),
				'default'					=> 'Sample Front Title',
				'toggle_slug'     			=> 'main_content',
			);
			$fields['use_icon'] = array(
				'label'           			=> esc_html__( 'Use Icon in Front Card', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'basic_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'default'					=> 'off',
				'toggle_slug'     			=> 'main_content',
				'affects'         			=> array(
					'border_radii_front_image_border',
					'border_styles_front_image_border',
					'box_shadow_style_image',
				),				
				'description' 			 	=> esc_html__( 'Choose Whether Icon Display or not On Front Card.', 'b3m' ),
			);
			$fields['font_icon'] = array(
				'label'               		=> esc_html__( 'Front Icon', 'b3m' ),
				'type'                		=> 'text',
				'option_category'     		=> 'basic_option',
				'class'               		=> array( 'et-pb-font-icon' ),
				'renderer'            		=> 'et_pb_get_font_icon_list',
				'renderer_with_field' 		=> true,
				'toggle_slug'         		=> 'main_content',
				'description'         		=> esc_html__( 'Choose an Icon To Display At The Top Of Front Card.', 'b3m' ),
 				'show_if'    				=> array ( 'use_icon' => 'on'),
			);
			$fields['front_image'] = array(
				'label'              		=> esc_html__( 'Front Image', 'b3m' ),
				'type'               		=> 'upload',
				'option_category'    		=> 'basic_option',
				'upload_button_text' 		=> esc_attr__( 'Upload an image', 'b3m' ),
				'choose_text'        		=> esc_attr__( 'Choose an Image', 'b3m' ),
				'update_text'        		=> esc_attr__( 'Set As Image', 'b3m' ),
				'show_if'    				=> array ( 'use_icon' => 'off'),
				'description'        		=> esc_html__( 'Upload an Image To Display At The Top Of Front Card.', 'b3m' ),
 				'toggle_slug'        		=> 'main_content',
			);
			$fields['content'] = array(
				'label'             		=> esc_html__( 'Front Content', 'b3m' ),
				'type'              		=> 'tiny_mce',
				'default'					=> '',
				'option_category'  			=> 'basic_option',
				'description'       		=> esc_html__( 'Add Content on Front Card.', 'b3m' ),
				'toggle_slug'       		=> 'main_content',
			);
			return $fields;
	}
	function flip_get_backcard_fields($fields){
			// Back Side Option
			$fields['back_title'] = array(
				'label'           			=> esc_html__( 'Back Title', 'b3m' ),
				'type'            			=> 'text',
				'option_category' 			=> 'basic_option',
				'description'     			=> esc_html__( 'Display Title on Back Card.', 'b3m' ),
				'default'					=> 'Sample Back Title',
				'toggle_slug'     			=> 'main_back_content',
			);
			$fields['content_back_new'] = array(
				'label'             		=> esc_html__( 'Back Content', 'b3m' ),
				'type'              		=> 'textarea',
				'default'					=> '',
				'option_category'   		=> 'basic_option',
				'description'       		=> esc_html__( 'Add Content on Back Card.', 'b3m' ),
				'toggle_slug'       		=> 'main_back_content',
			);
			$fields['use_back_icon'] = array(
				'label'           			=> esc_html__( 'Use Icon in Back Card', 'b3m' ),
				'type'           			=> 'yes_no_button',
				'option_category' 			=> 'basic_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'toggle_slug'     			=> 'main_back_content',
				'affects'         			=> array(
 					'border_radii_back_image_border',
					'border_styles_back_image_border',
					'box_shadow_style_back_image',
  					'back_image_border',
				),
				'default'					=> 'off',
				'description' 				=> esc_html__( 'Choose Whether Icon Display or not On Back Card.', 'b3m' ),
			);
			$fields['back_image'] = array(
				'label'              		=> esc_html__( 'Back Side Image', 'b3m' ),
				'type'               		=> 'upload',
				'option_category'    		=> 'basic_option',
				'upload_button_text' 		=> esc_attr__( 'Upload an image', 'b3m' ),
				'choose_text'       	 	=> esc_attr__( 'Choose an Image', 'b3m' ),
				'update_text'        		=> esc_attr__( 'Set As Image', 'b3m' ),
				'show_if'					=> array('use_back_icon' => 'off'),
				'description'        		=> esc_html__( 'Upload an Image To Display At The Top Of Back Card.', 'b3m' ),
				'toggle_slug'        		=> 'main_back_content',
			);
			$fields['back_font_icon'] = array(
				'label'               		=> esc_html__( 'Back Icon', 'b3m' ),
				'type'                		=> 'text',
				'option_category'     		=> 'basic_option',
				'class'               		=> array( 'et-pb-font-icon' ),
				'renderer'            		=> 'et_pb_get_font_icon_list',
				'renderer_with_field' 		=> true,
				'show_if'					=> array('use_back_icon' => 'on'),
				'toggle_slug'         		=> 'main_back_content',
				'description'         		=> esc_html__( 'Choose an Icon To Display With Your Back Card.', 'b3m' ),
				'depends_default'     		=> true,
			);
			$fields['display_button_back'] = array(
				'label'           			=> esc_html__( "Use Button in Back Card", 'b3m' ),
				'type'           			=> 'yes_no_button',
				'option_category' 			=> 'basic_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'toggle_slug'     			=> 'main_back_content',
				'affects'         			=> array(
 					'custom_primary_button',
					'primary_button_alignment',
				),
				'default'					=> 'off',
				'description' 				=> esc_html__( "If ON then Display button on Back Card. Note: If 3D Flip Mode enabled, button hover and link won’t work. Please use Link tab to add card URL.", 'b3m' ),
			);
 			$fields['button_text_back'] = array(
				'label'               		=> esc_html__( 'Button Text', 'b3m' ),
				'type'                		=> 'text',
				'option_category'     		=> 'basic_option',
	  			'toggle_slug'         		=> 'main_back_content',
				'description'         		=> esc_html__( 'Add Button Text on Back Card.', 'b3m' ),
				'show_if'					=> array('display_button_back' => 'on'),
				'depends_default'     		=> true,
			);
  			$fields['button_url_back'] = array(
				'label'           			=> esc_html__( 'Button Url', 'b3m' ),
				'type'           			=> 'text',
				'option_category' 			=> 'basic_option',
				'description'     			=> esc_html__( 'Add Button Url on Back Card.', 'b3m' ),
				'show_if'					=> array('display_button_back' => 'on'),
				'toggle_slug'     			=> 'main_back_content',
			);
  			$fields['open_new_window_back'] = array(
				'label'           			=> esc_html__( 'Button Url Opens', 'b3m' ),
				'type'           	 		=> 'select',
				'option_category' 			=> 'configuration',
				'options'         			=> array(
					'off' 					=> esc_html__( 'In The Same Window', 'b3m' ),
					'on'  					=> esc_html__( 'In The New Tab', 'b3m' ),
				),
				'show_if'					=> array('display_button_back' => 'on'),
				'default'					=> 'off',
				'toggle_slug'     			=> 'main_back_content',
				'description'     			=> esc_html__( 'Button Url Open in New Tab or not on Back Card.', 'b3m' ),
			);
			return $fields;
	}
	function flip_get_backcard_image_fields($fields){
			//back side background settings
 			$fields['back_background_color'] = array(
				'label'           			=> esc_html__( 'Back Background Color', 'b3m' ),
				'type'            			=> 'color-alpha',
				'default'         			=> '',
				'field_template'  			=> 'color-alpha',
				'description'     			=> esc_html__( 'Set Background Color of Back Card.', 'b3m' ),
				'tab_slug'        			=> 'general',
				'toggle_slug'     			=> 'back_background',
			);
 			$fields['show_image_in_back'] = array(
				'label'           			=> esc_html__( 'Use Image In Background', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'basic_option',
				'default' 		  			=> 'off',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'toggle_slug'     			=> 'back_background',
				'affects'         			=> array(
					'back_background_image',
					'back_background_image_size',
					'back_background_image_position',
					'back_background_image_repeat',
					'back_background_image_blend',
 					'image',
					'alt',
				),
				'description' 				=> esc_html__( 'Display Background Image of Back Card.', 'b3m' ),
			);
 			$fields['back_background_image'] = array(
				'label'              		=> esc_html__( 'Back Background Image', 'b3m' ),
				'type'               		=> 'upload',
				'option_category'    		=> 'basic_option',
				'upload_button_text' 		=> esc_attr__( 'Upload an image', 'b3m' ),
				'choose_text'        		=> esc_attr__( 'Choose an Image', 'b3m' ),
				'update_text'        		=> esc_attr__( 'Set As Image', 'b3m' ),
				'show_if'    				=> array( 'show_image_in_back' => 'on' ) ,
				'toggle_slug'       		=> 'back_background',
				'description'        		=> esc_html__( 'Set Background Image of Back Card.', 'b3m' ),
				'depends_default'     		=> true,
			);
 			$fields['back_background_image_size'] = array(
				'label'           			=> esc_html__( 'Background Image Size', 'et_builder' ),
				'type'            			=> 'select',
				'option_category' 			=> 'layout',
				'options'         			=> array(
					'cover'   				=> esc_html__( 'Cover', 'et_builder' ),
					'contain' 				=> esc_html__( 'Fit', 'et_builder' ),
					'initial' 				=> esc_html__( 'Actual Size', 'et_builder' ),
				),
				'default'         			=> 'cover',
				'default_on_child'			=> true,
				'show_if'    				=> array( 'show_image_in_back' => 'on' ) ,
				'toggle_slug'        		=> 'back_background',
				'field_template'    		=> 'size',
				'depends_default'     		=> true,
			);
 			$fields['back_background_image_position'] = array(
				'label'           			=> esc_html__( 'Background Image Position', 'et_builder' ),
				'type'            			=> 'select',
				'option_category' 			=> 'layout',
				'options' 					=> array(
					'left top'      		=> esc_html__( 'Top Left', 'et_builder' ),
					'center top'    		=> esc_html__( 'Top Center', 'et_builder' ),
					'right top'     		=> esc_html__( 'Top Right', 'et_builder' ),
					'left center'   		=> esc_html__( 'Center Left', 'et_builder' ),
					'center'        		=> esc_html__( 'Center', 'et_builder' ),
					'right center'  		=> esc_html__( 'Center Right', 'et_builder' ),
					'left bottom'   		=> esc_html__( 'Bottom Left', 'et_builder' ),
					'center bottom' 		=> esc_html__( 'Bottom Center', 'et_builder' ),
					'right bottom'  		=> esc_html__( 'Bottom Right', 'et_builder' ),
				),
				'default'           		=> 'center',
				'default_on_child'  		=> true,
				'show_if'    				=> array( 'show_image_in_back' => 'on' ) ,
				'toggle_slug'       		=> 'back_background',
				'field_template'    		=> 'position',
				'depends_default'    	 	=> true,
			);
 			$fields['back_background_image_repeat'] = array(
				'label'           			=> esc_html__( 'Background Image Repeat', 'et_builder' ),
				'type'            			=> 'select',
				'option_category' 			=> 'layout',
				'options' 					=> array(
					'no-repeat' 			=> esc_html__( 'No Repeat', 'et_builder' ),
					'repeat'    			=> esc_html__( 'Repeat', 'et_builder' ),
					'repeat-x'  			=> esc_html__( 'Repeat X (horizontal)', 'et_builder' ),
					'repeat-y'  			=> esc_html__( 'Repeat Y (vertical)', 'et_builder' ),
					'space'     			=> esc_html__( 'Space', 'et_builder' ),
					'round'     			=> esc_html__( 'Round', 'et_builder' ),
				),
				'default'          			=> 'no-repeat',
				'default_on_child' 			=> true,
				'show_if'    				=> array( 'show_image_in_back' => 'on' ) ,
				'toggle_slug'       		=> 'back_background',
				'field_template'    		=> 'repeat',
			);
 			$fields['back_background_image_blend'] = array(
				'label'            			=> esc_html__( 'Background Image Blend', 'et_builder' ),
				'type'             			=> 'select',
				'option_category'  			=> 'layout',
				'options'          			=> array(
					'normal'      			=> esc_html__( 'Normal', 'et_builder' ),
					'multiply'    			=> esc_html__( 'Multiply', 'et_builder' ),
					'screen'      			=> esc_html__( 'Screen', 'et_builder' ),
					'overlay'     			=> esc_html__( 'Overlay', 'et_builder' ),
					'darken'      			=> esc_html__( 'Darken', 'et_builder' ),
					'lighten'     			=> esc_html__( 'Lighten', 'et_builder' ),
					'color-dodge' 			=> esc_html__( 'Color Dodge', 'et_builder' ),
					'color-burn'  			=> esc_html__( 'Color Burn', 'et_builder' ),
					'hard-light'  			=> esc_html__( 'Hard Light', 'et_builder' ),
					'soft-light'  			=> esc_html__( 'Soft Light', 'et_builder' ),
					'difference'  			=> esc_html__( 'Difference', 'et_builder' ),
					'exclusion'   			=> esc_html__( 'Exclusion', 'et_builder' ),
					'hue'         			=> esc_html__( 'Hue', 'et_builder' ),
					'saturation'  			=> esc_html__( 'Saturation', 'et_builder' ),
					'color'       			=> esc_html__( 'Color', 'et_builder' ),
					'luminosity'  			=> esc_html__( 'Luminosity', 'et_builder' ),
				),
				'default'          			=> 'normal',
				'default_on_child' 			=> true,
				'show_if'    				=> array( 'show_image_in_back' => 'on' ) ,
				'toggle_slug'      			=> 'back_background',
				'field_template'   			=> 'blend',
			);
			return $fields;
	}
	function flip_get_frontcard_design_fields($fields){
		 $et_accent_color 					= et_builder_accent_color();
		 $image_icon_placement 				= array( 'top' => esc_html__( 'Top', 'b3m' ) );
			if ( ! is_rtl() ) {
				$image_icon_placement['left'] 	= esc_html__( 'Left', 'b3m' );
			} else {
				$image_icon_placement['right'] 	= esc_html__( 'Right', 'b3m' );
			}
		 //Design tab setting option
		 //front side icon option settings
 			$fields['icon_placement'] = array(
				'label'             		=> esc_html__( 'Front Image/Icon Placement', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $image_icon_placement,
				'default'					=> 'top',
				'tab_slug'          		=> 'advanced',
				'toggle_slug'       		=> 'icon_settings',
				'description'       		=> esc_html__( 'Set Image/Icon Placement for Front Card.', 'b3m' ),
			);
			$fields['icon_color'] = array(
				'label'             		=> esc_html__( 'Front Icon Color', 'b3m' ),
				'type'              		=> 'color-alpha',
				'description'       		=> esc_html__( 'Set Front Card Icon Color.', 'b3m' ),
				'show_if'					=> array( 'use_icon' 	=> 'on' ),
				'depends_default'   		=> true,
				'default'					=> array( $et_accent_color, 'add_default_setting' ),
				'tab_slug'          		=> 'advanced',
				'toggle_slug'       		=> 'icon_settings',
			);
			$fields['use_circle'] = array(
				'label'           			=> esc_html__( 'Front Circle Icon', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'configuration',
				'show_if'					=> array( 'use_icon' 	=> 'on' ,
												),
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'default'					=> 'off',
				'tab_slug'         			=> 'advanced',
				'toggle_slug'      			=> 'icon_settings',
				'description'      			=> esc_html__( 'Choose Whether Icon Set Above Should Display Within a Circle for Front Card.', 'b3m' ),
				'depends_default'  			=> true,
			);
			$fields['circle_color'] = array(
				'label'           			=> esc_html__( 'Front Circle Color', 'b3m' ),
				'type'            			=> 'color-alpha',
				'description'    		    => esc_html__( 'Define a Custom color for the Front Card Icon Circle.', 'b3m' ),
				'show_if'					=> array( 'use_circle' 	=> 'on' ,
													  'use_icon'	=> 'on',
												),
 				'depends_default' 			=> true,
				'tab_slug'        			=> 'advanced',
				'default'					=> array( $et_accent_color, 'add_default_setting' ),
				'toggle_slug'     			=> 'icon_settings',
			);
			$fields['use_circle_border'] = array(
				'label'           			=> esc_html__( 'Front Show Circle Border', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'layout',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'show_if'					=> array( 'use_circle' 	=> 'on' ,
												 	  'use_icon'	=> 'on',
												),
 				'description' 				=> esc_html__( 'Choose Whether If The Icon Circle Border should Display for Front Card.', 'b3m' ),
				'depends_default'   		=> true,
				'tab_slug'          		=> 'advanced',
				'default'					=> 'off',
				'toggle_slug'      	 		=> 'icon_settings',
			);
			$fields['circle_border_color'] = array(
				'label'           			=> esc_html__( 'Front Circle Border Color', 'b3m' ),
				'type'            			=> 'color-alpha',
				'description'     			=> esc_html__( 'Define a CustomCcolor for the Front Card Icon circle Border.', 'b3m' ),
				'show_if'					=> array( 'use_circle_border' 	=> 'on' ,
													   'use_icon'			=> 'on',
												 ),
				'depends_default' 			=> true,
				'tab_slug'        			=> 'advanced',
				'default'					=> array( $et_accent_color, 'add_default_setting' ),
				'toggle_slug'     			=> 'icon_settings',
			);
			$fields['use_icon_font_size'] = array(
				'label'           			=> esc_html__( 'Use Front Icon Font Size', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'font_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'show_if'					=> array('use_icon' 		=> 'on' 
												),
				'default'         			=> 'off',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'    			=> 'icon_settings',
			);
			$fields['icon_font_size_last_edited'] = array(
				'type'        				=> 'skip',
				'tab_slug'    				=> 'advanced',
				'toggle_slug' 				=> 'icon_settings',
			);
			$fields['icon_font_size'] = array(
				'label'           			=> esc_html__( 'Icon Font Size', 'b3m' ),
				'type'            			=> 'range',
				'option_category' 			=> 'font_option',
				'tab_slug'        			=> 'advanced',
				'show_if'					=> array('use_icon_font_size' 	=> 'on' ,
													 'use_icon'	       		=> 'on',
												) ,
				'toggle_slug'     			=> 'icon_settings',
				'default'         			=> '96px',
				'range_settings' 			=> array(
					'min'  					=> '1',
					'max'  					=> '120',
					'step' 					=> '1',
				),
				'mobile_options'  			=> true,
				'depends_default' 			=> true,
			);		
			return $fields;
	}
	function flip_get_backcard_design_fields($fields){
			$et_accent_color 					= et_builder_accent_color();
			$image_icon_placement 				= array( 'top' => esc_html__( 'Top', 'b3m' ) );
			if ( ! is_rtl() ) {
				$image_icon_placement['left'] 	= esc_html__( 'Left', 'b3m' );
			} else {
				$image_icon_placement['right'] 	= esc_html__( 'Right', 'b3m' );
			}
			//Design tab setting option
			//back icon settings
			$fields['back_icon_placement'] = array(
				'label'             		=> esc_html__( 'Back Image/Icon Placement', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $image_icon_placement,
				'tab_slug'          		=> 'advanced',
				'toggle_slug'       		=> 'back_icon_settings',
				'description'       		=> esc_html__( 'Choose Back Card Icon Placement.', 'b3m' ),
			);
			$fields['back_icon_color'] = array(
				'label'             		=> esc_html__( 'Back Icon Color', 'b3m' ),
				'type'              		=> 'color-alpha',
				'description'       		=> esc_html__( 'Define a Custom Color for Back Card Icon.', 'b3m' ),
				'depends_default'   		=> true,
				'show_if'					=> array('use_back_icon' => 'on'),
				'default'					=> array( $et_accent_color, 'add_default_setting' ),
				'tab_slug'          		=> 'advanced',
				'toggle_slug'       		=> 'back_icon_settings',
			);
			$fields['back_use_circle'] = array(
				'label'           			=> esc_html__( 'Back Circle Icon', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'configuration',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'show_if'					=> array('use_back_icon' => 'on'),
				'default'					=>  'off',
				'tab_slug'         			=> 'advanced',
				'toggle_slug'      			=> 'back_icon_settings',
				'description'      			=> esc_html__( 'Choose Whether Icon Set above should Display Within a Circle for Back Card.', 'b3m' ),
				'depends_default'  			=> true,
			);
			$fields['back_circle_color'] = array(
				'label'						=> esc_html__( 'Back Circle Color', 'b3m' ),
				'type'            			=> 'color-alpha',
				'description'     			=> esc_html__( 'Define a Custom Color for the Icon Circle for Back Card.', 'b3m' ),
				'show_if'					=> array('back_use_circle' => 'on' , 
													 'use_back_icon' => 'on',
												),
				'depends_default' 			=> true,
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'back_icon_settings',
			);
			$fields['back_use_circle_border'] = array(
				'label'           			=> esc_html__( 'Back Show Circle Border', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'layout',
				'show_if'					=> array('back_use_circle' => 'on' , 
													 'use_back_icon' => 'on',
												),
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'description' 				=> esc_html__( 'Choose Whether If the Icon Circle Border should Display for Back Card.', 'b3m' ),
				'depends_default'   		=> true,
				'default'					=>  'off',
				'tab_slug'          		=> 'advanced',
				'toggle_slug'       		=> 'back_icon_settings',
			);
			$fields['back_circle_border_color'] = array(
				'label'           			=> esc_html__( 'Back Circle Border Color', 'b3m' ),
				'type'            			=> 'color-alpha',
				'description'     			=> esc_html__( 'Define a Custom Color for the Icon Circle Border for Back Card.', 'b3m' ),
				'depends_default' 			=> true,
				'show_if'					=> array('back_use_circle_border' 		=> 'on' ,
													 'use_back_icon' 				=> 'on',
												),
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'back_icon_settings',
			);
			$fields['use_back_icon_font_size'] = array(
				'label'           			=> esc_html__( 'Use Back Icon Font Size', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'font_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'show_if'					=> array('use_back_icon' 	=> 'on'),
				'default'          			=> 'off',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'back_icon_settings',
			);
			$fields['back_icon_font_size_last_edited'] = array(
				'type'        				=> 'skip',
				'tab_slug'    				=> 'advanced',
				'toggle_slug' 				=> 'back_icon_settings',
			);
			$fields['back_icon_font_size'] = array(
				'label'           			=> esc_html__( 'Back Icon Font Size', 'b3m' ),
				'type'            			=> 'range',
				'option_category' 			=> 'font_option',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'back_icon_settings',
				'default'         			=> '96px',
				'show_if'					=> array('use_back_icon_font_size' 	=> 'on' , 
													 'use_back_icon' 			=> 'on',
												),
				'range_settings' 			=> array(
					'min'  					=> '1',
					'max'  					=> '120',
					'step' 					=> '1',
				),
				'mobile_options'  			=> true,
				'depends_default' 			=> true,
			);
			return $fields;
	}
	function flip_get_flips_fields($fields){
			//Animation 3D/Boxed Mode Dropdown
			$boxed_mode 							= array( '3d_boxed_tilt' => esc_html__( '3D Box Tilt','b3m' ) );
			$boxed_mode['3d_boxed_flip'] 			= esc_html__( '3D Box Flip', 'b3m' );
			$boxed_mode['3d_boxed_flip_coveropen'] 	= esc_html__( '3D Box Cover Open', 'b3m' );
			//Animation Direction Dropdown - cubeTilt animation
			$flip_direction_placement 				= array( 'rtl' => esc_html__( 'Right to Left','b3m' ) );
			$flip_direction_placement['ltr'] 		= esc_html__( 'Left to Right', 'b3m' );
			$flip_direction_placement['ttb'] 		= esc_html__( 'Top to Bottom', 'b3m' );
			$flip_direction_placement['btt'] 		= esc_html__( 'Bottom to Top ', 'b3m' );
			////Animation Cross Direction Dropdown
			$flip_direction_placement_default			= array( 'rtl' => esc_html__( 'Right to Left','b3m' ) );
			$flip_direction_placement_default['ltr'] 	= esc_html__( 'Left to Right', 'b3m' );
			$flip_direction_placement_default['ttb'] 	= esc_html__( 'Top to Bottom', 'b3m' );
			$flip_direction_placement_default['btt'] 	= esc_html__( 'Bottom to Top ', 'b3m' );
			$flip_direction_placement_default['brttl'] 	= esc_html__( 'Bottom-Right to Top-Left', 'b3m' );
			$flip_direction_placement_default['blttr'] 	= esc_html__( 'Bottom-Left to Top-Right', 'b3m' );
			$flip_direction_placement_default['tltbr'] 	= esc_html__( 'Top-Left to Bottom-Right', 'b3m' );
			$flip_direction_placement_default['trtbl'] 	= esc_html__( 'Top-Right to Bottom-Left', 'b3m' );
	
			$flip_direction_placement_flip_cover			= array( 'rtl' => esc_html__( 'Right to Left','b3m' ) );
			$flip_direction_placement_flip_cover['ltr'] 	= esc_html__( 'Left to Right', 'b3m' );
			$flip_direction_placement_flip_cover['ttb'] 	= esc_html__( 'Top to Bottom', 'b3m' );
			$flip_direction_placement_flip_cover['btt'] 	= esc_html__( 'Bottom to Top ', 'b3m' );
			$flip_direction_placement_flip_cover['brttl'] 	= esc_html__( 'Bottom-Right to Top-Left', 'b3m' );
			$flip_direction_placement_flip_cover['blttr'] 	= esc_html__( 'Bottom-Left to Top-Right', 'b3m' );
			$flip_direction_placement_flip_cover['tltbr'] 	= esc_html__( 'Top-Left to Bottom-Right', 'b3m' );
			$flip_direction_placement_flip_cover['trtbl'] 	= esc_html__( 'Top-Right to Bottom-Left', 'b3m' );
			//Transition Effect Dropdown
			$flip_transition 					= array( 'linear' => esc_html__( 'Linear', 'b3m' ) );
			$flip_transition['ease'] 			= esc_html__( 'Ease', 'b3m' );
			$flip_transition['ease-in-out'] 	= esc_html__( 'EaseInOut', 'b3m' );
			$flip_transition['ease-in'] 		= esc_html__( 'EaseIn', 'b3m' );
			$flip_transition['ease-out'] 		= esc_html__( 'EaseOut', 'b3m' );
			$flip_transition['bounce']			= esc_html__( 'Bounce', 'b3m' );
			$flip_transition['bounceIn'] 	 	= esc_html__( 'BounceIn', 'b3m' );
			$flip_transition['bounceOut'] 		= esc_html__( 'BounceOut', 'b3m' );
			$flip_transition['easeInOutCirc'] 	= esc_html__( 'EaseInOutCircle', 'b3m' );
			$flip_transition['easeInOutExpo'] 	= esc_html__( 'EaseInOutExpo', 'b3m' );
			// Hover Animation Styles
			$hover_animation					= array( 'fadeInOut' => esc_html__( 'FadeInOut', 'b3m' ) );
			$hover_animation['zoomIn'] 			= esc_html__( 'ZoomIn', 'b3m' );
			$hover_animation['zoomOut'] 		= esc_html__( 'ZoomOut', 'b3m' );
			$hover_animation['slideUp'] 		= esc_html__( 'SlideUp', 'b3m' );
			$hover_animation['slideDown'] 		= esc_html__( 'SlideDown', 'b3m' );
			$hover_animation['slideLeft'] 		= esc_html__( 'SlideLeft', 'b3m' );
			$hover_animation['slideRight'] 		= esc_html__( 'SlideRight', 'b3m' );
			$hover_animation['rotate'] 			= esc_html__( 'Rotate', 'b3m' );
		    //Flip Animation
			$fields['disable_flip_button'] = array(
				'label'           			=> esc_html__( 'Disable Flip ', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'font_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
 				'default'          			=> 'off',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'flip_direction',
				'description'       		=> esc_html__( 'Disable Flip.', 'b3m' ),
			);
			$fields['use_3d_boxed_mode'] = array(
				'label'           			=> esc_html__( 'Use 3D/Boxed Mode', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'font_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
				'show_if'					=> array('disable_flip_button' => 'off' ),
 				'default'          			=> 'off',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'flip_direction',
				'description'       		=> esc_html__( 'Set 3D/Boxed Mode.', 'b3m' ),
			);
			$fields['select_3d_boxed_mode'] = array(
				'label'             		=> esc_html__( 'Select 3D/Boxed Mode', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $boxed_mode,
				'default'					=> '3d_boxed_tilt',
				'show_if'					=> array(	'use_3d_boxed_mode'=> 'on' ,
														'disable_flip_button'	=> 'off',
													),
 				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Choose 3D/Boxed Mode.', 'b3m' ),
			);
			$fields['flip_direction_option'] = array(
				'label'             		=> esc_html__( 'Select Direction', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $flip_direction_placement,
				'show_if'					=> array( 	'select_3d_boxed_mode'	=> '3d_boxed_tilt',
														'use_3d_boxed_mode'		=> 'on',
														'disable_flip_button'	=> 'off',
													),
				'default'					=> 'rtl',
 				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Choose Flip Direction.', 'b3m' ),
			);
			$fields['flip_direction_placement_default'] = array(
				'label'             		=> esc_html__( 'Select Direction Default', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $flip_direction_placement_default,
				'show_if'					=> array('use_3d_boxed_mode'	=> array('off'),
														'disable_flip_button'	=> 'off',
													),					
				'default'					=> 'rtl',
 				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Choose Flip Direction.', 'b3m' ),
			);
			$fields['flip_direction_option_flip_cover'] = array(
				'label'             		=> esc_html__( 'Select Direction Cover', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $flip_direction_placement_flip_cover,
				'show_if'					=> array(	'use_3d_boxed_mode'	=> 'on',
														'disable_flip_button'	=> 'off',
													),
				'show_if_not'				=> array('select_3d_boxed_mode'	=> '3d_boxed_tilt'),				
				'default'					=> 'rtl',
 				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Choose Flip Direction.', 'b3m' ),
			);	
			$fields['select_hover_animation'] = array(
				'label'             		=> esc_html__( 'Select Animation', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $hover_animation,
				'default'					=> 'fadeInOut',
				'show_if'					=> array(	'disable_flip_button'	=> 'on'),
 				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Choose Hover Animation.', 'b3m' ),
			);	
			$fields['flip_transition_option'] = array(
				'label'             		=> esc_html__( 'Select Transitions', 'b3m' ),
				'type'              		=> 'select',
				'option_category'   		=> 'layout',
				'options'           		=> $flip_transition,
				'default'					=> 'linear',
 				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Choose flip Transitions.', 'b3m' ),
			);
			$fields['flip_animation_speed'] = array(
				'label'             		=> esc_html__( 'Flip Animation Speed', 'b3m' ),
				'type'              		=> 'range',
				'option_category'   		=> 'layout',	
				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'description'       		=> esc_html__( 'Set Flip Animation Speed(s).', 'b3m' ),
				'validate_unit'				=> true,			
  				'default'           		=> '0.5s',
  				'default_unit' 				=> 's',
  				'fixed_unit' 				=> 's',
				'default_on_front' 			=> '0.5s',				
				'range_settings'  			=> array(
						'min'  					=> '0.5',
						'max'  					=> '5',
						'step' 					=> '0.5',
				),  						
			);
			$fields['use_3d_tilt_on_backcard'] = array(
				'label'           			=> esc_html__( 'Use 3D Tilt Effect on Back Card', 'b3m' ),
				'type'            			=> 'yes_no_button',
				'option_category' 			=> 'font_option',
				'options'         			=> array(
					'off' 					=> esc_html__( 'No', 'b3m' ),
					'on'  					=> esc_html__( 'Yes', 'b3m' ),
				),
 				'default'          			=> 'off',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'flip_direction',
				'description'       		=> esc_html__( 'Set 3D Tilt Effect on Back Card.', 'b3m' ),
			);
			$fields['tilt_animation_max_tilt'] = array(
				'label'             		=> esc_html__( 'Tilt Animation Max Value', 'b3m' ),
				'type'              		=> 'range',
				'option_category'   		=> 'layout',	
				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'range_settings'  			=> array(
						'min'  					=> '0',
						'max'  					=> '30',
						'step' 					=> '1',
					),  
				'default'					=> '15',	
				 'unitless' 				=> true,
				'show_if'					=> array('use_3d_tilt_on_backcard' 	=> 'on'),			
   				'description'       		=> esc_html__( 'Set Tilt Animation Max value.', 'b3m' ),
  				
			);
			$fields['tilt_animation_perspective'] = array(
				'label'             		=> esc_html__( 'Tilt Animation Perspective', 'b3m' ),
				'type'              		=> 'range',
				'option_category'   		=> 'layout',	
				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',			
				'range_settings'  			=> array(
						'min'  					=> '0',
						'max'  					=> '2000',
						'step' 					=> '100',
					),  				
				'default'					=> '1400',	
				 'unitless' => true,
				'show_if'					=> array('use_3d_tilt_on_backcard' 	=> 'on'),			
  				'description'       		=> esc_html__( 'Set Tilt Animation Perspective.', 'b3m' ),
			);
			$fields['tilt_animation_speed'] = array(
				'label'             		=> esc_html__( 'Tilt Animation Speed', 'b3m' ),
				'type'              		=> 'range',
				'option_category'   		=> 'layout',	
				'tab_slug'        			=> 'advanced',
				'toggle_slug'       		=> 'flip_direction',
				'show_if'					=> array('use_3d_tilt_on_backcard' 	=> 'on'),
				'description'       		=> esc_html__( 'Set Tilt Animation Speed (s).', 'b3m' ),
				'validate_unit'				=> true,			
  				'default'           		=> '0.5s',
  				'default_unit' 				=> 's',
  				'fixed_unit' 				=> 's',
				'default_on_front' 			=> '0.5s',				
				'range_settings'  			=> array(
						'min'  					=> '0.5',
						'max'  					=> '3',
						'step' 					=> '0.5',
				),  						
			);
			

			return $fields;
	}
	function flip_get_others_fields($fields){
			//sizing 
 			$fields['image_max_width'] = array(
				'label'           			=> esc_html__( 'Image Width', 'b3m' ),
				'type'            			=> 'range',
				'option_category' 			=> 'layout',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'width',
				'mobile_options'  			=> true,
				'validate_unit'   			=> true,
				'default'         			=> '100%',
				'allow_empty'     			=> true,
				'range_settings'  			=> array(
					'min'  					=> '0',
					'max'  					=> '100',
					'step' 					=> '1',
				),
			);
			$fields['content_max_width'] = array(
				'label'           			=> esc_html__( 'Content Width', 'b3m' ),
				'type'            			=> 'range',
				'option_category' 			=> 'layout',
				'tab_slug'        			=> 'advanced',
				'toggle_slug'     			=> 'width',
				'mobile_options'  			=> true,
				'validate_unit'   			=> true,
				'default'         			=> '550px',
				'allow_empty'     			=> true,
				'range_settings'  			=> array(
					'min'  					=> '0',
					'max'  					=> '1100',
					'step' 					=> '5',
				),
			);
			//Icon/image animation 
			$fields['animation'] = array(
				'label'						=> esc_html__( 'Image/Icon Animation', 'et_builder' ),
				'type'            			=> 'select',
				'option_category' 			=> 'configuration',
				'options'         			=> array(
					'top'    					=> esc_html__( 'Top To Bottom', 'et_builder' ),
					'left'   					=> esc_html__( 'Left To Right', 'et_builder' ),
					'right'  					=> esc_html__( 'Right To Left', 'et_builder' ),
					'bottom' 					=> esc_html__( 'Bottom To Top', 'et_builder' ),
					'off'    					=> esc_html__( 'No Animation', 'et_builder' ),
					),
				'tab_slug'    				=> 'advanced',
				'toggle_slug' 				=> 'animation',
				'description' 				=> esc_html__( 'This Controls the Direction of the Lazy-loading Animation.', 'et_builder' ),
				'default'     				=> 'top',
			);
			//Advanced tab 
			$fields['alt'] = array(
				'label'           			=> esc_html__( 'Front Image Alt Text', 'b3m' ),
				'type'            			=> 'text',
				'option_category' 			=> 'basic_option',
				'description'     			=> esc_html__( 'Define the HTML ALT text for your image here of front card.', 'b3m' ),
				'show_if' 					=> array('show_if' 	=> 'off'),
				'tab_slug'        			=> 'custom_css',
				'toggle_slug'     			=> 'attributes',
			);
			$fields 			= array_merge( $fields, ET_Builder_Module_Fields_Factory::get( 'BoxShadow' )->get_fields( array(
				'suffix'              			=> '_front_box',
				'label'               			=> esc_html__( 'Front Box Shadow', 'b3m' ),
				'option_category'     			=> 'layout',
				'tab_slug'            			=> 'advanced',
				'toggle_slug'         			=> 'front_box_style',
			) ) );
			$fields 							= array_merge( $fields, ET_Builder_Module_Fields_Factory::get( 'BoxShadow' )->get_fields( array(
				'suffix'              			=> '_image',
				'label'               			=> esc_html__( 'Front Image Box Shadow', 'b3m' ),
				'option_category'     			=> 'layout',
				'tab_slug'            			=> 'advanced',
				'toggle_slug'         			=> 'icon_settings',
				'depends_show_if'     			=> 'off',
			) ) );
			$fields 							= array_merge( $fields, ET_Builder_Module_Fields_Factory::get( 'BoxShadow' )->get_fields( array(
				'suffix'              			=> '_back_image',
				'label'               			=> esc_html__( 'Back Image Box Shadow', 'b3m' ),
				'option_category'     			=> 'layout',
				'tab_slug'            			=> 'advanced',
				'toggle_slug'         			=> 'back_icon_settings',
				'depends_show_if'     			=> 'off',
			) ) );
			$fields 							= array_merge( $fields, ET_Builder_Module_Fields_Factory::get( 'BoxShadow' )->get_fields( array(
				'suffix'              			=> '_back_box',
				'label'               			=> esc_html__( 'Back Box Shadow', 'b3m' ),
				'option_category'     			=> 'layout',
				'tab_slug'            			=> 'advanced',
				'toggle_slug'         			=> 'back_box_style'
			) ) );
		return $fields;
	}
	
	function flip_borderradius($attrs){
		$border_radius = '';
		$border_radius_comman = explode('|', $attrs);
		
		if ($border_radius_comman[0] == 'on'){
			$border_radius =  ($border_radius_comman[1] === "") ? 0 : $border_radius_comman[1];
		}
		if ($border_radius_comman){
	
			$border_radius_top		= ($border_radius_comman[1]) ? $border_radius_comman[1] : '0px';
			$border_radius_bottom	= ($border_radius_comman[1]) ? $border_radius_comman[1] : '0px';
			$border_radius_left		= ($border_radius_comman[1]) ? $border_radius_comman[1] : '0px';
			$border_radius_right	= ($border_radius_comman[1]) ? $border_radius_comman[1] : '0px';
	
			$border_radius = $border_radius_top . ' ' . $border_radius_right . ' ' . $border_radius_bottom . ' ' . $border_radius_left;
		}
		return $border_radius;
	}

	public function render( $attrs, $content = null, $render_slug ) {
		// General
   		$module_id             				= $this->module_id();
		$module_class          				= $this->module_classname( $render_slug );
		// Front Flip fields
		$title                 				= $this->props['title'];
		$header_level          				= $this->props['header_level'];
		///// Front Icon
		$icon_placement        				= $this->props['icon_placement'];
		$font_icon             				= $this->props['font_icon'];
		$use_icon              				= $this->props['use_icon'];
		$use_circle            				= $this->props['use_circle'];
		$icon_color            				= $this->props['icon_color'];
		$use_circle_border     				= $this->props['use_circle_border'];
		$circle_color          				= $this->props['circle_color'];
		$circle_border_color   				= $this->props['circle_border_color'];
		///// Front Image
		$image                 				= $this->props['front_image'];
 		$alt                   				= $this->props['alt'];
		$background_image 					= $this->props['background_image'];
		$background_color 					= $this->props['background_color'];
		$background_size        			= ($this->props['background_size']) ? $this->props['background_size'] : 'cover';
		$background_blend       			= ($this->props['background_blend']) ? $this->props['background_blend'] : 'normal';
		$background_repeat          		= ($this->props['background_repeat']) ? $this->props['background_repeat'] : 'no-repeat';
		$background_position          		= ($this->props['background_position']) ? $this->props['background_position'] : 'center';
		///// Front Border
		$border_radii_front_image_border 	= $this->props['border_radii_front_image_border'];
		// Back Flip fields
		$back_title                 		= $this->props['back_title'];
		$back_header_level          		= $this->props['back_header_level'];
		$content_back_new 					= do_shortcode(html_entity_decode($this->props['content_back_new']));
		///// Back Icon
		$back_icon_placement       	 		= $this->props['back_icon_placement'];
		$use_back_icon              		= $this->props['use_back_icon'];
		$back_font_icon             		= $this->props['back_font_icon'];
		$back_icon_color            		= $this->props['back_icon_color'];
		$back_use_circle            		= $this->props['back_use_circle'];
		$back_use_circle_border     		= $this->props['back_use_circle_border'];
		$back_circle_color          		= $this->props['back_circle_color'];
		$back_circle_border_color   		= $this->props['back_circle_border_color'];
		///// Back Image
		$show_image_in_back         		= $this->props['show_image_in_back'];
		$back_image                 		= $this->props['back_image'];
		$back_background_color      		= $this->props['back_background_color'];
		$back_background_image             	= $this->props['back_background_image'];
		$back_background_image_size        	= ($this->props['back_background_image_size']) ? $this->props['back_background_image_size'] : 'cover';
		$back_background_image_position    	= ($this->props['back_background_image_position']) ? $this->props['back_background_image_position'] : 'center';
		$back_background_image_repeat      	= ($this->props['back_background_image_repeat'] != "") ? $this->props['back_background_image_repeat'] : 'no-repeat';
		$back_background_image_blend       	= ($this->props['back_background_image_blend']) ? $this->props['back_background_image_blend'] : 'normal';
		// Back Button
		$display_button_back              	= $this->props['display_button_back'];
		$button_text_back              		= $this->props['button_text_back'];
		$button_url_back              		= $this->props['button_url_back'];
		$open_new_window_back              	= $this->props['open_new_window_back'];
		$custom_icon                   		= $this->props['primary_button_icon'];
		$button_custom                	 	= $this->props['custom_primary_button'];
		$button_rel                    		= $this->props['primary_button_rel'];
		// Design
		$animation            	 			= $this->props['animation'];
		$custom_spacing_content_margin 		= $this->props['custom_margin'];
		$custom_spacing_content_padding 	= $this->props['custom_padding'];
		// Flip Animation
		$flip_direction_option      		= $this->props['flip_direction_option'];
		$flip_transition_option      		= $this->props['flip_transition_option'];
		$flip_animation_speed				= str_replace('px','',str_replace('s','',$this->props['flip_animation_speed'])) ;
		$use_3d_tilt_on_backcard			= $this->props['use_3d_tilt_on_backcard'];
		$use_3d_boxed_mode					= $this->props['use_3d_boxed_mode'];
		$select_3d_boxed_mode				= $this->props['select_3d_boxed_mode'];
		$tilt_animation_max_tilt			= $this->props['tilt_animation_max_tilt'];
		$tilt_animation_perspective			= $this->props['tilt_animation_perspective'];
		$tilt_animation_speed 				= str_replace('px','',str_replace('s','',$this->props['tilt_animation_speed'])) ;
 		$flip_direction_option_flip_cover	= $this->props['flip_direction_option_flip_cover'];
		$flip_direction_placement_default	= $this->props['flip_direction_placement_default'];
		$disable_flip_button				= $this->props['disable_flip_button'];
		$select_hover_animation				= $this->props['select_hover_animation'];
		
		// CSS
		$this->flip_icon_css( $render_slug );
		$this->flip_width_css( $render_slug );
		// variable
		$flip_main_class = '';$flip_front_main_class = '';$flip_back_main_class = '';
		// Border Radius
		$border_radii_front_box				= $this->props['border_radii_front_box'];
		$border_radii_back_box				= $this->props['border_radii_back_box'];
		$front_border_radius				= $this->flip_borderradius($border_radii_front_box);
		$back_border_radius					= $this->flip_borderradius($border_radii_back_box);
		// FB box-shadow
		$box_shadow_style_front_box			= $this->props['box_shadow_style_front_box'];
		$box_shadow_horizontal_front_box	= $this->props['box_shadow_horizontal_front_box'];
		$box_shadow_vertical_front_box		= $this->props['box_shadow_vertical_front_box'];
		$box_shadow_blur_front_box			= $this->props['box_shadow_blur_front_box'];
		$box_shadow_spread_front_box		= $this->props['box_shadow_spread_front_box'];
		$box_shadow_position_front_box		= $this->props['box_shadow_position_front_box'];
		$box_shadow_color_front_box			= $this->props['box_shadow_color_front_box'];
	    // BB box-shadow
		$box_shadow_style_back_box			= $this->props['box_shadow_style_back_box'];
		$box_shadow_horizontal_back_box		= $this->props['box_shadow_horizontal_back_box'];
		$box_shadow_vertical_back_box		= $this->props['box_shadow_vertical_back_box'];
		$box_shadow_blur_back_box			= $this->props['box_shadow_blur_back_box'];
		$box_shadow_spread_back_box			= $this->props['box_shadow_spread_back_box'];
		$box_shadow_color_back_box			= $this->props['box_shadow_color_back_box'];
		$box_shadow_position_back_box		= $this->props['box_shadow_position_back_box'];
		// box-shadow
		if($box_shadow_position_front_box == 'outer'){ $box_shadow_position_front_box_style = ''; }else{ $box_shadow_position_front_box_style = 'inset'; }
		if($box_shadow_position_back_box == 'outer'){ $box_shadow_position_back_box_style = ''; }else{ $box_shadow_position_back_box_style = 'inset'; }
		if($box_shadow_style_front_box == 'none'){
			$front_card_boxshadow = 'none';
		}else {
			$front_card_boxshadow = $box_shadow_horizontal_front_box.' '.$box_shadow_vertical_front_box.' '.$box_shadow_blur_front_box.' '.$box_shadow_spread_front_box.' '.$box_shadow_color_front_box.' '.$box_shadow_position_front_box_style;
		}
		if($box_shadow_style_back_box == 'none'){
			$back_card_boxshadow = 'none';
		}else {
			$back_card_boxshadow = $box_shadow_horizontal_back_box.' '.$box_shadow_vertical_back_box.' '.$box_shadow_blur_back_box.' '.$box_shadow_spread_back_box.' '.$box_shadow_color_back_box.' '.$box_shadow_position_back_box_style;
		}
   		//background position 
   		if($background_position){
   			if ($background_position == 'top_left'){ $background_position = 'left top';  }
   			if ($background_position == 'top_center'){ $background_position = 'center top'; }
   			if ($background_position == 'top_right'){ $background_position = 'right top'; }
   			if ($background_position == 'center_left'){ $background_position = 'left center'; }
   			if ($background_position == 'center'){ $background_position = 'center center'; }
   			if ($background_position == 'center_right'){ $background_position = 'right center'; }
   			if ($background_position == 'bottom_left'){ $background_position = 'left bottom'; }
   			if ($background_position == 'bottom_center'){ $background_position = 'center bottom'; }
   			if ($background_position == 'bottom_right'){ $background_position = 'right bottom'; }
   		}
   		// 	3d_boxed_tilt
 		if($use_3d_boxed_mode == 'on' && $select_3d_boxed_mode == '3d_boxed_tilt' ){
			if($flip_direction_option == 'rtl'){ $flip_direction_option = '_w'; }
			if($flip_direction_option == 'ltr'){ $flip_direction_option = '_e';	}
			if($flip_direction_option == 'ttb'){ $flip_direction_option = '_s'; }
			if($flip_direction_option == 'btt'){ $flip_direction_option = '_n'; }
		}
		//3d_boxed_flip , 3d_boxed_flip_coveropen
		if(($use_3d_boxed_mode == 'on') && ($select_3d_boxed_mode == '3d_boxed_flip' || $select_3d_boxed_mode == '3d_boxed_flip_coveropen') ){
			if($flip_direction_option_flip_cover == 'rtl'){ $flip_direction_option = '_w'; }
			if($flip_direction_option_flip_cover == 'ltr'){ $flip_direction_option = '_e'; }
			if($flip_direction_option_flip_cover == 'ttb'){ $flip_direction_option = '_s'; }
			if($flip_direction_option_flip_cover == 'btt'){ $flip_direction_option = '_n'; }
			if($flip_direction_option_flip_cover == 'brttl'){ $flip_direction_option = '_nw'; }
			if($flip_direction_option_flip_cover == 'blttr'){ $flip_direction_option = '_ne'; }
			if($flip_direction_option_flip_cover == 'tltbr'){ $flip_direction_option = '_se'; }
			if($flip_direction_option_flip_cover == 'trtbl'){ $flip_direction_option = '_sw'; }
		}
		// default
		if($use_3d_boxed_mode == 'off') {$flip_direction_option = $flip_direction_placement_default;}
		// transition option
		$custom_easeOut_class = '';
		if ($flip_transition_option == 'bounce'){$flip_transition_option = 'cubic-bezier(0.745, -0.265, 0.355, 1.255)';$custom_easeOut_class = 'easing_bounce';}
		if ($flip_transition_option == 'bounceIn'){$flip_transition_option = 'cubic-bezier(0.605, -0.240, 0.560, 0.960)';$custom_easeOut_class = 'easing_bounceIn';}
		if ($flip_transition_option == 'bounceOut'){$flip_transition_option = 'cubic-bezier(0.565, 0.275, 0.460, 1.215)';$custom_easeOut_class = 'easing_bounceOut';}
		if ($flip_transition_option == 'easeOutBack'){$flip_transition_option = 'cubic-bezier(0.175, 0.885, 0.32, 1.275)';$custom_easeOut_class = 'easing_easeOutBack';}
		if ($flip_transition_option == 'easeInOutCirc'){$flip_transition_option = 'cubic-bezier(0.785, 0.135, 0.15, 0.86)';$custom_easeOut_class = 'easing_easeInOutCirc';}
		if ($flip_transition_option == 'easeInOutExpo'){$flip_transition_option = 'cubic-bezier(1, 0, 0, 1)';$custom_easeOut_class = 'easing_easeInOutExpo';}
		//Icon Placement
		if ( is_rtl() && 'left' === $icon_placement ) { $icon_placement = 'right'; }
		if ( is_rtl() && 'left' === $back_icon_placement ) { $back_icon_placement = 'right'; }
		//Front and back card Title 
		if ( '' !== $title ) {
			$title = sprintf( '<%1$s class="et_pb_module_header front_title">%2$s</%1$s>', et_pb_process_header_level( $header_level, 'h4' ), $title );
		}
		if ( '' !== $back_title ) {
			$back_title = sprintf( '<%1$s class="et_pb_module_header back_side_title">%2$s</%1$s>', et_pb_process_header_level( $back_header_level, 'h4' ), $back_title );
		}
		// Added for backward compatibility
		if ( empty( $animation ) ) { $animation = 'top'; }
		// if User Select Frontcard Image
		if ( 'off' === $use_icon ) {
			$image = ( '' !== trim( $image ) ) ? sprintf(
				'<img src="%1$s" alt="%2$s" class="et-waypoint et-pb-icon-front%3$s" />',
				esc_url( $image ),
				esc_attr( $alt ),
				esc_attr( " et_pb_animation_{$animation}" )
			) : '';
		} else {
			$icon_style = sprintf( 'color: %1$s;', esc_attr( $icon_color ) );
			if ( 'on' === $use_circle ) {
				$icon_style .= sprintf( ' background-color: %1$s;', esc_attr( $circle_color ) );
				if ( 'on' === $use_circle_border ) {
					$icon_style .= sprintf( ' border-color: %1$s;', esc_attr( $circle_border_color ) );
				}
			}
			$image = ( '' !== $font_icon ) ? sprintf(
				'<span class="et-pb-icon et-pb-icon-front et-waypoint%2$s%3$s%4$s" style="%5$s">%1$s</span>',
				esc_attr( et_pb_process_font_icon( $font_icon ) ),
				esc_attr( " et_pb_animation_{$animation}" ),
				( 'on' === $use_circle ? ' et-pb-icon-circle' : '' ),
				( 'on' === $use_circle && 'on' === $use_circle_border ? ' et-pb-icon-circle-border' : '' ),
				$icon_style
			) : '';
		}
		// if User Select Backcard Image
 		if ( 'off' === $use_back_icon ) {
			$back_image = ( '' !== trim( $back_image ) ) ? sprintf(
				'<img src="%1$s" alt="%2$s" class="et-waypoint et-pb-icon-back-side%3$s" />',
				esc_url( $back_image ),
				esc_attr( $alt ),
				esc_attr( " et_pb_animation_{$animation}" )
			) : '';
		} else {
			$back_icon_style = sprintf( 'color: %1$s;', esc_attr( ($back_icon_color == "") ? '#7EBEC5' : $back_icon_color ) );
			if ( 'on' === $back_use_circle ) {
				$back_icon_style .= sprintf( ' background-color: %1$s;', esc_attr( $back_circle_color ) );
				if ( 'on' === $back_use_circle_border ) {
					$back_icon_style .= sprintf( ' border-color: %1$s;', esc_attr( $back_circle_border_color ) );
				}
			}
			$back_image = ( '' !== $back_font_icon ) ? sprintf(
				'<span class="et-pb-icon et-pb-icon-back-side et-waypoint%2$s%3$s%4$s" style="%5$s">%1$s</span>',
				esc_attr( et_pb_process_font_icon( $back_font_icon ) ),
				esc_attr( " et_pb_animation_{$animation}" ),
				( 'on' === $back_use_circle ? ' et-pb-icon-circle' : '' ),
				( 'on' === $back_use_circle && 'on' === $back_use_circle_border ? ' et-pb-icon-circle-border' : '' ),
				$back_icon_style
			) : '';
		}
		// Images: Add CSS Filters and Mix Blend Mode rules (if set)
		$this->add_classname($this->generate_css_filters(
				$render_slug,
				'child_', 
				$this->advanced_fields['image']['css']
			));
		$generate_css_image_filters = '';
		if ( $image && array_key_exists( 'icon_settings', $this->advanced_options ) && array_key_exists( 'css', $this->advanced_options['icon_settings'] ) ) {
			$generate_css_image_filters = $this->generate_css_filters(
				$render_slug,
				'child_',
				self::$data_utils->array_get( $this->advanced_options['icon_settings']['css'], 'main', '%%order_class%%' )
			);
		}
		// Frontcard Image
		if ( 'off' === $use_icon ) {
			$image = $image ? sprintf( '<span class="et_pb_image_wrap et_pb_image_wrap-front">%1$s</span>', $image ) : '';
		}
		$image = $image ? sprintf(
			'<div class="et_pb_main_blurb_image%2$s">%1$s</div>',
			 $image,
			esc_attr( $generate_css_image_filters )
		) : '';
		// Backcard Image
		if ( 'off' === $use_back_icon ) {
			$back_image = $back_image ? sprintf( '<span class="et_pb_image_wrap et_pb_image_wrap-back">%1$s</span>', $back_image ) : '';
		}
		$back_image = $back_image ? sprintf(
			'<div class="et_pb_main_blurb_image%2$s">%1$s</div>',
			 $back_image, 
			esc_attr( $generate_css_image_filters )
		) : '';
		
		$video_background 			= $this->video_background();
		$parallax_image_background 	= $this->get_parallax_image_background();
		$flip_main_class .= " et_pb_module {$this->get_text_orientation_classname()}";
		// Frontcard Style
		$front_style = [];$customStyleArray = [];$customPadding    = [];
		array_push($front_style, 'background-image: url('.$background_image .');');
		array_push($front_style, 'background-repeat: ' . $background_repeat . ';');
		array_push($front_style, 'background-position: ' . $background_position . ';');
		array_push($front_style, 'background-size: ' . $background_size. ';');
		array_push($front_style, 'background-blend-mode: ' . $background_blend. ';');
		array_push($front_style, 'background-color: '.$background_color . '!important;');
		$front_style 			= implode(' ', $front_style);
		//Backcard Style
		$back_style = [];
		if( $back_background_color == ''){$back_background_color = $background_color;}
		if($show_image_in_back == 'on'){
			array_push($back_style, 'background-image: url('.$back_background_image .');');
			array_push($back_style, 'background-size: '.$back_background_image_size .';');
			array_push($back_style, 'background-position: '.$back_background_image_position.';');
			array_push($back_style, 'background-repeat: '.$back_background_image_repeat.';');
			array_push($back_style, 'background-blend-mode: '.$back_background_image_blend.';');
			array_push($back_style, 'background-color: '.$back_background_color . '!important;');
		} 
		else {
			array_push($back_style, 'background-color: '.$back_background_color . '!important;');
			array_push($back_style, 'background-image: none;');
		}
		$back_style = implode(' ', $back_style);
		// Backcard Button Style 
		$button_output ='';
		$blank_btn_txt_cls = (trim( $button_text_back ) == '')? 'blank_btn_txt_cls' : '';
 		if ( 'on' === $display_button_back ) {
			$button = $this->render_button( array(
				'button_classname' => array('back_btn' , $blank_btn_txt_cls),
				'button_custom'    => $button_custom,
				'button_rel'       => $button_rel,
				'button_text'      => $button_text_back,
				'button_url'       => esc_url( $button_url_back ),
				'custom_icon'      => $custom_icon,
				'has_wrapper'      => false,
				'url_new_window'   => $open_new_window_back,
			) );			
			$button_output = ( '' !== trim( $button_url_back ) ) ? sprintf(
				'<div class="et_pb_button_module_wrapper et_pb_button_%2$s_wrapper ">
					%1$s
				</div>',
				$button,
				$this->render_count()
			) : '';	
		}
		$xy_flank_background_color = $back_background_color;
 		$flip_3d_xflank = '';$flip_3d_yflank='';
		$b3m_flipcard_3d_1 = $b3m_flipcard_3d_2_start = $b3m_flipcard_3d_2_end =  $get_flip_animation_speed = '';
		// start --- 3D Animation mode Enable 
 		if ('on' === $use_3d_boxed_mode ){
 			if( $disable_flip_button == 'off'){
 				if ('3d_boxed_tilt' === $select_3d_boxed_mode ){
					$flip_main_class .= $flip_direction_option ? sprintf('b3m_flipcard_3d b3m_flipcard_3d_cube b3m_flipcard_direction%1$s',$flip_direction_option) : '';	
				}
				if( '3d_boxed_flip' === $select_3d_boxed_mode ){
					if ($flip_direction_option === '_e' || $flip_direction_option === '_w') {
						$flip_main_class .= $flip_direction_option ? sprintf('b3m_flipcard_3d b3m_flipcard_3d_cube_flip b3m_flipcard_direction%1$s',$flip_direction_option) : '';	
			 			$flip_3d_yflank = $back_background_color ? sprintf('<div class="b3m_flipbox_3d_yflank" style="background-color:%1$s;"></div>',$xy_flank_background_color) :'<div class="b3m_flipbox_3d_yflank" style="background-color:#fafafa;"></div>';

		 			}elseif ($flip_direction_option === '_n' || $flip_direction_option === '_s' ) {
		 				$flip_main_class .= $flip_direction_option ? sprintf('b3m_flipcard_3d b3m_flipcard_3d_cube_flip b3m_flipcard_direction%1$s',$flip_direction_option) : '';	
			 			$flip_3d_xflank = $back_background_color ? sprintf('<div class="b3m_flipbox_3d_xflank" style="background-color:%1$s;"></div>',$xy_flank_background_color) :'<div class="b3m_flipbox_3d_xflank" style="background-color:#fafafa;"></div>';	
		 			} else {
		 				$flip_main_class .= $flip_direction_option ? sprintf('b3m_flipcard_3d b3m_flipcard_3d_cube_flip cross_direction b3m_flipcard_direction%1$s',$flip_direction_option) : '';	
			 			$flip_3d_yflank = $back_background_color ? sprintf('<div class="b3m_flipbox_3d_yflank" style="background-color:%1$s;"></div>',$xy_flank_background_color) : '<div class="b3m_flipbox_3d_yflank" style="background-color:#fafafa;"></div>';	
			 			$flip_3d_xflank = $back_background_color ? sprintf('<div class="b3m_flipbox_3d_xflank" style="background-color:%1$s;"></div>',$xy_flank_background_color) : '<div class="b3m_flipbox_3d_xflank" style="background-color:#fafafa;"></div>';	
		 			}
				}
				if( '3d_boxed_flip_coveropen' === $select_3d_boxed_mode ){
					$flip_main_class .= $flip_direction_option ? sprintf('b3m_flipcard_3d b3m_flipcard_3d_cube_coveropen b3m_flipcard_direction%1$s',$flip_direction_option) : '';	
				}		
				$get_flip_animation_speed = 'transition: all  '.$flip_animation_speed.'s '.$flip_transition_option.' 0s';
 			}else{
 				if ('3d_boxed_tilt' === $select_3d_boxed_mode ){$flip_main_class .='b3m_flipcard_3d b3m_flipcard_3d_cube';	}
				if( '3d_boxed_flip' === $select_3d_boxed_mode ){$flip_main_class .='b3m_flipcard_3d b3m_flipcard_3d_cube_flip';}	
				if( '3d_boxed_flip_coveropen' === $select_3d_boxed_mode ){$flip_main_class .='b3m_flipcard_3d b3m_flipcard_3d_cube_coveropen';}		
				$get_flip_animation_speed = 'transition: all  '.$flip_animation_speed.'s '.$flip_transition_option.' 0s';
 			}
			// End -- 3D Animation mode Eanable
		}else{  
		// Start --- 2D animation effect 
			if( $disable_flip_button == 'off'){
				$flip_main_class .= $flip_direction_option ? sprintf('b3m_flipcard_3d b3m_flipcard_2d_animation_cardflip direction_%1$s',$flip_direction_option) : '';	
				$get_flip_animation_speed = 'transition: all  '.$flip_animation_speed.'s '.$flip_transition_option.' 0s';
			}else{
				$flip_main_class .='b3m_flipcard_3d b3m_flipcard_2d_animation_cardflip';
				$get_flip_animation_speed = 'transition: all  '.$flip_animation_speed.'s '.$flip_transition_option.' 0s';
			}
		 // End --- 2D animation effect 
		}
		$b3m_flipcard_3d_3_start = "";$b3m_flipcard_3d_3_end = "";$b3m_flipcard_3d_1 = 'b3m_flipcard_3d_1 ';$b3m_flipcard_3d_2_start = "<div class='b3m_flipcard_3d_2' >";$b3m_flipcard_3d_2_end  = "</div>";
		if (('on' == $use_3d_boxed_mode ) && ('3d_boxed_flip' == $select_3d_boxed_mode )){
			$b3m_flipcard_3d_3_start = "<div class='b3m_flipcard_3d_3' >";
			$b3m_flipcard_3d_3_end = "</div>";
		}
		/*if ('on' !== $use_3d_boxed_mode ){
			$get_flip_direction_option = ($flip_direction_option) ? $flip_direction_option : 'rtl';
		}*/
		// JS
		$flip_animation_speed_ms = $flip_animation_speed *1000;
		$ranclass = ET_Builder_Element::get_module_order_class( $render_slug );
 		$tilt_animation_js = '';
 		if ($use_3d_tilt_on_backcard === 'on'){
 			$flip_main_class .= ' b3m_flip_blurb_tilt ';	
 		}
 		// start---hover animation with tilt effect condition 
	 	if($disable_flip_button == 'on'){	
			if (($select_hover_animation == 'slideUp')|| ($select_hover_animation == 'slideDown')|| ($select_hover_animation == 'slideLeft')|| ($select_hover_animation == 'slideRight')|| ($select_hover_animation == 'rotate') ){
				$get_flip_animation_speed = '';
				$tilt_animation_js .= '<script>
				jQuery( ".'.$ranclass.' .b3m_flipcard_3d .et_pb_blurb_content").css("box-shadow","none");
			 	jQuery( ".'.$ranclass.' .b3m_flipcard_3d .et_pb_blurb_content_back").css("box-shadow","none");
			 	jQuery(document).ready(function() {
				setTimeout(function () {	
					jQuery( ".'.$ranclass.' .b3m_flipcard_3d .b3m_flipcard_3d_2").css("border-radius","'.$front_border_radius.'");
					jQuery( ".'.$ranclass.' .b3m_flipcard_3d .b3m_flipcard_3d_2").css("box-shadow","'.$front_card_boxshadow.'");
					jQuery( ".'.$ranclass.' .b3m_flipcard_3d .b3m_flipcard_3d_2").css("transition","box-shadow 0.5s linear 0s");
					},1000);
				});
				jQuery( ".'.$ranclass.' .b3m_flipcard_3d" )
					.on( "mouseenter", function() {
						jQuery( ".'.$ranclass.' .b3m_flipcard_3d .et_pb_blurb_content , .'.$ranclass.' .b3m_flipcard_3d .et_pb_blurb_content_back").css("transition","all '.$flip_animation_speed.'s '.$flip_transition_option.' 0s ");
							jQuery(this).addClass("hover").removeClass("b3m_hover");
							jQuery(this).find(".b3m_flipcard_3d_2").css("transition","box-shadow '.$flip_animation_speed.'s linear 0s ");
							jQuery(this).find(".b3m_flipcard_3d_2").css("border-radius","'.$back_border_radius.'");
							jQuery(this).find(".b3m_flipcard_3d_2").css("box-shadow","'.$back_card_boxshadow.'");';
							if ($use_3d_tilt_on_backcard === 'on'){
								$tilt_animation_js .= 'jQuery(".'.$ranclass.' .b3m_flip_blurb_tilt.hover").tilt({maxTilt: '.$tilt_animation_max_tilt.',perspective: '.$tilt_animation_perspective.',	easing: "cubic-bezier(.03,.98,.52,.99)",speed: '.($tilt_animation_speed*1000).',transition: true});';
							}
			$tilt_animation_js .= '	})
			       .on( "mouseleave", function() {
							jQuery(this).removeClass("hover").addClass("b3m_hover");
							jQuery(".'.$ranclass.' .b3m_flipcard_3d").find(".b3m_flipcard_3d_2").css("transition","box-shadow '.$flip_animation_speed.'s linear 0s ");
							jQuery( ".'.$ranclass.' .b3m_flipcard_3d .b3m_flipcard_3d_2").css("border-radius","'.$front_border_radius.'");
							jQuery(".'.$ranclass.' .b3m_flipcard_3d").find(".b3m_flipcard_3d_2").css("box-shadow","'.$front_card_boxshadow.'");
					});
					</script>';
		 	}else{
		 		$tilt_animation_js .= '<script> 
				jQuery( ".'.$ranclass.' .b3m_flipcard_3d" )
				.on( "mouseenter", function() {
		 			jQuery( ".'.$ranclass.' .b3m_flipcard_3d .et_pb_blurb_content , .'.$ranclass.' .b3m_flipcard_3d .et_pb_blurb_content_back").css("transition","all '.$flip_animation_speed.'s '.$flip_transition_option.' 0s ");
					jQuery(this).addClass("hover").removeClass("b3m_hover");
					jQuery(this).find(".et_pb_blurb_content").css("box-shadow","none");';
					if ($use_3d_tilt_on_backcard === 'on'){
						$tilt_animation_js .= 'jQuery(".'.$ranclass.' .b3m_flip_blurb_tilt.hover").tilt({
								maxTilt: '.$tilt_animation_max_tilt.',
								perspective: '.$tilt_animation_perspective.',	
								easing: "cubic-bezier(.03,.98,.52,.99)",
								speed: '.($tilt_animation_speed*1000).',
								transition: true
	  						});';
					}
			$tilt_animation_js .= '	})
				.on( "mouseleave", function() {
					jQuery(this).removeClass("hover").addClass("b3m_hover");
					jQuery(this).find(".et_pb_blurb_content").css("box-shadow","'.$front_card_boxshadow.'");
				});</script> ';
		 	}
			 // End --- hover animation with tilt effect condition 
	   } else {
			$tilt_animation_js .= '<script> 
				jQuery( ".'.$ranclass.' .b3m_flipcard_3d" )
				.on( "mouseenter", function() {
									jQuery(".'.$ranclass.' .b3m_flipcard_3d .b3m_flip_blurb_flipper").css("transition" , "all  '.$flip_animation_speed.'s '.$flip_transition_option.' 0s");

					jQuery(this).addClass("hover").removeClass("b3m_hover");';
					if ($use_3d_tilt_on_backcard === 'on'){
						$tilt_animation_js .= 'jQuery(".'.$ranclass.' .b3m_flip_blurb_tilt.hover").tilt({maxTilt: '.$tilt_animation_max_tilt.',perspective: '.$tilt_animation_perspective.',easing: "cubic-bezier(.03,.98,.52,.99)",speed: '.($tilt_animation_speed*1000).',transition: true});';
					}
			$tilt_animation_js .= '})
				.on( "mouseleave", function() {jQuery(this).removeClass("hover").addClass("b3m_hover");});</script> ';
		}		

		$hover_animation_class = '';
		$frontContentDiv = ($this->content == '' || $content_back_new == '') ? 'blub-content-display' : '';
		if ($disable_flip_button == 'on'){
			($select_hover_animation == 'fadeInOut')	? $flip_main_class .= ' b3m_fadeinout ' : '';
			($select_hover_animation == 'zoomIn')		? $flip_main_class .= ' b3m_zoomin ' : '';
			($select_hover_animation == 'zoomOut')		? $flip_main_class .= ' b3m_zoomout ' : '';
			($select_hover_animation == 'slideUp')		? $flip_main_class .= ' b3m_slideup ' : '';
			($select_hover_animation == 'slideDown')	? $flip_main_class .= ' b3m_slidedown ' : '';
			($select_hover_animation == 'slideLeft')	? $flip_main_class .= ' b3m_slideleft ' : '';
			($select_hover_animation == 'slideRight')	? $flip_main_class .= ' b3m_slideright ' : '';
			($select_hover_animation == 'rotate')		? $flip_main_class .= ' b3m_rotate ' : '';
		}
		
		$flip_front_main_class .= '' !== $video_background ? ' et_pb_section_video et_pb_preload ' : '';
		$flip_front_main_class .= '' !== $parallax_image_background ? ' et_pb_section_parallax' : '';
		$flip_front_main_class .= sprintf( ' et_pb_blurb_position_%1$s ', esc_attr( $icon_placement ) );
		$output = sprintf(
			'<div class="b3m_flip_blurb_inner %24$s et_pb_blurb b3m_hover">
				<div class="b3m_flip_blurb_flipper %23$s %15$s " style="%14$s">
					%16$s
					%21$s
					<div class="et_pb_blurb_content et_pb_blurb_content_front front_background_color %25$s" style="%9$s">					
					%5$s
					%4$s
						<div class="et_pb_blurb_inner_content">
							%2$s
							<div class="et_pb_blurb_container">
								%3$s
								<div class="et_pb_blurb_description front_description %12$s" >
								 %1$s
								</div><!-- .et_pb_blurb_description -->
							</div>
						</div>					
					</div> <!-- .et_pb_blurb_content -->
					<div class="  et_pb_blurb_content_back et_pb_blurb_content_back_side et_pb_blurb%11$s " style="%10$s" >					
						<div class="et_pb_blurb_inner_content">
							%8$s
							<div class="et_pb_blurb_container" >
								 %7$s
								<div class="et_pb_blurb_description back_description %12$s">
									<p>%6$s</p>
								</div><!-- .et_pb_blurb_description -->
								%13$s
							</div>
					    </div>					
					</div><!-- et_pb_blurb_content_back -->	
					%18$s
					%20$s
					%22$s
					%17$s
				</div> <!-- Filpper -->				
			</div> <!-- .et_pb_blurb -->
			%19$s ',
			( $this->content ) ? $this->content  : '', //1
			$image, //2
			$title, //3
			$video_background, //4
			$parallax_image_background,//5
			($content_back_new) ? $content_back_new : '', //6 Back Content
			$back_title,	//7
			$back_image,	//8
			$front_style,	//9
			$back_style,	//10
			sprintf( ' et_pb_blurb_position_%1$s', esc_attr( $back_icon_placement ) ), // 11
			$frontContentDiv ,    					//12
			$button_output,						   //13
			$get_flip_animation_speed ,           //14
			$b3m_flipcard_3d_1,                 //15
			$b3m_flipcard_3d_2_start,          //16
			$b3m_flipcard_3d_2_end ,          //17
			$flip_3d_yflank ,                //18
			$tilt_animation_js ,           //19
			$flip_3d_xflank  ,            //20
			$b3m_flipcard_3d_3_start,    //21
			$b3m_flipcard_3d_3_end ,    //22
			$custom_easeOut_class,     //23
			$flip_main_class, //24
			$flip_front_main_class //25
		);
		return $output;
	}
	
	function flip_icon_css( $render_slug ){
		$use_icon_font_size    				= $this->props['use_icon_font_size'];
		$icon_font_size        				= $this->props['icon_font_size'];
		$icon_font_size_tablet 				= isset($this->props['icon_font_size_tablet']) ? $this->props['icon_font_size_tablet'] : '' ;
		$icon_font_size_phone  				= isset($this->props['icon_font_size_phone']) ? $this->props['icon_font_size_phone'] : '' ;
		$icon_font_size_last_edited  		= isset($this->props['icon_font_size_last_edited']) ? $this->props['icon_font_size_last_edited'] : '' ;

		if ( 'off' !== $use_icon_font_size ) {
			$font_size_responsive_active = et_pb_get_responsive_status( $icon_font_size_last_edited );
			$font_size_values = array(
				'desktop' => $icon_font_size,
				'tablet'  => $font_size_responsive_active ? $icon_font_size_tablet : '',
				'phone'   => $font_size_responsive_active ? $icon_font_size_phone : '',
			);
			et_pb_generate_responsive_css( $font_size_values, '%%order_class%% .et_pb_blurb_content .et-pb-icon', 'font-size', $render_slug );
		}
		
		$use_back_icon_font_size    		= $this->props['use_back_icon_font_size'];
		$back_icon_font_size        		= $this->props['back_icon_font_size'];
		$back_icon_font_size_tablet 		= isset($this->props['back_icon_font_size_tablet']) ? $this->props['back_icon_font_size_tablet'] : '' ;
		$back_icon_font_size_phone  		= isset($this->props['back_icon_font_size_phone']) ? $this->props['back_icon_font_size_phone'] : '' ;
		$back_icon_font_size_last_edited    = isset($this->props['back_icon_font_size_last_edited']) ? $this->props['back_icon_font_size_last_edited'] : '' ;


		if ( 'off' !== $use_back_icon_font_size ) {
			$font_size_responsive_active = et_pb_get_responsive_status( $back_icon_font_size_last_edited );
			$back_font_size_values = array(
				'desktop' => $back_icon_font_size,
				'tablet'  => $font_size_responsive_active ? $back_icon_font_size_tablet : '',
				'phone'   => $font_size_responsive_active ? $back_icon_font_size_phone : '',
			);
			et_pb_generate_responsive_css( $back_font_size_values, '%%order_class%% .et_pb_blurb_content_back .et-pb-icon', 'font-size', $render_slug );
		}
		
	}
	function flip_width_css( $render_slug ){
	
		$image_max_width             		= $this->props['image_max_width'];
		$image_max_width_tablet     		= isset($this->props['image_max_width_tablet']) ? $this->props['image_max_width_tablet'] : '' ;
		$image_max_width_phone      	 	= isset($this->props['image_max_width_phone']) ? $this->props['image_max_width_phone'] : '' ;
		$image_max_width_last_edited 		= isset($this->props['image_max_width_last_edited']) ? $this->props['image_max_width_last_edited'] : '' ;
		$content_max_width             		= $this->props['content_max_width'];
		$content_max_width_tablet      		= isset($this->props['content_max_width_tablet']) ? $this->props['content_max_width_tablet'] : '' ;
		$content_max_width_phone       		= isset($this->props['content_max_width_phone']) ? $this->props['content_max_width_phone'] : '' ;
		$content_max_width_last_edited 		= isset($this->props['content_max_width_last_edited']) ? $this->props['content_max_width_last_edited'] : '' ;
		
		$image                 				= $this->props['front_image'];
		$icon_placement        				= $this->props['icon_placement'];
		$image_pathinfo = pathinfo( $image );
		$is_image_svg   = isset( $image_pathinfo['extension'] ) ? 'svg' === $image_pathinfo['extension'] : false;
		if ( '' !== $image_max_width_tablet || '' !== $image_max_width_phone || '' !== $image_max_width || $is_image_svg ) {
			$is_size_px = false;
			// If size is given in px, we want to override parent width
			if (
				false !== strpos( $image_max_width, 'px' ) ||
				false !== strpos( $image_max_width_tablet, 'px' ) ||
				false !== strpos( $image_max_width_phone, 'px' )
			) {
				$is_size_px = true;
			}
			// SVG image overwrite. SVG image needs its value to be explicit
			if ( '' === $image_max_width && $is_image_svg ) {
				$image_max_width = '100%';
			}
			$image_max_width_selector = $icon_placement === 'top' && $is_image_svg ? '%%order_class%% .et_pb_main_blurb_image' : '%%order_class%% .et_pb_main_blurb_image .et_pb_image_wrap';
 			$image_max_width_property = ( $is_image_svg || $is_size_px ) ? 'width' : 'max-width';
			$image_max_width_responsive_active = et_pb_get_responsive_status( $image_max_width_last_edited );
 			$image_max_width_values = array(
				'desktop' => $image_max_width,
				'tablet'  => $image_max_width_responsive_active ? $image_max_width_tablet : '',
				'phone'   => $image_max_width_responsive_active ? $image_max_width_phone : '',
			);
			et_pb_generate_responsive_css( $image_max_width_values, $image_max_width_selector, $image_max_width_property, $render_slug );
		}
		if ( '' !== $content_max_width_tablet || '' !== $content_max_width_phone || '' !== $content_max_width ) {
			$content_max_width_responsive_active = et_pb_get_responsive_status( $content_max_width_last_edited );
			$content_max_width_values = array(
				'desktop' => $content_max_width,
				'tablet'  => $content_max_width_responsive_active ? $content_max_width_tablet : '',
				'phone'   => $content_max_width_responsive_active ? $content_max_width_phone : '',
			);
			et_pb_generate_responsive_css( $content_max_width_values, '%%order_class%% .et_pb_blurb_description ', 'max-width', $render_slug );
		}
	
	}
	
	public function process_box_shadow( $function_name ) {
		$boxShadow = ET_Builder_Module_Fields_Factory::get( 'BoxShadow' );
		$selector = sprintf( '.%1$s', self::get_module_order_class( $function_name ) );
		if (isset( $this->shortcode_atts['use_icon'] ) &&  $this->shortcode_atts['use_icon'] !== 'on') {
			self::set_style( $function_name, $boxShadow->get_style(
				$selector . ' .et_pb_blurb_content .et_pb_main_blurb_image .et_pb_image_wrap',
				$this->shortcode_atts,
				array( 'suffix' => '_image' )
			) );
		}
		if (isset( $this->shortcode_atts['use_back_icon'] ) && $this->shortcode_atts['use_back_icon'] !== 'on') {
			self::set_style( $function_name, $boxShadow->get_style(
				$selector . ' .et_pb_blurb_content_back .et_pb_main_blurb_image .et_pb_image_wrap',
				$this->shortcode_atts,
				array( 'suffix' => '_back_image' )
			) );
		}
		$selector = sprintf( '.%1$s', self::get_module_order_class( $function_name ) );
		self::set_style( $function_name, $boxShadow->get_style(
			$selector . ' .et_pb_blurb_content_back',
			$this->shortcode_atts,
			array( 'suffix' => '_back_box' )
		) );
		$selector = sprintf( '.%1$s', self::get_module_order_class( $function_name ) );
		self::set_style( $function_name, $boxShadow->get_style(
			$selector . ' .et_pb_blurb_content_front',
			$this->shortcode_atts,
			array( 'suffix' => '_front_box' )
		) );
	}
	// protected function _add_additional_border_fields() {
	// 	parent::_add_additional_border_fields();
	// 	$this->add_border_field('Back Box', 'back_box','advanced', 'back_box_style' ,
	// 		$this->main_css_element . " .et_pb_blurb_content_back");
	// 	$this->add_border_field('Front Box', 'front_box','advanced', 'front_box_style' ,
	// 		$this->main_css_element . " .et_pb_blurb_content_front");
	// }
	// protected function add_border_field($label, $suffix, $tab_slug, $toggle_slug, $class, $dep = null, $depend_on = null){
	// 	$options = array(
	// 		'suffix'          => "_{$suffix}",
	// 		'label_prefix'    => esc_html__( $label , 'b3m' ),
	// 		'tab_slug'        => $tab_slug,
	// 		'toggle_slug'     => $toggle_slug,
	// 	);
	// 	if($dep && $depend_on){
	// 		$options['depends_show_if'] = $dep;
	// 		$options['depends_to'] = $depend_on;

	// 	}
	// 	$this->_additional_fields_options = array_merge(
	// 		$this->_additional_fields_options,
	// 		ET_Builder_Module_Fields_Factory::get( 'Border' )->get_fields( $options )
	// 	);
	// 	$this->advanced_options["border_{$suffix}"]["border_styles_{$suffix}"] = $this->_additional_fields_options["border_styles_{$suffix}"];
	// 	$this->advanced_options["border_{$suffix}"]["border_radii_{$suffix}"] = $this->_additional_fields_options["border_radii_{$suffix}"];
	// 	$this->advanced_options["border_{$suffix}"]['css'] = array(
	// 		'main' => array(
	// 			'border_radii' => $class,
	// 			'border_styles' => $class
	// 		)
	// 	);
	// }

	// function process_advanced_border_options( $function_name ) {
	// 	parent::process_advanced_border_options( $function_name );
	// 	if ( isset( $this->props['use_icon'] ) && $this->props['use_icon'] == "off" ) {
	// 		$this->process_border_options('image', $function_name);
	// 	}
	// 	// Process Back Image border options
	// 	if ( isset( $this->props['use_back_icon'] ) && $this->props['use_back_icon'] == "off" ) {
	// 		$this->process_border_options('back_image', $function_name);
	// 	}
	// 	$this->process_border_options('front_box', $function_name);
	// 	$this->process_border_options('back_box', $function_name);
	// }

	// public function process_border_options($suffix, $function_name){
	// 	$border_field = ET_Builder_Module_Fields_Factory::get( 'Border' );
	// 	$css_selector = ! empty( $this->advanced_options["border_{$suffix}"]['css']['main']['border_radii'] ) ? $this->advanced_options["border_{$suffix}"]['css']['main']['border_radii'] : $this->main_css_element;
	// 	self::set_style( $function_name, array(
	// 		'selector'    => $css_selector,
	// 		'declaration' => $border_field->get_radii_style( $this->props, $this->advanced_options, "_{$suffix}" ),
	// 		'priority'    => $this->_style_priority,
	// 	) );
	// 	$css_selector = ! empty( $this->advanced_options["border_{$suffix}"]['css']['main']['border_styles'] ) ? $this->advanced_options["border_{$suffix}"]['css']['main']['border_styles'] : $this->main_css_element;
	// 	self::set_style( $function_name, array(
	// 		'selector'    => $css_selector,
	// 		'declaration' => $border_field->get_borders_style( $this->props, $this->advanced_options, "_{$suffix}" ),
	// 		'priority'    => $this->_style_priority,
	// 	) );
	// }

	function process_advanced_background_options( $function_name ) {
		parent::process_advanced_background_options( $function_name );
	}

}
new B3M_Divi_FLip_Cards;