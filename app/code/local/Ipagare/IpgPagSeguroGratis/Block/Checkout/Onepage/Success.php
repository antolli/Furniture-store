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

class Ipagare_IpgPagSeguroGratis_Block_Checkout_Onepage_Success extends Mage_Checkout_Block_Onepage_Success {

    public function getViewOrder() {
        return (bool) Mage::getStoreConfig(Ipagare_IpgBaseGratis_ConfiguracoesSystem::PAGINA_SUCESSO_MOSTRAR_CONTEUDO) || (bool) $this->_getData('can_view_order');
}

    public function getCanViewOrder() {
        return (bool) Mage::getStoreConfig(Ipagare_IpgBaseGratis_ConfiguracoesSystem::PAGINA_SUCESSO_MOSTRAR_CONTEUDO) || (bool) $this->_getData('can_view_order');
    }

    public function getCanPrintOrder() {
        return (bool) Mage::getStoreConfig(Ipagare_IpgBaseGratis_ConfiguracoesSystem::PAGINA_SUCESSO_MOSTRAR_CONTEUDO) || (bool) $this->_getData('can_print_order');
    }

    public function getLastOrder() {
        return Mage::helper('ipgpagsegurogratis/session')->getCurrentOrder();
    }

    public function getPayment() {
        $payment = Mage::getModel('ipgpagsegurogratis/entity_payment');
        $payment->loadByAttribute('order_id', $this->getLastOrder()->getId());

        return $payment;
    }

    public function getPaymentData() {
        return Mage::getSingleton('ipgbasegratis/session')->getPaymentData();
    }

}