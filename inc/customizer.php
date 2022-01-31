<?php

/**
* Create Logo Setting and Upload Control
*/
function devco_new_customizer_settings($wp_customize) {
    // add a setting for the site logo
    $wp_customize -> add_setting('devco_theme_logo');
    // Add a control to upload the logo
    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'devco_theme_logo',
    array(
    'label' => 'Upload Logo',
    'section' => 'title_tagline',
    'settings' => 'devco_theme_logo',
    )));
}
add_action('customize_register', 'devco_new_customizer_settings');

?>