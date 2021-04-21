<?php
    class Car{
        public $price;
        public $speed;
        public $fuel;
        public $mileage;
        public $tax;

        public function __construct($price, $speed, $fuel, $mileage, $tax)
        {
           $this->price  = $price;
           $this->speed  = $speed;
           $this->fuel   = $fuel;
           $this->mileage= $mileage;

           if($this->price > 10000){
               $this->tax= .15;
           } else{
               $this->tax= .12;
           }
        }

        public function Display_all(){
            return 'Price: $'. $this->price .'<br>
                    Speed:  '. $this->speed .'mph<br>
                    Fuel level:  '. $this->fuel .'mpg<br>
                    Mileage: '.$this->mileage .'<br>
                    Tax:    '. $this->tax .'<br>';
        }
    }

$car1 = new Car(2000, 35, "Full", 15, 0 ); 
echo $car1->Display_all().'<br><br>'; 

$car2 = new Car(2000, 5, 'Not Full', 105, 0);
echo $car2->Display_all().'<br><br>';

$car3 = new Car(2000, 15, 'Kind of Full', 95, 0);
echo $car3->Display_all().'<br><br>';

$car4 = new Car(2000, 25, 'Full', 25, 0);
echo $car4->Display_all().'<br><br>';

$car5 = new Car(2000, 45, 'Empty', 25, 0);
echo $car5->Display_all().'<br><br>';

$car6 = new Car(20000000, 35, 'Empty', 15, 0);
echo $car6->Display_all().'<br><br>';
?>