<?php
/**
 * IDEALIAGroup srl
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.idealiagroup.com/magento-ext-license.html
 *
 * @category   IG
 * @package    IG_FloatingMenu
 * @copyright  Copyright (c) 2011-2012 IDEALIAGroup srl (http://www.idealiagroup.com)
 * @license    http://www.idealiagroup.com/magento-ext-license.html
 */

class IG_FloatingMenu_Block_Floating extends Mage_Core_Block_Template
{
	const XML_PATH_ENABLED = 'ig_floatingmenu/general/enabled';
	
	protected function _toHtml()
    {
		if (!Mage::getStoreConfig(self::XML_PATH_ENABLED))
			return '';
		
        return parent::_toHtml();
    }
}