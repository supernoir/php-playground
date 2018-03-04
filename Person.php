<?php

class Person
{
  const AVG_LIFE_SPAN = 79;

  function __construct($tempFirstName = "", $tempLastName = "", $tempYearBorn = 0)
  {
    $this->firstName = $tempFirstName;
    $this->lastName = $tempLastName;
    $this->yearBorn = $tempYearBorn;
  }

  protected function getFirstName ()
  {
    return $this->firstName;
  }

  public function setFirstName ($tempName)
  {
    $this->firstName = $tempName;
  }

 protected function getIdentity () {
    return $this->firstName." ".$this->lastName.", ".$this->yearBorn;
  }
}

$newPerson = new Person("Soraya","Khan","1967");

// $newPerson->firstName = "Michael";
// $newPerson->setFirstName('Soraya');
// echo Person::AVG_LIFE_SPAN;

// print $newPerson->getIdentity()."\n";

