<?php

class Pairs{
    private $pairs=array();
    
    /**
     * 
     * @param array(PairsEnable) $pairs
     */
    public function setPairs($pairs) {
        $this->pairs = $pairs;
    }
    
    /**
     * 
     * @return array(PairEnable) $pairs;
     */
    public function getPairs() {
        return $this->pairs;
    }
    
    /**
     * @param PairEnable $pairEnable 
     */
    public function setPair($pairEnable){
        $this->pairs[$pairEnable->getKey()]=$pairEnable;
    }
    /**
     * @return PairEnable $pairEnable 
     */
    public function getPair($key){
        return $this->pairs[$key];
    }
    
 
}