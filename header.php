<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
	
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/header-footer.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/main-section-header.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/dist/owl.carousel.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/js-function.js"></script>
	
	<style>
		.header,
		.domain-check input[type=text],
		.newsletter button,
		.social-media li i,
		.services article:hover span,
		.plans button:hover{
			background-color: <?php echo get_theme_mod('main_color');  ?>;
		}
		.services article span,
		.newsletter input,
		.plans button{
			border: 1px solid <?php echo get_theme_mod('main_color');  ?>;
		}
		header .menu nav ul li.current-menu-item a,
		.people-about-us article:hover span,
		.footer-menu article:hover h2,
		.footer-menu ul li a:hover,
		header .menu h1 a:hover,
		header .menu nav ul li a:hover{
			color: <?php echo get_theme_mod('main_color');  ?>;
		}
		
		.domain-check {
			background-color: <?php echo get_theme_mod('second_color');  ?>;
		}
		.domain-check input[type=radio]:not(old) + label{
		    background: url("<?php echo get_theme_mod('search_domain_image');  ?>") no-repeat;	
		}
		
		.domain-check input[type=radio]:not(old):checked + label{
			background: url("<?php echo get_theme_mod('search_domain_hover_image');  ?>") no-repeat;
		}
		<?php if(get_theme_mod('get_start_now_background_image') != null){ ?>
		.start-now {
			background: url("<?php echo get_theme_mod('get_start_now_background_image');  ?>") no-repeat;
			background-size: cover;
		}
		<?php } ?>
		
		<?php if(get_theme_mod('subscribe_background_image') != null){ ?>
		.subscribe-news {
			background: url("<?php echo get_theme_mod('subscribe_background_image') ?>") no-repeat;
			background-size: cover;
		}
		<?php } ?>
		
		.start-now, .subscribe-news {
			background-color: <?php echo get_theme_mod('main_color');  ?>;
		}		
	</style>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="menu">
            <h1><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>

            <nav>
                <a class="small-screen-menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
                <ul>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </ul>
            </nav>
        </div>
    </header>