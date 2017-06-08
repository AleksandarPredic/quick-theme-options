<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php echo wp_kses_post( get_theme_mod( 'footer_copyright', '' ) ); ?>
</div><!-- .site-info -->
