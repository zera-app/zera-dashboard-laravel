<x-app-layout>

    @php
        $pageName = 'Sidebar Documentation';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-2">
        <div class="my-2">
            <p class="text-base-content pb-3">
                To add your pages link or routes you can open and edit Ffle:
                <pre><code> <b>...\app\View\Composer\Sidebar\SidebarContent.php</b></code></pre>
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
                This must contain array, you must pass the given array values. like title, route, icon, the menus is
                optional, but you should pass empty array. for the icon you can use hero icon like the example or usig
                the svg icon.
            </p>
        </div>
        <hr class="my-2 border-2">

        <div class="my-2">
            <p class="text-base-content pb-3">
                If you want the sidebar menu or sub child to have <b>Permissions</b> then you can make it like this :
                <br>
                We use {!! '@' !!}can in the blade directive to check if the user has the given permission.
            </p>
            <div class="mockup-code">
                <pre data-prefix="" class="my-2">
                <code>
            [
                'title' => 'Dashboard',
                'permissions' => 'your permssion here',
                'menus' => [
                    [
                        'title' => 'Dashboard',
                        'route' => 'dashboard',
                        'permissions' => 'your permssion here',
                        'icon' => 'icon',
                        'menus' => [],
                    ],
                ],
            ],
                </code>
            </pre>
                // Or in the sub child menu
                <pre data-prefix="" class="my-2">
                <code>
                    [
                        'title' => 'Helpers',
                        'route' => null,
                        'icon' => 'icon',
                        'permissions' => 'your permssion here',
                        'menus' => [
                            [
                                'title' => 'Controller helpers',
                                'route' => 'documentation.controller-helper',
                                'permissions' => 'your permssion here',
                                'icon' => null,
                            ],
                        ]
                </code>
            </pre>

            </div>

        </div>
    </x-card>

</x-app-layout>
