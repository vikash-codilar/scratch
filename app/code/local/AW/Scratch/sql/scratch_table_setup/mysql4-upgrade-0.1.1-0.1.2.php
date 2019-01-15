<?php

$this->startSetup();

$this->run("
        ALTER TABLE scratch_cards ADD amount VARCHAR(255);
            
    ");

$this->endSetup();