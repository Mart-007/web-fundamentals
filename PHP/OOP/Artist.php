<?php
// Text Editor, Terminal, and You
// It's crazy what we can do as developers with just a terminal and a text editor. From a blank page, you create life. You write the rules of the universe you create with your code. Object-oriented programming really helps us visualize the power that we have as developers. With object-oriented programming, you can create different species that interact in the world that you create. 

// Okay, enough of high-level talk, let's create our world! Our world will consist of humans, but not just normal humans. There are three main clans between the humans: Wizards, Ninjas, and Samurai. We'll get to them in the next chapter. They are all Humans, but they are from different subclasses. We will just focus on creating instances of Humans in this chapter, and in the next chapter we will create the subclasses of Humans.

// Humans 
// Note: The following code is the finished implementation of our blueprint for creating instances of Humans. We will build this together throughout the tab so don't worry if you don't understand every line of code. 

// Let's say we want our world to be lively and we want to create a lot of instances of humans. We can start from scratch and manually create each Human, but this clearly isn't going to scale. It would be awesome if we could have some sort of factory where we can provide a blueprint for creating a Human. What attributes and actions are common across all instances of Humans? 

// One thing is for sure, every instance of a Human can be unique. Everyone's unique. Don't worry, having a blueprint doesn't mean that each instance of a Human is not going to be unique. The blueprint will only provide the basic structure that all Humans share, such as a name. This will allow us to provide a unique name for each Human but at the same time all Humans will have an attribute of name. Don't worry if you don't understand the code yet!

// This is the finalized code of the class Human that we are going to write incrementally throughout the following tabs:

class Human {
    public $health;
    public $clan;
    public $strength = 3;
    public $intelligence = 3;
    public $stealth = 3;
    public function __construct() 
    {
      echo "I am alive";
      $this->health = 100;
    }
    public function __get($property)
    {
      if (property_exists($this, $property))
      {
        return $this->property;
      }
    }
    public function __set($property, $value) 
    {
      if (property_exists($this, $property)) 
      {
        $this->$property = $value;
      }
      return $this;
    }
    public function trashTalk() 
    {
      echo "You want a piece of me?";
    }
    public function attack($human) 
    {
      $this->trashTalk();
      $luck = rand(0, 100);
      if($luck * $this->intelligence > 1000) 
      {
        if($luck > $human->stealth) 
        {
          $human->health -= $this->strength;
          return true;
        } 
        else 
        {
          return false;
        }
      } 
      else 
      {
          return false;
      }
    }
  }
  
  // Class structure
  class MyFirstClass{

  }
  $obj = new MyFirstClass();
  var_dump($obj);

  // Properties (Attributes)

  class MyFirstFunction{
      public $my_property = "How are you?";
  }

  $obj = new MyFirstFunction();
  echo $obj->my_property.'<br>';

  $obj2->my_property = " Hello, I'm Good now!";
  echo $obj2->my_property.'<br>';
  echo $obj2->my_property.'<br>';

  $obj2 = new MyFirstFunction();
  $obj3->my_property = "Another message from me";
  echo $obj3->my_property;
?>