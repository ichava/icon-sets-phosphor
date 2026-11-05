<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsPhosphor\Providers;

use Simtabi\Laranail\Ichava\Support\IconPackServiceProvider;
use Simtabi\Laranail\Ichava\IconSetsPhosphor\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsPhosphor\View\Components\IconComponent;

/**
 * Registers the Phosphor Icons set with the Ichava registry on boot.
 */
class IconsServiceProvider extends IconPackServiceProvider
{
    protected function constantsClass(): string
    {
        return IconsConstants::class;
    }

    protected function componentClass(): string
    {
        return IconComponent::class;
    }
}
