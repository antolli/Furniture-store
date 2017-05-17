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

class Ipagare_IpgBaseGratis_Helper_StringUtils extends Mage_Core_Helper_Abstract {

    /**
     * Verifica se determinada valor é <strong>null</strong> ou <strong>vazio</strong>.
     * 
     * @param type $str
     * @return type
     */
    public static function isEmpty($str) {
        if ($str == null) {
            return true;
        }
        if (trim($str) == '') {
            return true;
        }
        return false;
    }

    public static function removeParentheses($str) {
        if (self::isEmpty($str)) {
            return $str;
        }
        $str = str_ireplace('(', '', $str);
        $str = str_ireplace(')', '', $str);
        return $str;
    }
    
     public function buildParametersForLog($parameters) {
        $paramsLog = '';
        foreach ($parameters as $key => $value) {
          
           $paramsLog .= $key . '=' . $value . "\n";
           
        }

        return $paramsLog;
    }
}