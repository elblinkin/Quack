<?php

class Model_Stage {

    private $stageName;
    private $votes;
    
    public function __construct($stageName, array $votes = null) {
        $this->stageName = $stageName;
        $this->votes = $votes;
    }
    
    function getStageName() {
        return $this->stageName;
    }
    
    function getVotes($vote) {
        $result = array();
        foreach ($this->votes as $k => $v) {
            if ($v === $vote) {
                $result[] = $k;
            }
        }
        return $result;
    }
    
    function setVote($vote, $person) {
        $this->votes[$person] = $vote;
    }
}