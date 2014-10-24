<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Tag
 * @copyright   Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Popular tags block
 *
 * @category   Mage
 * @package    Mage_Tag
 * @author      Magento Core Team <core@magentocommerce.com>
 */

class Gala_Galagiftshopsettings_Block_Popular extends Mage_Core_Block_Template
{
    protected $_tags;
    protected $_minPopularity;
    protected $_maxPopularity;

    protected function _loadTags()
    {
        if (empty($this->_tags)) {
            $this->_tags = array();

            $tags = Mage::getModel('tag/tag')->getPopularCollection()
                ->joinFields(Mage::app()->getStore()->getId())
                ->limit(20)
                ->load()
                ->getItems();

            if( count($tags) == 0 ) {
                return $this;
            }


            $this->_maxPopularity = reset($tags)->getPopularity();
            $this->_minPopularity = end($tags)->getPopularity();
            $range = $this->_maxPopularity - $this->_minPopularity;
            $range = ($range == 0) ? 1 : $range;
            foreach ($tags as $tag) {
                $tag->setRatio(($tag->getPopularity()-$this->_minPopularity)/$range);
                $this->_tags[$tag->getName()] = $tag;
            }
            ksort($this->_tags);
        }
        return $this;
    }

    public function getTags()
    {
        $this->_loadTags();
        return $this->_tags;
    }

    public function getMaxPopularity()
    {
        return $this->_maxPopularity;
    }

    public function getMinPopularity()
    {
        return $this->_minPopularity;
    }

    protected function _toHtml()
    {
        $setting = Mage::helper('galagiftshopsettings');        
        if (count($this->getTags()) > 0) {
            if($this->isEnableFlashtag()){
                if($setting->checkMobile()=='false'){
                    $this->setTemplate('tag/galagiftshop/popular.phtml');
                }
            }
            return parent::_toHtml();
        }
        return '';
    }

    public function TagSize(){
        $tagSize = array();
        $i=0;
        foreach ($this->getTags() as $_tag){
            $i++;
            if($i<=$this->getCount()){
                $tagSize[$_tag->getName()]= $_tag->getRatio();
            }
        }
        return $tagSize;
    }

    public function getFlashTag(){
        $data = array();
        $maxColor = substr($this->getMaxColor(),1);
        $hoverColor = substr($this->getHoverColor(),1);
        $nomalColor = substr($this->getNormalColor(),1);
        $backColor = substr($this->getBackground(),1);
        $data['tcolor'] = '0x'.$maxColor;
        $data['tcolor2'] = '0x'.$nomalColor;
        $data['hicolor'] = '0x'.$hoverColor;
        $data['speed'] = $this->getSpeed();
        $data['distr'] = 'true';
        $data['mode'] = 'tags';
        $background = '0x'.$backColor;
        $tagMaxSize = $this->getMaxSize();
        $tagMinSize = $this->getMinSize();
        $maxQty = $this->getTagSize();
        $minQty = $this->getTagSize();
        $path = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'galagiftshop/tagcloud.swf';
        $spread = $maxQty - $minQty;

        if ($spread == 0) {
            $spread = 1;
        }
        $step = ($tagMaxSize - $tagMinSize) / ($spread);
        $tagsHTML  = "";
        $i=0;
        foreach ($this->getTags() as $_tag){
            $i++;
            if($i<=$this->getCount()){
                $size = round($tagMinSize + ((($_tag->getRatio()) - $minQty) * $step));
                $text = $this->htmlEscape($_tag->getName());
                $url = $_tag->getTaggedProductsUrl();
                $tagsHTML .= '<a href="'.$url.'" style="'.$size.'">'.$text.'</a>';
            }
        }

        $data['tagcloud'] = '<tags>'.$tagsHTML.'</tags>';

        $flashVars = '';

        foreach($data as $var=>$val)
        {
            $flashVars .= (empty ($flashVars))?'':'&amp;';
            $flashVars .= "$var=".urlencode($val);
        }
        $html = '<embed id="flashtags_popular" width="230" height="230" flashvars="'.$flashVars.'" wmode="transparent" allowscriptaccess="always"
                 quality="high" bgcolor="'.$background.'" name="CloudFlash" src="'.$path.'" type="application/x-shockwave-flash"/>';
        return $html;
    }

    public function isEnableFlashtag(){
        return Mage::getStoreConfig('galagiftshop/flashtag/enabled');
    }

    public function getWidth(){
        return Mage::getStoreConfig('galagiftshop/flashtag/width');
    }

    public function getHeight(){
        return Mage::getStoreConfig('galagiftshop/flashtag/height');
    }

    public function getCount(){
        return Mage::getStoreConfig('galagiftshop/flashtag/count');
    }

    public function getBackground(){
        return Mage::getStoreConfig('galagiftshop/flashtag/back');
    }

    public function getMaxSize(){
        return Mage::getStoreConfig('galagiftshop/flashtag/max');
    }

    public function getMinSize(){
        return Mage::getStoreConfig('galagiftshop/flashtag/min');
    }

    public function getMaxColor(){
        return Mage::getStoreConfig('galagiftshop/flashtag/maxcolor');
    }

    public function getNormalColor(){
        return Mage::getStoreConfig('galagiftshop/flashtag/normal');
    }

    public function getHoverColor(){
        return Mage::getStoreConfig('galagiftshop/flashtag/hover');
    }
    
    public function getSpeed(){
        return Mage::getStoreConfig('galagiftshop/flashtag/speed');
    }
}
