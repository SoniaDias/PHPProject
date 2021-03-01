<?php 
//indexable arrays
//numbered key_exists
//0-...
$colors = array('red', 'blue', 'green');
print_r($colors);
echo '<p>'.$colors[1].'<p>';
$colors[] = "yellow";
print_r($colors);

//associative arrays
//strings as keys
$home_twons = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI',
);
echo '<pre>';
print_r($home_twons);
echo '<pre>';

echo '<p>'.$home_twons['Dave'].'</p>';
/*
Home Towns [
    'Joe' => 'Middletown, NY'
    'Erin' => 'West Chester, PA'
    'Dave' => 'Exton, PA'
    'Brian' => 'Grand Rapids, MI'
] 
*/
?>