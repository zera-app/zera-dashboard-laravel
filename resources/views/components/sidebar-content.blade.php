<li class="mb-2 flex flex-row">
    <Link href="/" class="btn btn-ghost normal-case text-2xl"><i class="text-secondary">Tad</i>Splade
    </Link>
    <label for="my-drawer-2" class="content-center lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </label>
</li>
<li class="menu-title text-secondary">Menu</li>
<li>
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        <i class="fas fa-house"></i>
        {{ __('Dashboard') }}
    </x-nav-link>
</li>
<li>
    <details>
        <summary><i class="fas fa-gear"></i>Settings</summary>
        <ul>
            <li><a>level 2 item 1</a></li>
            <li><a>level 2 item 2</a></li>
        </ul>
    </details>
</li>
<div class="divider"></div>
<li class="menu-title text-primary">Title</li>
<li><a>Item 1</a></li>
<li><a>Item 2</a></li>
<li><a>Item 3</a></li>