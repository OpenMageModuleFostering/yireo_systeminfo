<?php
/**
 * SystemInfo extension for Magento 
 *
 * @category    design_default
 * @package     Yireo_SystemInfo
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright (c) 2009 Yireo (http://www.yireo.com/)
 * @license     SystemInfo EULA (www.yireo.com)
 */

class Yireo_SystemInfo_Block_Overview extends Mage_Adminhtml_Block_Widget_Container
{
    /*
     * Constructor method
     */
    public function _construct()
    {
        $this->setTemplate('systeminfo/overview.phtml');
        parent::_construct();
    }

    /*
     * Helper to return the header of this page
     */
    public function getHeader($title = null)
    {
        return 'System Information - '.$this->__($title);
    }

    /*
     * Helper to return the menu
     */
    public function getMenu()
    {
        return $this->getLayout()->createBlock('systeminfo/menu')->toHtml();
    }

    /*
     * 
     */
    public function getModuleResult($module)
    {
        if(extension_loaded($module)) {
            return $this->__('Loaded');
        } else {
            return $this->__('Not available');
        }
    }
}
