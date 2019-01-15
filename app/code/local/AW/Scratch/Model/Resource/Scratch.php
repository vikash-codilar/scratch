<?php
class AW_Scratch_Model_Resource_Scratch extends Mage_Core_Model_Resource_Db_Abstract {
    public function _construct() {
        $this->_init('aw_scratch/scratch','sid');

    }
}