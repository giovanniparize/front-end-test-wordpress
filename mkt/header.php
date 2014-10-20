<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="robots" content="all" />
<meta name="keywords" content="Website" />
<meta name="description" content="Website" />

<title><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />

<!-- Menu effects -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>

<?php wp_head(); ?>
</head>

<body>
<header>
	<div class="container_12">
    	<section class="logo">
        	<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="MKT Virtual" /></a>
        </section>
        
        <nav class="menu cl-effect-4">
        	<?php 
				wp_nav_menu (
					array (
						'menu' => 'navegacao-principal',
						'container' => 'false'
					 )
				); 
			?>
        </nav>
    </div>
</header>