<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsPhosphor\Enums;

use Simtabi\Laranail\Ichava\Traits\HasIconSetVariants;
use Simtabi\Laranail\Ichava\Contracts\IconSetVariantInterface;
use Simtabi\Laranail\Ichava\IconSetsPhosphor\Constants\IconsConstants;

/**
 * Type-safe variant selection for Phosphor Icons (regular / thin / light / bold / fill / duotone).
 */
enum Variant: string implements IconSetVariantInterface
{
    use HasIconSetVariants;

    case REGULAR = 'regular';
    case THIN = 'thin';
    case LIGHT = 'light';
    case BOLD = 'bold';
    case FILL = 'fill';
    case DUOTONE = 'duotone';

    public function getPath(): string
    {
        return IconsConstants::getSvgPath($this->value);
    }

    private static function getDefaultValue(): string
    {
        return IconsConstants::getDefaultVariant() ?? self::REGULAR->value;
    }

    private static function getClassPrefix(): string
    {
        return IconsConstants::getPrefix();
    }
}
