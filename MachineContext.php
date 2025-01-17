<?php

require_once 'states/NoCoinState.php';
require_once 'states/WithCoinState.php';

class MachineContext
{
    private StateInterface $state ;

    public function __construct() {
        $this->state = new NoCoinState($this);
    }

   public function setState(StateInterface $state){
       $this->state = $state;
   }

   public function insertCoin(){
       $this->state->insertCoin();
       if($this->state instanceof NoCoinState){
           $this->setState(new WithCoinState());
       }
   }

   public function selectProduct(){
       $this->state->selectProduct();
   }

   public function removeProduct(){
       $this->state->removeProduct();
       if($this->state instanceof WithCoinState){
           $this->setState(new NoCoinState());
       }
   }

}

?>