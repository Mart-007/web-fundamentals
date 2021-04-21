<?php
    class Bike{
        public $price;
        public $max_speed;
        public $miles;

        public function __construct($price, $max_speed, $miles)
        {
           $this->price = $price;
           $this->max_speed = $max_speed;
           $this->miles = $miles; 
        }
        public function __set($property, $value){
            if(property_exists($this, $property)){
               return $this->property = $value;
            }
        }
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->property;
            }
        }

        public function displayInfo(){
            echo "Price of Bike:" . $this->price .'<br>';
            echo "Maximum speed:" . $this->max_speed .'<br>';
            echo "Total miles driven:" . $this->miles. '<br><br>';
        }
        public function drive($miles){
            $this->miles += $miles;
            return $this;
        }
        public function reverse($miles){
            $this->miles -= $miles;
            return $this;
        }
       
    }

    $bike1 = new Bike(100, 20,"20mph", 0);
    $bike1->drive(10)->drive(10)->drive(10)->reverse(5)->displayInfo();

    $bike2 = new Bike(50, 10, "10mph", 0);
    $bike2->drive(10)->drive(10)->drive(10)->reverse(5)->displayInfo();

    $bike3 = new Bike(25, 5, "5mph", 0);
    $bike3->reverse(5)->reverse(5)->reverse(5)->reverse(5)->displayInfo();


?>