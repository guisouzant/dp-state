<?php

require_once 'MachineContext.php';

$context = new MachineContext();
$context->insertCoin();
$context->selectProduct();
$context->removeProduct();
$context->selectProduct();
?>