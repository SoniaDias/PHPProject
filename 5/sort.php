<?php 
    class Person {
        var $first_name;
        var $last_name;

        function __construct( $fn, $ln ) {
            $this->first_name = $fn;
            $this->last_name = $ln;
        }

        public function get_first_name() {
            return $this->first_name;
        }

        public function get_last_name() {
            return $this->last_name;
        }
    }
    $rob = new Person('Rob', 'Robine');
    $stelle = new Person('Stelle', 'OlaOla');
    $maria = new Person('Maria', 'Cenas');

    $names = array($rob, $stelle, $maria);
    
    usort($names, function($a, $b){
        //return $a->get_first_name() <=> $b->get_first_name();
        return [$a->get_first_name(), $a->get_last_name()] <=> [$b->get_first_name(), $b->get_last_name()];

    });
    
?>
<pre>
    <?php print_r( $names ); ?>
</pre>