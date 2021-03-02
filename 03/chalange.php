<?php 

$a = (14 + 82 -32 /2)**2;
$b = 18 * (3 / 6 - 9) * 10;
$c = 5 * (12 / 2 - 8 * 4 + 12 *6);
$stuff_abc = array($a, $b, $c);

$aa = (14 + 82 - (32 /2)) ** 2;
$bb = 18 * ((3 / 6) - 9) * 10;
$cc = 5 * ((12 / 2) - (8 * 4) + (12 * 6));
$stuff_aabbcc = array($aa, $bb, $cc);

echo '<pre>';
print_r($stuff_abc);
echo '</pre>';

echo '<pre>';
print_r($stuff_aabbcc);
echo '</pre>';

$csa = 2;
echo ++$csa + --$csa;
?>