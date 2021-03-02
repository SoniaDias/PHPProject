<?php 
    function hello_world(){
        echo "hello world!";
    }
    echo hello_world();

    function is_bigger($a, $b){
        return ($a >= $b);
    }
    if(is_bigger(4, 3)){
        echo 'oh yeahhhh!';
    }
    echo '<br>';
    //built-in
    $string = substr('cenas', 0, 2);
    echo $string;
    echo '<br>';
    echo date('F');
    echo '<br>';
    echo '<br>';
    //str_replace
    //strtolower

    function is_palindrome($str){
        $pla_check = ($str == strrev($str));
        return $pla_check;
    }
    $check_word = "uau";
    if(is_palindrome($check_word)){
        echo '<p>'.$check_word." it is a palindrome word!!!";
    }else{echo '<p>'.$check_word." in not a palindrome word!!!";}
    echo '<br>';
    echo '<br>';
    echo '<br>';
    //global function
    //$GLOBALS[] = ;

    //&$a, this gets the reference of $a
    //so not the value, but the reference on the memory

    //anonymous functions | closures | callback functions
    //a function to be used once on the specif context
    $names = array("maria", "francisco", "tania");
    usort($names, function($aaaa, $bbbb){
        return $aaaa[1] <=> $bbbb[2];
    });
    print_r($names);

    



?>
