<?php 
//==, equality, ignores variable type

//===, identical in type and content

//<, >, <=, >=, !=, !==, !(==) 

//&&, and
//||, or
//^, xor (1 false and 1 true => true)


$a = 10 != 10;
$b = 10 === '10';
$c = 10 == '10';
$booleans = array($a, $b, $c);
var_dump($booleans);
?>