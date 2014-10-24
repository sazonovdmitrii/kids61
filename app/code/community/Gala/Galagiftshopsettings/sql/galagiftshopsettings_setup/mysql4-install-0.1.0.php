<?php

$installer = $this;

$installer->startSetup();

/* Add Product Label */

if(!$installer->getAttributeId('catalog_product', 'em_label_new')){
$installer->addAttribute('catalog_product', 'em_label_new', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'EM Label New Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));
}

if(!$installer->getAttributeId('catalog_product', 'em_label_saleoff')){
$installer->addAttribute('catalog_product', 'em_label_saleoff', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'EM Label Sale Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));
}

if(!$installer->getAttributeId('catalog_product', 'em_label_bestseller')){
$installer->addAttribute('catalog_product', 'em_label_bestseller', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'EM Label Bestseller Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));
}


####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################
$helper = Mage::helper('galagiftshopsettings');
$block = Mage::getModel('cms/block');
$stores = array(0);
$prefixBlock = 'galagiftshop_';

// 1. GalaGiftShop Header Ad
$dataBlock = array(
	'title' => 'GalaGiftShop Header Ad',
	'identifier' => $prefixBlock.'header_ad',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="icon phone"><span class="customer-service">Customer Service: </span>{{config path="general/store_information/phone"}}</p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 2. GalaGiftShop Home Three Banner
$dataBlock = array(
	'title' => 'GalaGiftShop Home Three Banner',
	'identifier' => $prefixBlock.'home_three_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="home-banner">
<div class="box "><a href="#"><img class="fluid" src="{{skin url='images/home_banner_01.jpg'}}" alt="sample-banner" /></a></div>
<div class="box"><a href="#"><img class="fluid" src="{{skin url='images/home_banner_02.jpg'}}" alt="sample-banner" /></a></div>
<div class="box last"><a href="#"><img class="fluid" src="{{skin url='images/home_banner_03.jpg'}}" alt="sample-banner" /></a></div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 3. GalaGiftShop Sidebar Top Seller
$dataBlock = array(
	'title' => 'GalaGiftShop Sidebar Top Seller',
	'identifier' => $prefixBlock.'sidebar_top_seller',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="block block-topseller">
<div class="block-title"><strong><span>Top seller</span></strong></div>
<div class="block-content">{{widget type="bestsellerproducts/list" limit_count="5" thumbnail_width="87" thumbnail_height="87" show_product_name="true" show_thumbnail="true" show_description="false" show_price="true" show_reviews="true" show_addtocart="false" show_addto="false" show_label="false" choose_template="em_bestseller_products/bestseller_list.phtml"}}</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 4. GalaGiftShop Home New Products
$dataBlock = array(
	'title' => 'GalaGiftShop Home New Products',
	'identifier' => $prefixBlock.'home_new_products',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="new widgets_home">
<p class="home-title"><a href="{{config path='web/secure/base_url'}}furniture.html">View all products</a></p>
{{widget type="newproducts/list" limit_count="12" column_count="4" custom_class="set-top-left" order_by="name asc" frontend_title="New Products" thumbnail_width="215" thumbnail_height="215" show_product_name="true" show_thumbnail="true" show_description="false" show_price="true" show_reviews="true" show_addtocart="true" show_addto="false" show_label="true" choose_template="custom_template" custom_theme="em_new_products/new_home.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 5.GalaGiftShop Sidebar More Way To Shop
$dataBlock = array(
	'title' => 'GalaGiftShop Sidebar More Way To Shop',
	'identifier' => $prefixBlock.'sidebar_more_way_to_shop',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="block block-sample">
<div class="block-title"><strong><span>More way to shop</span></strong></div>
<div class="block-content">
<ul>
<li><a href="#">This is sample link.</a></li>
<li><a href="#">This is sample link</a></li>
<li><a href="#">This is sample link</a></li>
<li><a href="#">This is sample link</a></li>
<li><a href="#">This is sample link</a></li>
<li><a href="#">This is sample link</a></li>
<li><a href="#">This is sample link</a></li>
<li><a href="#">This is sample link</a></li>
</ul>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 6. GalaStylixx New Arrival
$dataBlock = array(
	'title' => 'GalaGiftShop Sidebar Follow Us',
	'identifier' => $prefixBlock.'sidebar_follow_us',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="block block-follow">
<div class="block-title"><strong><span>FOLLOW US ON</span></strong></div>
<div class="block-content">
<ul class="none">
<li><a class="icon facebook" title="facebook" href="#"><span>Facebook</span></a></li>
<li><a class="icon twitter" title="twitter" href="#"><span>Twitter</span></a></li>
<li><a class="icon flickr" title="flickr" href="#"><span>Flickr</span></a></li>
<li><a class="icon rss" title="rss" href="#"><span>Rss</span></a></li>
<li><a class="icon bingo" title="bingo" href="#"><span>Bingo</span></a></li>
</ul>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 7. GalaGiftShop Home Daily Sales
$dataBlock = array(
	'title' => 'GalaGiftShop Home Daily Sales',
	'identifier' => $prefixBlock.'home_daily_sales',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="sale widgets_home">
<p class="home-title"><a href="{{config path='web/secure/base_url'}}furniture.html">View all products</a></p>
{{widget type="saleproducts/list" order_by="name asc" limit_count="4" custom_class="set-top-left" frontend_title="Daily Sale" thumbnail_width="215" thumbnail_height="215" show_product_name="true" show_thumbnail="true" show_description="false" show_price="true" show_reviews="true" show_addtocart="true" show_addto="false" show_label="true" choose_template="custom_template" custom_theme="em_sale_products/sale_home.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 8. GalaStylixx Footer Payment
$dataBlock = array(
	'title' => 'GalaStylixx Footer Payment',
	'identifier' => $prefixBlock.'footer_payment',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><span class="custom-logo paymentmethods">Visa - Verified Visa - MasterCard  - MasterCard SecureCode - Paypal</span></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 8. GalaGiftShop Home Sample Block
$dataBlock = array(
	'title' => 'GalaGiftShop Home Sample Block',
	'identifier' => $prefixBlock.'home_sample_block',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>
<div class="widget-title">
<h2><span>This block text can be edited from theme admin panel!</span></h2>
</div>
<div class="sample-wrapper">
<div class="sample-block">
<div class="sample-content sample-left"><a title="" href="#"><img class="fluid" src="{{media url="wysiwyg/home_banner_04.jpg"}}" alt="" /> </a></div>
<div class="sample-content sample-right">
<p class="h5">Customizable design Unlimited Colors</p>
<p>You have never seen so many options! Change colors of dozens of elements, apply textures, upload background images...</p>
<p><a class="view-more" href="#">View more</a></p>
</div>
</div>
<div class="sample-block last">
<div class="sample-content sample-left"><a title="" href="#"><img class="fluid" src="{{media url="wysiwyg/home_banner_05.jpg"}}" alt="" /> </a></div>
<div class="sample-content sample-right">
<p class="h5">Responsive design Responsive Layout</p>
<p>GiftShop can be displayed on any screen. It is based on fluid grid system. If screen is resized, layout will be automatically adjusted...</p>
<p><a class="view-more" href="#">View more</a></p>
</div>
</div>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 1. GalaGiftShop Home Featured Products
$dataBlock = array(
	'title' => 'GalaGiftShop Home Featured Products',
	'identifier' => $prefixBlock.'home_featured_products',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="featured widgets_home">
<p class="home-title"><a href="{{config path='web/secure/base_url'}}furniture.html">View all products</a></p>
{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="16" frontend_title="Featured Products" thumbnail_width="100" thumbnail_height="100" show_product_name="false" show_thumbnail="true" show_description="false" show_price="false" show_reviews="false" show_addtocart="false" show_addto="false" show_label="false" choose_template="custom_template" custom_theme="em_featured_products/featured_home.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 2. GalaGiftShop Footer Payment
$dataBlock = array(
	'title' => 'GalaGiftShop Footer Payment',
	'identifier' => $prefixBlock.'footer_payment',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="footer-logo f-right"><a href="#"><span class="brand-logo visa">visa</span></a> <a href="#"><span class="brand-logo visa-verified">visa verified</span></a> <a href="#"><span class="brand-logo master">master</span></a> <a href="#"><span class="brand-logo master-secure">master secure</span></a> <a href="#"><span class="brand-logo paypal">paypal</span></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 3. GalaGiftShop Sidebar Banner
$dataBlock = array(
	'title' => 'GalaGiftShop Sidebar Banner',
	'identifier' => $prefixBlock.'sidebar_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="block"><a title="" href="#"><img class="fluid" src="{{media url="wysiwyg/sidebar_banner.jpg"}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 4. GalaGiftShop Sidebar Latest Review
$dataBlock = array(
	'title' => 'GalaGiftShop Sidebar Latest Review',
	'identifier' => $prefixBlock.'sidebar_latest_review',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{widget type="recentreviewproducts/list" limit_count="2" order_by="name asc" frontend_title="Latest Reviews" thumbnail_width="85" thumbnail_height="85" show_product_name="true" show_thumbnail="true" show_price="true" show_addtocart="false" show_addto="false" show_label="true" choose_template="em_recentviewproducts/list_products_simple.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 5.GalaGiftShop Category Sidebar Banner
$dataBlock = array(
	'title' => 'GalaGiftShop Category Sidebar Banner',
	'identifier' => $prefixBlock.'category_sidebar_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="block"><a title="" href="#"><img class="fluid" src="{{media url="wysiwyg/category_left_banner.jpg"}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 6. GalaGiftShop Details Sidebar Banner
$dataBlock = array(
	'title' => 'GalaGiftShop Details Sidebar Banner',
	'identifier' => $prefixBlock.'details_sidebar_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="block"><a title="" href="#"><img class="fluid" src="{{media url="wysiwyg/details_sidebar_banner.jpg"}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

// 7. GalaGiftShop Cart Sidebar Banner
$dataBlock = array(
	'title' => 'GalaGiftShop Cart Sidebar Banner',
	'identifier' => $prefixBlock.'cart_sidebar_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p class="block"><a title="" href="#"><img class="fluid" src="{{media url="wysiwyg/cart_sidebar.jpg"}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);


####################################################################################################
# INSERT PAGE
####################################################################################################
 
$prefixPage = 'galagiftshop_';
$page = Mage::getModel('cms/page');

// Home
$dataPage = array(
	'title'				=> 'Gala GiftShop Magento Theme - Homepage',
	'identifier' 		=> $prefixPage.'home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'two_columns_left',
	'content'			=> <<<EOB
<div>&nbsp;&nbsp;</div>
EOB
);
$helper->insertPage($dataPage);

// Typography
$dataPage = array(
	'title'				=> 'Gala Giftshop Typography',
	'identifier' 		=> $prefixPage.'typography',
	'stores'			=> $stores,
	'content_heading'	=> 'Typography',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>General Elements</h2>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<ul>
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<ol>
<li>Number List 1</li>
<ol>
<li>Number List 1.1</li>
<li>Number List 1.2</li>
<li>Number List 1.3</li>
<li>Number List 1.4</li>
</ol>
<li>Number List 2</li>
<li>Number List 3</li>
<li>Number List 4</li>
</ol><dl><dt>Definition title dt</dt><dd>Defination description dd</dd><dt>Definition title dt</dt><dd>Defination description dd</dd></dl>
<p><code>Code tag:&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
<blockquote>
<p>block quote&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</blockquote>
<div class="box f-left">element with class <strong>.f-left</strong></div>
<div class="box f-right">element with class <strong>.f-right</strong></div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h2>Tables</h2>
<p>Table with class <strong>.data-table</strong></p>
<table class="data-table" style="width: 100%;" border="0">
<thead>
<tr><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th></tr>
</thead>
<tbody>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr class="last">
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Custom CSS Classes</h2>
<p class="small">tag <strong>small</strong> and class <strong>.small</strong></p>
<p class="underline">element with class <strong>.underline</strong></p>
<p><strong>ul.none</strong> and <strong>ol.none</strong>:</p>
<ul class="none">
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<p><strong>ul.hoz</strong> and <strong>ol.hoz</strong>:</p>
<ul class="hoz">
<li>Bullet List 1</li>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<div class="box">
<p>paragraph with class <strong>.box</strong>:</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<p class="bottom">Paragraph with class <strong>.bottom</strong> always has margin-bottom = 0.</p>
<p>Add class <strong>.hide-lte2</strong> to hide element when screen's width less than 1280px.</p>
<p class="box hide-lte2">This block will disappear when resize window less than 1280px</p>
<p>Add class <strong>.hide-lte1</strong> to hide element when screen's width less than 980px.</p>
<p class="box hide-lte1">This block will disappear when resize window less than 980px</p>
<p>Add class <strong>.hide-lte0</strong> to hide element when screen's width less than 760px.</p>
<p class="box hide-lte0">This block will disappear when resize window less than 760px</p>
<p>&nbsp;</p>
<h2>Icons</h2>
<table class="data-table" border="0">
<tbody>
<tr class="last">
<td align="center" valign="top">
<p>.icon.facebook</p>
<p><span class="icon facebook">span.icon.facebook</span></p>
</td>
<td align="center" valign="top">
<p>.icon.twitter</p>
<p><span class="icon twitter">span.icon.twitter</span></p>
</td>
<td align="center" valign="top">
<p>.icon.flickr</p>
<p><span class="icon flickr">span.icon.flickr</span></p>
</td>
<td align="center" valign="top">
<p>.icon.rss</p>
<p><span class="icon rss">span.icon.rss</span></p>
</td>
<td align="center" valign="top">
<p>.icon.bingo</p>
<p><span class="icon bingo">span.icon.bingo</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Logo</h2>
<table class="data-table" border="0">
<tbody>
<tr class="last">
<td align="center" valign="top">
<p>.brand-logo.visa</p>
<p><span class="brand-logo visa">span.brand-logo.visa</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.visa-verified</p>
<p><span class="brand-logo visa-verified">span.brand-logo.visa-verified</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.master</p>
<p><span class="brand-logo master">span.brand-logo.master</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.master-secure</p>
<p><span class="brand-logo master-secure">span.brand-logo.master-secure</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.paypal</p>
<p><span class="brand-logo paypal">span.brand-logo.paypal</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Label</h2>
<table class="data-table" border="0">
<tbody>
<tr class="last">
<td align="center" valign="top">
<p>.icon.new</p>
<div style="position: relative; min-height: 80px;">
<p class="productlabels_icons"><span class="label new">span.icon.new</span></p>
</div>
</td>
<td align="center" valign="top">
<p>.icon.sale</p>
<div style="position: relative; min-height: 80px;">
<p class="productlabels_icons"><span class="label sale">span.icon.sale</span></p>
</div>
</td>
<td align="center" valign="top">
<p>.icon.bestseller</p>
<div style="position: relative; min-height: 80px;">
<p class="productlabels_icons"><span class="label bestseller">span.icon.bestseller</span></p>
</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>image with class <strong>.fluid</strong>:</p>
<p><img class="fluid" title="image with class .fluid" src="{{media url="wysiwyg/sidebar_banner.jpg"}}" alt="image with class .fluid" /></p>
EOB
);
$helper->insertPage($dataPage);

// Widgets
$dataPage = array(
	'title'				=> 'Gala GiftShop Widgets Demo',
	'identifier' 		=> $prefixPage.'widgets',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>Demo EM Slideshow Widget</h2>
<div>{{widget type="slideshow2/slideshow2" slideshow="1"}}</div>
<hr />
<h2>Demo EM New Products Widget</h2>
<h3>Demo List View</h3>
<div>{{widget type="newproducts/list" limit_count="3" order_by="name asc" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_list.phtml"}}</div>
<hr />
<h3>Demo Grid View</h3>
<div>{{widget type="newproducts/list" limit_count="3" order_by="name asc" item_width="195" thumbnail_width="195" thumbnail_height="200" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_grid.phtml"}}</div>
<hr />
<h2>Demo EM Bestseller Products Widget</h2>
<h3>Demo List View</h3>
<div>{{widget type="bestsellerproducts/list" limit_count="3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_list.phtml"}}</div>
<hr />
<h3>Demo Grid View</h3>
<div>{{widget type="bestsellerproducts/list" limit_count="3" item_width="195" thumbnail_width="195" thumbnail_height="200" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_grid.phtml"}}</div>
<hr />
<h2>Demo EM Featured Products Widget</h2>
<h3>Demo List View</h3>
<div>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</div>
<hr />
<h3>Demo Grid View</h3>
<div>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="3" item_width="195" thumbnail_width="195" thumbnail_height="200" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml"}}</div>
<hr />
<h2>Demo EM Sale Products Widget</h2>
<h3>Demo List View</h3>
<div>{{widget type="saleproducts/list" order_by="name asc" limit_count="3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_list.phtml"}}</div>
<hr />
<h3>Demo Grid View</h3>
<div>{{widget type="saleproducts/list" order_by="name asc" limit_count="3" item_width="195" thumbnail_width="195" thumbnail_height="200" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_grid.phtml"}}</div>
<hr />
<h2>Demo EM Recent Reviewed Products Widget</h2>
<h3>Demo List View</h3>
<div>{{widget type="recentreviewproducts/list" limit_count="3" order_by="name asc" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_price="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_recentviewproducts/list_products_simple.phtml"}}</div>
<hr />
<h3>Demo Grid View</h3>
<div>{{widget type="recentreviewproducts/list" limit_count="3" order_by="name asc" item_width="195" thumbnail_width="195" thumbnail_height="200" show_product_name="true" show_thumbnail="true" show_price="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_recentviewproducts/grid_products_simple.phtml"}}</div>
EOB
);
$helper->insertPage($dataPage);


####################################################################################################
# ADD MAIN SLIDESHOW
####################################################################################################
# Gala Stylixx Main Slideshow
if(!$installer->tableExists($installer->getTable('galagiftshopsettings/slider'))){
$table = $installer->getConnection()
    ->newTable($installer->getTable('galagiftshopsettings/slider'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Slideshow ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 100, array(
        ), 'Slideshow name')
	->addColumn('images', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'images')
	->addColumn('slider_type', Varien_Db_Ddl_Table::TYPE_VARCHAR, 20, array(
        ), 'Slideshow type')
	->addColumn('slider_params', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'Slideshow params')
	->addColumn('delay', Varien_Db_Ddl_Table::TYPE_VARCHAR, 10, array(
        ), 'Slideshow delay')
	->addColumn('touch', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow touch')
	->addColumn('stop_hover', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop hover')
	->addColumn('shuffle_mode', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow shuffle mode')
	->addColumn('stop_slider', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop slider')
	->addColumn('stop_after_loop', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop after loop')
	->addColumn('stop_at_slide', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop at slide')
	->addColumn('position', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'position')
	->addColumn('appearance', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'appearance')
	->addColumn('navigation', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'navigation')
	->addColumn('thumbnail', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'thumbnail')
	->addColumn('visibility', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'visibility')
	->addColumn('trouble', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'trouble')
    ->addColumn('creation_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Slideshow Creation Time')
    ->addColumn('update_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Slideshow Modification Time')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
        'default'   => '0',
        ), 'Is Slideshow Active')
    ->setComment('EM Slideshow2 Slider Table');
$installer->getConnection()->createTable($table);
}

$model = Mage::getModel('galagiftshopsettings/slider');
$model->setData(array(
	'name' => "GalaGiftShop Main Slideshow",
	'images' => <<<EOB
YTozOntpOjA7YTo2OntzOjM6InVybCI7czozMjoiMTM3MzYxMzg1NF8wX3NsaWRlX2Jhbm5lcl8wMS5qcGciO3M6NToidHJhbnMiO3M6NDoiZGVtbyI7czoxMDoic2xvdGFtb3VudCI7czoxOiI3IjtzOjQ6ImxpbmsiO3M6MTQ6ImZ1cm5pdHVyZS5odG1sIjtzOjg6InBvc2l0aW9uIjtzOjE6IjAiO3M6NDoiaW5mbyI7YTo0OntpOjA7YTo5OntzOjQ6InRleHQiO3M6MTY6IjxwPmJrZ19jb2xvcjwvcD4iO3M6NToiY2xhc3MiO3M6OToiYmtnX2NvbG9yIjtzOjU6InN0YXJ0IjtzOjQ6IjEwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MToiMCI7czo2OiJkYXRhX3kiO3M6MzoiMzM1IjtzOjk6ImFuaW1hdGlvbiI7czozOiJsZmIiO3M6NjoiZWFzaW5nIjtzOjE0OiJlYXNlSW5PdXRRdWludCI7czo1OiJzcGVlZCI7czo0OiIxMDAwIjt9aToxO2E6OTp7czo0OiJ0ZXh0IjtzOjk1OiI8cCBzdHlsZT0iZm9udC1zaXplOjM4MCU7Y29sb3I6I2VlZTAyOTtmb250LWZhbWlseTpMb2JzdGVyLE15cmlhZCBQcm87bGluZS1oZWlnaHQ6MSI+DQpTaXRhPC9wPiI7czo1OiJjbGFzcyI7czowOiIiO3M6NToic3RhcnQiO3M6NDoiMjAwMCI7czozOiJlbmQiO3M6MDoiIjtzOjY6ImRhdGFfeCI7czoyOiIyNSI7czo2OiJkYXRhX3kiO3M6MzoiMzQwIjtzOjk6ImFuaW1hdGlvbiI7czoxMjoicmFuZG9tcm90YXRlIjtzOjY6ImVhc2luZyI7czoxMzoiZWFzZUluRWxhc3RpYyI7czo1OiJzcGVlZCI7czo0OiIxMDAwIjt9aToyO2E6OTp7czo0OiJ0ZXh0IjtzOjEwMjoiPHAgc3R5bGU9ImZvbnQtc2l6ZTozODAlO2NvbG9yOiNmZmY7Zm9udC1mYW1pbHk6TG9ic3RlcixNeXJpYWQgUHJvO2xpbmUtaGVpZ2h0OjEiPg0KVm9sdXB0YXRlbSAgIC88L3A+IjtzOjU6ImNsYXNzIjtzOjA6IiI7czo1OiJzdGFydCI7czo0OiIzMDAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjM6IjExMCI7czo2OiJkYXRhX3kiO3M6MzoiMzQwIjtzOjk6ImFuaW1hdGlvbiI7czoxMjoicmFuZG9tcm90YXRlIjtzOjY6ImVhc2luZyI7czoxMzoiZWFzZUluT3V0U2luZSI7czo1OiJzcGVlZCI7czo0OiIxMDAwIjt9aTozO2E6OTp7czo0OiJ0ZXh0IjtzOjE5MToiPHA+TmVtbyBlbmltIGlwc2FtIHZvbHVwdGF0ZW0gcXVpYSB2b2x1cHRhcyBzaXQgYXNwZXJuYXR1ciBhdXQgb2RpdCBhdXQgZnVnaXQsPGJyLz4gc2VkIHF1aWEgY29uc2VxdXVudHVyIG1hZ25pIGRvbG9yZXMgZW9zIHF1aSByYXRpb25lIHZvbHVwdGF0ZW0gc2VxdWkgPGJyLz4gbmVzY2l1bnQgZG9sb3JlbSBxdWlhIGFtZXQuIDwvcD4iO3M6NToiY2xhc3MiO3M6NDoiZGVzYyI7czo1OiJzdGFydCI7czo0OiI0MDAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjM6IjM3MCI7czo2OiJkYXRhX3kiO3M6MzoiMzQ0IjtzOjk6ImFuaW1hdGlvbiI7czozOiJsZnIiO3M6NjoiZWFzaW5nIjtzOjEzOiJlYXNlSW5PdXRFeHBvIjtzOjU6InNwZWVkIjtzOjQ6IjEwMDAiO319fWk6MTthOjY6e3M6MzoidXJsIjtzOjMyOiIxMzczNjEzODU0XzFfc2xpZGVfYmFubmVyXzAyLmpwZyI7czo1OiJ0cmFucyI7czo0OiJkZW1vIjtzOjEwOiJzbG90YW1vdW50IjtzOjE6IjciO3M6NDoibGluayI7czoxMjoiYXBwYXJlbC5odG1sIjtzOjg6InBvc2l0aW9uIjtzOjE6IjAiO3M6NDoiaW5mbyI7YTo0OntpOjA7YTo5OntzOjQ6InRleHQiO3M6MTY6IjxwPmJrZ19jb2xvcjwvcD4iO3M6NToiY2xhc3MiO3M6OToiYmtnX2NvbG9yIjtzOjU6InN0YXJ0IjtzOjQ6IjEwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MToiMCI7czo2OiJkYXRhX3kiO3M6MzoiMzM1IjtzOjk6ImFuaW1hdGlvbiI7czozOiJsZmwiO3M6NjoiZWFzaW5nIjtzOjE1OiJlYXNlSW5PdXRCb3VuY2UiO3M6NToic3BlZWQiO3M6NDoiMTAwMCI7fWk6MTthOjk6e3M6NDoidGV4dCI7czo5NToiPHAgc3R5bGU9ImZvbnQtc2l6ZTozODAlO2NvbG9yOiNlZWUwMjk7Zm9udC1mYW1pbHk6TG9ic3RlcixNeXJpYWQgUHJvO2xpbmUtaGVpZ2h0OjEiPg0KU2l0YTwvcD4iO3M6NToiY2xhc3MiO3M6MDoiIjtzOjU6InN0YXJ0IjtzOjQ6IjIwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MjoiMjUiO3M6NjoiZGF0YV95IjtzOjM6IjM0MCI7czo5OiJhbmltYXRpb24iO3M6MzoibGZiIjtzOjY6ImVhc2luZyI7czoxMjoiZWFzZU91dEN1YmljIjtzOjU6InNwZWVkIjtzOjQ6IjEwMDAiO31pOjI7YTo5OntzOjQ6InRleHQiO3M6MTAyOiI8cCBzdHlsZT0iZm9udC1zaXplOjM4MCU7Y29sb3I6I2ZmZjtmb250LWZhbWlseTpMb2JzdGVyLE15cmlhZCBQcm87bGluZS1oZWlnaHQ6MSI+DQpWb2x1cHRhdGVtICAgLzwvcD4iO3M6NToiY2xhc3MiO3M6MDoiIjtzOjU6InN0YXJ0IjtzOjQ6IjMwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MzoiMTEwIjtzOjY6ImRhdGFfeSI7czozOiIzNDAiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmbCI7czo2OiJlYXNpbmciO3M6MTI6ImVhc2VPdXRRdWludCI7czo1OiJzcGVlZCI7czo0OiIxMDAwIjt9aTozO2E6OTp7czo0OiJ0ZXh0IjtzOjE5MToiPHA+TmVtbyBlbmltIGlwc2FtIHZvbHVwdGF0ZW0gcXVpYSB2b2x1cHRhcyBzaXQgYXNwZXJuYXR1ciBhdXQgb2RpdCBhdXQgZnVnaXQsPGJyLz4gc2VkIHF1aWEgY29uc2VxdXVudHVyIG1hZ25pIGRvbG9yZXMgZW9zIHF1aSByYXRpb25lIHZvbHVwdGF0ZW0gc2VxdWkgPGJyLz4gbmVzY2l1bnQgZG9sb3JlbSBxdWlhIGFtZXQuIDwvcD4iO3M6NToiY2xhc3MiO3M6NDoiZGVzYyI7czo1OiJzdGFydCI7czo0OiI0MDAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjM6IjM3MCI7czo2OiJkYXRhX3kiO3M6MzoiMzQ0IjtzOjk6ImFuaW1hdGlvbiI7czoxMjoicmFuZG9tcm90YXRlIjtzOjY6ImVhc2luZyI7czoxMzoiZWFzZUluT3V0U2luZSI7czo1OiJzcGVlZCI7czo0OiIxMDAwIjt9fX1pOjI7YTo2OntzOjM6InVybCI7czozMjoiMTM3MzYxMzg1NF8yX3NsaWRlX2Jhbm5lcl8wMy5qcGciO3M6NToidHJhbnMiO3M6NDoiZGVtbyI7czoxMDoic2xvdGFtb3VudCI7czoxOiI3IjtzOjQ6ImxpbmsiO3M6MTY6ImVsZWN0cm9uaWNzLmh0bWwiO3M6ODoicG9zaXRpb24iO3M6MToiMCI7czo0OiJpbmZvIjthOjQ6e2k6MDthOjk6e3M6NDoidGV4dCI7czoxNjoiPHA+YmtnX2NvbG9yPC9wPiI7czo1OiJjbGFzcyI7czo5OiJia2dfY29sb3IiO3M6NToic3RhcnQiO3M6NDoiMTAwMCI7czozOiJlbmQiO3M6MDoiIjtzOjY6ImRhdGFfeCI7czoxOiIwIjtzOjY6ImRhdGFfeSI7czozOiIzMzUiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmciI7czo2OiJlYXNpbmciO3M6MTQ6ImVhc2VJbk91dFF1aW50IjtzOjU6InNwZWVkIjtzOjQ6IjEwMDAiO31pOjE7YTo5OntzOjQ6InRleHQiO3M6OTU6IjxwIHN0eWxlPSJmb250LXNpemU6MzgwJTtjb2xvcjojZWVlMDI5O2ZvbnQtZmFtaWx5OkxvYnN0ZXIsTXlyaWFkIFBybztsaW5lLWhlaWdodDoxIj4NClNpdGE8L3A+IjtzOjU6ImNsYXNzIjtzOjA6IiI7czo1OiJzdGFydCI7czo0OiIyMDAwIjtzOjM6ImVuZCI7czowOiIiO3M6NjoiZGF0YV94IjtzOjI6IjI1IjtzOjY6ImRhdGFfeSI7czozOiIzNDAiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmbCI7czo2OiJlYXNpbmciO3M6MTQ6ImVhc2VJbk91dEN1YmljIjtzOjU6InNwZWVkIjtzOjQ6IjEwMDAiO31pOjI7YTo5OntzOjQ6InRleHQiO3M6MTAyOiI8cCBzdHlsZT0iZm9udC1zaXplOjM4MCU7Y29sb3I6I2ZmZjtmb250LWZhbWlseTpMb2JzdGVyLE15cmlhZCBQcm87bGluZS1oZWlnaHQ6MSI+DQpWb2x1cHRhdGVtICAgLzwvcD4iO3M6NToiY2xhc3MiO3M6MDoiIjtzOjU6InN0YXJ0IjtzOjQ6IjMwMDAiO3M6MzoiZW5kIjtzOjA6IiI7czo2OiJkYXRhX3giO3M6MzoiMTEwIjtzOjY6ImRhdGFfeSI7czozOiIzNDAiO3M6OToiYW5pbWF0aW9uIjtzOjM6ImxmYiI7czo2OiJlYXNpbmciO3M6MTM6ImVhc2VJbk91dEJhY2siO3M6NToic3BlZWQiO3M6NDoiMTAwMCI7fWk6MzthOjk6e3M6NDoidGV4dCI7czoxOTE6IjxwPk5lbW8gZW5pbSBpcHNhbSB2b2x1cHRhdGVtIHF1aWEgdm9sdXB0YXMgc2l0IGFzcGVybmF0dXIgYXV0IG9kaXQgYXV0IGZ1Z2l0LDxici8+IHNlZCBxdWlhIGNvbnNlcXV1bnR1ciBtYWduaSBkb2xvcmVzIGVvcyBxdWkgcmF0aW9uZSB2b2x1cHRhdGVtIHNlcXVpIDxici8+IG5lc2NpdW50IGRvbG9yZW0gcXVpYSBhbWV0LiA8L3A+IjtzOjU6ImNsYXNzIjtzOjQ6ImRlc2MiO3M6NToic3RhcnQiO3M6NDoiNDAwMCI7czozOiJlbmQiO3M6MDoiIjtzOjY6ImRhdGFfeCI7czozOiIzNzAiO3M6NjoiZGF0YV95IjtzOjM6IjM0NCI7czo5OiJhbmltYXRpb24iO3M6NDoiZmFkZSI7czo2OiJlYXNpbmciO3M6MTM6ImVhc2VPdXRCb3VuY2UiO3M6NToic3BlZWQiO3M6NDoiMTAwMCI7fX19fQ==
EOB
	,
	'slider_type' => 'fullwidth',
	'slider_params' => <<<EOB
a:22:{s:10:"size_width";s:3:"930";s:11:"size_height";s:3:"400";s:14:"screen_width_1";s:4:"1200";s:14:"slider_width_1";s:3:"740";s:14:"screen_width_2";s:3:"980";s:14:"slider_width_2";s:3:"550";s:14:"screen_width_3";s:3:"760";s:14:"slider_width_3";s:3:"460";s:14:"screen_width_4";s:3:"510";s:14:"slider_width_4";s:3:"460";s:14:"screen_width_5";s:3:"480";s:14:"slider_width_5";s:3:"300";s:14:"screen_width_6";s:3:"300";s:14:"slider_width_6";s:3:"300";s:14:"screen_width_7";s:0:"";s:14:"slider_width_7";s:0:"";s:14:"screen_width_8";s:0:"";s:14:"slider_width_8";s:0:"";s:14:"screen_width_9";s:0:"";s:14:"slider_width_9";s:0:"";s:15:"screen_width_10";s:0:"";s:15:"slider_width_10";s:0:"";}
EOB
	,
	'delay' =>'7000',
	'touch' =>'on',
	'stop_hover' =>'on',
	'shuffle_mode' =>'off',
	'stop_slider' =>'off',
	'stop_after_loop' =>'0',
	'stop_at_slide' =>'1',
	'position' => <<<EOB
a:5:{s:4:"type";s:6:"center";s:6:"mg_top";s:1:"0";s:9:"mg_bottom";s:1:"0";s:7:"mg_left";s:1:"0";s:8:"mg_right";s:1:"0";}
EOB
	,
	'appearance' => <<<EOB
a:7:{s:11:"shadow_type";s:1:"0";s:9:"show_time";s:4:"true";s:13:"time_position";s:3:"top";s:8:"bg_color";s:0:"";s:7:"padding";s:1:"0";s:11:"show_bg_img";s:5:"false";s:6:"bg_img";s:0:"";}
EOB
	,
	'navigation' => <<<EOB
a:7:{s:8:"nav_type";s:6:"bullet";s:10:"nav_arrows";s:4:"none";s:9:"nav_style";s:9:"round-old";s:14:"nav_offset_hor";s:1:"0";s:15:"nav_offset_vert";s:2:"20";s:13:"nav_always_on";s:4:"true";s:11:"hide_thumbs";s:3:"200";}
EOB
	,
	'thumbnail' => <<<EOB
a:3:{s:11:"thumb_width";s:3:"100";s:12:"thumb_height";s:2:"50";s:12:"thumb_amount";s:1:"5";}
EOB
	,
	'visibility' => <<<EOB
a:3:{s:17:"hide_slider_under";s:1:"0";s:25:"hide_defined_layers_under";s:1:"0";s:21:"hide_all_layers_under";s:1:"0";}
EOB
	,
	'trouble' => <<<EOB
a:2:{s:17:"jquery_noconflict";s:2:"on";s:10:"js_to_body";s:5:"false";}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$slideshow_id = $model->getId();

$dataBlock = array(
	'title' => 'GalaGiftShop Main Slideshow',
	'identifier' => $prefixBlock.'main_slideshow',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{widget type="slideshow2/slideshow2" slideshow="$slideshow_id"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);


####################################################################################################
# ADD MEGAMENU PRO
####################################################################################################

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('megamenupro')} (
  `megamenupro_id` int(11) unsigned NOT NULL auto_increment, 
  `name` varchar(255) NOT NULL default '',
  `type` smallint(6) NOT NULL default '0',
  `content` text NOT NULL default '',
  `css_class` varchar(255) NULL,
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`megamenupro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

# create menu of theme GalaGiftShop Main Menu
$model = Mage::getModel('galagiftshopsettings/megamenupro');
$model->setData(array(
	'name' => "GalaGiftShop Main Menu",
	'type' => "1",
	'css_class' => "main-menu",
	'content' => <<<EOB
a:39:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"Dolor sit";s:8:"sublabel";s:0:"";s:3:"url";s:51:"{{config path="web/secure/base_url"}}furniture.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_10";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:2;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:3;a:5:{s:4:"type";s:4:"text";s:4:"text";s:292:"PGg1PlZlc3RpYnVsdW0gbG9yZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjE1In19CjxoNT5WZXN0aWJ1bHVtIGxvcmU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxNSJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:4;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:5;a:5:{s:4:"type";s:4:"text";s:4:"text";s:996:"PGg1PlN1c3BlbmRpc3NlIHJpc3VzPC9oNT4KPHA+e3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTIifX08L3A+CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgo8cD57e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMCJ9fTwvcD4KPGRpdiBjbGFzcz0iY2xzX3RpdGxlIj5JdGFxdWUgZWFydW08L2Rpdj4KPGRpdiBjbGFzcz0iY2xzX2JpZ3RpdGxlIj5lbXBvcmlidXMgZXV0IHNpdDwvZGl2Pgo8ZGl2IGNsYXNzPSJjbHNfbnVtIj4yMDEyPC9kaXY+CjxkaXYgY2xhc3M9Im5vX3F1aWNrc2hvcCI+e3t3aWRnZXQgdHlwZT0ibmV3cHJvZHVjdHMvbGlzdCIgbGltaXRfY291bnQ9IjEiIGN1c3RvbV9jbGFzcz0iY3VzdG9tLW1lbnUiIG9yZGVyX2J5PSJuYW1lIGFzYyIgdGh1bWJuYWlsX3dpZHRoPSIyMzgiIHRodW1ibmFpbF9oZWlnaHQ9IjIzOCIgc2hvd19wcm9kdWN0X25hbWU9InRydWUiIHNob3dfdGh1bWJuYWlsPSJ0cnVlIiBzaG93X2Rlc2NyaXB0aW9uPSJ0cnVlIiBzaG93X3ByaWNlPSJ0cnVlIiBzaG93X3Jldmlld3M9InRydWUiIHNob3dfYWRkdG9jYXJ0PSJ0cnVlIiBzaG93X2FkZHRvPSJ0cnVlIiBzaG93X2xhYmVsPSJ0cnVlIiBjaG9vc2VfdGVtcGxhdGU9ImVtX25ld19wcm9kdWN0cy9uZXdfZ3JpZC5waHRtbCJ9fTwvZGl2Pg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:6;a:8:{s:4:"type";s:4:"link";s:5:"label";s:13:"Handmade Gift";s:8:"sublabel";s:0:"";s:3:"url";s:53:"{{config path="web/secure/base_url"}}electronics.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:7;a:8:{s:4:"type";s:4:"link";s:5:"label";s:7:"Clothes";s:8:"sublabel";s:0:"";s:3:"url";s:49:"{{config path="web/secure/base_url"}}apparel.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:8;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"Tempor ut";s:8:"sublabel";s:0:"";s:3:"url";s:51:"{{config path="web/secure/base_url"}}furniture.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:9;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_10";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:10;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:11;a:5:{s:4:"type";s:4:"text";s:4:"text";s:288:"PGg1PlZlc3RpYnVsdW0gbG9yZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjE1In19CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:12;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:13;a:5:{s:4:"type";s:4:"text";s:4:"text";s:772:"PGg1PlN1c3BlbmRpc3NlIHJpc3VzPC9oNT4KPHA+e3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTIifX08L3A+CjxkaXYgY2xhc3M9InRpdGxlX21lbnUxIj5JdGFxdWUgZWFydW0gMjAxMzwvZGl2Pgo8ZGl2IGNsYXNzPSJub3JtYWxfdGl0bGUiPmVtcG9yaWJ1cyBldXQgc2l0IDwvZGl2Pgo8cCBjbGFzcz0iZGVzYyI+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVlciBhZGlwaXNjaW5nIGVsaXQsIHNlZCBkaWFtIG5vbnVtbXkgbmliaCA8L3A+CjxkaXYgY2xhc3M9InByaWNlLWJveCI+CjxzcGFuIGNsYXNzPXByaWNlLWxhYmVsIj5mcm9tPC9zcGFuPgo8c3BhbiBjbGFzcz0icHJpY2UiPiQxOTkuOTk8L3NwYW4+CjwvZGl2Pgo8ZGl2IGNsYXNzPSJtZW51X3Byb2R1Y3QiPjxhIHRpdGxlPSJzYW1wbGUgYmFubmVyIiBjbGFzcz0iaW1nX2Jhbm5lciIgaHJlZj0iIyI+PGltZyBjbGFzcz0iZmx1aWQiIHNyYz0ie3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVudTIuanBnIn19IiBhbHQ9IiIgLz48L2E+PC9kaXY+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:14;a:8:{s:4:"type";s:4:"link";s:5:"label";s:16:"Labore et dolore";s:8:"sublabel";s:0:"";s:3:"url";s:49:"{{config path="web/secure/base_url"}}apparel.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:15;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_10";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:16;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:17;a:5:{s:4:"type";s:4:"text";s:4:"text";s:580:"PGg1PlZlc3RpYnVsdW0gbG9yZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjE1In19CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMCJ9fQo8aDU+VmVzdGlidWx1bSBsb3JlPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTgifX0KPGg1PlN1c3BlbmRpc3NlIHJpc3VzPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTIifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:18;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:19;a:5:{s:4:"type";s:4:"text";s:4:"text";s:704:"PHAgY2xhc3M9InRpdGxlX21lbnUiPk9QVElPIENVTVFVRSAyMDEzPHNwYW4gY2xhc3M9ImFycm93Ij5hcnJvdzwvc3Bhbj48L3A+CjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ZXIgYWRpcGlzY2luZyBlbGl0LCBzZWQgZGlhbSBub251bW15IG5pYmg8L3A+CjxkaXYgY2xhc3M9Im5vX3F1aWNrc2hvcCI+e3t3aWRnZXQgdHlwZT0ibmV3cHJvZHVjdHMvbGlzdCIgbGltaXRfY291bnQ9IjEiIG9yZGVyX2J5PSJuYW1lIGFzYyIgdGh1bWJuYWlsX3dpZHRoPSIyMzgiIHRodW1ibmFpbF9oZWlnaHQ9IjIzOCIgc2hvd19wcm9kdWN0X25hbWU9InRydWUiIHNob3dfdGh1bWJuYWlsPSJ0cnVlIiBzaG93X2Rlc2NyaXB0aW9uPSJ0cnVlIiBzaG93X3ByaWNlPSJ0cnVlIiBzaG93X3Jldmlld3M9InRydWUiIHNob3dfYWRkdG9jYXJ0PSJ0cnVlIiBzaG93X2FkZHRvPSJ0cnVlIiBzaG93X2xhYmVsPSJ0cnVlIiBjaG9vc2VfdGVtcGxhdGU9ImVtX25ld19wcm9kdWN0cy9uZXdfZ3JpZC5waHRtbCJ9fTwvZGl2Pg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:20;a:8:{s:4:"type";s:4:"link";s:5:"label";s:11:"Accessories";s:8:"sublabel";s:0:"";s:3:"url";s:49:"{{config path="web/secure/base_url"}}apparel.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:21;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:22;a:5:{s:4:"type";s:4:"text";s:4:"text";s:436:"PGg1PlN1c3BlbmRpc3NlIHJpc3VzPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTIifX0KPGg1PlBlbGxlbnRlc3F1ZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjEwIn19CjxoNT5WZXN0aWJ1bHVtIGxvcmU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxNSJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:23;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"What's new";s:8:"sublabel";s:0:"";s:3:"url";s:53:"{{config path="web/secure/base_url"}}electronics.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:24;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:25;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:26;a:5:{s:4:"type";s:4:"text";s:4:"text";s:288:"PGg1PlZlc3RpYnVsdW0gbG9yZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjE1In19CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:27;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:28;a:5:{s:4:"type";s:4:"text";s:4:"text";s:288:"PGg1PlZlc3RpYnVsdW0gbG9yZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjE1In19CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:29;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:30;a:5:{s:4:"type";s:4:"text";s:4:"text";s:764:"PHA+PGEgY2xhc3M9ImltZ19iYW5uZXIiIGhyZWY9IiMiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL21lbnUzLmpwZyJ9fSIgYWx0PSIiIC8+PC9hPjwvcD4KPGgzPklUQVFVRSBFQVJVTSBMQUJPUkU8L2gzPgo8ZGl2Pnt7d2lkZ2V0IHR5cGU9ImR5bmFtaWNwcm9kdWN0cy9keW5hbWljcHJvZHVjdHMiIG9yZGVyX2J5PSJuYW1lIGFzYyIgZmVhdHVyZWRfY2hvb3NlPSJlbV9mZWF0dXJlZCIgbGltaXRfY291bnQ9IjEiIGN1c3RvbV9jbGFzcz0iY3VzdG9tLW1lbnUtZmVhdHVyZWQiIHRodW1ibmFpbF93aWR0aD0iMTIwIiB0aHVtYm5haWxfaGVpZ2h0PSIxMjAiIHNob3dfcHJvZHVjdF9uYW1lPSJ0cnVlIiBzaG93X3RodW1ibmFpbD0idHJ1ZSIgc2hvd19kZXNjcmlwdGlvbj0idHJ1ZSIgc2hvd19wcmljZT0idHJ1ZSIgc2hvd19yZXZpZXdzPSJ0cnVlIiBzaG93X2FkZHRvY2FydD0idHJ1ZSIgc2hvd19hZGR0bz0idHJ1ZSIgc2hvd19sYWJlbD0idHJ1ZSIgY2hvb3NlX3RlbXBsYXRlPSJlbV9mZWF0dXJlZF9wcm9kdWN0cy9mZWF0dXJlZF9saXN0LnBodG1sIn19PC9kaXY+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:31;a:8:{s:4:"type";s:4:"link";s:5:"label";s:5:"Trend";s:8:"sublabel";s:0:"";s:3:"url";s:49:"{{config path="web/secure/base_url"}}apparel.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:32;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:17:"grid_8 menu_brand";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:33;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:34;a:5:{s:4:"type";s:4:"text";s:4:"text";s:432:"PGg1PlZlc3RpYnVsdW0gbG9yZTwvaDU+Cnt7YmxvY2sgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIG5hbWU9Im1haW5tZWdhbWVudSIgY2F0ZWdvcnlfaWQ9IjE1In19CjxoNT5QZWxsZW50ZXNxdWU8L2g1Pgp7e2Jsb2NrIHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBuYW1lPSJtYWlubWVnYW1lbnUiIGNhdGVnb3J5X2lkPSIxMCJ9fQo8aDU+VmVzdGlidWx1bSBsb3JlPC9oNT4Ke3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMTUifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:35;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:36;a:5:{s:4:"type";s:4:"text";s:4:"text";s:912:"PGEgaHJlZj0iIyIgdGl0bGU9IiIgY2xhc3M9ImltZ19iYW5uZXIiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT4KPGEgaHJlZj0iIyIgdGl0bGU9IiIgY2xhc3M9ImltZ19iYW5uZXIiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT4KPGEgaHJlZj0iIyIgdGl0bGU9IiIgY2xhc3M9ImltZ19iYW5uZXIiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT4KPGEgaHJlZj0iIyIgdGl0bGU9IiIgY2xhc3M9ImltZ19iYW5uZXIiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT4KPGEgaHJlZj0iIyIgdGl0bGU9IiIgY2xhc3M9ImltZ19iYW5uZXIiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT4KPGEgaHJlZj0iIyIgdGl0bGU9IiIgY2xhc3M9ImltZ19iYW5uZXIiPjxpbWcgY2xhc3M9ImZsdWlkIiBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:37;a:8:{s:4:"type";s:4:"link";s:5:"label";s:17:"Mother &amp; baby";s:8:"sublabel";s:0:"";s:3:"url";s:53:"{{config path="web/secure/base_url"}}electronics.html";s:6:"target";s:0:"";s:9:"css_class";s:4:"last";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:38;a:5:{s:4:"type";s:4:"text";s:4:"text";s:140:"e3tibG9jayB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgbmFtZT0ibWFpbm1lZ2FtZW51IiBjYXRlZ29yeV9pZD0iMyIgY3NzX2NsYXNzPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$menu_id = $model->getId();


# create menu of theme GalaGiftShop Sample Horizontal Menu
$model = Mage::getModel('galagiftshopsettings/megamenupro');
$model->setData(array(
	'name' => "GalaGiftShop Sample Horizontal Menu",
	'type' => "0",
    'css_class' => "sample-menu-fixed",
	'content' => <<<EOB
a:48:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:15:"First Link Item";s:8:"sublabel";s:0:"";s:3:"url";s:0:"";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:5:{s:4:"type";s:4:"text";s:4:"text";s:128:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249Imhvcml6b250YWwifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:2;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"1 Column";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:3;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:4;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Link 1.1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:18:"grid_4 alpha omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:5;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Link 1.2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:18:"grid_4 alpha omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:6;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:7;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 3";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:8;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"2 Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:9;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_10";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:10;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:11;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:12;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:13;a:5:{s:4:"type";s:4:"text";s:4:"text";s:240:"VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQo=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:14;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:15;a:5:{s:4:"type";s:4:"text";s:4:"text";s:240:"VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:16;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"3 Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:9:"nav-right";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:17;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:18;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:19;a:5:{s:4:"type";s:4:"text";s:4:"text";s:304:"PGgzPkZpcnN0IENvbHVtbiBjb250YWlucyBvbmx5IGl0ZW0gIlRleHQiPC9oMz4KVGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:20;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:21;a:5:{s:4:"type";s:4:"text";s:4:"text";s:340:"PGgzPlNlY29uZCBDb2x1bW48L2gzPgo8cD5UaGlzIGlzIHNhbXBsZSBjb250ZW50IG9mICJUZXh0IiBtZW51IGl0ZW0uIFlvdSBjYW4gZW50ZXIgeW91ciBvd24gdGV4dCBoZXJlLiBJdCBzdXBwb3J0cyA8c3Ryb25nPldZU0lXWUcgRWRpdG9yPC9zdHJvbmc+IGFzIHdlbGwgYXMgPGVtPm1hZ2VudG8gZGlyZWN0aXZlPC9lbT4gKGJsb2NrLCB3aWRnZXQuLi4pPC9wPgo8cD5CZWxvdyBpcyAyIDxzdHJvbmc+TGluazwvc3Ryb25nPiBpdGVtczo8L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:22;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:23;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:24;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:25;a:5:{s:4:"type";s:4:"text";s:4:"text";s:368:"PGgzPjNyZCBDb2x1bW48L2gzPgo8cD5CZWxvdyBpcyA8Y29kZT57IHt3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn0gfTwvY29kZT48L3A+CjxwPnt7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fTwvcD4KPHA+QmVsb3cgaXMgc3RhdGljIGxpbmtzOjwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:26;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:27;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:28;a:8:{s:4:"type";s:4:"link";s:5:"label";s:13:"Mixed Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:9:"nav-right";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:29;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:30;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:31;a:5:{s:4:"type";s:4:"text";s:4:"text";s:372:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKTwvcD4KPHA+QmVsb3cgaXMgMiA8c3Ryb25nPkxpbms8L3N0cm9uZz4gaXRlbXM6PC9wPgo=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:32;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:33;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:34;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:35;a:5:{s:4:"type";s:4:"text";s:4:"text";s:352:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+QmVsb3cgaXMgPGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgp7e3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzMiIGRpcmVjdGlvbj0idmVydGljYWwifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:36;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:37;a:5:{s:4:"type";s:4:"text";s:4:"text";s:308:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKTwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:38;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:39;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_9 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:40;a:5:{s:4:"type";s:4:"text";s:4:"text";s:308:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF84PC9zdHJvbmc+PC9wPgoKPHA+VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKTwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:41;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_9 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:42;a:5:{s:4:"type";s:4:"text";s:4:"text";s:352:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF84PC9zdHJvbmc+PC9wPgoKPHA+QmVsb3cgaXMgPGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgp7e3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzMiIGRpcmVjdGlvbj0idmVydGljYWwifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:43;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"Categories";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:44;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:16:"grid_6 nav-right";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:45;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:10:"0 10px 0 0";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:46;a:5:{s:4:"type";s:4:"text";s:4:"text";s:608:"PHA+VXNlIDxzdHJvbmc+Um93cyBMYXlvdXQ8L3N0cm9uZz4gYXMgcGFyZW50IDxzdHJvbmc+VGV4dDwvc3Ryb25nPiBmb3IgcHVycG9zZSBvZiBzZXR0aW5nIDxlbT5zcGFjaW5nPTEwPC9lbT48L3A+Cgo8cD5DYXRlZ29yaWVzJyBDb250YWluZXIgQ1NTOiA8ZW0+d2lkdGg6MzAwcHg8L2VtPjwvcD4KPHA+PGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgoKPHA+PHN0cm9uZz5UZXh0PC9zdHJvbmc+IGl0ZW0gY29udGFpbnMgdGhlIGJsb2NrIDxlbT5tZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbjwvZW0+IGFscmVhZHkgaGFzIG1hcmdpbiBzbyB3ZSBwbGFjZSBpdCBvdXRzaWRlIHRoZSA8c3Ryb25nPlJvd3MgTGF5b3V0PC9zdHJvbmc+PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:47;a:5:{s:4:"type";s:4:"text";s:4:"text";s:124:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$sample_menuid_01 = $model->getId();


# create menu of theme GalaGiftShop Sample Vertical Menu Left
$model = Mage::getModel('galagiftshopsettings/megamenupro');
$model->setData(array(
	'name' => "GalaGiftShop Sample Vertical Menu Left",
	'type' => "1",
	'content' => <<<EOB
a:48:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:15:"First Link Item";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:5:{s:4:"type";s:4:"text";s:4:"text";s:124:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:2;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"1 Column";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:3;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:4;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Link 1.1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:5;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Link 1.2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:6;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:7;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 3";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:8;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"2 Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:9;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_10";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:10;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:11;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:12;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:13;a:5:{s:4:"type";s:4:"text";s:4:"text";s:240:"VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQo=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:14;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:15;a:5:{s:4:"type";s:4:"text";s:4:"text";s:240:"VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:16;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"3 Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:17;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:18;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:19;a:5:{s:4:"type";s:4:"text";s:4:"text";s:304:"PGgzPkZpcnN0IENvbHVtbiBjb250YWlucyBvbmx5IGl0ZW0gIlRleHQiPC9oMz4KVGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:20;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:21;a:5:{s:4:"type";s:4:"text";s:4:"text";s:340:"PGgzPlNlY29uZCBDb2x1bW48L2gzPgo8cD5UaGlzIGlzIHNhbXBsZSBjb250ZW50IG9mICJUZXh0IiBtZW51IGl0ZW0uIFlvdSBjYW4gZW50ZXIgeW91ciBvd24gdGV4dCBoZXJlLiBJdCBzdXBwb3J0cyA8c3Ryb25nPldZU0lXWUcgRWRpdG9yPC9zdHJvbmc+IGFzIHdlbGwgYXMgPGVtPm1hZ2VudG8gZGlyZWN0aXZlPC9lbT4gKGJsb2NrLCB3aWRnZXQuLi4pPC9wPgo8cD5CZWxvdyBpcyAyIDxzdHJvbmc+TGluazwvc3Ryb25nPiBpdGVtczo8L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:22;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:23;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:24;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:22:"grid_6 nav-right omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:25;a:5:{s:4:"type";s:4:"text";s:4:"text";s:360:"PGgzPjNyZCBDb2x1bW48L2gzPgo8cD5CZWxvdyBpcyA8Y29kZT57IHt3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn0gfTwvY29kZT48L3A+Cnt7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQo8cD5CZWxvdyBpcyBzdGF0aWMgbGlua3M6PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:26;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:27;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:28;a:8:{s:4:"type";s:4:"link";s:5:"label";s:13:"Mixed Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:29;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:30;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:31;a:5:{s:4:"type";s:4:"text";s:4:"text";s:372:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKTwvcD4KPHA+QmVsb3cgaXMgMiA8c3Ryb25nPkxpbms8L3N0cm9uZz4gaXRlbXM6PC9wPgo=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:32;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:33;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:34;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:35;a:5:{s:4:"type";s:4:"text";s:4:"text";s:352:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+QmVsb3cgaXMgPGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgp7e3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzMiIGRpcmVjdGlvbj0idmVydGljYWwifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:36;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:37;a:5:{s:4:"type";s:4:"text";s:4:"text";s:308:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKTwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:38;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:17:"grid_18 nav-right";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:39;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_9 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:40;a:5:{s:4:"type";s:4:"text";s:4:"text";s:308:"PHA+PHN0cm9uZz5Db2x1bW4gd2lkdGggPSA0MDBweDwvc3Ryb25nPjwvcD4KCjxwPlRoaXMgaXMgc2FtcGxlIGNvbnRlbnQgb2YgIlRleHQiIG1lbnUgaXRlbS4gWW91IGNhbiBlbnRlciB5b3VyIG93biB0ZXh0IGhlcmUuIEl0IHN1cHBvcnRzIDxzdHJvbmc+V1lTSVdZRyBFZGl0b3I8L3N0cm9uZz4gYXMgd2VsbCBhcyA8ZW0+bWFnZW50byBkaXJlY3RpdmU8L2VtPiAoYmxvY2ssIHdpZGdldC4uLik8L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:41;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_9 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:42;a:5:{s:4:"type";s:4:"text";s:4:"text";s:352:"PHA+PHN0cm9uZz5Db2x1bW4gd2lkdGggPSAzNTBweDwvc3Ryb25nPjwvcD4KCjxwPkJlbG93IGlzIDxjb2RlPnsge3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzMiIGRpcmVjdGlvbj0idmVydGljYWwifSB9PC9jb2RlPjwvcD4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:43;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"Categories";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:4:"last";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:44;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:45;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:46;a:5:{s:4:"type";s:4:"text";s:4:"text";s:608:"PHA+VXNlIDxzdHJvbmc+Um93cyBMYXlvdXQ8L3N0cm9uZz4gYXMgcGFyZW50IDxzdHJvbmdUZXh0PC9zdHJvbmc+IGZvciBwdXJwb3NlIG9mIHNldHRpbmcgPGVtPnNwYWNpbmc9MTA8L2VtPjwvcD4KCjxwPkNhdGVnb3JpZXMnIENvbnRhaW5lciBDU1M6IDxlbT53aWR0aDozMDBweDwvZW0+PC9wPgoKPHA+PGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgoKPHA+PHN0cm9uZz5UZXh0PC9zdHJvbmc+IGl0ZW0gY29udGFpbnMgdGhlIGJsb2NrIDxlbT5tZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbjwvZW0+IGFscmVhZHkgaGFzIG1hcmdpbiBzbyB3ZSBwbGFjZSBpdCBvdXRzaWRlIHRoZSA8c3Ryb25nPlJvd3MgTGF5b3V0PC9zdHJvbmc+PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:47;a:5:{s:4:"type";s:4:"text";s:4:"text";s:124:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$sample_menuid_02 = $model->getId();


# GalaGiftShop Sample Vertical Menu Right
$model = Mage::getModel('galagiftshopsettings/megamenupro');
$model->setData(array(
	'name' => "GalaGiftShop Sample Vertical Menu Right",
	'type' => "1",
	'content' => <<<EOB
a:48:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:15:"First Link Item";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:5:{s:4:"type";s:4:"text";s:4:"text";s:124:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:2;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"1 Column";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:3;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:4;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Link 1.1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:5;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Link 1.2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:6;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:7;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 3";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:8;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"2 Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:9;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_10";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:10;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_4 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:11;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:12;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:13;a:5:{s:4:"type";s:4:"text";s:4:"text";s:240:"VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQo=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:14;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:15;a:5:{s:4:"type";s:4:"text";s:4:"text";s:240:"VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:16;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"3 Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:17;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:18;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:19;a:5:{s:4:"type";s:4:"text";s:4:"text";s:304:"PGgzPkZpcnN0IENvbHVtbiBjb250YWlucyBvbmx5IGl0ZW0gIlRleHQiPC9oMz4KVGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:20;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:21;a:5:{s:4:"type";s:4:"text";s:4:"text";s:340:"PGgzPlNlY29uZCBDb2x1bW48L2gzPgo8cD5UaGlzIGlzIHNhbXBsZSBjb250ZW50IG9mICJUZXh0IiBtZW51IGl0ZW0uIFlvdSBjYW4gZW50ZXIgeW91ciBvd24gdGV4dCBoZXJlLiBJdCBzdXBwb3J0cyA8c3Ryb25nPldZU0lXWUcgRWRpdG9yPC9zdHJvbmc+IGFzIHdlbGwgYXMgPGVtPm1hZ2VudG8gZGlyZWN0aXZlPC9lbT4gKGJsb2NrLCB3aWRnZXQuLi4pPC9wPgo8cD5CZWxvdyBpcyAyIDxzdHJvbmc+TGluazwvc3Ryb25nPiBpdGVtczo8L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:22;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:23;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:24;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:22:"grid_6 nav_right omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:25;a:5:{s:4:"type";s:4:"text";s:4:"text";s:360:"PGgzPjNyZCBDb2x1bW48L2gzPgo8cD5CZWxvdyBpcyA8Y29kZT57IHt3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn0gfTwvY29kZT48L3A+Cnt7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQo8cD5CZWxvdyBpcyBzdGF0aWMgbGlua3M6PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:26;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:27;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:28;a:8:{s:4:"type";s:4:"link";s:5:"label";s:13:"Mixed Columns";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:29;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_18";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:30;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:31;a:5:{s:4:"type";s:4:"text";s:4:"text";s:372:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+VGhpcyBpcyBzYW1wbGUgY29udGVudCBvZiAiVGV4dCIgbWVudSBpdGVtLiBZb3UgY2FuIGVudGVyIHlvdXIgb3duIHRleHQgaGVyZS4gSXQgc3VwcG9ydHMgPHN0cm9uZz5XWVNJV1lHIEVkaXRvcjwvc3Ryb25nPiBhcyB3ZWxsIGFzIDxlbT5tYWdlbnRvIGRpcmVjdGl2ZTwvZW0+IChibG9jaywgd2lkZ2V0Li4uKTwvcD4KPHA+QmVsb3cgaXMgMiA8c3Ryb25nPkxpbms8L3N0cm9uZz4gaXRlbXM6PC9wPgo=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:32;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 1";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:33;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Link 2";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:34;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:35;a:5:{s:4:"type";s:4:"text";s:4:"text";s:352:"PHA+PHN0cm9uZz5Db2x1bW4gY2xhc3M9Z3JpZF82PC9zdHJvbmc+PC9wPgoKPHA+QmVsb3cgaXMgPGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgp7e3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzMiIGRpcmVjdGlvbj0idmVydGljYWwifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:36;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_6 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:37;a:5:{s:4:"type";s:4:"text";s:4:"text";s:308:"PHA+PHN0cm9uZz5Db2x1bW4gd2lkdGggPSAyNTBweDwvc3Ryb25nPjwvcD4KCjxwPlRoaXMgaXMgc2FtcGxlIGNvbnRlbnQgb2YgIlRleHQiIG1lbnUgaXRlbS4gWW91IGNhbiBlbnRlciB5b3VyIG93biB0ZXh0IGhlcmUuIEl0IHN1cHBvcnRzIDxzdHJvbmc+V1lTSVdZRyBFZGl0b3I8L3N0cm9uZz4gYXMgd2VsbCBhcyA8ZW0+bWFnZW50byBkaXJlY3RpdmU8L2VtPiAoYmxvY2ssIHdpZGdldC4uLik8L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:38;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:9:"nav-right";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:39;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_9 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:40;a:5:{s:4:"type";s:4:"text";s:4:"text";s:308:"PHA+PHN0cm9uZz5Db2x1bW4gd2lkdGggPSA0MDBweDwvc3Ryb25nPjwvcD4KCjxwPlRoaXMgaXMgc2FtcGxlIGNvbnRlbnQgb2YgIlRleHQiIG1lbnUgaXRlbS4gWW91IGNhbiBlbnRlciB5b3VyIG93biB0ZXh0IGhlcmUuIEl0IHN1cHBvcnRzIDxzdHJvbmc+V1lTSVdZRyBFZGl0b3I8L3N0cm9uZz4gYXMgd2VsbCBhcyA8ZW0+bWFnZW50byBkaXJlY3RpdmU8L2VtPiAoYmxvY2ssIHdpZGdldC4uLik8L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:41;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_9 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:42;a:5:{s:4:"type";s:4:"text";s:4:"text";s:352:"PHA+PHN0cm9uZz5Db2x1bW4gd2lkdGggPSAzNTBweDwvc3Ryb25nPjwvcD4KCjxwPkJlbG93IGlzIDxjb2RlPnsge3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzMiIGRpcmVjdGlvbj0idmVydGljYWwifSB9PC9jb2RlPjwvcD4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:43;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"Categories";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:4:"last";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:44;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:45;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:46;a:5:{s:4:"type";s:4:"text";s:4:"text";s:608:"PHA+VXNlIDxzdHJvbmc+Um93cyBMYXlvdXQ8L3N0cm9uZz4gYXMgcGFyZW50IDxzdHJvbmdUZXh0PC9zdHJvbmc+IGZvciBwdXJwb3NlIG9mIHNldHRpbmcgPGVtPnNwYWNpbmc9MTA8L2VtPjwvcD4KCjxwPkNhdGVnb3JpZXMnIENvbnRhaW5lciBDU1M6IDxlbT53aWR0aDozMDBweDwvZW0+PC9wPgoKPHA+PGNvZGU+eyB7d2lkZ2V0IHR5cGU9Im1lZ2FtZW51cHJvL2NhdGFsb2duYXZpZ2F0aW9uIiBjYXRlZ29yeV9pZD0iY2F0ZWdvcnkvMyIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9IH08L2NvZGU+PC9wPgoKPHA+PHN0cm9uZz5UZXh0PC9zdHJvbmc+IGl0ZW0gY29udGFpbnMgdGhlIGJsb2NrIDxlbT5tZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbjwvZW0+IGFscmVhZHkgaGFzIG1hcmdpbiBzbyB3ZSBwbGFjZSBpdCBvdXRzaWRlIHRoZSA8c3Ryb25nPlJvd3MgTGF5b3V0PC9zdHJvbmc+PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:47;a:5:{s:4:"type";s:4:"text";s:4:"text";s:124:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$sample_menuid_03 = $model->getId();

$dataBlock = array(
	'title' => 'GalaGiftShop Sample Vertical Menu Right',
	'identifier' => $prefixBlock.'sample_vertical_menu_right',
	'stores' => $stores,
	'is_active' => 0,
	'content'	=> <<<EOB
<div>{{widget type="megamenupro/megamenupro" menu="$sample_menuid_03"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);

#end install menu

$installer->endSetup();