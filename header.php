<h1><?php bloginfo('name'); ?></h1>
<div class="grid-100 hide-on-mobile">
	<nav>
		
		<div id="navmenu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</nav>
</div>
<div class="grid-100 hide-on-desktop">
	<nav>
		<!--<h1><?php bloginfo('name'); ?></h1>-->
		<div id="navbttn"> <!--id=navmenu-mobile-->
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</nav>
</div>