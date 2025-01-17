<?php

require_once 'StateInterface.php';

class NoCoinState implements StateInterface
{
    public function insertCoin(): void
    {
        echo "Coin inserted<br>";
    }

    public function selectProduct(): void
    {
        echo "Please insert a coin<br>";
    }

    public function removeProduct(): void
    {
        echo "Please insert a coin<br>";
    }
}