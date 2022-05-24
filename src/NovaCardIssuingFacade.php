<?php

namespace Kwidoo\NovaCardIssuing;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kwidoo\NovaCardIssuing\Skeleton\SkeletonClass
 */
class NovaCardIssuingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nova-card-issuing';
    }
}
