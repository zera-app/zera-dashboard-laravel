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
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        {{ __('Dashboard') }}
    </x-nav-link>
</li>
<li><a>Item 2</a></li>
<li><a>Item 3</a></li>
<li>
    <details>
        <summary>Parent</summary>
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
