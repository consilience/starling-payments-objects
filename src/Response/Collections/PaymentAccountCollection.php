<?php

namespace Consilience\Starling\Payments\Response\Collections;

/**
 *
 */

use Consilience\Starling\Payments\Response\PaymentAccount;

class PaymentAccountCollection extends AbstractCollection
{
    /**
     * @param mixed $item
     * @return bool
     */
    protected function hasExpectedStrictType($item)
    {
        return $item instanceof PaymentAccount;
    }

    /**
     * @inherit
     */
    protected function createInstance(array $data)
    {
        return new PaymentAccount($data);
    }
}
