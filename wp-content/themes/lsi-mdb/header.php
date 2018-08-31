<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
	
	<!-- Ícone do Site -->
	<link rel="icon" type="image/png" href=<?php echo get_template_directory_uri() . '/img/icon-lsi-white.png'; ?> />
	<link rel="shortcut icon" type="image/png" href=<?php echo get_template_directory_uri() . '/img/icon-lsi-white.png'; ?> />
	
	<meta name="description" content="Laboratório de Sistemas de Informação" />
	<meta name="author" content="Nathaniel Lacerda" />
	<meta name="keywords" content="lsi, information systems, sistemas de informação, databases, ufcg, bootstrap, material design, html5, css3, responsive" />
	
    <?php wp_head(); ?>
</head> 
<body>

<header>
    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar lsi-color-bg">
        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href=<?php echo get_site_url()?> title="Página Inicial">
                	<img id="icon-lsi" src=<?php echo get_template_directory_uri() . "/img/icon-lsi-white.png" ?> >
                </a>
                <!--Links-->
                <?php
				if ( has_nav_menu( 'navbar' ) ) {
				  wp_nav_menu( array(
				  'menu'              => 'navbar',
				  'theme_location'    => 'navbar',
				  'depth'             => 2,
				  'menu_class'        => 'nav navbar-nav',
				  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				  'walker'            => new MDBBootstrapNavMenuWalker())
				  );
				} else echo "-"; ?>  
            </div>
            <!--/.Collapse content-->
        </div>
    </nav>
    <!--/.Navbar-->
</header>
