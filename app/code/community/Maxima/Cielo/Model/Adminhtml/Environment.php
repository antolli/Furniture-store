<?php

/*
 * Maxima Cielo Module - payment method module for Magento, integrating
 * the billing forms with a Cielo's gateway Web Service.
 * Copyright (C) 2012  Fillipe Almeida Dutra
 * Belo Horizonte, Minas Gerais - Brazil
 * 
 * Contact: lawsann@gmail.com
 * Project link: http://code.google.com/p/magento-maxima-cielo/
 * Group discussion: http://groups.google.com/group/cielo-magento
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class Maxima_Cielo_Model_Adminhtml_Environment
{

    /**
     * Formato vetor de vetores
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array
		(
            array('value' => 'https://qasecommerce.cielo.com.br', 'label'=>Mage::helper('adminhtml')->__('Teste')),
            array('value' => 'https://ecommerce.cielo.com.br', 'label'=>Mage::helper('adminhtml')->__('Produção')),
        );
    }

    /**
     * Formato chave-valor
     *
     * @return array
     */
    public function toArray()
    {
        return array
		(
            'https://qasecommerce.cielo.com.br' => Mage::helper('adminhtml')->__('Teste'),
            'https://ecommerce.cielo.com.br' => Mage::helper('adminhtml')->__('Produção'),
        );
    }

}