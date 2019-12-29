<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function getImages() {

        // get the field value
        $images = carbon_get_theme_option( 'images_list' );

        foreach ( $images as $image ){
            //print_r($image);
            $value  = "<div class='image'>";   
            $value .= wp_get_attachment_image( $image['image'], array('120', '120'), "", array( "class" => "img-responsive")); 
            $value .= "</div>";
        } 

        return $value;
    }
}
