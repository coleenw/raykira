<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<title><?php echo wp_title('|'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script> -->
</head>	
<body <?php body_class(); ?>>
			
	<header <?php section_bg('header_section_background'); ?>>
	    
	    <nav>
	        <div class="row row-middle">
	            <div class="columns-3">
	                <a href="#" id="logo">
	                    Ray + Kira
	                </a>
	            </div>
	            <div class="columns-9">
	                <ul class="main-menu">
	                    <li>
	                        <a href="#" data-scroll-to="about-us">About Us</a>
	                    </li>
	                    <li>
	                        <a href="#" data-scroll-to="event">Event</a>
	                    </li>
	                    <!-- <li>
	                        <a href="#" data-scroll-to="dining">Dining</a>
	                    </li> -->
	                    <li>
	                        <a href="#" data-scroll-to="friends">Friends</a>
	                    </li>
	                    <li>
	                        <a href="#" data-scroll-to="rsvp">RSVP</a>
	                    </li>
	                </ul> 
	            </div>
	        </div>
	    </nav>

	    <div class="row row-middle row-center header-content">
	        <div class="columns-12 text-center">
	            <h1>Ray + Kira</h1>
	        </div>
	    </div>

	</header>