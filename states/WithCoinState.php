<?php 

require_once 'StateInterface.php';

class WithCoinState implements StateInterface
{
    public function insertCoin(): void
    {
        echo "Coin already inserted<br>";
    }

    public function selectProduct(): void
    {
        echo "Product selected<br>";
    }

    public function removeProduct(): void
    {
        echo "Please pick up the product<br>";
    }
}