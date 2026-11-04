<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsPhosphor\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsPhosphor\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsPhosphor\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-phosphor')
        ->and(IconsConstants::getTitle())->toBe('Phosphor Icons')
        ->and(IconsConstants::getPrefix())->toBe('ph')
        ->and(IconsConstants::getDefaultVariant())->toBe('regular');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::REGULAR->getClass())->toBe('ph-regular')
        ->and(Variant::THIN->getClass())->toBe('ph-thin')
        ->and(Variant::LIGHT->getClass())->toBe('ph-light')
        ->and(Variant::BOLD->getClass())->toBe('ph-bold')
        ->and(Variant::FILL->getClass())->toBe('ph-fill')
        ->and(Variant::DUOTONE->getClass())->toBe('ph-duotone');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::REGULAR)
        ->and(Variant::REGULAR->isDefault())->toBeTrue()
        ->and(Variant::THIN->isDefault())->toBeFalse()
        ->and(Variant::LIGHT->isDefault())->toBeFalse()
        ->and(Variant::BOLD->isDefault())->toBeFalse()
        ->and(Variant::FILL->isDefault())->toBeFalse()
        ->and(Variant::DUOTONE->isDefault())->toBeFalse();
});

it(description: 'points every variant at a directory that holds its icons', closure: function () {
    foreach (Variant::cases() as $variant) {
        $path = $variant->getPath();
        expect(is_dir($path))->toBeTrue("{$variant->value} points at {$path}, which is not a directory")
            ->and(glob($path . '/*.svg') ?: glob($path . '/*/*.svg') ?: [])->not->toBeEmpty("{$variant->value} holds no icons");
    }
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-phosphor'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-phosphor registered after boot.',
    );
});

it(description: 'resolves and renders the documented example icons', closure: function () {
    $registry = $this->app->make(IconRegistry::class);
    $samples = ['regular/house', 'bold/house', 'duotone/heart'];

    expect($samples)->not->toBeEmpty();

    foreach ($samples as $item) {
        $id = "ichava/icon-sets-phosphor::{$item}";

        expect(is_file(dirname(__DIR__, 2) . "/resources/assets/svg/files/{$item}.svg"))->toBeTrue("{$item}.svg is missing")
            ->and($registry->has($id))->toBeTrue("{$id} does not resolve")
            ->and($registry->render($id))->toContain('<svg');
    }
});
