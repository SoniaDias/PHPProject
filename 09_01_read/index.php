<?php

//readfile( 'treasure-island.txt');
//echo file_get_contents( 'treasure-island.txt');

$lines = file( 'treasure-island.txt');
//var_dump( $lines );

$casabona = file_get_contents( 'https://casabona.org' );

if( strpos( $casabona, 'wp-content' ) ) {
    echo "<p>This website is  using WordPress!</p>";
}