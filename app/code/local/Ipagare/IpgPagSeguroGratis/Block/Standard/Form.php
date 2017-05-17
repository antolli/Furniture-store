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

class Ipagare_IpgPagSeguroGratis_Block_Standard_Form extends Mage_Payment_Block_Form {

    protected function _construct() {
        $this->setTemplate('ipagare/ipgpagsegurogratis/payment/form.phtml');
        parent::_construct();
    }

    protected function _prepareLayout() {
        return parent::_prepareLayout();
    }

}