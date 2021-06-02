<?php
/**
 *
 */
namespace Magento\Msrp\Model\Product\Attribute\Source\Type;

class Price extends \Magento\Msrp\Model\Product\Attribute\Source\Type
{
    /**
     * Get value from the store configuration settings
     */
    const TYPE_USE_CONFIG = 0;
    
    /**
     * Retrieve flat column definition
     *
     * @return array
     */
    public function getFlatColumns()
    {
        return [];
    }

    /**
     * Retrieve select for flat attribute update
     *
     * @param int $store
     * @return \Magento\Framework\DB\Select|null
     */
    public function getFlatUpdateSelect($store)
    {
        return null;
    }
}
