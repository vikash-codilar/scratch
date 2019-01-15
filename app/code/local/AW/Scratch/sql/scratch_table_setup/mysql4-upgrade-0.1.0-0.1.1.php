<?php

$this->startSetup();

$this->run("
        CREATE TABLE scratch_cards (sid INT AUTO_INCREMENT PRIMARY KEY,customer_id INT(255),card_id VARCHAR(255),card_status VARCHAR(255))
            
    ");

$this->endSetup();