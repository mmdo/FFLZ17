<font size="2">
<div id="footermenu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		</div>
<p>&copy; <?php echo get_the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
<p><?php bloginfo('description'); ?></p>
</font>