<div class="w-full navbar bg-base-100 shadow">
    <div class="flex-none lg:hidden">
        <label for="my-drawer-2" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </label>
    </div>
    <x-navbar-content>
        {{ $slot }}
    </x-navbar-content>
</div>
{{-- <div class="flex-none hidden lg:block">
    <ul class="menu menu-horizontal">
        <!-- Navbar menu content here -->
        <li><a>Navbar Item 1</a></li>
        <li><a>Navbar Item 2</a></li>
    </ul>
</div> --}}
