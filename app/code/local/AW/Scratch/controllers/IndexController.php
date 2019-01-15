<?php

class AW_Scratch_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_initMessages();
        $this->getLayout()->getBlock('head')->setTitle($this->__('Scratch Cards'));
        $this->renderLayout();
    }
    protected function _initMessages()
    {
        $this->_initLayoutMessages('customer/session');
    }

    protected function _getSession()
    {
        return Mage::getSingleton('customer/session');
    }

    public function ajaxAction()
    {
        $isAjax = Mage::app()->getRequest()->isAjax();
        if ( $isAjax ) {
//            $output = $this->getLayout()->createBlock('aw/scratch')->setTemplate('aw_raf/ajax.phtml')->toHtml();
            $output = $this->getLayout()->createBlock('aw_scratch/cards')->setTemplate('aw_raf/scratch_algo.phtml')->toHtml();
            $this->getResponse()->setHeader( 'Content-type', 'application/json' );
            $this->getResponse()->setBody(json_encode(['outputHtml' => $output]));
        }
    }
}
?>