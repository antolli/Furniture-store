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

class Ipagare_IpgBaseGratis_Model_Session extends Mage_Core_Model_Session_Abstract {

    public function __construct() {
        $this->init('ipgbasegratis');
    }

}