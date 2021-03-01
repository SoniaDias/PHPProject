<?php
    $animals = array(
        'Dog' => array(
            'name' => 'Rex',
            'age'=> 2,
        ),
        'Cat' => array(
            'name' => 'Whatever',
            'age'=> 1,
        ),
        'Mousse' => array(
            'name' => 'Stuff',
            'age'=> 21,
        ),
    );

    echo '<pre>';
    print_r($animals);
    echo '</pre>';

    echo '<p>'.$animals['Mousse']['name'].'</p>';

?>