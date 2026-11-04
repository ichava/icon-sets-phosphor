# Attribution and licence

*Reference.*

## Upstream

[Phosphor Icons](https://phosphoricons.com/) is by Phosphor Icons (Helena Zhang, Tobias Fried and contributors). Source: [github.com/phosphor-icons/core](https://github.com/phosphor-icons/core).

## Licence

The icons and this package are owned separately:

- **The icons** are © 2023 Phosphor Icons, [MIT](https://github.com/phosphor-icons/core/blob/main/LICENSE). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

MIT allows commercial and non-commercial use, modification and redistribution, provided the copyright notice and permission notice accompany every copy. The upstream notice is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, and the licence text ships in `resources/assets/svg/licenses/`; both are in the dist archive (`docs/` is not). Keep them with the icons if you copy them out of the package.

The licence was read at the vendored version before anything was vendored. `config.json` records it under `license`: SPDX id `MIT`, file `resources/assets/svg/licenses/phosphor-icons-core/LICENSE`, SHA-256 `ddbe6082ec3cf979db47e5af549d2849c5d6182b3e005ef91ce1dbb9eb122f11`, checked 2026-11-04.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Phosphor Icons](https://phosphoricons.com) by Helena Zhang and Tobias Fried (MIT)

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync).
The weekly sync polls `@phosphor-icons/core`, refreshes the bundled SVGs when upstream moves, and opens a pull
request. A human reviews it and tags a release.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-phosphor`
to see whether a new upstream version is available.

## See also

- [Phosphor Icons website](https://phosphoricons.com/)
- [Phosphor Icons source](https://github.com/phosphor-icons/core)

---

[← Docs index](../README.md#documentation)
