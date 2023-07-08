<li class="mb-2 flex flex-row justify-between">

    <Link href="/" class="btn btn-ghost normal-case text-2xl text-secondary">{{ $title }}</Link>

    <label for="my-drawer-2" class="content-center lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </label>
</li>

@foreach ($sidebarMenu as $item)
    @if ($loop->index != 0)
        <div class="divider"></div>
    @endif

    <li class="menu-title text-secondary">{{ $item['title'] }}</li>

    @foreach ($item['menus'] as $menu)
        @if (count($menu['menus']) > 0)
            <li>
                <details>
                    <summary>
                        {!! $menu['icon'] !!} <span>{{ $menu['title'] }}</span>
                    </summary>
                    <ul class="ml-5">
                        @foreach ($menu['menus'] as $submenu)
                            <li>
                                <x-nav-link :href="route($submenu['route'])" :active="request()->routeIs($submenu['route'])">
                                    {!! $submenu['icon'] !!} <span>{{ $submenu['title'] }}</span>
                                </x-nav-link>
                            </li>
                        @endforeach
                    </ul>
                </details>
            </li>
        @else
            <li>
                <x-nav-link :href="route($menu['route'])" :active="request()->routeIs($menu['route'])">
                    {!! $menu['icon'] !!} <span>{{ $menu['title'] }}</span>
                </x-nav-link>
            </li>
        @endif
    @endforeach
@endforeach
