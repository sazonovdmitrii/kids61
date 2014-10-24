<?php
class Gala_Galagiftshopsettings_Helper_mainmenu extends Mage_Core_Helper_Abstract
{
	public function gettype() {
        $type	=	'default_ver';
		if(	Mage::getConfig()->getModuleConfig('EM_Megamenupro')->is('active', 'true') != false)	// Check include extension
		{
			if(Mage::getStoreConfig('advanced/modules_disable_output/EM_Megamenupro')	!= 1){	// check enable/disable extension - in Backend : System > Config > Advanced
				$id	=	Mage::helper("galagiftshopsettings")->getGeneral_MainMenu();
				if($id != 'default_ver' && $id != 'default_hor'){
					$data = Mage::getModel('megamenupro/megamenupro')->load($id);
					if($data->getStatus() == 1){	// check enable/disable this menu 
						$type = $id;
					}
				}
                if($id == 'default_hor' ){
                    $type='default_hor';
                }
			}
		}
		return	$type;
	}

	public function getmenu() {
		$id	=	Mage::helper("galagiftshopsettings")->getGeneral_MainMenu();	
		$widget	=	"{{widget type=\"megamenupro/megamenupro\" menu=\"".$id."\"}}";
		$helper = Mage::helper('cms');
		$processor = $helper->getBlockTemplateProcessor();
		$html = $processor->filter($widget);		
		return	$html;
	}
}