<?php
class Customercall_Callbutton_Block_Callbutton extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCallbutton()     
     { 
        if (!$this->hasData('callbutton')) {
            $this->setData('callbutton', Mage::registry('callbutton'));
        }
        return $this->getData('callbutton');
        
    }
}