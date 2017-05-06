<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'footer' => __( 'Footer Menu' )
     )
   );
 }
add_action( 'init', 'register_my_menus' );

$sidebar_args = array(
		'id' => 'left-sidebar',
		'name' => 'Main Sidebar',
		);
		
register_sidebar( $sidebar_args );

function my_cptui_featured_image_support() {
	$cptui_post_types = cptui_get_post_type_slugs();
	add_theme_support( 'post-thumbnails', $cptui_post_types );
}
add_action( 'after_setup_theme', 'my_cptui_featured_image_support' );

function left_footer_widget() {
	register_sidebar(array(
		'name' => 'Left Footer',
		'id' => 'widget-footer-area-1',
		'before_widget' => '<article>',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));}

add_action('widgets_init', 'left_footer_widget');

function middle_footer_widget() {
	register_sidebar(array(
		'name' => 'Middle Footer',
		'id' => 'widget-footer-area-2',
		'before_widget' => '<article>',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));}

add_action('widgets_init', 'middle_footer_widget');

function right_footer_widget() {
	register_sidebar(array(
		'name' => 'Right Footer',
		'id' => 'widget-footer-area-3',
		'before_widget' => '<article>',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));}

add_action('widgets_init', 'right_footer_widget');


function getCustomField($theField) {
	global $post;
	$block = get_post_meta($post->ID, $theField);
	if($block) {
		foreach(($block) as $blocks){
			echo $block;
		}
	}
}

function slider_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'slider_section',
        array(
            'title' => 'Slider Section',
            'description' => 'This is a settings slider section.',
            'priority' => 35,
        )
    );
	
	$wp_customize->add_setting(
		'slider_title',
		array(
			'transport' => 'postMessage', 
		)
	);
		
	$wp_customize->add_control(
		'slider_title',
		array(
			'label' => 'Slider title',
			'section' => 'slider_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'slider_desc'
	);	
	
	$wp_customize->add_control(
    'slider_desc',
		array(
			'label' => 'Slider description',
			'section' => 'slider_section',
			'type' => 'textarea',
		)
	);
	
	$wp_customize->add_setting(
		'slider_image'
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'slider-image-upload',
			array(
				'label' => 'Image Upload',
				'section' => 'slider_section',
				'settings' => 'slider_image'
			)
		)
	);
	
	$wp_customize->add_setting(
		'slider_first_parameter'
	);	
	
	$wp_customize->add_control(
    'slider_first_parameter',
		array(
			'label' => 'Slider First Parameter',
			'section' => 'slider_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'slider_second_parameter'
	);	
	
	$wp_customize->add_control(
    'slider_second_parameter',
		array(
			'label' => 'Slider Second Parameter',
			'section' => 'slider_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'slider_third_parameter'
	);	
	
	$wp_customize->add_control(
    'slider_third_parameter',
		array(
			'label' => 'Slider Third Parameter',
			'section' => 'slider_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'slider_button'
	);	
	
	$wp_customize->add_control(
    'slider_button',
		array(
			'label' => 'Slider Button',
			'section' => 'slider_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'slider_button_url'
	);	
	
	$wp_customize->add_control(
    'slider_button_url',
		array(
			'label' => 'Slider Button Url',
			'section' => 'slider_section',
			'type' => 'text',
		)
	);	
	
	$wp_customize->add_setting(
		'hide_slider'
	);
	
	$wp_customize->add_control(
		'hide_slider',
		array(
			'type' => 'checkbox',
			'label' => 'Hide slider section',
			'section' => 'slider_section',
		)
	);
}
add_action( 'customize_register', 'slider_customizer' );

function get_start_now_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'get_start_now_section',
        array(
            'title' => 'Get Start Now',
            'description' => 'This is a settings for get start now section.',
            'priority' => 45,
        )
    );
	
	$wp_customize->add_setting(
		'get_start_now_moto'
	);
		
	$wp_customize->add_control(
		'get_start_now_moto',
		array(
			'label' => 'Section Moto',
			'section' => 'get_start_now_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'get_start_now_button'
	);
		
	$wp_customize->add_control(
		'get_start_now_button',
		array(
			'label' => 'Section Button',
			'section' => 'get_start_now_section',
			'type' => 'text',
		)
	);
	
		$wp_customize->add_setting(
		'hide_get_start_now_box'
	);
	
	$wp_customize->add_control(
		'hide_get_start_now_box',
		array(
			'type' => 'checkbox',
			'label' => 'Hide box section',
			'section' => 'get_start_now_section',
		)
	);
	
	$wp_customize->add_setting(
		'get_start_now_background_image'
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'get-start-now-img-upload',
			array(
				'label' => 'Background image (1600px x 174px)',
				'section' => 'get_start_now_section',
				'settings' => 'get_start_now_background_image'
			)
		)
	);

}

add_action( 'customize_register', 'get_start_now_customizer' );

function subscribe_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'subscribe_section',
        array(
            'title' => 'Subscribe now',
            'description' => 'This is a settings for subscribe now section.',
            'priority' => 55,
        )
    );
	
	$wp_customize->add_setting(
		'subscribe_moto'
	);
		
	$wp_customize->add_control(
		'subscribe_moto',
		array(
			'label' => 'Section Moto',
			'section' => 'subscribe_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'subscribe_button'
	);
		
	$wp_customize->add_control(
		'subscribe_button',
		array(
			'label' => 'Section Button',
			'section' => 'subscribe_section',
			'type' => 'text',
		)
	);
	
	$wp_customize->add_setting(
		'hide_subscribe_box'
	);
	
	$wp_customize->add_control(
		'hide_subscribe_box',
		array(
			'type' => 'checkbox',
			'label' => 'Hide box section',
			'section' => 'subscribe_section',
		)
	);
	
	$wp_customize->add_setting(
		'subscribe_background_image'
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'subscribe_img_upload',
			array(
				'label' => 'Background image (1600px x 180px)',
				'section' => 'subscribe_section',
				'settings' => 'subscribe_background_image'
			)
		)
	);
}

