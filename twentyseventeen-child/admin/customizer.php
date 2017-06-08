<?php

/**
 * Crete options using Kirki toolkit
 */

if ( ! function_exists( 'twentyseventeen_child_options' ) ) :
/**
 * Add child theme options
 */
function twentyseventeen_child_options() {
    
    TwentySeventeen_Child_Kirki::add_config( 'twentyseventeen_child_config', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    TwentySeventeen_Child_Kirki::add_panel( 'twentyseventeen_child_options', array(
        'priority'    => 10,
        'title'       => __( 'Additional theme options', 'twentyseventeen-child' ),
        'description' => __( 'Child theme options that you can use to to customize your theme.', 'twentyseventeen-child' ),
    ) );

    TwentySeventeen_Child_Kirki::add_section( 'twentyseventeen_child_section', array(
        'title'          => __( 'Footer options', 'twentyseventeen-child' ),
        'description'    => __( 'Some footer options added using Kirki toolkit', 'twentyseventeen-child' ),
        'panel'          => 'twentyseventeen_child_options', // Not typically needed.
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );

    // Footer logo using partial refreash
    TwentySeventeen_Child_Kirki::add_field( 'twentyseventeen_child_config', array(
        'type'        => 'image',
        'settings'    => 'footer_logo',
        'label'       => __( 'Select footer logo', 'twentyseventeen-child' ),
        'description' => __( 'You can change your footer logo here', 'twentyseventeen-child' ),
        'help'        => __( 'This is some extra help text.', 'twentyseventeen-child' ),
        'section'     => 'twentyseventeen_child_section',
        'default'     => '',
        'priority'    => 10,
        'partial_refresh' => array(
            'footer_logo_id' => array(
                'selector'        => '.site-footer-bottom__logo',
                'render_callback' => 'twentyseventeen_child_footer_logo'
            )
        ),

    ) );
    
    // Copyright info using transport => postMessage
    Kirki::add_field( 'twentyseventeen_child_config', array(
        'type'     => 'textarea',
        'settings' => 'footer_copyright',
        'label'    => __( 'Footer copyright', 'twentyseventeen-child' ),
        'section'  => 'twentyseventeen_child_section',
        'default'  => esc_attr__( 'Proudly powered by WordPress', 'twentyseventeen-child' ),
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars'   => array(
            array(
                'element'  => 'footer .site-info',
                'function' => 'html',
            ),
        )
    ) );
    
}
endif;

// Hook on init to allow usage of all template tags
add_action( 'init', 'twentyseventeen_child_options' );