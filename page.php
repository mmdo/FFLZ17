<!DOCTYPE html> 
<html lang="de-DE">  
<head>  
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
</head>  
<body> 
	<div id="wrapper">
		<header role="banner" class="grid-container">
			<div class="grid-100">
				<?php get_header(); ?>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>					
				</nav>
			</div>
		</header>
		<div role="main" class="grid-container">
			<div class="grid-100">
				<!--<p><strong>Aktuelles:</strong></p>-->
				<!-- The loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_title( '<h2>' , '</h2>' ); ?>
				<div class="post_thumbnail">
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail(); // Thumbnail vorhanden
					}
					else {
					//echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" />';
					// Kein Thumbnail vorhanden.
					} ?>
				</div>
				<?php the_content( $more_link_text, $stripteaser ); ?>
				<?php the_content(); ?> 
				<?php endwhile; else: ?>
				<p><?php _e('Momentan sind keine Beitr&auml;ge vorhanden.'); ?></p>
				<?php endif; ?>
				<!-- The loop end -->
			</div>
			<div class="clear"></div>
			<div class="grid-100">
				<?php get_footer(); ?>	 
			</div>
		</div>
	</div>
</body>
</html>
