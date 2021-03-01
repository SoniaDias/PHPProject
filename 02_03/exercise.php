<?php
$start = 1;
$end = 50;

$number = rand($start, $end);

$mynumber = 5;


if($number < $start || $number > $end){
    echo "out of range!";
}else{
    if($number == $mynumber){
        echo '<p>You right!!!!<p>';
    }elseif($number != $mynumber){
        if($number > $mynumber){
            echo 'high';
        }else{
            echo 'low';
        }
    }
}
echo '<br>';
echo $number;
?>

