<?php
class Gala_Galagiftshopsettings_Model_Observer {
	
	public function beforeGenerateBlocks(Varien_Event_Observer $observer) {		
		# Disable default Magento footer links
        $package = Mage::getSingleton('core/design_package')->getPackageName();
        $theme = Mage::getSingleton('core/design_package')->getTheme('frontend');
        if($package == 'default' && $theme == 'galagiftshop'){
    		if (Mage::helper('galagiftshopsettings')->getGeneral_DisableFooterLinks()) {
    			$blocks = $observer->getLayout()->getXpath('//block[@name="footer_links"]');
    			if (!empty($blocks))
    				$blocks[0]->addAttribute('ignore', true);
    		}
        }
	}
	
	public function beforeCatalogProductCollectionLoad(Varien_Event_Observer $observer) {
		$alt_img = Mage::helper('galagiftshopsettings')->getProductsGrid_AltImg();
		if ($alt_img == 'image')
			$observer->getEvent()->getCollection()->addAttributeToSelect('image');
	}
    
    public function processAfterHtmlDispatch($observer) {
		static $addJS;
		
		$cookie = Mage::getSingleton('core/cookie');
		$key = $key = $cookie->get('EDIT_BLOCK_KEY');
		if (!$key || !$cookie->get('adminhtml')) return;
		
		$block = $observer->getEvent()->getData('block');
		$name = $block->getNameInLayout();
		
		// is static block
		if (is_a($block, 'Mage_Cms_Block_Block') || is_a($block, 'Mage_Cms_Block_Widget_Block')) {
			$block_id = $block->getBlockId();
			$model = Mage::getModel('cms/block')
				->setStoreId(Mage::app()->getStore()->getId())
				->load($block_id);
			if (!($id = $model->getId())) $id = $block_id;
			
			$title = $model->getTitle();
			$transport = $observer->getEvent()->getTransport();
			
			$html = '';
			if (!$addJS) {
				$addJS = true;
				$html .= "<script type=\"text/javascript\" src=\"".$block->getSkinUrl('js/galagiftshop_settings/galagiftshop_settings.js')."\"></script>";
				$html .= "<script type=\"text/javascript\">jQuery(function($) { 
					$('head').append('<link rel=\"stylesheet\" type=\"text/css\" href=\"".$block->getSkinUrl('css/galagiftshop_settings.css')."\"></link>');
					$('body').append('<div id=\"galagiftshop_settings_previewblock_actions\"><a href=\"".Mage::getUrl('galagiftshopsettings/visual/disablePreview')."\" class=\"turnoff\">".$block->__("Disable Block Preview")."</a></div>');
				});</script>"; 
			}
			
			$html .= trim($transport->getHtml());
			$transport->setHtml($html
				."<div class=\"galagiftshop_settings_previewblock".(!$html ? ' empty' : '')."\" style=\"display:none\">"
				."<a target=\"_blank\" href=\"".Mage::helper('adminhtml')->getUrl("adminhtml/cms_block/edit", array('block_id' => $id, 'key' => $key))."\">$title</a>"
				."</div>");
		} 
		// is widget
		elseif (strlen($name) == 32 && preg_replace('/[^a-z0-9]/', '', $name) == $name) {
			$transport = $observer->getEvent()->getTransport();
			$html = trim($transport->getHtml());
			$transport->setHtml($html
				."<div class=\"galagiftshop_settings_previewblock".(!$html ? ' empty' : '')."\" style=\"display:none\">"
				."Widget ".$block->getType()
				."<br/><span class=\"path\">".$block->getTemplateFile()."</span>"
				."</div>");

		}
	}
}
