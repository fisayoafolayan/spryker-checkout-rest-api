<?php

declare(strict_types=1);

namespace FondOfspryker\Client\CheckoutRestApi;

use FondOfspryker\Client\CheckoutRestApi\Zed\CheckoutRestApiZedStub;
use Spryker\Client\CheckoutRestApi\Zed\CheckoutRestApiZedStubInterface;
use Spryker\Client\CheckoutRestApi\CheckoutRestApiFactory as SprykerCheckoutRestApiFactory;

class CheckoutRestApiFactory extends SprykerCheckoutRestApiFactory
{
    /**
     * @return \FondOfSpryker\Client\CheckoutRestApi\Zed\CheckoutRestApiZedStubInterface
     */
    public function createFondOfCheckoutRestApiZedStub(): CheckoutRestApiZedStubInterface
    {
        return new CheckoutRestApiZedStub($this->getZedRequestClient());
    }
}
