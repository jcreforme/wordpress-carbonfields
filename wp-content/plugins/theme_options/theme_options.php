<?php 
/* 
* Plugin Name: Custom Theme Options Carbon Fields
* Description: Add code to the starter template that uses WP Api to retrieve 5 images selected from the Media Library
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Juan Carlo Reforme Sueyoshi
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       carbon field usage example
 */

use Carbon_Fields\Field;
use Carbon_Fields\Container;
use Carbon_Fields\Block;

add_action( 'carbon_fields_register_fields', 'custom_theme_options' );

function custom_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'complex', 'images_list', 'Images List' )
                ->add_fields( array(
                    Field::make( 'image', 'image', 'Image' ),
                ) ) ->set_max( 5 )
        ) );
}