<?php 
/* 
* Plugin Name: Operam Test :)
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

use Carbon_Fields\Block;
use Carbon_Fields\Field;

defined( 'ABSPATH') || exit;

function filmes_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'after_setup_theme', 'filmes_load' );

function filmes_attach_theme_options() {
    Block::make( __( 'Filme' ) )
        ->add_fields( array(
            Field::make( 'text', 'nome_filme', 'Nombre del Video' ),
            Field::make( 'image', 'poster', 'Poster' ),
            Field::make( 'complex', 'elenco', 'Elenco' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Actor' ),
                ) )
        ) )
        ->set_render_callback( function ( $block ) {

            ob_start();
            ?>
    
            <div class="block">
                <div class="block__heading">
                    <h1><?php echo esc_html( $block['nome_filme'] ); ?></h1>
                </div><!-- /.block__heading -->
    
                <div class="block__image">
                    <?php echo wp_get_attachment_image( $block['poster'], 'full' ); ?>
                </div><!-- /.block__image -->
    
                <div class="block__content">
                    <ul>
                    <?php
                    
                    foreach ( $block['elenco'] as $ator ){
                        //print_r($ator);
                     echo "<li>";   
                     echo esc_html($ator['title']); 
                     echo "</li>";
                    }
                    ?>
                    </ul>    
                </div><!-- /.block__content -->
            </div><!-- /.block -->
    
            <?php
            return ob_get_flush();
        } );
}
add_action( 'carbon_fields_register_fields', 'filmes_attach_theme_options' );


