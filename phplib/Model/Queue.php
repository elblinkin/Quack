<?php

class Model_Queue {

    private $queue;
    
    public function __construct(array $queue = array()) {
        $this->queue = $queue;
    }
    
    public function topTrain() {
        return $this->queue[0];
    }
    
    public function trainAt($index) {
        return $this->queue[$index];
    }
    
    public function popTain() {
        return array_shift($this->queue);
    }
    
    public function pushTrain($train) {
        $this->queue[] = $train;
    }
}