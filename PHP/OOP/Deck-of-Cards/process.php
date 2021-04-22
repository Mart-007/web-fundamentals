<?php
    class Deck{
        public $cards = [
            'clubs' => ['card-png/c1.png', 'cards-png/c2.png', 'cards-png/c3.png', 'cards-png/c4.png', 'cards-png/c5.png', 'cards-png/c6.png', 'cards-png/c7.png', 'cards-png/c8.png', 'cards-png/c9.png', 'cards-png/c10.png', 'cards-png/cj.png', 'cards-png/cq.png', 'cards-png/ck.png'],
            'hearts' => ['cards-png/h1.png', 'cards-png/h2.png', 'cards-png/h3.png', 'cards-png/h4.png', 'cards-png/h5.png', 'cards-png/h6.png', 'cards-png/h7.png', 'cards-png/h8.png', 'cards-png/h9.png', 'cards-png/h10.png', 'cards-png/hj.png', 'cards-png/hq.png', 'cards-png/hk.png'],
            'spades' => ['cards-png/s1.png', 'cards-png/s2.png', 'cards-png/s3.png', 'cards-png/s4.png', 'cards-png/s5.png', 'cards-png/s6.png', 'cards-png/s7.png', 'cards-png/s8.png', 'cards-png/s9.png', 'cards-png/s10.png', 'cards-png/sj.png', 'cards-png/sq.png', 'cards-png/sk.png'],
            'diamonds' => ['cards-png/d1.png', 'cards-png/d2.png', 'cards-png/d3.png', 'cards-png/d4.png', 'cards-png/d5.png', 'cards-png/d6.png', 'cards-png/d7.png', 'cards-png/d8.png', 'cards-png/d9.png', 'cards-png/d10.png', 'cards-png/dj.png', 'cards-png/dq.png', 'cards-png/dk.png']
        ];
        public $suits;

        public function __construct()
        {
           
        }
        public function shuffle($cards,$value){
            $this->$cards = $value;
            foreach($cards as $card){
                shuffle($card);
                echo "<img src=' { $card[0] } '/>";
            }
        }
        public function reset(){
            header('refresh: 0');
        }
    }

    class Player extends Deck{
        public function hand(){

        }
        public function discard(){

        }
    }

?>