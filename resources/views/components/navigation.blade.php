<x-splade-toggle data="isSideOpen, isProfileOpen">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <div class="w-full navbar bg-base-100 border-b">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-2" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                </div>
                <div class="flex-none space-x-2">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle">
                            <div class="indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="badge badge-sm indicator-item">8</span>
                            </div>
                        </label>
                        <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                            <div class="card-body">
                                <span class="font-bold text-lg">8 Items</span>
                                <span class="text-info">Subtotal: $999</span>
                                <div class="card-actions">
                                    <button class="btn btn-primary btn-block">View cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="swap swap-rotate">

                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" class="hidden" id="theme-toggle" />

                        <!-- sun icon -->
                        <svg class="swap-on fill-current w-10 h-7" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                        </svg>

                        <!-- moon icon -->
                        <svg class="swap-off fill-current w-10 h-7" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                        </svg>

                    </label>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar mr-2"
                            @click.prevent="toggle('isProfileOpen')">
                            <div class="w-10 rounded-full">
                                <img
                                    src="https://api.dicebear.com/6.x/adventurer/svg?skinColor=f2d3b1,763900,ecad80&seed={{ Auth::user()->name }}" />
                            </div>
                        </label>
                        <ul v-show="isProfileOpen" tabindex="0"
                            class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 space-y-3">
                            <span class="badge">{{ Auth::user()->name }}</span>
                            <div class="badge badge-primary badge-outline">{{ Auth::user()->email }}</div>
                            <li class="my-4">
                                <Link href="{{ route('profile.edit') }}" class="justify-between">
                                Profile
                                </Link>
                            </li>
                            <li class="my-4">
                                <Link href="{{ route('logout') }}" method="POST">Logout</Link>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
                        <li><a>Navbar Item 1</a></li>
                        <li><a>Navbar Item 2</a></li>
                    </ul>
                </div> --}}
            </div>
            {{ $slot }}
        </div>

        <div class="drawer-side border-r border-base-200">
            <label for="my-drawer-2" class="drawer-overlay"></label>
            <ul class="menu p-4 w-64 min-h-full bg-base-100 text-base-content overflow-y">
                <li class="mb-2">
                    <Link href="{{ route('dashboard') }}" class="btn btn-ghost normal-case text-xl">TechTronix
                    </Link>
                </li>
                <!-- Sidebar content here -->
                <li class="menu-title text-primary">Title</li>
                <li><a>Item 1</a></li>
                <li><a class="active text-base-content bg-base-300">Item 2</a></li>
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
                <li><a class="active text-base-content bg-base-300">Item 2</a></li>
                <li><a>Item 3</a></li>
            </ul>

        </div>
    </div>
</x-splade-toggle>