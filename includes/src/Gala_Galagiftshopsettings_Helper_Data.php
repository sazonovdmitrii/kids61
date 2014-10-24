<?php
/**
 * @methods:
 * - get[Section]_[ConfigName]($defaultValue = '')
 */
class Gala_Galagiftshopsettings_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function __call($name, $args) {
		if (method_exists($this, $name))
			call_user_func_array(array($this, $name), $args);
			
		elseif (preg_match('/^get([^_][a-zA-Z0-9_]+)$/', $name, $m)) {
			$segs = explode('_', $m[1]);
			foreach ($segs as $i => $seg)
				$segs[$i] = strtolower(preg_replace('/([^A-Z])([A-Z])/', '$1_$2', $seg));

			$value = Mage::getStoreConfig('galagiftshop/'.implode('/', $segs));
			if (!$value) $value = @$args[0];
			return $value;
		}
		
		else 
			call_user_func_array(array($this, $name), $args);
	}       
    	
	public function getAllCssConfig() {            
        $h_bg_image = Mage::getStoreConfig('galagiftshop/header/head_bg_file') ? 
			'url(' . Mage::getBaseUrl('media') . 'background/' . Mage::getStoreConfig('galagiftshop/header/head_bg_file') . ')'
			: (Mage::getStoreConfig('galagiftshop/header/head_bg_image') ? 'url(../images/stripes/'.Mage::getStoreConfig('galagiftshop/header/head_bg_image').')' : '');
		
        $bd_bg_image = Mage::getStoreConfig('galagiftshop/body/bd_bg_file') ? 
			'url(' . Mage::getBaseUrl('media') . 'background/' . Mage::getStoreConfig('galagiftshop/body/bd_bg_file') . ')'
			: (Mage::getStoreConfig('galagiftshop/body/bd_bg_image') ? 'url(../images/stripes/'.Mage::getStoreConfig('galagiftshop/body/bd_bg_image').')' : '');
            
        $f_bg_image = Mage::getStoreConfig('galagiftshop/footer/foot_bg_file') ? 
			'url(' . Mage::getBaseUrl('media') . 'background/' . Mage::getStoreConfig('galagiftshop/footer/foot_bg_file') . ')'
			: (Mage::getStoreConfig('galagiftshop/footer/foot_bg_image') ? 'url(../images/stripes/'.Mage::getStoreConfig('galagiftshop/footer/foot_bg_image').')' : '');
        
        $page_bg_image = Mage::getStoreConfig('galagiftshop/general/page_bg_file') ? 
			'url(' . Mage::getBaseUrl('media') . 'background/' . Mage::getStoreConfig('galagiftshop/general/page_bg_file') . ')'
			: (Mage::getStoreConfig('galagiftshop/general/page_bg_image') ? 'url(../images/stripes/'.Mage::getStoreConfig('galagiftshop/general/page_bg_image').')' : '');
            
        // menu font and dropdown menu font
		if(Mage::getStoreConfig('galagiftshop/menu/tm_font') == "")	
            $tm_font	=	Mage::getStoreConfig('galagiftshop/typography/h5_font');
		else
            $tm_font	=	Mage::getStoreConfig('galagiftshop/menu/tm_font');
		
		if(Mage::getStoreConfig('galagiftshop/menu/dm_font') == "")
            $dm_font	=	Mage::getStoreConfig('galagiftshop/typography/general_font');
		else
            $dm_font	=	Mage::getStoreConfig('galagiftshop/menu/dm_font');
            	
		return array(
            'general_font' => Mage::getStoreConfig('galagiftshop/typography/general_font'),
			'h1_font' => Mage::getStoreConfig('galagiftshop/typography/h1_font'),
			'h2_font' => Mage::getStoreConfig('galagiftshop/typography/h2_font'),
			'h3_font' => Mage::getStoreConfig('galagiftshop/typography/h3_font'),
			'h4_font' => Mage::getStoreConfig('galagiftshop/typography/h4_font'),
			'h5_font' => Mage::getStoreConfig('galagiftshop/typography/h5_font'),
            'h6_font' => Mage::getStoreConfig('galagiftshop/typography/h6_font'),
            'additional_css_file' => Mage::getStoreConfig('galagiftshop/typography/additional_css_file'),
            'custom_css' => Mage::getStoreConfig('galagiftshop/typography/custom_css'),
            'page_bg_color' => Mage::getStoreConfig('galagiftshop/general/page_bg_color'),
            'page_bg_image' => $page_bg_image,
            'page_bg_position' => Mage::getStoreConfig('galagiftshop/general/page_bg_position'),
			'page_bg_repeat' => Mage::getStoreConfig('galagiftshop/general/page_bg_repeat'),                        
            'head_text_color' => Mage::getStoreConfig('galagiftshop/header/head_text_color'),
			'head_text2_color' => Mage::getStoreConfig('galagiftshop/header/head_text2_color'),
            'head_text3_color' => Mage::getStoreConfig('galagiftshop/header/head_text3_color'),
			'head_bg_color' => Mage::getStoreConfig('galagiftshop/header/head_bg_color'),
			'head_bg2_color' => Mage::getStoreConfig('galagiftshop/header/head_bg2_color'),
			'head_bg3_color' => Mage::getStoreConfig('galagiftshop/header/head_bg3_color'),
            'head_line_color' => Mage::getStoreConfig('galagiftshop/header/head_line_color'),
            'head_line2_color' => Mage::getStoreConfig('galagiftshop/header/head_line2_color'),
            'head_bg_image' => $h_bg_image,
            'head_bg_position' => Mage::getStoreConfig('galagiftshop/header/head_bg_position'),
			'head_bg_repeat' => Mage::getStoreConfig('galagiftshop/header/head_bg_repeat'),
            'tm_bg_color' => Mage::getStoreConfig('galagiftshop/menu/tm_bg_color'),			
			'tm_text_color' => Mage::getStoreConfig('galagiftshop/menu/tm_text_color'),
            'tm_hover_text_color' => Mage::getStoreConfig('galagiftshop/menu/tm_hover_text_color'),
			'tm_font' => $tm_font,
			'dm_bg_color' => Mage::getStoreConfig('galagiftshop/menu/dm_bg_color'),
            'dm_text_color' => Mage::getStoreConfig('galagiftshop/menu/dm_text_color'),
            'dm_text2_color' => Mage::getStoreConfig('galagiftshop/menu/dm_text2_color'),
            'dm_text3_color' => Mage::getStoreConfig('galagiftshop/menu/dm_text3_color'),
            'dm_hover_text_color' => Mage::getStoreConfig('galagiftshop/menu/dm_hover_text_color'),
            'dm_font' => $dm_font,
            'bd_bg_color' => Mage::getStoreConfig('galagiftshop/body/bd_bg_color'),
			'bd_bg_image' => $bd_bg_image,
            'bd_bg_position' => Mage::getStoreConfig('galagiftshop/body/bd_bg_position'),
			'bd_bg_repeat' => Mage::getStoreConfig('galagiftshop/body/bd_bg_repeat'),
			'bd_text_color' => Mage::getStoreConfig('galagiftshop/body/bd_text_color'),
			'bd_text2_color' => Mage::getStoreConfig('galagiftshop/body/bd_text2_color'),
			'bd_text3_color' => Mage::getStoreConfig('galagiftshop/body/bd_text3_color'),
            'bd_text4_color' => Mage::getStoreConfig('galagiftshop/body/bd_text4_color'),
			'bd_line_color' => Mage::getStoreConfig('galagiftshop/body/bd_line_color'),
            'bd_line2_color' => Mage::getStoreConfig('galagiftshop/body/bd_line2_color'),
            'bd_line3_color' => Mage::getStoreConfig('galagiftshop/body/bd_line3_color'),
            'bd_box_shadow' => Mage::getStoreConfig('galagiftshop/body/bd_box_shadow'),
			'bd_rounded_corner' => Mage::getStoreConfig('galagiftshop/body/bd_rounded_corner'),
            'foot_bg_color' => Mage::getStoreConfig('galagiftshop/footer/foot_bg_color'),
			'foot_bg_image' => $f_bg_image,
            'foot_bg_position' => Mage::getStoreConfig('galagiftshop/footer/foot_bg_position'),
			'foot_bg_repeat' => Mage::getStoreConfig('galagiftshop/footer/foot_bg_repeat'),
			'foot_text_color' => Mage::getStoreConfig('galagiftshop/footer/foot_text_color'),
            'foot_line_color' => Mage::getStoreConfig('galagiftshop/footer/foot_line_color'),
            'btn1_bg_color' => Mage::getStoreConfig('galagiftshop/button/btn1_bg_color'),
			'btn1_text_color' => Mage::getStoreConfig('galagiftshop/button/btn1_text_color'),
			'btn1_line_color' => Mage::getStoreConfig('galagiftshop/button/btn1_line_color'),
			'btn1_font' => Mage::getStoreConfig('galagiftshop/button/btn1_font'),
            'btn2_bg_color' => Mage::getStoreConfig('galagiftshop/button/btn2_bg_color'),
			'btn2_text_color' => Mage::getStoreConfig('galagiftshop/button/btn2_text_color'),
			'btn2_line_color' => Mage::getStoreConfig('galagiftshop/button/btn2_line_color'),
			'btn2_font' => Mage::getStoreConfig('galagiftshop/button/btn2_font'),
		);
	} 
	
	public function getImageBackgroundColor() {
		$color = Mage::getStoreConfig('galagiftshop/general/image_bgcolor');
		if (!$color) $color = '#ffffff';
		$color = str_replace('#', '', $color);
		return array(
			hexdec(substr($color, 0, 2)),
			hexdec(substr($color, 2, 2)),
			hexdec(substr($color, 4, 2))
		);
	}
	
    public function getCategoriesCustom($parent,$curId){
				
		try{
			$children = $parent->getChildrenCategories();
						
		}
		catch(Exception $e){
			return '';
		}
		return $children;
	}
	
	public function insertStaticBlock($dataBlock) {
		// insert a block to db if not exists
		$block = Mage::getModel('cms/block')->getCollection()->addFieldToFilter('identifier', $dataBlock['identifier'])->getFirstItem();
		if (!$block->getId())
			$block->setData($dataBlock)->save();
		return $block;
	}
	
	public function insertPage($dataPage) {
		$page = Mage::getModel('cms/page')->getCollection()->addFieldToFilter('identifier', $dataPage['identifier'])->getFirstItem();
		if (!$page->getId())
			$page->setData($dataPage)->save();
		return $page;
	}
    
    // For search by category
    public function getCategoriesCustomSearch($parent,$curId){
		$result = '';
		if($parent->getLevel() == 1){
            $result = "<option value='0'>".$this->getCatNameCustom($parent)."</option>";
		}			
		else{
			$result = "<option value='".$parent->getId()."' ";
			
			if($curId){
				if($curId	==	$parent->getId()) $result .= " selected='selected'";
			}
			$result .= ">".$this->getCatNameCustom($parent)."</option>";			
		}
		
		try{
			$children = $parent->getChildrenCategories();
			
			if(count($children) > 0){
				foreach($children as $cat){
					$result .= $this->getCategoriesCustomSearch($cat,$curId);
				}
			}
		}
		catch(Exception $e){
			return '';
		}
        //var_dump($result);
		return $result;
	}
	
	public function getCatNameCustom($category){
		$level = $category->getLevel();
		$html = '';
		for($i = 0;$i < $level;$i++){
			$html .= '&mdash;&ndash;';
		}
		if($level == 1)	return $html.' '.$this->__("Все категории");
		else return $html.' '.$category->getName();
	}
    
    public function getLabelProducts($id){
		$product = Mage::getModel('catalog/product')->load($id);
		$attributes = $product->getAttributes();
		$new = 'em_label_new';
		$newValue = 0;
		if(array_key_exists($new , $attributes)){
			$attributesobj = $attributes["{$new}"];
			$newValue = $attributesobj->getFrontend()->getValue($product);
			if($newValue=='Yes'){
				$newValue = 1;
			}else{
				$newValue = 0;
			}
		}
		$sale = 'em_label_saleoff';
		$saleValue = 0;
		if(array_key_exists($sale , $attributes)){
			$attributesobj = $attributes["{$sale}"];
			$saleValue = $attributesobj->getFrontend()->getValue($product);
			if($saleValue=='Yes'){
				$saleValue = 1;
			}else{
				$saleValue = 0;
			}
		}
		$best = 'em_label_bestseller';
		$bestValue = 0;
		if(array_key_exists($best , $attributes)){
			$attributesobj = $attributes["{$best}"];
			$bestValue = $attributesobj->getFrontend()->getValue($product);
			if($bestValue=='Yes'){
				$bestValue = 1;
			}else{
				$bestValue = 0;
			}
		}
		$html	=	"";
        if($newValue != 0){$htmnew="new";}
        if($saleValue != 0){$htmlsale="sale";};
        if($bestValue != 0){$htmlbest="bestseller";};
		if($newValue == 0 && $saleValue == 0 &&	$bestValue == 0 ){
			return $html;
		}else{
			$html	.=	'<span class="productlabels_icons">';
			if($newValue != 0)
				$html	.=		'<span class="label new"></span>';
			if($saleValue != 0)
				$html	.=		'<span class="label sale"></span>';
			if($bestValue != 0)
				$html	.=		'<span class="label bestseller"></span>';
			$html	.=	'</span>';

			return $html;
		}
	}
    
    public function checkMobilePhp() {
		require_once(Mage::getBaseDir('lib') . DS . 'em/Mobile_Detect.php');
		$detect = new Mobile_Detect();
        $checkmobile = $detect->isMobile();
        $checktablet = $detect->isTablet();
        if($checkmobile){
            if($checktablet){
                return 'false';
            }else{
                return 'true';
            }
            
        }else{
            return 'false';
        }
	}
    
    public function checkMobile() {
		require_once(Mage::getBaseDir('lib') . DS . 'em/Mobile_Detect.php');
		$detect = new Mobile_Detect();
        $checkmobile = $detect->isMobile();
        if($checkmobile){
            return 'true';            
        }else{
            return 'false';
        }
	}

    public function checkTabletPhp() {
		require_once(Mage::getBaseDir('lib') . DS . 'em/Mobile_Detect.php');
		$detect = new Mobile_Detect();
        $checktablet = $detect->isTablet();
        if($checktablet){
            return 'true';
        }else{
            return 'false';
        }
	}

	public function getActionReview(){
		$url = Mage::helper('core/url')->getCurrentUrl();
		$url_check = 'wishlist/index/configure';
		if(stripos($url,$url_check)):
			$id = Mage::registry('current_product')->getId();
			return Mage::getUrl('review/product/post/', array('id' => $id));
		else:
			$productId = Mage::app()->getRequest()->getParam('id', false);
        	return Mage::getUrl('review/product/post', array('id' => $productId));
		endif;
	}
}
