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

class Ipagare_IpgPagSeguroGratis_PaymentController extends Mage_Core_Controller_Front_Action {



    public function payAction() {
        $order = Mage::helper('ipgpagsegurogratis/session')->getCurrentOrder();
        Mage::log('Iniciando pagamento com PagSeguro para o pedido ' . $order->getRealOrderId());
        $this->loadLayout();
        $this->_initLayoutMessages('core/session');
        $this->renderLayout();
    }

    public function successAction() {
        $order = Mage::helper('ipgpagsegurogratis/session')->getCurrentOrder();
        Mage::log('Finalizando pagamento com PagSeguro para o pedido ' . $order->getRealOrderId());
        $payment = Mage::getModel('ipgpagsegurogratis/entity_payment');
        $payment->loadByAttribute('real_order_id', $order->getRealOrderId());
        $payment->setRealOrderId($order->getRealOrderId());
        $payment->setValorPago(Mage::helper('ipgbasegratis/math')->formatPriceToUS($order->getGrandTotal()));
        $payment->save();
        Mage::helper('ipgpagsegurogratis')->clearSession();
        Mage::getSingleton('checkout/type_onepage')->getCheckout()->setLastSuccessQuoteId(true);
        return $this->_redirect('checkout/onepage/success', array('_secure' => true));
    }
}