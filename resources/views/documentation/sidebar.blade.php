<x-app-layout>

    @php
        $pageName = 'Sidebar Documentation';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            To add your pages link or routes you can open and edit Ffle:
            <pre><code>...\app\View\Composer\Sidebar\SidebarContent.php</code></pre>
        </p>
        <div class="mockup-code">
            <pre data-prefix="">
                <code>
    public static function dashboard()
    {
        return [
            [
                'title' => 'Dashboard',
                'menus' => [
                    [
                        'title' => 'Dashboard',
                        'route' => 'dashboard',
                        'icon' => 'icon',
                        'menus' => [],
                    ],
                ],
            ],
        ];
    }
                </code>
            </pre>
        </div>
        <p class="text-base-content">
            This must contain array, you must pass the given array values. like title, route, icon, the menus is optional, but you should pass empty array. for the icon you can use hero icon like the example or usig the svg icon.
        </p>
    </x-card>

</x-app-layout>
