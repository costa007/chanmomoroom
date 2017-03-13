<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Chanmomoroom
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'chanmomoroom' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo chanmomoroom_get_svg( array( 'icon' => 'bars' ) ); echo chanmomoroom_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'chanmomoroom' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
</nav><!-- #site-navigation -->
