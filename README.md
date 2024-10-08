## Starter Template Dashboard for Laravel

Using

-   [Splade](https://splade.dev) SPA
-   [Daisy UI](https://daisyui.com) UI Components
-   [Icon Heroicons](https://heroicons.com) from [Blade UI kit - Icon](https://github.com/blade-ui-kit)
-   [DiceBear](https://www.dicebear.com/) Icon Profile

## Development Process

-   [x] create more components for the template
-   [x] documentation for template components and splade components
-   [x] Dark Mode Component
- Dark Mode Login Page (On progress)

## Screenshot Dashboard
- Login Page
  
![Login Page](https://github.com/zera-app/zera-dashboard-laravel/assets/70498944/8eb731bd-463f-4f6d-b026-b8ec5a2084ef)

- Light Mode
  
![Light Mode](https://github.com/zera-app/zera-dashboard-laravel/assets/70498944/d1cb86ee-2dfe-45f0-b143-3a69731e803e)

- Dark Mode
  
![Dark Mode](https://github.com/zera-app/zera-dashboard-laravel/assets/70498944/d4f7bb9e-b22c-4d87-a480-a7a162786a3d)

- Profile Page
  
![zeraprofile](https://github.com/zera-app/zera-dashboard-laravel/assets/70498944/bb1fd3db-db1d-4b11-b624-f5a075bba1c4)

- Helper & Component doucmentation page
  
![zerafitur](https://github.com/zera-app/zera-dashboard-laravel/assets/70498944/18e4a29e-6036-45ce-903d-e7138aeaa6c7)




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

