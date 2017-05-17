<?php

/**
* 
* iPAGARE para Magento
* 
* @category     Ipagare
* @packages     IpgBaseGratis
* @copyright    Copyright (c) 2012 iPAGARE (http://www.ipagare.com.br)
* @version      1.0.0
* @license      http://www.ipagare.com.br/magento/licenca
*
*/ 

class Ipagare_IpgBaseGratis_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * Verifica se o método de pagamento consta na lista de Payment Methods desenvolvidos pelo iPAGARE.
     * 
     * @return type boolean
     */
    public function isIpagarePaymentMethod($paymentMethodCode) {
        return in_array($paymentMethodCode, Ipagare_IpgBaseGratis_Config::listPaymentMethods());
    }

    /**
     * Retorna a lista com os métodos de pagamentos
     * 
     * @return type array
     */
    public function listPaymentMethods() {
        return Ipagare_IpgBaseGratis_Config::listPaymentMethods();
    }

    public function isOscCssEnabled() {
        return Mage::getStoreConfig(Ipagare_IpgBaseGratis_ConfiguracoesSystem::OSC_CSS_ACTIVE);
    }

}