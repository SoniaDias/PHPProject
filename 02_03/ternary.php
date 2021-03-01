<?php
$is_logged_in = true;
$message = 'Welcome' . ($is_logged_in ? " back," : ", "); 
$name = 'Sonia';
echo '</br>';
echo '</br>';
$name = isset($name) ? " $name!" : ' Joe!';
$name2 = $name ?: ' Joe!';


echo $message;
echo $name;
?>