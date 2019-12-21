<div class="homepage">
<?php
// get the field value
$images = carbon_get_theme_option( 'images_list' );

foreach ( $images as $image ){
    //print_r($ator);
    echo "<div class='image'>";   
    echo wp_get_attachment_image( $image['image'], array('120', '120'), "", array( "class" => "img-responsive")); 
    echo "</div>";
}
?>
</div>