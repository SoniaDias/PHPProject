<?php 
include 'cenas.php';

$olaoleoli = new Cenas("Ganda Cenas");
echo $olaoleoli->getOlaOle();
echo '<br>';
$jaquim = new Cenas("GandaCenas");
$jaquim->setOlaOle("quecenasmarada");
echo $jaquim->getOlaOle(); 