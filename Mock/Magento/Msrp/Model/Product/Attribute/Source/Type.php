<?php
/**
 *
 */
namespace Magento\Msrp\Model\Product\Attribute\Source;

class Type extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Display Product Price on gesture
     */
    const TYPE_ON_GESTURE = 1;

    /**
     * Display Product Price in cart
     */
    const TYPE_IN_CART = 2;

    /**
     * Display Product Price before order confirmation
     */
    const TYPE_BEFORE_ORDER_CONFIRM = 3;

    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        return [];
    }
}
