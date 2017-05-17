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

class Ipagare_IpgPagSeguroGratis_Block_Payment_Pay extends Mage_Payment_Block_Info {

    private $parameters;
    protected $sessionCoreMage;

    protected function _construct() {
        parent::_construct();
    }

    public function getParameters() {
        $itemAmount1 = Mage::helper('ipgpagsegurogratis')->formataValorPagSeguro($this->getLastOrder()->getGrandTotal());
        $reference = $this->getLastOrder()->getRealOrderId();
        $this->parameters = array(
            'receiverEmail' => $this->getEmailLoja(),
            'currency' => 'BRL',
            'itemId1' => '1',
            'itemDescription1' => 'Compras na loja ' .$this->getStoreName(),
            'itemAmount1' => $itemAmount1,
            'itemQuantity1' => '1',
            'reference' => $reference
        );
        
        Mage::log(Mage::helper('ipgbasegratis/stringUtils')->buildParametersForLog($this->parameters));
        return $this->parameters;
    }

    public function getLastOrder() {
        return Mage::helper('ipgpagsegurogratis/session')->getCurrentOrder();
    }

    public function getEmailLoja() {
        return Mage::getStoreConfig(Ipagare_IpgPagSeguroGratis_ConfiguracoesSystem::IPGPAGSEGUROGRATIS_EMAIL);
    }

    public function getStoreName() {
        return Mage::app()->getStore()->getName();
    }
}