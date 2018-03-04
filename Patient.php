<?php
require('Person.php');

class Patient extends Person {
  private $diseaseTypes = ['H1N1','Malaria','Ebola','Common Cold'];
  private $hasBeenChecked = false;
  private $hasDisease = false;
  private $hasDiseaseType = null;

  public function testForDisease () {
    $this->hasBeenChecked = true;
    $testedPositive = random_int(0,1);
    if($testedPositive == 0){
      $this->hasDisease = false;
    } else {
      $this->hasDisease = true;
      echo count($this->diseaseTypes);
      $this->hasDiseaseType = $this->diseaseTypes[
        random_int(0, count($this->diseaseTypes)-1)
      ];
    }
  }

  public function printPatientReport () {
    print $this->getIdentity().PHP_EOL;
    print "- - - - - - - - - - - - -\n";
    if ($this->hasBeenChecked == true) {
      print "The patient has been tested\n";
      if ($this->hasDisease == true) {
        print "The patient has tested positive\n";
        print "The Patient has contracted ".$this->hasDiseaseType.".\n";
      } else {
        print "The patient has tested negative\n"; 
      }
    } else {
      print "The patient has not been tested\n";
    }
    print "- - - - - - - - - - - - -\n";
  }

}

$newPatient = new Patient("Maria","DeSoto","1971");
$newPatient->testForDisease();
$newPatient->printPatientReport();