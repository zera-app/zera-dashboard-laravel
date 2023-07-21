## Starter Template Dashboard for Laravel

Using

-   [Splade](https://splade.dev)
-   [Daisy UI](https://daisyui.com) Components
-   [Icon Heroicons](https://heroicons.com) from [Blade UI kit - Icon](https://github.com/blade-ui-kit)

## Icon Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-heroicon-o-arrow-left/>
```

You can also pass classes to your icon components:

```blade
<x-heroicon-o-arrow-left class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-heroicon-o-arrow-left style="color: #555"/>
```

Or use the `@svg` in directive:

```blade
@svg('heroicon-o-arrow-left', 'w-6 h-6', ['style' => 'color: #555'])
```

The solid icons can be referenced like this:

```blade
<x-heroicon-s-arrow-left/>
```

The mini icons can be referenced like this:

```blade
<x-heroicon-m-arrow-left/>
```

## Development Process

-   [ ] create more components for the template
-   [ ] documentation for template components and splade components
-   [ ] Dark Mode Component (On Progress)
-   [ ] Dark Mode Login Page (On progress)
