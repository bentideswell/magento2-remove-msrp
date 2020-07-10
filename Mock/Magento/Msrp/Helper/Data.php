<?php
/**
 *
 */
namespace Magento\Msrp\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     *
     */
    public function canApplyMsrp($product, $visibility = null)
    {
        return false;
    }

    /**
     *
     */
    public function getMsrpPriceMessage($product)
    {
        return '';
    }

    /**
     *
     */
    public function isShowPriceOnGesture($product)
    {
        return false;
    }

    /**
     *
     */
    public function isShowBeforeOrderConfirm($product)
    {
        return false;
    }

    /**
     *
     */
    public function isMinimalPriceLessMsrp($product)
    {
        return false;
    }
}
