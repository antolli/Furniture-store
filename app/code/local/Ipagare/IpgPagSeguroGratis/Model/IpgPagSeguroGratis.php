<?php

/**
* 
* iPAGARE PagSeguro Grátis para Magento
* 
* @category     Ipagare
* @packages     IpgPagSeguroGratis
* @copyright    Copyright (c) 2012 iPAGARE (http://www.ipagare.com.br)
* @version      1.0.0
* @license      http://www.ipagare.com.br/magento/licenca
*
*/

class Ipagare_IpgPagSeguroGratis_Model_IpgPagSeguroGratis extends Mage_Payment_Model_Method_Abstract {

    /**
     * rewrited for Mage_Payment_Model_Method_Abstract
     */
    protected $_code = 'ipgpagsegurogratis';
    protected $_isGateway = true;
    protected $_canAuthorize = true;
    protected $_canCapture = true;
    protected $_canCapturePartial = false;
    protected $_canRefund = true;
    protected $_canVoid = true;
    protected $_canUseInternal = false;
    protected $_canUseCheckout = true;
    protected $_canUseForMultishipping = true;
    protected $_isInitializeNeeded = true;
    protected $_formBlockType = 'ipgpagsegurogratis/standard_form';
    protected $_infoBlockType = 'ipgpagsegurogratis/payment_info';
    protected $sessionCoreMage;

    protected function _construct() {
        parent::_construct();
    }

    public function getOrderPlaceRedirectUrl() {

        $order = Mage::helper('ipgpagsegurogratis/session')->getCurrentOrder();
        return Mage::getUrl('ipgpagsegurogratis/payment/pay');
    }

    protected function _colocaParametrosNaSessao($order) {
        
    }
}