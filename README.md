# ichava/icon-sets-phosphor

[![Packagist](https://img.shields.io/packagist/v/ichava/icon-sets-phosphor)](https://packagist.org/packages/ichava/icon-sets-phosphor)
[![Tests](https://github.com/ichava/icon-sets-phosphor/actions/workflows/tests.yml/badge.svg)](https://github.com/ichava/icon-sets-phosphor/actions/workflows/tests.yml)
[![Static analysis](https://github.com/ichava/icon-sets-phosphor/actions/workflows/code-quality.yml/badge.svg)](https://github.com/ichava/icon-sets-phosphor/actions/workflows/code-quality.yml)
[![License MIT](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

> Phosphor Icons for the Ichava Laravel icon ecosystem: 9,072 SVGs across `regular` (1,512), `thin` (1,512), `light` (1,512), `bold` (1,512), `fill` (1,512), `duotone` (1,512), vendored from `@phosphor-icons/core` 2.1.1.

Requires [`ichava/core`](https://github.com/ichava/core) `^0.1` on PHP `^8.4.1 || ^8.5` and Laravel `^13`.

## Install

`ichava/core` and this pack come from Packagist. The `laranail/*` packages core depends on are not on Packagist yet, so the **application's** `composer.json` names them:

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://github.com/laranail/package-tools" },
        { "type": "vcs", "url": "https://github.com/laranail/console" },
        { "type": "vcs", "url": "https://github.com/laranail/enumerator" },
        { "type": "vcs", "url": "https://github.com/laranail/db-tools" }
    ]
}
```

Then require the pack:

```bash
composer require ichava/icon-sets-phosphor
```

The service provider is discovered automatically. Core's [installation guide](https://github.com/ichava/core/blob/main/docs/installation.md) covers core's own setup.

## Quick start guide and usage

### Getting started

Seed the pack once after installing it, and again after upgrading it:

```bash
php artisan ichava::ichava-core.database seed --package=ichava/icon-sets-phosphor
```

The seed is not optional: until it runs the registry holds no rows for this pack and every lookup returns nothing. No configuration is needed; the defaults are merged without publishing anything.

### Usage

Icons are addressed as `ichava/icon-sets-phosphor::<variant>/<name>`. In Blade, through core's component:

```blade
<x-ichava::icon name="ichava/icon-sets-phosphor::regular/house" class="w-6 h-6" />
```

Or from PHP, through core's helper:

```blade
{{ ichava('ichava/icon-sets-phosphor::duotone/heart')->class('w-5 h-5 text-red-600') }}
```

See [Getting started](docs/getting-started.md) for the full walkthrough, and the [Documentation](#documentation) index below for everything else.

## <a name="documentation"></a>Documentation

The full documentation lives in this repository, under `docs/`, and is indexed below.

### This pack

- [Installation](docs/installation.md) — requirements, the repositories block, seeding
- [Getting started](docs/getting-started.md) — your first icon from this pack
- [Configuration](docs/configuration.md) — why there is no config file, and the kind keys in `config.json`
- [Architecture](docs/architecture.md) — what it ships, what it delegates, and why
- [Release](docs/release.md) — how a version is cut, and how the icons are refreshed
- [Variants](docs/variants.md) — the six weights, the `Variant` enum, and when to reach for which
- [Customisation](docs/customization.md) — sizing, colour and accessibility
- [Attribution](docs/attribution.md) — upstream project, licence terms, and where the vendored version is recorded

### Shared across every pack

- [Use an icon pack](https://github.com/ichava/core/blob/main/docs/recipes/use-an-icon-pack.md) — addressing icons, in Blade and in PHP
- [Seed pack icons](https://github.com/ichava/core/blob/main/docs/recipes/seed-pack-icons.md) — the seeding pipeline and its options
- [Check pack updates](https://github.com/ichava/core/blob/main/docs/recipes/check-pack-updates.md) — the update checker and what its statuses mean
- [Serve icons from a CDN](https://github.com/ichava/core/blob/main/docs/recipes/serve-icons-from-a-cdn.md) — reading this pack's CDN templates out of `config.json`

Its upstream is `@phosphor-icons/core`; run core's [check pack updates](https://github.com/ichava/core/blob/main/docs/recipes/check-pack-updates.md) recipe to see whether a newer release exists.

## Contributing & security

See [CONTRIBUTING.md](CONTRIBUTING.md). Report vulnerabilities privately through [security policy](https://github.com/ichava/icon-sets-phosphor/security/policy) — never in a public issue.

## License

The package code is MIT, © Simtabi LLC. See [LICENSE](LICENSE).

The icons are [Phosphor Icons](https://phosphoricons.com), © 2023 Phosphor Icons, under their own MIT licence. Simtabi LLC claims no authorship of them. Their notice is in [ATTRIBUTION.md](ATTRIBUTION.md), which ships with the package and must accompany any copy of the icons.
