<?php
    class AW_Scratch_Model_Observer{
        public function example($observer){

            $grand_total = Mage::helper('checkout')->getQuote()->getData()['grand_total'];
            $paymentMethod = Mage::getSingleton('checkout/session')->getQuote()->getPayment()->getMethodInstance()->getCode();
            $resource = Mage::getSingleton('core/resource');
            $writeConnection = $resource->getConnection('core_write');

            Mage::log($grand_total);
            if($paymentMethod == 'ccsave' && $grand_total > 1000 ) {
                $query = "INSERT INTO `scratch_cards` (customer_id,card_status,amount,card_id) VALUES (" . Mage::getSingleton('customer/session')->getCustomer()->getId() . ", '0','','" . uniqid() . "')";
                Mage::log($query);
                $writeConnection->query($query);
            }
        }
}

?>