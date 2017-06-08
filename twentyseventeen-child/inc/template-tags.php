<?php

/**
 * Custom template tags for child theme
 */

if ( ! function_exists( 'twentyseventeen_child_footer_logo' ) ) :
/**
 * Footer logo image html
 * @return string
 */
function twentyseventeen_child_footer_logo() {
    
    $logo_src = get_theme_mod( 'footer_logo', '' );
    
    if( empty( $logo_src ) ) {
        return '';
    }
    
    return '<img src="' . esc_url( $logo_src ) . '" alt="' . esc_html__( 'Footer logo', 'twentyseventeen_child' ) . '"/>';
}
endif;