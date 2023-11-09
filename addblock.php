<?php

$myBlockchain = new Blockchain();
$myBlockchain->addBlock(new Block(1, '10/03/2023', ['amount' => 50]));
$myBlockchain->addBlock(new Block(2, '15/03/2023', ['amount' => 100]));
?>