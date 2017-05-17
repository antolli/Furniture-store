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

final class Ipagare_IpgBaseGratis_Helper_Module extends Mage_Core_Helper_Abstract {

    public static function isPagSeguroGratisExists() {
        error_reporting(0);
        $exists = class_exists('Ipagare_IpgPagSeguroGratis_Helper_Module');
        error_reporting(1);

        return $exists;
    }

    public function isPagSeguroGratisExistsAndActive() {
        return $this->isPagSeguroGratisExists() && Mage::helper('ipgpagsegurogratis')->isModuleActive();
    }
}