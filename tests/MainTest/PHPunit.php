<?php
    require('anima.php');

    class PHPunit extends Animal{
        public function testTrueIsEqualTrue(){
            $this->displayHealth( expected: true, actual: true);
        }
    }
?>