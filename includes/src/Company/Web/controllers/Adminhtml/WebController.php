<?php

class Company_Web_Adminhtml_WebController extends Mage_Adminhtml_Controller_action {

    protected function _initAction() {
        $this->loadLayout()
                ->_setActiveMenu('web/items')
                ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));

        return $this;
    }

    public function kancAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Загрузить прайс, предварительно совместив колонки "артикул" и "минимальная розничная цена":</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/kancparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filekanc"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function booksAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Импорт Книг:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/booksparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filebooks"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function suvenirAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Импорт Сувенирной Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/suvenirparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filesuvenir"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function kidsAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Импорт Разивающей Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/kidsparse') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="filekids"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricekancAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Загрузить Прайс Канцелярии:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricekanc') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricekanc"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricebooksAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Загрузить Прайс Книг:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricebooks') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricebooks"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricesuvenirAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Загрузить Прайс Сувенирной Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricesuvenir') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricesuvenir"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function pricekidsAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('
                   <h1>Загрузить Прайс Развивающей Продукции:</h1> <br/>
                   <form action="' . Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/loadpricekids') . '" method="post" enctype="multipart/form-data">
                      <input type="file" name="pricekids"/>
<input name="form_key" type="hidden" value="' . Mage::getSingleton('core/session')->getFormKey() . '" />
                      <input type="submit" value="Загрузить"/>
                   </form>
        ');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function successAction() {
        $this->loadLayout();
        //create a text block with the name of "example-block"
        $block = $this->getLayout()
                ->createBlock('core/text', 'example-block')
                ->setText('<h1>Файл успешно загружен</h1>');
        $this->_addContent($block);
        $this->renderLayout();
    }

    public function kancparseAction() {
header('Content-Type: text/html; charset=utf-8');
        //$this->get_all_categories();
        //die();
//        $skuArray = array();
//        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
//        foreach ($categoryCollection as $category) {
//            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
//                $skuArray[] = $sku;
//            }
//        }
//        $sku = '';

        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        // error_reporting(E_ALL ^ E_NOTICE);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';

        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filekanc']['tmp_name'], true, "UTF-8");
        $result = array();
        //get global data

        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            //if(($data->val($i, C)!='')&&($data->val($i, N)!='')) {
                //$result[$i]['shtrih'] = $data->val($i, D);
                $result[$i]['sku'] = $data->val($i, C);
                $result[$i]['qty'] = $data->val($i, B);
                $result[$i]['price'] = $data->val($i, N);
        //}
            //$result[$i]['bold'] = $data->bold($i, A);
            //$result[$i]['height'] = $data->height($i, A);
        }
//        $result = array_shift($result);        
        //$result[5]['sku'] = '123123asdf';
        $collection = Mage::getModel('catalog/product')
                        ->getCollection();