add_action( 'customize_register', 'subscribe_customizer' );

function color_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'color_section',
        array(
            'title' => 'Colors',
            'description' => 'This is a settings colors in web site.',
            'priority' => 65,
        )
    );	
	
	$wp_customize->add_setting(
		'main_color',
		array(
			'default' => '#26A65B',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport' => 'postMessage',
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'main_color',
			array(
				'label' => 'Main Color',
				'section' => 'color_section',
				'settings' => 'main_color',
			)
		)
	);
	
	$wp_customize->add_setting(
		'second_color',
		array(
			'default' => '#DEEFE5',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport' => 'postMessage',
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'second_color',
			array(
				'label' => 'Second Color',
				'section' => 'color_section',
				'settings' => 'second_color',
			)
		)
	);

if ( $wp_customize->is_preview() ) {
    add_action( 'wp_footer', 'example_customize_preview', 21);
}	
}

add_action( 'customize_register', 'color_customizer' );









function example_customize_preview() {
    ?>
    <script type="text/javascript">
        ( function( $ ) {
            wp.customize('main_color',function( value ) {
                value.bind(function(to) {
                    $('.header').css('background-color', to );
					$('.domain-check input[type=text]').css('background-color', to );
					$('.newsletter button').css('background-color', to );
					$('.social-media li i').css('background-color', to );
					$('.services article:hover span').css('background-color', to );
					$('.plans button:hover').css('background-color', to );
					$('.get-start-now-v2').css('background-color', to );
					$('.get-start-now-v3').css('background-color', to );
					$('.start-now').css('background-color', to );
					$('.subscribe-news').css('background-color', to );
					
					
					$('.services article span').css('border-color', to );
					$('.newsletter input').css('border-color', to );
					$('.plans button').css('border-color', to );
					
					$('header .menu nav ul li.current-menu-item a').css('color', to );
					$('.people-about-us article:hover span').css('color', to );
					$('.footer-menu article:hover h2').css('color', to );
					$('.footer-menu ul li a:hover').css('color', to );
					$('header .menu h1 a:hover').css('color', to );
					$('header .menu nav ul li a:hover').css('color', to );
                });
            });
			
			wp.customize('second_color',function( value ) {
                value.bind(function(to) {
					$('.people-about-us article:hover span').css('color', to );
					$('.domain-check').css('background-color', to );
                });
            });			
        } )( jQuery )
    </script>
    <?php
}  // End function example_customize_preview()














