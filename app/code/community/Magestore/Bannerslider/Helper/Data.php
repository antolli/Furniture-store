<?php

class Magestore_Bannerslider_Helper_Data extends Mage_Core_Helper_Abstract
{
	const DISP_HOME_PAGE = '0';
	const DISP_CATEGORY = '1';
        const POS_PRINCIPAL = '0';
        const POS_DIR_1 = '1';
        const POS_DIR_2 = '2';
	
	public function getDisplayOption(){
		return array(
			array('value'=>self::DISP_HOME_PAGE, 'label'=>$this->__('Home page')),
			array('value'=>self::DISP_CATEGORY, 'label'=>$this->__('Category')),
		);
	}
        
        public function getPositionOption(){
            
            return array(
			array('value'=>self::POS_PRINCIPAL, 'label'=>$this->__('Principal')),
			array('value'=>self::POS_DIR_1, 'label'=>$this->__('Direita 1')),
                        array('value'=>self::POS_DIR_2, 'label'=>$this->__('Direita 2')),
		);
            
        }
}