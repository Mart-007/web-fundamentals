<?php
// Construct
// PHP has a number of reserved method names that start with two underscores, known as magic methods, that will be called in certain circumstances within a class. The most common one is the __construct() method. The __construct() is a special function within a class that gets called for every new instance of a class. We didn't have to define the __construct() method in our previous implementations of our class. We only have to implement this method if we want to do some kind of custom set-up before the instantiation of an object. 

// Let's say we wanted the instances of our class to echo out a special message every time it comes to life. We can do this by modifying our previous class implementation to this:

class MyFirstClass
{
    public $property1 = "I am the first property! Woohoo";
    public function __construct()
    {
        echo "I get called for each instance of this class!";
    }
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass(); // runs the __construct function immediately
$obj2 = new MyFirstClass(); // runs the __construct function immediately
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();
// We can also pass in variables to the constructor that we pass into the creation of the object.

class MyFirstClass_1
{
    public $property1 = "I am the first property! Woohoo";
    public function __construct($instance)
    {
        echo "I am getting called for object: ".$instance;
    }
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass('instance one'); // param will be passed into the __construct
$obj2 = new MyFirstClass('instance two'); // param will be passed into the __construct
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();

class MyOtherFunction{
    public $property7 = "This is the most accurate data";

    public function __construct()
    {
        echo "This is the construct data" . "<br>";
    }

    public function get_this_data(){
        return $this->print_intro() . ' ' .$this->property7 . "<br>";
    }

    public function set_this_data($property7){
        return $this->property7 = $property7;
    }

    public function print_intro(){
        return "Hello po, ";
    }
}

$obj1 = new MyOtherFunction();
$obj2 = new MyOtherFunction();

$obj1->set_this_data("This data is set now");
$obj2->set_this_data("This data is set again");

echo $obj1->get_this_data()."<br>";
echo $obj2->get_this_data();

// class MyFirstClass
// {
//     public $property1 = "I am the first property! Woohoo";
//     public function __construct($instance)
//     {
//         echo "I am getting called for object: ".$instance;
//     }
//     public function set_property1($property1)
//     {
//         $this->property1 = $property1;
//     }
//     public function get_property1()
//     {
//         return $this->property1;
//     }
// }
// $obj1 = new MyFirstClass('instance one'); // param will be passed into the __construct
// $obj2 = new MyFirstClass('instance two'); // param will be passed into the __construct
// echo $obj1->get_property1();
// echo $obj2->get_property1();
// $obj1->set_property1('New value for property1 for the first instance');
// $obj2->set_property1('New value for property1 for the second instance');
// echo $obj1->get_property1();
// echo $obj2->get_property1();
?>