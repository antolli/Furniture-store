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

class Ipagare_IpgPagSeguroGratis_Model_Mysql4_Entity_Payment_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    public function __construct() {
        $this->_init('ipgpagsegurogratis/entity_payment');
    }

}