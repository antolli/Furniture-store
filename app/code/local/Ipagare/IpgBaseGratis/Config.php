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

final class Ipagare_IpgBaseGratis_Config {

    /**
     * Códigos dos meios de pagamento implementados pelo iPAGARE.
     * 
     */
    protected static $_paymentMethods = array('ipgcore', 'ipgmoip', 'ipgpagsegurogratis');
    
    
    /**
     * Retorna a lista com os métodos de pagamentos
     * 
     * @return type array
     */
    public static function listPaymentMethods() {
        return self::$_paymentMethods;
    }

}