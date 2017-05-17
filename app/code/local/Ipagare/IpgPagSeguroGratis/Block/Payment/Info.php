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

class Ipagare_IpgPagSeguroGratis_Block_Payment_Info extends Mage_Payment_Block_Info {


    protected function _construct() {
        parent::_construct();
        $this->setTemplate('ipagare/ipgpagsegurogratis/payment/info/default.phtml');
    }

    protected function _prepareSpecificInformation($transport = null) {
        if (null !== $this->_paymentSpecificInformation) {
            return $this->_paymentSpecificInformation;
        }
        $transport = parent::_prepareSpecificInformation($transport);
        $dadosPagamento = array();
        $data = array();
        $orderId = '';

        $orderId = $this->getPayment()->getRealOrderId();
        if (!Mage::helper('ipgbasegratis/stringUtils')->isEmpty($orderId)) {
            $dadosPagamento = $this->getDadosPagamento();
            if (Mage::helper('ipgpagsegurogratis')->notNull($dadosPagamento)) {
                foreach ($dadosPagamento as $key => $value) {
                    $data[$value['titulo']] = $value['valor'];
                }
            }
        }

        return $transport->setData(array_merge($data, $transport->getData()));
    }

    public function getDadosPagamento() {
        $payment = $this->getPayment();
        $dadosPagamento = array();
        $dadosPagamento[] = array('titulo' => 'Pagamento realizado atravÃ©s do PagSeguro', 'valor' => '');
        return $dadosPagamento;
    }

    public function getPayment() {
        $realOrderId = $this->getOrder()->getRealOrderId();
        $payment = Mage::getModel('ipgpagsegurogratis/entity_payment');
        $payment->loadByAttribute('real_order_id', $realOrderId);
        return $payment;
    }

    protected function getOrder() {
        $order = '';
        $currentOrder = $this->getInfo()->getOrder();
        if (isset($currentOrder)) {
            return $currentOrder;
        } else {
            $currentOrder = Mage::helper('ipgbasegratis/session')->getCurrentOrder();
        }
        if (isset($currentOrder)) {
            return $currentOrder;
        }
        return $order;
    }

}