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

class Ipagare_IpgPagSeguroGratis_Helper_Session extends Mage_Core_Helper_Abstract {

    public function getCurrentOrder() {
        $order = Mage::getModel('sales/order');
        $realOrderId = Mage::getSingleton('checkout/session')->getLastRealOrderId();
        if(isset ($realOrderId) && $realOrderId != null) {
            return $order->loadByAttribute('increment_id', $realOrderId);
        }
        
        $sessionQuote = Mage::getSingleton('checkout/session')->getQuote();
        $realOrderId = $sessionQuote->getReservedOrderId();
        $order->loadByAttribute('increment_id', $realOrderId);

        return $order;
    }
}