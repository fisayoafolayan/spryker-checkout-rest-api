<?php

namespace FondOfSpryker\Zed\CheckoutRestApi\Business\Checkout;

use Generated\Shared\Transfer\RestCheckoutRequestAttributesTransfer;
use Generated\Shared\Transfer\RestCheckoutResponseTransfer;
use Spryker\Zed\CheckoutRestApi\Business\Checkout\PlaceOrderProcessorInterface as sprykerPlaceOrderProcessorInterface;

interface PlaceOrderProcessorInterface extends SprykerPlaceOrderProcessorInterface
{
    /**
     * @param \Generated\Shared\Transfer\RestCheckoutRequestAttributesTransfer $restCheckoutRequestAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCheckoutResponseTransfer
     */
    public function placeOrderSplit(RestCheckoutRequestAttributesTransfer $restCheckoutRequestAttributesTransfer): RestCheckoutResponseTransfer;
}
