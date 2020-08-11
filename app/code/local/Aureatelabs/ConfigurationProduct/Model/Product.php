<?php

class Aureatelabs_ConfigurationProduct_Model_Product extends Mage_Catalog_Model_Product {
    /**
     * @inheritdoc
     */
    public function isSaleable()
    {
        if ($this->getTypeId() === 'configurable') {
            return true;
        }

        return $this->isSalable();
    }
}