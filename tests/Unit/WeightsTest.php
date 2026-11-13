<?php

declare(strict_types=1);

/**
 * Phosphor's six weights hold the same 1,512 designs under the same names.
 *
 * Upstream suffixes each weight's file (`house-bold.svg`); the pack strips the
 * suffix so `bold/house` and `regular/house` are the same design. A refresh that
 * forgot to strip it would leave `bold/house-bold` beside nothing, which this
 * catches.
 */
function phosphor_names(string $weight): array
{
    $names = array_map(static fn (string $f): string => basename($f, '.svg'), glob(dirname(__DIR__, 2) . "/resources/assets/svg/files/{$weight}/*.svg") ?: []);
    sort($names);

    return $names;
}

it(description: 'ships the same names in every weight', closure: function () {
    $regular = phosphor_names('regular');
    expect(count($regular))->toBe(1512);

    foreach (['thin', 'light', 'bold', 'fill', 'duotone'] as $weight) {
        expect(phosphor_names($weight))->toBe($regular, "{$weight} does not hold the same names as regular");
    }
});

it(description: 'carries no weight suffix in any file name', closure: function () {
    foreach (['thin', 'light', 'bold', 'fill', 'duotone'] as $weight) {
        $suffixed = array_filter(phosphor_names($weight), static fn (string $n): bool => str_ends_with($n, "-{$weight}"));
        expect($suffixed)->toBe([], "{$weight} still has suffixed names");
    }
});
