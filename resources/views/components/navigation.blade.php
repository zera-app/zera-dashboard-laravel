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
                <Link href="{{ route('dashboard') }}" class="btn btn-ghost normal-case text-xl">TechTronix</Link>
            </div>
            <div class="flex-none">
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
                    <input type="checkbox" class="hidden" data-toggle-theme="dark,light" data-act-class="ACTIVECLASS" />

                    <!-- sun icon -->
                    <svg class="swap-on fill-current w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>

                    <!-- moon icon -->
                    <svg class="swap-off fill-current w-10 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>

                </label>
                <div title="Change Theme" class="dropdown dropdown-end">
                    <div tabindex="0" class="btn normal-case btn-ghost"><svg width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                            class="h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                            </path>
                        </svg>
                        <span class="hidden font-normal md:inline">Theme</span>
                        <svg width="12px" height="12px" class="hidden h-2 w-2 fill-current opacity-60 sm:inline-block"
                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 2048 2048">
                            <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                        </svg>
                    </div>
                    <div
                        class="dropdown-content bg-base-200 text-base-content rounded-box top-px h-[70vh] max-h-96 w-56 overflow-y-auto shadow mt-16">
                        <div class="grid grid-cols-1 gap-3 p-3" tabindex="0"><button
                                class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="light"
                                data-act-class="[&_svg]:visible">
                                <div data-theme="light"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">light</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="dark" data-act-class="[&_svg]:visible">
                                <div data-theme="dark"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">dark</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="cupcake" data-act-class="[&_svg]:visible">
                                <div data-theme="cupcake"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">cupcake</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="bumblebee" data-act-class="[&_svg]:visible">
                                <div data-theme="bumblebee"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">bumblebee</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="emerald" data-act-class="[&_svg]:visible">
                                <div data-theme="emerald"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">emerald</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="corporate" data-act-class="[&_svg]:visible">
                                <div data-theme="corporate"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">corporate</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="synthwave" data-act-class="[&_svg]:visible">
                                <div data-theme="synthwave"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">synthwave</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="retro" data-act-class="[&_svg]:visible">
                                <div data-theme="retro"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">retro</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="cyberpunk" data-act-class="[&_svg]:visible">
                                <div data-theme="cyberpunk"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">cyberpunk</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="valentine" data-act-class="[&_svg]:visible">
                                <div data-theme="valentine"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">valentine</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="halloween" data-act-class="[&_svg]:visible">
                                <div data-theme="halloween"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">halloween</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="garden" data-act-class="[&_svg]:visible">
                                <div data-theme="garden"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">garden</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="forest" data-act-class="[&_svg]:visible">
                                <div data-theme="forest"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">forest</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="aqua" data-act-class="[&_svg]:visible">
                                <div data-theme="aqua"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">aqua</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="lofi" data-act-class="[&_svg]:visible">
                                <div data-theme="lofi"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">lofi</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="pastel" data-act-class="[&_svg]:visible">
                                <div data-theme="pastel"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">pastel</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="fantasy" data-act-class="[&_svg]:visible">
                                <div data-theme="fantasy"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">fantasy</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="wireframe" data-act-class="[&_svg]:visible">
                                <div data-theme="wireframe"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">wireframe</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="black" data-act-class="[&_svg]:visible">
                                <div data-theme="black"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">black</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="luxury" data-act-class="[&_svg]:visible">
                                <div data-theme="luxury"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">luxury</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="dracula" data-act-class="[&_svg]:visible">
                                <div data-theme="dracula"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">dracula</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="cmyk" data-act-class="[&_svg]:visible">
                                <div data-theme="cmyk"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">cmyk</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="autumn" data-act-class="[&_svg]:visible">
                                <div data-theme="autumn"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">autumn</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="business" data-act-class="[&_svg]:visible">
                                <div data-theme="business"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">business</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="acid" data-act-class="[&_svg]:visible">
                                <div data-theme="acid"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">acid</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="lemonade" data-act-class="[&_svg]:visible">
                                <div data-theme="lemonade"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">lemonade</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="night" data-act-class="[&_svg]:visible">
                                <div data-theme="night"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">night</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="coffee" data-act-class="[&_svg]:visible">
                                <div data-theme="coffee"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">coffee</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button><button class="outline-base-content overflow-hidden rounded-lg text-left"
                                data-set-theme="winter" data-act-class="[&_svg]:visible">
                                <div data-theme="winter"
                                    class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                    <div class="grid grid-cols-5 grid-rows-3">
                                        <div
                                            class="col-span-5 row-span-3 row-start-1 flex items-center gap-2 px-4 py-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewbox="0 0 24 24" fill="currentColor"
                                                class="invisible h-3 w-3 shrink-0">
                                                <path
                                                    d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                                                </path>
                                            </svg>
                                            <div class="flex-grow text-sm">winter</div>
                                            <div class="flex h-full flex-shrink-0 flex-wrap gap-1">
                                                <div class="bg-primary w-2 rounded"></div>
                                                <div class="bg-secondary w-2 rounded"></div>
                                                <div class="bg-accent w-2 rounded"></div>
                                                <div class="bg-neutral w-2 rounded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <a class="outline-base-content overflow-hidden rounded-lg" href="/theme-generator/">
                                <div
                                    class="hover:bg-neutral hover:text-neutral-content w-full cursor-pointer font-sans">
                                    <div class="flex gap-2 p-3"><svg width="24" height="24"
                                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current"
                                            viewbox="0 0 512 512">
                                            <path d="M96,208H48a16,16,0,0,1,0-32H96a16,16,0,0,1,0,32Z"></path>
                                            <line x1="90.25" y1="90.25" x2="124.19" y2="124.19"></line>
                                            <path
                                                d="M124.19,140.19a15.91,15.91,0,0,1-11.31-4.69L78.93,101.56a16,16,0,0,1,22.63-22.63l33.94,33.95a16,16,0,0,1-11.31,27.31Z">
                                            </path>
                                            <path
                                                d="M192,112a16,16,0,0,1-16-16V48a16,16,0,0,1,32,0V96A16,16,0,0,1,192,112Z">
                                            </path>
                                            <line x1="293.89" y1="90.25" x2="259.95" y2="124.19"></line>
                                            <path
                                                d="M260,140.19a16,16,0,0,1-11.31-27.31l33.94-33.95a16,16,0,0,1,22.63,22.63L271.27,135.5A15.94,15.94,0,0,1,260,140.19Z">
                                            </path>
                                            <line x1="124.19" y1="259.95" x2="90.25" y2="293.89"></line>
                                            <path
                                                d="M90.25,309.89a16,16,0,0,1-11.32-27.31l33.95-33.94a16,16,0,0,1,22.62,22.63l-33.94,33.94A16,16,0,0,1,90.25,309.89Z">
                                            </path>
                                            <path
                                                d="M219,151.83a26,26,0,0,0-36.77,0l-30.43,30.43a26,26,0,0,0,0,36.77L208.76,276a4,4,0,0,0,5.66,0L276,214.42a4,4,0,0,0,0-5.66Z">
                                            </path>
                                            <path
                                                d="M472.31,405.11,304.24,237a4,4,0,0,0-5.66,0L237,298.58a4,4,0,0,0,0,5.66L405.12,472.31a26,26,0,0,0,36.76,0l30.43-30.43h0A26,26,0,0,0,472.31,405.11Z">
                                            </path>
                                        </svg>
                                        <div class="flex-grow text-sm font-bold">Make your theme!</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <x-splade-toggle>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar" @click.prevent="toggle">
                            <div class="w-10 rounded-full">
                                <img
                                    src="https://api.dicebear.com/6.x/adventurer/svg?skinColor=f2d3b1,763900,ecad80&seed={{ Auth::user()->name }}" />
                            </div>
                        </label>
                        <ul v-show="toggled" tabindex="0"
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
                </x-splade-toggle>
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
        <ul class="menu p-4 w-64 h-full bg-base-100 text-base-content">
            <!-- Sidebar content here -->
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
        </ul>

    </div>
</div>