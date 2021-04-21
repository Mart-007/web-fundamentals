<?php
    class Bike{
        public $price;
        public $max_speed;
        public $miles;

        public function __construct($price, $max_speed, $miles)
        {
           $this->price = $price;
           $this->max_speed = $max_speed;
           $this->miles = 0; 
        }
        public function displayInfo(){
            echo "Price of Bike:" . $this->price .'<br>';
            echo "Maximum speed:" . $this->max_speed .'<br>';
            echo "Total miles driven:" . $this->miles. '<br>';
        }
        public function drive($num){
            for($i=0; $i<$num; $i++){
                $this->miles = $this->miles+10;
            }
        }
        public function reverse($num){
            for($i=0; $i<$num; $i++){
                if($this->miles = 0){
                    $this->miles = $this->miles - 5;
                }
            }
        }
        public function move($drive, $reverse){
            $this->drive($drive);
            $this->reverse($reverse);
            $this->displayInfo();
        }
    }

    $bike1 = new Bike(100, 20,"20mph");
    $bike2 = new Bike(50, 10, "10mph");
    $bike3 = new Bike(25, 5, "5mph");

    $bike1->move(3, 1);
    $bike2->move(2, 2);
    $bike3->move(0, 3);

?>