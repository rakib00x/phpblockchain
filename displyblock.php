<?php
function displayBlockchain(Blockchain $blockchain): void
{
    foreach ($blockchain->chain as $block) {
        echo "Index: " . $block->index . "\n";
        echo "Timestamp: " . $block->timestamp . "\n";
        echo "Data: " . json_encode($block->data) . "\n";
        echo "Previous Hash: " . $block->previousHash . "\n";
        echo "Hash: " . $block->hash . "\n\n";
    }
}

displayBlockchain($myBlockchain);

$myBlockchain->chain[1]->data = ['amount' => 75];

// Check if the blockchain is still valid
echo "Is blockchain valid after tampering? " . ($myBlockchain->isChainValid() ? "Yes" : "No") . "\n";