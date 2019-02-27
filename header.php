
<!DOCTYPE html>
<html <?php language_attributes();?> > 
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content='Plantilla Pardo'/>

    <title><?php bloginfo('name')?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"  />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imgs/favicon.png"  />
    <?php wp_head(); ?>
</head>

<body>


<header>
<nav class="menu" style="padding-top:40px";>
      <div class="titulo_principal">
         <a class="navbar-brand" ><?php bloginfo('name'); ?></a>
      </div>
      <div>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
            
</nav>

</header>