// echo "<pre>";
// echo '----------------------------------------------';
//         foreach ($collection as $product) {
//             echo $product->getSku();
//             echo "<br/>";
//         }
//         echo '---------------------------------------------------';
        //удаленные товары в ИМ
        echo "<h2>Товары есть в магазине, но их нет в прайсе</h2>";
        $prices = array();
        foreach ($collection as $product) {        
            $_Pdetails = Mage::getModel('catalog/product')->loadByAttribute('sku',$product->getSku());
            $price = (int)$_Pdetails->getPrice();
            $visibility = $_Pdetails->getVisibility();
            $status = $_Pdetails->getStatus();
            $found = false;
            if($status=='1') {
                $status = '<span style="color:green">Включено</span>';
            } 
            foreach($result as $key=>$item) {                                     
                if(trim($item['sku'])==trim($product->getSku())) {                                         
                    if($status=='<span style="color:green">Включено</span>') {
                        if(($item['qty']=='0')||($item['qty']=='')) {
                            echo $product->getSku(); echo ' (количество в прайсе - '.$item['qty'].') '.$status; echo '<br/>';                    
                        }              
                    }   
                    $found = true;
                    if($price!=str_replace(',','',$item['price'])) {
                        if(($visibility=='4')&&($status=='<span style="color:green">Включено</span>')) {
                            $prices[] = 'Изменилась цена c '.$price.' до '.$item['price'].'. Артикул товара - '.$item['sku'];                        
                        }
                    }
                }                            
            }
            if(($visibility==4)&&($status==1)) {
                if(!$found) { echo $product->getSku().$status; echo '<br/>';}
            }
        }

        echo "<h2>Товаров нет магазине, но есть в прайсе</h2>";        
        foreach ($result as $key=>$item) {
            $found = true;
            foreach ($collection as $product) {                           
                if(trim($item['sku'])==trim($product->getSku())) {                    
                    $_Pdetails = Mage::getModel('catalog/product')->loadByAttribute('sku',$item['sku']);              
                    $visibility = $_Pdetails->getVisibility();       
                    $status = $_Pdetails->getStatus();       
                    if(($visibility!='4')||($status!='1')) {    
                        if($item['sku']!='Артикул' ) { 
                            if($item['sku']!='') {  
                                if($item['qty']!='0') {  
                                    echo $item['sku'];  echo ' (количество в прайсе - '.$item['qty'].')'; echo '<br/>';
                                }
                            }
                        }
                    }
                    $found = false;
                }                            
            }
            $_Pdetails = Mage::getModel('catalog/product')->loadByAttribute('sku',$item['sku']);              
            if(!$_Pdetails) {                
                    if($found) { 
                        if($item['sku']!='Артикул' ) { 
                            if($item['sku']!='') {  
                                if($item['qty']!='0') {  
                                    echo $item['sku']; 
                                    echo ' (количество в прайсе - '.$item['qty'].')'; 
                                    echo '<br/>'; 
                                }
                            }
                        }
                    }                
            }             
        }
        echo "<h2>Изменилась цена у товаров:</h2>";
        foreach($prices as $price) {
            echo $price; echo "<br/>";
        }
        die();
        echo "<pre>";
        var_dump($result);
        die();
        //to hierarchical array
        foreach ($result as $m => $res) {
            if (($res['color'] == '#000000') & ($res['bold'] == '1') & ($res['height'] == '9')) {
                $result_arr[$res['name']] = array();
                $last_cat = $res['name'];
                $last_podcat = '';
                $last_podpodcat = '';
            }
            if (($res['color'] == '#ff0000') & ($res['bold'] == '')) {
                $result_arr[$last_cat][$res['name']] = array();
                $last_podcat = $res['name'];
                $last_podpodcat = '';
            }
            if (($res['color'] == '#000000') & ($res['bold'] == '1') & ($res['height'] == '8')) {
                $result_arr[$last_cat][$last_podpodcat][$res['name']] = array();
                $last_podpodcat = $res['name'];
            }
            if (($res['color'] == '') & ($res['bold'] == '')) {
                $result_arr[$last_cat][$last_podcat][$last_podpodcat][] = $m;
            }
        }
        array_shift($result_arr);
        //fix errors with empty arrays
        foreach ($result_arr as $key_up => $res) {
            foreach ($res as $key => $val) {
                $count = count($val, 1);
                if ($count == 1) {
                    unset($result_arr[$key_up][$key]);
                } else {
                    foreach ($val as $key_down => $value_down) {
                        if (count($value_down) == 0) {
                            unset($result_arr[$key_up][$key][$key_down]);
                        }
                    }
                }
            }
        }
        foreach ($result_arr as $key_up => $res) {
            foreach ($res as $key => $value) {
                if (count($value) == 0) {
                    unset($result_arr[$key_up][$key]);
                }
            }
        }
        //search and create categorys in store
        $root_cat = $this->get_category('3');
       /* foreach ($result_arr as $key => $value) {
            if (!in_array($key, $root_cat)) {
                $cat_id = $this->create_category('3', $key, $this->transliterate($key));
                $result_arr[$cat_id] = $value;
                $new_id = $cat_id;
            } else {
                $founded_cat = $this->find_category('3', $key);
                $this->set_active($founded_cat, true);
                $result_arr[$founded_cat] = $value;
                $new_id = $founded_cat;
            }
            unset($result_arr[$key]);
            foreach ($value as $key_down => $value_down) {
                if ($key_down != '') {
                    $cat_down = $this->get_category($new_id);
                    if (!in_array($key_down, $cat_down)) {
                        $cat_id_down = $this->create_category($new_id, $key_down, $this->transliterate($key_down));
                        $result_arr[$new_id][$cat_id_down] = $value_down;
                        $id_down_down = $cat_id_down;
                    } else {
                        $founded_cat_down = $this->find_category($new_id, $key_down);
                        $this->set_active($founded_cat_down, true);
                        $result_arr[$new_id][$founded_cat_down] = $value_down;
                        $id_down_down = $founded_cat_down;
                    }
                    unset($result_arr[$new_id][$key_down]);
                    foreach ($value_down as $key_down_down => $value_down_down) {
                        if ($key_down_down != '') {
                            $cat_down_down = $this->get_category($id_down_down);
                            if (!in_array($key_down_down, $cat_down_down)) {
                                $cat_id_down_down = $this->create_category($id_down_down, $key_down_down, $this->transliterate($key_down_down));
                                $result_arr[$id_down_down][$id_down_down][$cat_id_down_down] = $value_down_down;
                                $id_down_down_down = $cat_id_down_down;
                            } else {
                                $founded_cat_down_down = $this->find_category($id_down_down, $key_down_down);
                                $this->set_active($founded_cat_down_down, true);
                                $result_arr[$new_id][$id_down_down][$founded_cat_down_down] = $value_down_down;
                                $id_down_down_down = $founded_cat_down_down;
                            }
                            unset($result_arr[$new_id][$id_down_down][$key_down_down]);
                        }
                    }
                }
            }
        }*/
        foreach ($this->get_all_categories() as $category) {
            $all_cat[] = $category['entity_id'];
        }
        //die(print_r($all_cat));
        foreach ($result_arr as $key_first => $value_first) {
            if (in_array($key_first, $all_cat)) {
                $index_first = array_search($key_first, $all_cat);
                unset($all_cat[$index_first]);
            }
            foreach ($value_first as $key_second => $value_second) {
                if (in_array($key_second, $all_cat)) {
                    $index_second = array_search($key_second, $all_cat);
                    unset($all_cat[$index_second]);
                }
                foreach ($value_second as $key_third => $value_third) {
                    if (in_array($key_third, $all_cat)) {
                        $index_third = array_search($key_third, $all_cat);
                        unset($all_cat[$index_third]);
                    }
                }
            }
        }
        // foreach ($all_cat as $cat_id) {
        //     $this->set_active($cat_id, 'false');
        // }
        //echo "<pre>";
        //print_r($result_arr);
        $cat = array();
        foreach ($result_arr as $key_first => $res_first) {
            $key_second = '';
            $key_third = '';
            $key_four = '';
            $lat_cat = $key_first;
            foreach ($res_first as $key_second => $res_second) {
                $key_third = '';
                $key_four = '';  
                       
                if($key_second!='') $last_cat = $key_first.','.$key_second; else {$last_cat = $key_first; }
                foreach ($res_second as $key_third => $res_third) {
                    $key_four = '';
                    if($key_third!='') {
                        $last_cat = $key_first.','.$key_second.','.$key_third;
                    } else {
                        if($key_second=='') $last_cat = $key_first; else $last_cat = $key_second;
                    }
                    foreach ($res_third as $key_four => $res_four) {
                        $cat[$res_four] = $last_cat;                        
                    }
                }
            }
        }        
        $this->set_active('3', true);
        $found = '0';
        $csv = array();
        $images = array();
        $sku = array();
        $csv = array();
        $csv[0][] = "'activation_information'";
        $csv[0][] = "'sku'";
        $csv[0][] = "'type'";
        $csv[0][] = "'attribute_set'";        
        $csv[0][] = "'tax_class_id'";
        $csv[0][] = "'status'";
        $csv[0][] = "'weight'";
        $csv[0][] = "'name'";
        $csv[0][] = "'price'";
        $csv[0][] = "'description'";
        $csv[0][] = "'short_description'";
      //  $csv[0][] = "'category_ids'";    
        $csv[0][] = "'visibility'";   
        $csv[0][] = "'length'";   
        $csv[0][] = "'width'";   
        $csv[0][] = "'height'";         
        $csv[0][] = "'code'"; 
        $csv[0][] = "'qty_in_pack'"; 
        $csv[0][] = "'is_in_stock'";
        $csv[0][] = "'qty'";
        $csv[0][] = "'websites'";
        $csv[0][] = "'store_id'";
        $csv[0][] = "'image'";
        $csv[0][] = "'thumbnail'";
        $csv[0][] = "'small_image'";
        
        $i=1;
        
        foreach($cat as $id=>$category) {
            $price = str_replace(" ", ".", $data->val($id, N));
            $qty = str_replace("Имеется в наличии", "100", $data->val($id, B));
            $csv[$i][] = "''";
            $csv[$i][] = "'" . trim($data->val($id, C)) . "'"; //sku
            $csv[$i][] = "'simple'";                       //type
            $csv[$i][] = "'Default'";                      //attribut_set
            $csv[$i][] = "'Taxable Goods'";                         //tax_class_id
            $csv[$i][] = "'Включено'";                     //status
            $csv[$i][] = "'" . trim($data->val($id, J)) . "'";                            //weight
            $csv[$i][] = "'" . trim($data->val($id, A)) . "'";         //name
            $csv[$i][] = "'" . $price . "'";         //price
            $csv[$i][] = "''";   //description
            $csv[$i][] = "''";   //short description 
           // $csv[$i][] = "'" . $category . "'"; //category_ids
            $csv[$i][] = "'Каталог, поиск'"; //category_ids
            $csv[$i][] = "'" . trim($data->val($id, G)) . "'"; 
            $csv[$i][] = "'" . trim($data->val($id, H)) . "'"; 
            $csv[$i][] = "'" . trim($data->val($id, I)) . "'";                         
            $csv[$i][] = "'" . trim($data->val($id, D)) . "'";
            $csv[$i][] = "'" . trim($data->val($id, F)) . "'";
            $csv[$i][] = "'1'";
            $csv[$i][] = "'" . $qty . "'";
            $csv[$i][] = "'base'";
            $csv[$i][] = "'default'";
            $csv[$i][] = "'" . trim($data->hyperlink($id, 5)) . "'";
            $csv[$i][] = "'" . trim($data->hyperlink($id, 5)) . "'";
            $csv[$i][] = "'" . trim($data->hyperlink($id, 5)) . "'";
            $i++;
        }

        
        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, ",");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'import.csv', $data);
        
        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/3/files/import.csv/');
        
        header('Location: '.$url);
        echo "asdf";
        die();
        $this->_redirectUrl($url);
        

        
        
        
        
        
        
        
        
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, F));
            $csv[$i - 2][] = "''";                             //articul
            $csv[$i - 2][] = "'simple'";                       //type
            $csv[$i - 2][] = "'kanc'";                      //attribut_set
            $csv[$i - 2][] = "'Отсутствует'";                         //tax_class_id
            $csv[$i - 2][] = "'Включено'";                     //status
            $csv[$i - 2][] = "'1'";                            //weight\
            $csv[$i - 2][] = "'" . trim($data->val($i, B)) . "'";         //sku
            $csv[$i - 2][] = "'" . trim($data->val($i, A)) . "'";         //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'";   //price
            $csv[$i - 2][] = "'" . str_replace("/r/n", "", $data->val($i, K)) . "'";         //description
            $csv[$i - 2][] = "'" . str_replace("/r/n", "", $data->val($i, K)) . "'";         //short_description
            $csv[$i - 2][] = "'Каталог, поиск'";               //visibility
            $csv[$i - 2][] = "'" . trim($data->val($i, I)) . "'";         //category_ids
            $csv[$i - 2][] = "'" . trim($data->val($i, C)) . "'";         //year
            $csv[$i - 2][] = "'" . trim($data->val($i, E)) . "'";         //qty
            $csv[$i - 2][] = "'" . trim($data->val($i, L)) . "'";         //size
            $csv[$i - 2][] = "'" . trim($data->val($i, H)) . "'";         //sheet

            $sku1 = str_replace(",", "", $data->val($i, B));
            $sku1 = str_replace(".", "", $sku1);
            $sku = $sku1;
            $dir = $root . DS . 'media' . DS . 'import' . DS . 'kanc' . DS;   //задаём имя директории
            if (is_dir($dir)) {   //проверяем наличие директории
                $files = scandir($dir);    //сканируем (получаем массив файлов)
                array_shift($files); // удаляем из массива '.'
                array_shift($files); // удаляем из массива '..'
                for ($a = 0; $a < sizeof($files); $a++) {

                    $image = str_replace(".jpg", "", $files[$a]);

//                echo "SKU = " . $sku . "<br/>";
                    if ($sku == $image) {
                        $path = "'/kanc/" . $sku . ".jpg'";              //image
                        $found = '1';
                    }
                }
            }
            if ($found == '0') {
                $csv[$i - 2][] = "'/kanc/first.jpg'";              //image
                $csv[$i - 2][] = "'/kanc/first.jpg'";              //small image
                $csv[$i - 2][] = "'/kanc/first.jpg'";              //thumbnail  
            } else {
                $csv[$i - 2][] = $path;              //image
                $csv[$i - 2][] = $path;                //small image
                $csv[$i - 2][] = $path;                 //thumbnail                 
            }
            $find_sku = '0';
            if (in_array($data->val($i, B), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'";                        //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }
            $csv[$i - 2][] = "'1'";                            //is in stock
            $csv[$i - 2][] = "'base'";                         //websites
            $csv[$i - 2][] = "'" . $data->val($i, D) . "'";         //upakovka
            $csv[$i - 2][] = "'" . $data->val($i, G) . "'";         //format
            $csv[$i - 2][] = "'" . $data->val($i, M) . "'";         //listov_be
        }

        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'kanc.csv', $data);
        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/3/files/kanc.csv/');
        $this->_redirectUrl($url);
    }

    public function booksparseAction() {
        $skuArray = array();
        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
        foreach ($categoryCollection as $category) {
            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
                $skuArray[] = $sku;
            }
        }
        $sku = '';
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filebooks']['tmp_name']);
        $found = '0';
        $csv = array();
        $images = array();
        $sku = array();
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, F));
            $csv[$i - 2][] = "''";                                                       //articul
            $csv[$i - 2][] = "'simple'";                            //type
            $csv[$i - 2][] = "'books'";                             //attribut_set
            $csv[$i - 2][] = "'Отсутствует'";                       //tax_class_id
            $csv[$i - 2][] = "'Включено'";                          //status
            $csv[$i - 2][] = "'1'";                                 //weight
            $csv[$i - 2][] = "'" . trim($data->val($i, K)) . "'";            //sku
            $csv[$i - 2][] = "'" . trim($data->val($i, B)) . "'";            //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'";                   //price
            $csv[$i - 2][] = "'Каталог, поиск'";                    //visibility
            $csv[$i - 2][] = "'" . trim($data->val($i, L)) . "'";            //category_ids
            $csv[$i - 2][] = "'" . trim($data->val($i, E)) . "'";            //year
            $csv[$i - 2][] = "'" . trim($data->val($i, N)) . "'";            //qty

            $sku1 = str_replace(",", "", $data->val($i, K));
            $sku1 = str_replace(",", "", $sku1);
            $sku = $sku1;
            $dir = $root . DS . 'media' . DS . 'import' . DS . 'books' . DS;   //задаём имя директории
            if (is_dir($dir)) {   //проверяем наличие директории
                $files = scandir($dir);    //сканируем (получаем массив файлов)
                array_shift($files); // удаляем из массива '.'
                array_shift($files); // удаляем из массива '..'
                for ($a = 0; $a < sizeof($files); $a++) {

                    $image = str_replace(".jpg", "", $files[$a]);

//                echo "SKU = " . $sku . "<br/>";
                    if ($sku == $image) {
                        $path = "'/books/" . $sku . ".jpg'";              //image
                        $found = '1';
                    }
                }
            }
            if ($found == '0') {
                $csv[$i - 2][] = "'/books/first.jpg'";              //image
                $csv[$i - 2][] = "'/books/first.jpg'";              //small image
                $csv[$i - 2][] = "'/books/first.jpg'";              //thumbnail  
            } else {
                $csv[$i - 2][] = $path;              //image
                $csv[$i - 2][] = $path;                //small image
                $csv[$i - 2][] = $path;                 //thumbnail                 
            }

            $csv[$i - 2][] = "'1'";                                        //is_in_stock
            $csv[$i - 2][] = "'base'";                                 //websites
            $csv[$i - 2][] = "'" . trim($data->val($i, C)) . "'";                              //author
            $csv[$i - 2][] = "'" . trim($data->val($i, D)) . "'";                           //dopizd
            $csv[$i - 2][] = "'" . trim($data->val($i, G)) . "'";             //standart
            $csv[$i - 2][] = "'" . trim($data->val($i, H)) . "'";             //str
            $csv[$i - 2][] = "'" . trim($data->val($i, I)) . "'";             //pereplet
            $csv[$i - 2][] = "'" . trim($data->val($i, J)) . "'";             //isbn
            $csv[$i - 2][] = "'" . trim($data->val($i, M)) . "'";             //top
            $csv[$i - 2][] = "'" . trim($data->val($i, O)) . "'";             //format
            $csv[$i - 2][] = "'" . trim($data->val($i, P)) . "'";             //paper
            $csv[$i - 2][] = "'" . trim($data->val($i, A)) . "'";             //series
            $find_sku = '0';
            if (in_array($data->val($i, K), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'";                                                  //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }
            $descr = str_replace("\r\n", '', $data->val($i, Q));
            $descr = str_replace("\n", '', $data->val($i, Q));
            $csv[$i - 2][] = "'" . $descr . "'";             //description
            $csv[$i - 2][] = "'" . $descr . "'";             //short_description
        }


        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'books.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'books.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'books.csv', $data);



        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/7/files/books.csv/');
        $this->_redirectUrl($url);
    }

    public function kidsparseAction() {
        $skuArray = array();
        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
        foreach ($categoryCollection as $category) {
            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
                $skuArray[] = $sku;
            }
        }
        $sku = '';
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filekids']['tmp_name']);
        $found = '0';
        $csv = array();
        $images = array();
        $sku = array();
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, F));
            $csv[$i - 2][] = "''";                                                       //articul
            $csv[$i - 2][] = "'simple'";                            //type
            $csv[$i - 2][] = "'kidsa'";                             //attribut_set
            $csv[$i - 2][] = "'Отсутствует'";                       //tax_class_id
            $csv[$i - 2][] = "'Включено'";                          //status
            $csv[$i - 2][] = "'1'";                                 //weight
            $csv[$i - 2][] = "'" . trim($data->val($i, K)) . "'";            //sku
            $csv[$i - 2][] = "'" . trim($data->val($i, B)) . "'";            //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'";                   //price
            $csv[$i - 2][] = "'Каталог, поиск'";                    //visibility
            $csv[$i - 2][] = "'198'";            //category_ids ****
            $csv[$i - 2][] = "'" . trim($data->val($i, E)) . "'";            //year
            $csv[$i - 2][] = "'" . trim($data->val($i, L)) . "'";            //qty


            $csv[$i - 2][] = "'1'";                                        //is_in_stock
            $csv[$i - 2][] = "'base'";                                 //websites
            $csv[$i - 2][] = "'" . trim($data->val($i, A)) . "'";             //series
            $csv[$i - 2][] = "'" . trim($data->val($i, C)) . "'";                              //author
            $csv[$i - 2][] = "'" . trim($data->val($i, D)) . "'";                           //dopizd
            $csv[$i - 2][] = "'" . trim($data->val($i, G)) . "'";             //upakovka

            $csv[$i - 2][] = "'" . trim($data->val($i, H)) . "'";             //str
            $csv[$i - 2][] = "'" . trim($data->val($i, I)) . "'";             //pereplet
            $csv[$i - 2][] = "'" . trim($data->val($i, J)) . "'";             //isbn

            $csv[$i - 2][] = "'" . trim($data->val($i, M)) . "'";             //format
            $csv[$i - 2][] = "'" . trim($data->val($i, N)) . "'";             //paper
            $find_sku = '0';
            if (in_array($data->val($i, K), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'";                                                  //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }



            $descr = str_replace("\r\n", '', $data->val($i, O));
            $descr = str_replace("\n", '', $data->val($i, O));
            $csv[$i - 2][] = "'" . $descr . "'";             //description
            $csv[$i - 2][] = "'" . $descr . "'";             //short_description
            $sku1 = str_replace(",", "", $data->val($i, K));
            $sku1 = str_replace(",", "", $sku1);
            $sku = $sku1;
            $dir = $root . DS . 'media' . DS . 'import' . DS . 'kids' . DS;   //задаём имя директории
            if (is_dir($dir)) {   //проверяем наличие директории
                $files = scandir($dir);    //сканируем (получаем массив файлов)
                array_shift($files); // удаляем из массива '.'
                array_shift($files); // удаляем из массива '..'
                for ($a = 0; $a < sizeof($files); $a++) {

                    $image = str_replace(".jpg", "", $files[$a]);

//                echo "SKU = " . $sku . "<br/>";
                    if ($sku == $image) {
                        $path = "'/kids/" . $sku . ".jpg'";              //image
                        $found = '1';
                    }
                }
            }
            if ($found == '0') {
                $csv[$i - 2][] = "''";              //image
                $csv[$i - 2][] = "''";              //small image ****
                $csv[$i - 2][] = "''";              //thumbnail  
            } else {
                $csv[$i - 2][] = $path;              //image
                $csv[$i - 2][] = $path;                //small image
                $csv[$i - 2][] = $path;                 //thumbnail                 
            }
        }



        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'kids.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'kids.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'kids.csv', $data);

        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/14/files/kids.csv/');
        $this->_redirectUrl($url);
    }

    public function suvenirparseAction() {
        $skuArray = array();
        $categoryCollection = Mage::getModel('catalog/category')->getCollection();
        foreach ($categoryCollection as $category) {
            foreach ($category->getProductCollection()->getColumnValues('sku') as $sku) {
                $skuArray[] = $sku;
            }
        }
        $sku = '';
        $appRoot = Mage::getRoot();
        $root = dirname($appRoot);
        require_once $root . DS . 'lib' . DS . 'ExcelReader' . DS . 'excelreader.php';
        $data = new Spreadsheet_Excel_Reader();
        $data->read($_FILES['filesuvenir']['tmp_name']);
        $found = '0';

        $csv = array();
        $images = array();
        $sku = array();
        $dir = $root . DS . 'media' . DS . 'import' . DS . 'suvenir' . DS;   //задаём имя директории
        if (is_dir($dir)) {   //проверяем наличие директории
            $files = scandir($dir);    //сканируем (получаем массив файлов)
            array_shift($files); // удаляем из массива '.'
            for ($a = 0; $a < sizeof($files); $a++) {
                $image[] = str_replace(".jpg", "", $files[$a]);
            }
        }
        for ($i = 2; $i < $data->rowcount() + 1; $i++) {
            $price = str_replace(" ", "", $data->val($i, D));
            $csv[$i - 2][] = "''";                                                       //articul
            $csv[$i - 2][] = "'simple'";                            //type
            $csv[$i - 2][] = "'suvenir'";                             //attribut_set
            $csv[$i - 2][] = "'Отсутствует'";                       //tax_class_id
            $csv[$i - 2][] = "'Включено'";                          //status
            $csv[$i - 2][] = "'1'";                               //weight
            $csv[$i - 2][] = "'" . $data->val($i, B) . "'";             //sku
            $csv[$i - 2][] = "'" . $data->val($i, A) . "'";             //name
            $csv[$i - 2][] = "'" . str_replace(',', '.', $price) . "'";                   //price 
            $csv[$i - 2][] = "'" . str_replace("/r/n", "", $data->val($i, A)) . "'";     //description
            $csv[$i - 2][] = "'" . str_replace("/n", "", $data->val($i, A)) . "'";             //short_description
            $csv[$i - 2][] = "'Каталог, поиск'";                    //visibility
            $csv[$i - 2][] = "'" . $data->val($i, G) . "'";             //category_ids
            $csv[$i - 2][] = "'" . $data->val($i, E) . "'";             //qty

            $sku1 = str_replace(",", "", $data->val($i, B));
            $sku1 = str_replace(".", "", $sku1);
            $sku = $sku1;
            $found = '0';
            if (in_array($sku, $image)) {
                $path = "'/suvenir/" . $sku . ".jpg'";              //image
                $found = '1';
            }

            if ($found == '0') {
                $csv[$i - 2][] = "''";              //image
                $csv[$i - 2][] = "''";              //small image
                $csv[$i - 2][] = "''";              //thumbnail  
            } else {
                $csv[$i - 2][] = $path;              //image
                $csv[$i - 2][] = $path;                //small image
                $csv[$i - 2][] = $path;                 //thumbnail                
            }

            $csv[$i - 2][] = "'1'";                                        //is_in_stock
            $csv[$i - 2][] = "'base'";                                 //websites
            $csv[$i - 2][] = "'" . $data->val($i, C) . "'";                              //country
            $csv[$i - 2][] = "'" . $data->val($i, F) . "'";                           //standart
            $find_sku = '0';
            if (in_array($data->val($i, B), $skuArray)) {
                $find_sku = '1';
            }
            if ($find_sku == '0') {
                $csv[$i - 2][] = "'Да'";                                                  //new
            } else {
                $csv[$i - 2][] = "'Нет'";
            }

            // $csv[$i - 2][] = "'" . str_replace('/r/n', '',$data->val($i, Q)) . "'";         			 //description
            // $csv[$i - 2][] = "'" . str_replace('/n', '',$data->val($i, Q)) . "'";         			 //short_description
        }
        $file = fopen($root . DS . 'var' . DS . 'import' . DS . 'suvenir.csv', 'w');
        foreach ($csv as $line) {
            fputcsv($file, $line, "~");
        }
        fclose($file);
        // fix bug with ""
        $data = file_get_contents($root . DS . 'var' . DS . 'import' . DS . 'suvenir.csv');
        $data = str_replace('"', "", $data);
        $data = str_replace("'", "\"", $data);
        file_put_contents($root . DS . 'var' . DS . 'import' . DS . 'suvenir.csv', $data);



        $url = Mage::getModel('adminhtml/url')->getUrl('adminhtml/system_convert_gui/run/id/8/files/suvenir.csv/');
        $this->_redirectUrl($url);
    }

    public function loadpricekancAction() {
        if (isset($_FILES['pricekanc']['name']) && $_FILES['pricekanc']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'kanc';  //desitnation directory
                $fname = $_FILES['pricekanc']['name']; //file name
                $uploader = new Varien_File_Uploader('pricekanc'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function loadpricebooksAction() {
        if (isset($_FILES['pricebooks']['name']) && $_FILES['pricebooks']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'books';  //desitnation directory
                $fname = $_FILES['pricebooks']['name']; //file name
                $uploader = new Varien_File_Uploader('pricebooks'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function loadpricesuvenirAction() {
        if (isset($_FILES['pricesuvenir']['name']) && $_FILES['pricesuvenir']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'suvenir';  //desitnation directory
                $fname = $_FILES['pricesuvenir']['name']; //file name
                $uploader = new Varien_File_Uploader('pricesuvenir'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function loadpricekidsAction() {
        if (isset($_FILES['pricekids']['name']) && $_FILES['pricekids']['name'] != '') {
            try {
                $path = Mage::getBaseDir() . DS . 'media' . DS . 'prices' . DS . 'kids';  //desitnation directory
                $fname = $_FILES['pricekids']['name']; //file name
                $uploader = new Varien_File_Uploader('pricekids'); //load class
                $uploader->setAllowedExtensions(array('xls')); //Allowed extension for file
                $uploader->setAllowCreateFolders(true); //for creating the directory if not exists
                $uploader->setAllowRenameFiles(false); //if true, uploaded file's name will be changed, if file with the same name already exists directory.
                $uploader->setFilesDispersion(false);
                $uploader->save($path, 'file.xls'); //save the file on the specified path
                $url = Mage::getModel('adminhtml/url')->getUrl('web/adminhtml_web/success');
                $this->_redirectUrl($url);
            } catch (Exception $e) {
                echo 'Error Message: ' . $e->getMessage();
            }
        }
    }

    public function editAction() {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('web/web')->load($id);

        if ($model->getId() || $id == 0) {
            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if (!empty($data)) {
                $model->setData($data);
            }

            Mage::register('web_data', $model);

            $this->loadLayout();
            $this->_setActiveMenu('web/items');

            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

            $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);

            $this->_addContent($this->getLayout()->createBlock('web/adminhtml_web_edit'))
                    ->_addLeft($this->getLayout()->createBlock('web/adminhtml_web_edit_tabs'));

            $this->renderLayout();
        } else {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('web')->__('Item does not exist'));
            $this->_redirect('*/*/');
        }
    }

    public function newAction() {
        $this->_forward('edit');
    }

    public function saveAction() {
        if ($data = $this->getRequest()->getPost()) {

            if (isset($_FILES['filename']['name']) && $_FILES['filename']['name'] != '') {
                try {
                    /* Starting upload */
                    $uploader = new Varien_File_Uploader('filename');

                    // Any extention would work
                    $uploader->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'));
                    $uploader->setAllowRenameFiles(false);

                    // Set the file upload mode 
                    // false -> get the file directly in the specified folder
                    // true -> get the file in the product like folders 
                    //	(file.jpg will go in something like /media/f/i/file.jpg)
                    $uploader->setFilesDispersion(false);

                    // We set media as the upload dir
                    $path = Mage::getBaseDir('media') . DS;
                    $uploader->save($path, $_FILES['filename']['name']);
                } catch (Exception $e) {
                    
                }

                //this way the name is saved in DB
                $data['filename'] = $_FILES['filename']['name'];
            }


            $model = Mage::getModel('web/web');
            $model->setData($data)
                    ->setId($this->getRequest()->getParam('id'));

            try {
                if ($model->getCreatedTime == NULL || $model->getUpdateTime() == NULL) {
                    $model->setCreatedTime(now())
                            ->setUpdateTime(now());
                } else {
                    $model->setUpdateTime(now());
                }

                $model->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('web')->__('Item was successfully saved'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $model->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('web')->__('Unable to find item to save'));
        $this->_redirect('*/*/');
    }

    public function deleteAction() {
        if ($this->getRequest()->getParam('id') > 0) {
            try {
                $model = Mage::getModel('web/web');

                $model->setId($this->getRequest()->getParam('id'))
                        ->delete();

                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            }
        }
        $this->_redirect('*/*/');
    }

    public function massDeleteAction() {
        $webIds = $this->getRequest()->getParam('web');
        if (!is_array($webIds)) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select item(s)'));
        } else {
            try {
                foreach ($webIds as $webId) {
                    $web = Mage::getModel('web/web')->load($webId);
                    $web->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                        Mage::helper('adminhtml')->__(
                                'Total of %d record(s) were successfully deleted', count($webIds)
                        )
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    public function massStatusAction() {
        $webIds = $this->getRequest()->getParam('web');
        if (!is_array($webIds)) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select item(s)'));
        } else {
            try {
                foreach ($webIds as $webId) {
                    $web = Mage::getSingleton('web/web')
                            ->load($webId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                        $this->__('Total of %d record(s) were successfully updated', count($webIds))
                );
            } catch (Exception $e) {
                $this->_getSession()->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    function transliterate($input) {
        $gost = array(
            "Є" => "YE", "І" => "I", "Ѓ" => "G", "і" => "i", "№" => "-", "є" => "ye", "ѓ" => "g",
            "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D",
            "Е" => "E", "Ё" => "YO", "Ж" => "ZH",
            "З" => "Z", "И" => "I", "Й" => "J", "К" => "K", "Л" => "L",
            "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R",
            "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "X",
            "Ц" => "C", "Ч" => "CH", "Ш" => "SH", "Щ" => "SHH", "Ъ" => "'",
            "Ы" => "Y", "Ь" => "", "Э" => "E", "Ю" => "YU", "Я" => "YA",
            "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
            "е" => "e", "ё" => "yo", "ж" => "zh",
            "з" => "z", "и" => "i", "й" => "j", "к" => "k", "л" => "l",
            "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
            "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "x",
            "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "shh", "ъ" => "",
            "ы" => "y", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",
            " " => "_", "—" => "_", "," => "_", "!" => "_", "@" => "_",
            "#" => "-", "$" => "", "%" => "", "^" => "", "&" => "", "*" => "",
            "(" => "", ")" => "", "+" => "", "=" => "", ";" => "", ":" => "",
        );
        return strtr($input, $gost);
    }

    function create_category($parentId, $name, $url) {
        $category = new Mage_Catalog_Model_Category();
        $category->setName($name);
        $category->setUrlKey($url);
        $category->setIsActive(1);
        $category->setDisplayMode('PRODUCTS');
        $category->setIsAnchor(0);
        $parentCategory = Mage::getModel('catalog/category')->load($parentId);
        $category->setPath($parentCategory->getPath());
        $category->save();
        return $category->getId();
    }

    function get_category($cat_id) {
        $_category = Mage::getModel('catalog/category')->load($cat_id);
        //$_categories = $_category->getCollection()->addAttributeToSelect(array('name'))->addAttributeToFilter('is_active', false)->addIdFilter($_category->getChildrenCategoriesWithInactive());
        $all_cat = $_category->getChildrenCategoriesWithInactive()->getData();
        foreach ($all_cat as $_category) {
            $root_cat[] = Mage::getModel('catalog/category')->load($_category['entity_id'])->getName();
        }
        return $root_cat;
    }

    function find_category($parentId, $name) {
        $collection = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('name')->addAttributeToFilter('parent_id', $parentId);
        $collect = get_class_methods($collection);
        foreach ($collection as $cat) {
            if ($cat->getName() == $name) {
                return $cat->getId();
            }
        }
    }

    function set_active($categoryId, $flag) {
        $category = Mage::getModel('catalog/category')->load($categoryId);
        $category->setIsActive($flag);
        $category->save();
    }

    function get_all_categories() {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*');
        //foreach($categories->getData() as $data) {
        //    $category = Mage::getModel('catalog/category')->load($data['entity_id']);
        //    $category->setIsActive(false);
        //    $category->save();
        //}                
        return $categories->getData();
    }

    function get_active($categoryId) {
        $category = Mage::getModel('catalog/category')->load($categoryId);
        return $category->getIsActive();
    }

    function set_all_notactive() {
        $collection = Mage::getModel('catalog/category')->getCollection();
        foreach ($collection as $cat) {
            $cat->setIsActive(false);
        }
    }

}
