<?php
class AW_Scratch_Model_Resource_Scratch_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    public function _construct() {
        $this->_init('aw_scratch/scratch');

    }
}