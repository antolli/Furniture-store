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

$installer = $this->startSetup();
$tabelaPagamento = $installer->getTable('ipagare_pagseguro_gratis_pagamento');
$installer->run(
        "CREATE TABLE IF NOT EXISTS `{$tabelaPagamento}` (
            `id_ipagare_pagseguro_gratis_pagamento` INT(11) NOT NULL AUTO_INCREMENT,
            `valor_pago` FLOAT(0),
            `real_order_id` VARCHAR(100),
            PRIMARY KEY (`id_ipagare_pagseguro_gratis_pagamento`)
        )
        ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        
$this->endSetup();