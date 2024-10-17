<?php
/*
class Person {
  public function sayHello() {
    echo "Hello!";
  }
}

$person = new Person();
$person->sayHello();
*/

/*
class Animal {
  protected function makeSound() {
    echo "Animal sound!";
  }
}

class Dog extends Animal {
  public function bark() {
    $this->makeSound();
  }
}

$myDog = new Dog();
$myDog->bark(); // Outputs "Animal sound!" because makeSound is called from within Dog
*/

class Person {
  private function sayHello() {
    echo "Hello!";
  }
  
  public function greet() {
    $this->sayHello();
  }
}

$person = new Person();
$person->greet(); // Outputs "Hello!" because sayHello is called from within Person
$person->sayHello(); // Produces an error because sayHello is private

?>