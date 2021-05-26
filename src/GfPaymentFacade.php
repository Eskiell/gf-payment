<?php

namespace Eskiell\GfPayment;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eskiell\GfPayment\Skeleton\SkeletonClass
 */
class GfPaymentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gf-payment';
    }
}
