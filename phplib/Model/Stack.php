<?php

class Model_Stack {

    private $stackName;
    private $stages;
    private $queue;
    
    public function __construct(
        $stackName,
        array $stages,
        Model_Queue $queue
    ) {
        $this->stackName = $stackName;
        $this->stages = $stages;
        $this->queue = $queue;
    }
    
    public function getStackName() {
        return $this->stackName;
    }
    
    public function getQueue() {
        return $this->queue;
    }
    
    public function getStages() {
        return $this->stages;
    }
}