function domain_search_customizer( $wp_customize ){
	$wp_customize->add_section(
        'search_domain_section',
        array(
            'title' => 'Search Domain',
            'description' => 'This is a search domain section settings.',
            'priority' => 75,
        )
    );	

	$wp_customize->add_setting(
		'search_domain_title'
	);
	
	$wp_customize->add_control(
		'search_domain_title',
		array(
			'type' => 'text',
			'label' => 'Search domain title',
			'section' => 'search_domain_section',
		)
	);
	
	$wp_customize->add_setting(
		'search_domain_desc'
	);
	
	$wp_customize->add_control(
		'search_domain_desc',
		array(
			'type' => 'textarea',
			'label' => 'Search domain description',
			'section' => 'search_domain_section',
		)
	);
	
	$wp_customize->add_setting(
		'hide_search_section'
	);
	
	$wp_customize->add_control(
		'hide_search_section',
		array(
			'type' => 'checkbox',
			'label' => 'Hide search section',
			'section' => 'search_domain_section',
		)
	);	
	
	$wp_customize->add_setting(
		'search_domain_section_first_domain'
	);
	
	$wp_customize->add_control(
		'search_domain_section_first_domain',
		array(
			'type' => 'text',
			'label' => 'First domain',
			'section' => 'search_domain_section',
		)
	);
	
	$wp_customize->add_setting(
		'search_domain_section_second_domain'
	);
	
	$wp_customize->add_control(
		'search_domain_section_second_domain',
		array(
			'type' => 'text',
			'label' => 'Second domain',
			'section' => 'search_domain_section',
		)
	);		

	$wp_customize->add_setting(
		'search_domain_section_third_domain'
	);
	
	$wp_customize->add_control(
		'search_domain_section_third_domain',
		array(
			'type' => 'text',
			'label' => 'Third domain',
			'section' => 'search_domain_section',
		)
	);
	
	$wp_customize->add_setting(
		'search_domain_section_fourth_domain'
	);
	
	$wp_customize->add_control(
		'search_domain_section_fourth_domain',
		array(
			'type' => 'text',
			'label' => 'Fourth domain',
			'section' => 'search_domain_section',
		)
	);
	
	$wp_customize->add_setting(
		'search_domain_section_fifth_domain'
	);
	
	$wp_customize->add_control(
		'search_domain_section_fifth_domain',
		array(
			'type' => 'text',
			'label' => 'Fifth domain',
			'section' => 'search_domain_section',
		)
	);
	
	$wp_customize->add_setting(
		'search_domain_image'
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'img-upload',
			array(
				'label' => 'Bullet image (16px x 16px)',
				'section' => 'search_domain_section',
				'settings' => 'search_domain_image'
			)
		)
	);

	$wp_customize->add_setting(
		'search_domain_hover_image'
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'img-hover-upload',
			array(
				'label' => 'Bullet hover image (16px x 16px)',
				'section' => 'search_domain_section',
				'settings' => 'search_domain_hover_image'
			)
		)
	);	
}

add_action( 'customize_register', 'domain_search_customizer' );

