# Variants

*Reference.*

`ichava/icon-sets-phosphor` ships **1,512 designs in six weights, 9,072 SVGs**. Every SVG is `viewBox="0 0 256 256"` and paints with `currentColor`.

Upstream names each weight's file with the weight as a suffix (`house-bold.svg`); this pack drops the suffix and files the icon under the weight's folder instead, so the same name works in every weight.

| Variant | Path prefix | Icons | Style |
|---|---|---|---|
| `regular` | `regular/<name>` | 1,512 | The default line weight. |
| `thin` | `thin/<name>` | 1,512 | The lightest weight. |
| `light` | `light/<name>` | 1,512 | Between thin and regular. |
| `bold` | `bold/<name>` | 1,512 | The heaviest line weight. |
| `fill` | `fill/<name>` | 1,512 | Solid shapes. |
| `duotone` | `duotone/<name>` | 1,512 | A line layer over a 20% opacity fill layer, both in currentColor. |

The default variant is `regular`. Always include the variant prefix in the icon path:

```blade
<x-ichava::icon name="ichava/icon-sets-phosphor::regular/house" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-phosphor::bold/house" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-phosphor::duotone/heart" class="w-6 h-6" />
```

## Variant enum (PHP)

```php
use Simtabi\Laranail\Ichava\IconSetsPhosphor\Enums\Variant;

Variant::REGULAR->value;     // 'regular'
Variant::THIN->value;        // 'thin'
Variant::LIGHT->value;       // 'light'
Variant::BOLD->value;        // 'bold'
Variant::FILL->value;        // 'fill'
Variant::DUOTONE->value;     // 'duotone'
Variant::default();        // Variant::REGULAR
```

The enum implements `IconSetVariantInterface` from core, so it works wherever core's registry expects a variant.

## When to use which

- **regular** for most UI, **thin** and **light** for large or airy layouts, **bold** at small sizes where thin lines vanish.
- **fill** for selected or active states.
- **duotone** for illustrations and empty states; it reads as two tones from one colour.

Every design exists in all six weights.

## See also

- [Customisation](customization.md)
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
