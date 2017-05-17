<?php

/**
* 
* iPAGARE PagSeguro Gr�tis para Magento
* 
* @category     Ipagare
* @packages     IpgPagSeguroGratis
* @copyright    Copyright (c) 2012 iPAGARE (http://www.ipagare.com.br)
* @version      1.0.0
* @license      http://www.ipagare.com.br/magento/licenca
*
*/

class Ipagare_IpgPagSeguroGratis_Helper_Data extends Mage_Core_Helper_Abstract {


    /**
     * Verifica se o módulo está ativo.
     * @return type boolean
     */
    public function isModuleActive() {
         return Mage::getStoreConfig(Ipagare_IpgPagSeguroGratis_ConfiguracoesSystem::IPGPAGSEGUROGRATIS_ACTIVE);
    }

    public static function formatPriceToUS($value) {
        if (is_null($value)) {
            return null;
        }
        if (!is_string($value)) {
            return floatval($value);
        }

        //trim space and apos
        $value = str_replace('\'', '', $value);
        $value = str_replace(' ', '', $value);

        $separatorComa = strpos($value, ',');
        $separatorDot = strpos($value, '.');

        if ($separatorComa !== false && $separatorDot !== false) {
            if ($separatorComa > $separatorDot) {
                $value = str_replace('.', '', $value);
                $value = str_replace(',', '.', $value);
            } else {
                $value = str_replace(',', '', $value);
            }
        } elseif ($separatorComa !== false) {
            $value = str_replace(',', '.', $value);
        }

        return floatval($value);
    }
    public static function clearSession() {
        Mage::getSingleton('checkout/session')->clear();
        foreach (Mage::getSingleton('checkout/session')->getQuote()->getItemsCollection() as $item) {
            Mage::getSingleton('checkout/cart')->removeItem($item->getId())->save();
        }
    }
    public static function notNull($value) {
        if (is_array($value)) {
            if (sizeof($value) > 0) {
                return true;
            }
            return false;
        }
        if (($value != '') && (strtolower($value) != 'null') && (strlen(trim($value)) > 0)) {
            return true;
        }
        return false;
    }
    
    public static function formataValorPagSeguro($valor){
        $valor = Mage::helper('ipgbasegratis/math')->formatPriceToUS($valor);
        $a1 = explode('.',$valor);
        if (sizeof($a1) == 1){
            $valor = $a1[0] . '.00';
        } else if (strlen($a1[1]) == 1){
            $valor = $a1[0] . '.' . $a1[1] . '0';
        }
        return $valor;
    }
}