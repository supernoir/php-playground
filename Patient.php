<?php
require('Person.php');

class Patient extends Person {
  const DISEASE_TYPES = ['H1N1','Malaria','Ebola','Common Cold'];

  private $hasBeenChecked = false;
  private $hasDisease = false;

  public function testForDisease () {
    $this->hasBeenChecked = true;
  }

  public function printPatientReport () {
    print $this->getIdentity().PHP_EOL;
    print "- - - - - - - - - - - - -\n";
    $this->hasBeenChecked
    ? print "The patient has been checked\n"
    : print "The patient has not been checked\n";
    print "- - - - - - - - - - - - -\n";
  }

}

$newPatient = new Patient("Maria","DeSoto","1971");
$newPatient->testForDisease();
$newPatient->printPatientReport();