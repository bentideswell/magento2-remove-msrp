<?php
/**
 *
 */
namespace Magento\Msrp\Pricing\Price;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Pricing\Price\FinalPrice;
use Magento\Framework\Pricing\Adjustment\CalculatorInterface;

class MsrpPrice extends FinalPrice
{
    /**
     * Price type MSRP
     */
    const PRICE_CODE = 'msrp_price';

    /**
     *
     */
    public function __construct(
        Product $saleableItem,
        $quantity,
        CalculatorInterface $calculator,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
    ) {
        parent::__construct($saleableItem, $quantity, $calculator, $priceCurrency);
    }

    /**
     *
     */
    public function isShowPriceOnGesture()
    {
        return false;
    }

    /**
     *
     */
    public function getMsrpPriceMessage()
    {
        return '';
    }

    /**
     *
     */
    public function isMsrpEnabled()
    {
        return false;
    }

    /**
     *
     */
    public function canApplyMsrp(Product $product)
    {
        return false;
    }

    /**
     *
     */
    public function isMinimalPriceLessMsrp(Product $product)
    {
        return false;
    }
}
