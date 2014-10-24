<?php
/**
 * @category    Community
 * @package     Intellectmoney
 */

/**
 * IPN controller
 */
class IntellectMoney_Im_IpnController extends Mage_Core_Controller_Front_Action
{
    /**
     * Instantiate IPN model and pass IPN request to it
     */
    public function indexAction()
    {
        if (!$this->getRequest()->isPost()) {
            return;
        }

        try {
            $data = $this->getRequest()->getPost();
            Mage::getModel('im/ipn')->processIpnRequest($data, new Varien_Http_Adapter_Curl());
        } catch (Exception $e) {
            Mage::logException($e);
        }
    }
}
