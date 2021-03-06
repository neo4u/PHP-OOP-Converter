<?php

  class Pet {
  
    protected $name;

    public function __construct($name) {
      echo "Setting name to " . $name . "\n";
      $this->name = $name;
    } 

    public function eat() {
      echo $this->name . " is eating.\n";
    }

    public static function static_fun($objInst){ 

    }

    public function testFunc() {
      echo "Just a test function\n.";
    }
  }

  class Dog extends Pet {
    public function bark() {
      echo $this->name . " says Woof\n";
    }
  }

  class Terrier extends Dog {
    public $weight;
    public function setWeightAndEat($weight) {
      $this->weight = $weight;  
      parent::static_func();
      return "Test";
    }
  }

  $a_terrier = new Terrier("Spike"); 
  $a_terrier->setWeightAndEat(30);
  $a_terrier->testFunc(); 
?>
