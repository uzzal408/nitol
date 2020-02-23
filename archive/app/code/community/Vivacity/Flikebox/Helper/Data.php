<?php
class Vivacity_Flikebox_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isActive()
    {
        return Mage::getStoreConfig('flikebox/general/active');
    }
    
    public function getPosition()
    {
        return Mage::getStoreConfig('flikebox/general/col_layout');
    }
}