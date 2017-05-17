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

class Ipagare_IpgBaseGratis_Helper_OneStepCheckout extends Mage_Core_Helper_Abstract {


    public function getVersion() {
        $version = $this->getCompleteVersion();
        if (!Mage::helper('ipgbasegratis/stringUtils')->isEmpty($version)) {
            return substr($version, 0, 1);
        }
        return '';
    }

    public function getCompleteVersion() {
        $resource = Mage::getSingleton('core/resource');
        $conn = $resource->getConnection('core_read');
        $sql = "SELECT version FROM {$resource->getTableName('core_resource')} WHERE code='onestepcheckout_setup'";
        $version = $conn->fetchAll($sql);
        if (!Mage::helper('ipgbasegratis/stringUtils')->isEmpty($version[0]['version'])) {
            return $version[0]['version'];
        }
        return null;
    }

    public function isActive() {
        return Mage::getStoreConfig('onestepcheckout/general/rewrite_checkout_links');
    }

}