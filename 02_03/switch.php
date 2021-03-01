<?php
$total = 10;

switch($total){
    case 1: 
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 10:
        echo "10";
        break;
}

echo '<br>';
echo '<br>';
$turtle = 'Leo';
$bandana = '';
switch($turtle):
    case 'Leo': 
        $bandana = "blue";
        break;
    case 'Raph':
        $bandana = "red";
        break;
    case 'Sonia': 
        $bandana = "purple";
        break;
endswitch;

echo $bandana;

?>