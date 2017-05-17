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

class Ipagare_IpgBaseGratis_Model_System_Config_Source_Horas {

    public function toOptionArray() {
        $opcoes = array();
        for ($i = 0; $i <= 23; $i++) {
            $hora = str_pad($i, 2, '0', STR_PAD_LEFT);
            $opcoes[$hora] = $hora;
        }
        return $opcoes;
    }

}