<?php

namespace innovmt\MTJetstreamInertiaGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \innovmt\MTJetstreamInertiaGenerator\Skeleton\SkeletonClass
 */
class JetstreamInertiaGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetstream-inertia-generator';
    }
}
