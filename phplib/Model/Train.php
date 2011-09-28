<?php

class Model_Train {

    private $id;
    private $people;
    private $stage;
    
    public function __construct(
        $id,
        array $people = array(),
        Stage $stage = null
    ) {
        $this->id = $id;
        $this->people = $people;
        $this->stage = $stage;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getPeople() {
        return $this->people;
    }
    
    public function addPerson($person) {
        $this->people = $person;
    }
    
    public function removePerson($person) {
        if ($this->getStage() === null) {
            remove_by_value($person, $this->people, false);
        } else {
            $this->getStage()->removePerson($person);
        }
    }
    
    public function getStage() {
        return $this->stage;
    }
}