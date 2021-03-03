<?php
function multiply($a,$b){
    $x = $a * $b;
    if($x < 0){
        throw new Exception("Not positive.");
    }else{
        return $x;
    }
}

try{
    echo multiply(-5, 3);
}catch( Exception $e){
    echo $e->getMessage();
} 