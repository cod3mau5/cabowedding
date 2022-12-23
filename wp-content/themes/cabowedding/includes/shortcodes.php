<?php

function gymfitness_ubicacion_shortcode(){
    $ubicacion = get_field('ubicacion');

    ?>
    <div class="ubicacion">
        <input type="hidden" id="lat" value="<?php echo $ubicacion['lat']; ?>" />
        <input type="hidden" id="lng" value="<?php echo $ubicacion['lng']; ?>" />
        <input type="hidden" id="calle" value="<?php echo $ubicacion['street_name']; ?>" />
        <input type="hidden" id="zoom" value="<?php echo $ubicacion['zoom']; ?>" />
        <div id="map"></div>
    </div>
    <!-- <?php 
        echo '<pre>'; 
             var_dump($ubicacion); 
        echo '</pre>';
    ?> -->

    <?php
}
add_shortcode( 'ubicacion', 'gymfitness_ubicacion_shortcode' );