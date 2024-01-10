<?php
/**
 * The sidebar containing the social icons
 *
 * 
 *
 * @package Simple_Approach_Practice
 */

if ( ! is_active_sidebar( 'social' ) ) {
	return;
}
?>

<aside id="social-icons-widget" >
	<?php dynamic_sidebar( 'social' ); ?>
</aside><!-- #secondary -->
