<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\IconSetsPhosphor\Enums\Variant;

/**
 * Pure-enum behaviour tests. Anything that touches config.json (default(),
 * isDefault(), getClass(), getPath()) lives in the Feature suite where the
 * Laravel container is bootstrapped.
 */
it(description: 'exposes the regular case value', closure: function () {
    expect(Variant::REGULAR->getValue())->toBe('regular');
});

it(description: 'exposes the thin case value', closure: function () {
    expect(Variant::THIN->getValue())->toBe('thin');
});

it(description: 'exposes the light case value', closure: function () {
    expect(Variant::LIGHT->getValue())->toBe('light');
});

it(description: 'exposes the bold case value', closure: function () {
    expect(Variant::BOLD->getValue())->toBe('bold');
});

it(description: 'exposes the fill case value', closure: function () {
    expect(Variant::FILL->getValue())->toBe('fill');
});

it(description: 'exposes the duotone case value', closure: function () {
    expect(Variant::DUOTONE->getValue())->toBe('duotone');
});

it(description: 'returns every case from values', closure: function () {
    expect(Variant::values())->toBe(['regular', 'thin', 'light', 'bold', 'fill', 'duotone']);
});

it(description: 'resolves known values and rejects unknown ones', closure: function () {
    expect(Variant::tryFromValue('regular'))->toBe(Variant::REGULAR)
        ->and(Variant::tryFromValue('thin'))->toBe(Variant::THIN)
        ->and(Variant::tryFromValue('light'))->toBe(Variant::LIGHT)
        ->and(Variant::tryFromValue('bold'))->toBe(Variant::BOLD)
        ->and(Variant::tryFromValue('fill'))->toBe(Variant::FILL)
        ->and(Variant::tryFromValue('duotone'))->toBe(Variant::DUOTONE)
        ->and(Variant::tryFromValue('not-a-real-variant'))->toBeNull();
});