function server_panel_customizer( $wp_customize ){	
	$wp_customize->add_section(
        'server_panel_section',
        array(
            'title' => 'Server Panel',
            'description' => 'This is a server panel section settings.',
            'priority' => 85,
        )
    );

	$wp_customize->add_setting(
		'server_panel_title',
		array(
			'default' => 'Here is your title',
		)
	);
	
	$wp_customize->add_control(
		'server_panel_title',
		array(
			'type' => 'text',
			'label' => 'Title',
			'section' => 'server_panel_section',
		)
	);	
	
	$wp_customize->add_setting(
		'server_panel_desc',
		array(
			'default' => 'Here go your description',
		)
	);
	
	$wp_customize->add_control(
		'server_panel_desc',
		array(
			'type' => 'textarea',
			'label' => 'Description',
			'section' => 'server_panel_section',
		)
	);
	
	$wp_customize->add_setting(
		'server_panel_button',
		array(
			'default' => 'get start now',
		)
	);
	
	$wp_customize->add_control(
		'server_panel_button',
		array(
			'type' => 'text',
			'label' => 'Button text',
			'section' => 'server_panel_section',
		)
	);	
	
	$wp_customize->add_setting(
		'server_panel_image'		
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'server-img-upload',
			array(
				'label' => 'Upload Image',
				'section' => 'server_panel_section',
				'settings' => 'server_panel_image'
			)
		)
	);	
}

add_action( 'customize_register', 'server_panel_customizer' );

function speed_panel_customizer( $wp_customize ){	
	$wp_customize->add_section(
        'speed_panel_section',
        array(
            'title' => 'Speed Panel',
            'description' => 'This is a speed panel section settings.',
            'priority' => 95,
        )
    );

	$wp_customize->add_setting(
		'speed_panel_title',
		array(
			'default' => 'Here is your title',
		)
	);
	
	$wp_customize->add_control(
		'speed_panel_title',
		array(
			'type' => 'text',
			'label' => 'Title',
			'section' => 'speed_panel_section',
		)
	);	
	
	$wp_customize->add_setting(
		'speed_panel_desc',
		array(
			'default' => 'Here go your description',
		)
	);
	
	$wp_customize->add_control(
		'speed_panel_desc',
		array(
			'type' => 'textarea',
			'label' => 'Description',
			'section' => 'speed_panel_section',
		)
	);
	
	$wp_customize->add_setting(
		'speed_panel_button',
		array(
			'default' => 'get start now',
		)
	);
	
	$wp_customize->add_control(
		'speed_panel_button',
		array(
			'type' => 'text',
			'label' => 'Button text',
			'section' => 'speed_panel_section',
		)
	);	
	
	$wp_customize->add_setting(
		'speed_panel_image'		
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'speed-img-upload',
			array(
				'label' => 'Upload Image',
				'section' => 'speed_panel_section',
				'settings' => 'speed_panel_image'
			)
		)
	);	
}

add_action( 'customize_register', 'speed_panel_customizer' );

function about_board_customizer( $wp_customize ){
	$wp_customize->add_section(
        'about_board_section',
        array(
            'title' => 'About board',
            'description' => 'This is a about board section settings.',
            'priority' => 105,
        )
    );

	$wp_customize->add_setting(
		'about_board_title',
		array(
			'default' => 'Here is your title',
			'transport' => 'postMessage',
		)
	);
	
	$wp_customize->add_control(
		'about_board_title',
		array(
			'type' => 'text',
			'label' => 'Title',
			'section' => 'about_board_section',
		)
	);	
	
	$wp_customize->add_setting(
		'about_board_desc',
		array(
			'default' => 'Here go your description',
			'transport' => 'postMessage',
		)
	);
	
	$wp_customize->add_control(
		'about_board_desc',
		array(
			'type' => 'textarea',
			'label' => 'Description',
			'section' => 'about_board_section',

		)
	);
	
	$wp_customize->add_setting(
		'about_board_image'		
	);	
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'about-board-img-upload',
			array(
				'label' => 'Upload Image',
				'section' => 'about_board_section',
				'settings' => 'about_board_image'
			)
		)
	);
}

add_action( 'customize_register', 'about_board_customizer' );
?>