<?php
/**
 * Product list toolbar
 *
 * @category    Kulmage
 * @package     Kulmage_Textlist
 * @author      Kulmage
 */
class Kulmage_Textlist_Block_Product_List_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{   
    protected $_availableOrder      = array();

    /**
     * List of available view types
     *
     * @var string
     */
    protected $_availableMode       = array();
  
    /**
     * Default Order field
     *
     * @var string
     */
    protected $_orderField          = null;
   
   
    protected function _getConfig()
    {
        return Mage::getSingleton('catalog/config');
    }

    /**
     * Init Toolbar
     *
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_orderField  = Mage::getStoreConfig(
            Mage_Catalog_Model_Config::XML_PATH_LIST_DEFAULT_SORT_BY
        );

        $this->_availableOrder = $this->_getConfig()->getAttributeUsedForSortByArray();

        switch (Mage::getStoreConfig('catalog/frontend/list_mode')) {
            case 'grid':
                $this->_availableMode = array('grid' => $this->__('Grid'));
                break;

            case 'list':
                $this->_availableMode = array('list' => $this->__('List'));
                break;			
				
            case 'textlist-list-grid':
                $this->_availableMode = array('grid' => $this->__('Grid'), 'list' =>  $this->__('List'),'text-list' => $this->__('Text List'));
                break;
				
			case 'grid-list':
                $this->_availableMode = array('grid' => $this->__('Grid'), 'list' =>  $this->__('List'));
                break;

            case 'list-grid':
                $this->_availableMode = array('list' => $this->__('List'), 'grid' => $this->__('Grid'));
                break;
        }
        $this->setTemplate('catalog/product/list/toolbar.phtml');
    }
}
