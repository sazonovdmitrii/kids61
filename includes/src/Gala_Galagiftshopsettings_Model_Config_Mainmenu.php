<?php
 
class Gala_Galagiftshopsettings_Model_Config_Mainmenu
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('megamenupro/megamenupro');
    }
	
	public function toOptionArray()
    {		
		return $this->getAllMenu();	
    }
    public function getAllMenu()
    {
        $result	= array();
		$result[] = array('value' => 'default_hor','label' => 'Default Horizontal Navigation');
        $result[] = array('value' => 'default_ver','label' => 'Default Vertical Navigation');
		if(Mage::getConfig()->getModuleConfig('EM_Megamenupro')->is('active', 'true') != false && Mage::getStoreConfig('advanced/modules_disable_output/EM_Megamenupro') != 1){
			$collection = Mage::getModel('megamenupro/megamenupro')->getCollection()->addFieldToFilter("status",1);
			$data	=	$collection->getData();			
			foreach($data as $value)
				$result[] = array('value' => $value['megamenupro_id'],'label' => $value['name']);			
		}
        return $result;
	} 
}