# Changelog

All notable changes to `ichava/icon-sets-phosphor` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

## [0.1.0] - TBD

First release of `ichava/icon-sets-phosphor`.

### Added

- **Phosphor Icons 2.1.1 from `@phosphor-icons/core`**: 9,072 SVGs across `regular` (1,512), `thin` (1,512), `light` (1,512), `bold` (1,512), `fill` (1,512), `duotone` (1,512). The licence was read at that exact version before anything was vendored: MIT. Its text ships at `resources/assets/svg/licenses/phosphor-icons-core/LICENSE`, and `config.json` records its SPDX id, SHA-256 and check date under `license`.
- **`ATTRIBUTION.md`** carries the upstream owner, the vendored version, the licence verbatim and what was changed, and the README's License section points at it.
- **The pack declares its SVG kind**: `package.kind` is `icon`, with no category, item or rule override.
- **Weekly upstream sync** through icon-sets-sync's reusable `sync-pack.yml`, pinned to commit `5fa93a687c120644f75d072a9cdd83833b9f3d80`. It has nothing to run until icon-sets-sync gains `config/icon-sets-phosphor.json`.
- **Tests:** the provider boots and the icons resolve; the licence record matches the shipped licence file byte for byte; no SVG carries stray text; and the attribution, docs-shape, kind, personal-contact, PHPStan-level, release-version, sibling-constraint, sync-caller and workflow-permission guards the other packs carry.
