<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Phosphor Icons -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A non-English locale
| may add them to override; `en` must not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsPhosphor\Enums\Variant.
|
*/

return [
    'variants' => [
        'regular' => 'Regular',
        'thin'    => 'Thin',
        'light'   => 'Light',
        'bold'    => 'Bold',
        'fill'    => 'Fill',
        'duotone' => 'Duotone',
    ],

    'variant_descriptions' => [
        'regular' => 'The default line weight.',
        'thin'    => 'The lightest weight.',
        'light'   => 'Between thin and regular.',
        'bold'    => 'The heaviest line weight.',
        'fill'    => 'Solid shapes.',
        'duotone' => 'A line layer over a 20% opacity fill layer, both in currentColor.',
    ],
];
