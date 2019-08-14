<?php
class Kulmage_Textlist_Model_System_Config_Source_Model
{
    public function toOptionArray()
    {
         
        return array(
            //array('value'=>'', 'label'=>''),
            array('value'=>'grid', 'label'=>Mage::helper('adminhtml')->__('Grid Only')),
            array('value'=>'list', 'label'=>Mage::helper('adminhtml')->__('List Only')),
            array('value'=>'grid-list', 'label'=>Mage::helper('adminhtml')->__('Grid (default) / List')),
            array('value'=>'list-grid', 'label'=>Mage::helper('adminhtml')->__('List (default) / Grid')),
			array('value'=>'textlist-list-grid', 'label'=>Mage::helper('adminhtml')->__('List (default) / Grid / Text List')),
        );
    }
}
