<!DOCTYPE html> 
<html lang="de-DE">  
<head>  
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic' rel='stylesheet' type='text/css'> <!-- google font -->	
</head>  
<body> 
	<div id="wrapper">
		<header role="banner" class="grid-container">
			<?php get_header(); ?>
		</header>
		<div role="main" class="grid-container">
			<div class="grid-70 mobile-grid-100">
				<!--<p><strong>Aktuelles:</strong></p>-->
				<!-- The loop -->
				<?php query_posts( 'cat=1' ); ?>
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
				<?php the_excerpt(); ?> 
				<?php endwhile; else: ?>
				<p><?php _e('Momentan sind keine Beitr&auml;ge vorhanden.'); ?></p>
				<?php endif; ?>
				<!-- The loop end -->
			</div>
			<div class="grid-30 mobile-grid-100">
				<div class="grid-100 mobile-grid-50">
					<h2>N&auml;chste Termine:</h2>Inhalte folgen... 
				</div>
				<div class="grid-100 mobile-grid-50">
					<h2>Letzte Eins&auml;tze:</h2>
					<table>
						<?php query_posts('cat=2'); /* assign page id SINGLE POST EXCERPT*/ ?><!-- cat 2 Einsaetze -->
						<?php if(have_posts() ) : while ( have_posts() ) : the_post(); /* start the loop */ ?>
						<?php the_content(); /* prints the content */ ?>
						<?php endwhile; else: ?>
						<p><?php _e('Keine Eins&aumltze gefunden.'); ?></p>
				<?php endif; ?>
					</table>
					
				</div>
				<div class="grid-100 hide-on-mobile" id="sidebar"><!-- FOR WIDGETS -->
						<ul>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
						</ul>
				</div>
			</div>
			<div class="clear"></div>
			<div class="grid-50 mobile-grid-100">
				<?php query_posts('page_id=5'); /* assign page id SINGLE POST EXCERPT*/ ?><!-- 4 Loeschzug -->
				<?php if(have_posts) : the_post(); /* start the loop */ ?>
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
				<?php the_excerpt(); /* prints the content */ ?>
				<?php endif; /* end the loop */ ?>
			</div>
			<div class="grid-50 mobile-grid-100" >
				<?php query_posts('page_id=7'); /* assign page id SINGLE POST EXCERPT*/ ?><!-- 7 Jugendfeuerwehr -->
				<?php if(have_posts) : the_post(); /* start the loop */ ?>
				<?php the_title( '<h2>' , '</h2>' ); ?>
				<?php the_excerpt(); /* prints the content */ ?>
				<?php endif; /* end the loop */ ?>
			</div>
			<div class="clear"></div>
			<div class="grid-33 mobile-grid-100">
				<?php query_posts('page_id=11'); /* assign page id SINGLE POST EXCERPT*/ ?><!-- 41 First Responder -->
				<?php if(have_posts) : the_post(); /* start the loop */ ?>
				<?php the_title( '<h2>' , '</h2>' ); ?>
				<?php the_excerpt(); /* prints the content */ ?>
				<?php endif; /* end the loop */ ?>
			</div>
			<div class="grid-33 mobile-grid-100">
				<?php query_posts('page_id=15'); /* assign page id SINGLE POST EXCERPT*/ ?><!-- 45 Spezialeinheit Loeschwasserversorgung -->
				<?php if(have_posts) : the_post(); /* start the loop */ ?>
				<?php the_title( '<h2>' , '</h2>' ); ?>
				<?php the_excerpt(); /* prints the content */ ?>
				<?php endif; /* end the loop */ ?>
			</div>
			<div class="grid-33 mobile-grid-100">
				<?php query_posts('page_id=13'); /* assign page id SINGLE POST EXCERPT*/ ?><!-- 48 Massenanfall von Verletzten -->
				<?php if(have_posts) : the_post(); /* start the loop */ ?>
				<?php the_title( '<h2>' , '</h2>' ); ?>
				<?php the_excerpt(); /* prints the content */ ?>
				<?php endif; /* end the loop */ ?>
			</div>
			<div class="grid-100" id="footer">
				<?php get_footer(); ?>	 
			</div>
		</div>
	</div>
</body>
</html>
