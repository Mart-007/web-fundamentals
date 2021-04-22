<?php

    class Animal{
        public $name;
        public $health;

        public function __construct()
        {
            $this->health = 100;
        }

        public function walk(){
            $this->health -=1;
            echo "Running.. ." . $this->health ."<br>";  
        }
        public function run(){
            $this->health -=5;
            echo "walking.. ." . $this->health ."<br>";  
        }
        public function displayHealth(){
            $this->name = "Mart";
            return "Name:" . $this->name . ' ' . "<br>" . "Health:". ' ' . $this->health. "<br><br>";
        }
    }
    $animal = new Animal();
    $animal->walk(3);
    $animal->run(2); 
    echo $animal->displayHealth();

    //--------Sub class -------->>>>>>
    class Dog extends Animal{
       public function __construct()
       {
           $this->health = 150;
       } 
       public function pet(){
           $this->health +=5;
           echo "Pet health" . ' '. $this->health;
       }
       public function displayHealth(){
           $this->name = "Browny";
           echo "Name:" .''. 
           $this->name.'<br>' .''. 
           "Health:". '' .
           $this->health."<br><br>";
       }
    }
    $dog = new Dog();
    $dog->run(2);
    $dog->walk(3);
    echo $dog->displayHealth();

    //------Sub Class--------->>>>>>>
    class Dragon extends Animal{
        public function __construct()
        {
            $this->health = 170;
        }
        public function fly(){
            $this->health -= 10;
        }
        public function displayHealth()
        {
            $this->name = "Dragon";
            echo "This is a dragon <br>" . ' ' .
            "Name:". ' ' . $this->name ."<br>" .' '.
            "Health:". ' ' . $this->health;
        }
    }
    $dragon = new Dragon();
    $dragon->walk(3);
    $dragon->run(2);
    $dragon->fly(2);
    $dragon->displayHealth();

?>