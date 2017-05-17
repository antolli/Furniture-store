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

class Ipagare_IpgBaseGratis_Helper_Url extends Mage_Core_Helper_Abstract {
    
    /**
     * 
     */
    const ONE_STEP_CHECKOUT = '/onestepcheckout/';



 
    public function isInOscPayment() {
        $currentUrl = Mage::helper('core/url')->getCurrentUrl();
        if (strpos($currentUrl, self::ONE_STEP_CHECKOUT)) {
            return true;
        }
        return false;
    }

}