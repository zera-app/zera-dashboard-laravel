<x-app-layout>
    <x-slot name="headerNav">
        {{ __('Dashboard') }}
    </x-slot>
    <div class="p-5">
        <h1 class="text-3xl">Welcome To Dashboard</h1>

        <section class="my-6 dark:bg-gray-800 dark:text-gray-100">
            <div class="container grid grid-cols-1 gap-6 mx-auto sm:grid-cols-2 xl:grid-cols-4">
                <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-base-100 dark:text-gray-100">
                    <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 dark:bg-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                            class="h-9 w-9 dark:text-gray-800">
                            <polygon
                                points="160 96.039 160 128.039 464 128.039 464 191.384 428.5 304.039 149.932 304.039 109.932 16 16 16 16 48 82.068 48 122.068 336.039 451.968 336.039 496 196.306 496 96.039 160 96.039">
                            </polygon>
                            <path
                                d="M176.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,176.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,176.984,464.344Z">
                            </path>
                            <path
                                d="M400.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,400.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,400.984,464.344Z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center align-middle">
                        <p class="text-3xl font-semibold leadi">200</p>
                        <p class="capitalize">Orders</p>
                    </div>
                </div>
                <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-base-100 dark:text-gray-100">
                    <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 dark:bg-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                            class="h-9 w-9 dark:text-gray-800">
                            <path
                                d="M256,16C123.452,16,16,123.452,16,256S123.452,496,256,496,496,388.548,496,256,388.548,16,256,16ZM403.078,403.078a207.253,207.253,0,1,1,44.589-66.125A207.332,207.332,0,0,1,403.078,403.078Z">
                            </path>
                            <path d="M256,384A104,104,0,0,0,360,280H152A104,104,0,0,0,256,384Z"></path>
                            <polygon
                                points="205.757 228.292 226.243 203.708 168 155.173 109.757 203.708 130.243 228.292 168 196.827 205.757 228.292">
                            </polygon>
                            <polygon
                                points="285.757 203.708 306.243 228.292 344 196.827 381.757 228.292 402.243 203.708 344 155.173 285.757 203.708">
                            </polygon>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center align-middle">
                        <p class="text-3xl font-semibold leadi">7500</p>
                        <p class="capitalize">New customers</p>
                    </div>
                </div>
                <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-base-100 dark:text-gray-100">
                    <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 dark:bg-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                            class="h-9 w-9 dark:text-gray-800">
                            <path
                                d="M425.706,142.294A240,240,0,0,0,16,312v88H160V368H48V312c0-114.691,93.309-208,208-208s208,93.309,208,208v56H352v32H496V312A238.432,238.432,0,0,0,425.706,142.294Z">
                            </path>
                            <rect width="32" height="32" x="80" y="264"></rect>
                            <rect width="32" height="32" x="240" y="128"></rect>
                            <rect width="32" height="32" x="136" y="168"></rect>
                            <rect width="32" height="32" x="400" y="264"></rect>
                            <path
                                d="M297.222,335.1l69.2-144.173-28.85-13.848L268.389,321.214A64.141,64.141,0,1,0,297.222,335.1ZM256,416a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,416Z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center align-middle">
                        <p class="text-3xl font-semibold leadi">172%</p>
                        <p class="capitalize">Growth</p>
                    </div>
                </div>
                <div class="flex p-4 space-x-4 rounded-lg md:space-x-6 bg-base-100 dark:text-gray-100">
                    <div class="flex justify-center p-2 align-middle rounded-lg sm:p-4 dark:bg-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                            class="h-9 w-9 dark:text-gray-800">
                            <path
                                d="M454.423,278.957,328,243.839v-8.185a116,116,0,1,0-104,0V312H199.582l-18.494-22.6a90.414,90.414,0,0,0-126.43-13.367,20.862,20.862,0,0,0-8.026,33.47L215.084,496H472V302.08A24.067,24.067,0,0,0,454.423,278.957ZM192,132a84,84,0,1,1,136,65.9V132a52,52,0,0,0-104,0v65.9A83.866,83.866,0,0,1,192,132ZM440,464H229.3L79.141,297.75a58.438,58.438,0,0,1,77.181,11.91l28.1,34.34H256V132a20,20,0,0,1,40,0V268.161l144,40Z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center align-middle">
                        <p class="text-3xl font-semibold leadi">17%</p>
                        <p class="capitalize">Bounce rate</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-base-content capitalize lg:text-3xl dark:text-white">explore our
                    awesome <span class="text-secondary">Components</span></h1>

                <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-12 xl:gap-4 md:grid-cols-2">
                    <div class="p-6 border rounded-xl bg-base-100 border-base-300 dark:border-base-200">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span
                                class="inline-block p-2 text-secondary bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-medium text-base-content capitalize dark:text-white">Copy &
                                    paste
                                    components</h1>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border rounded-xl bg-base-100 border-base-300 dark:border-gray-700">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span
                                class="inline-block p-2 text-secondary bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-medium text-base-content capitalize dark:text-white">Simple
                                    Configuration</h1>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border rounded-xl bg-base-100 border-base-300 dark:border-gray-700">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span
                                class="inline-block p-2 text-secondary bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-medium text-base-content capitalize dark:text-white">elegant
                                    Dark
                                    Mode</h1>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border rounded-xl bg-base-100 border-base-300 dark:border-gray-700">
                        <div class="md:flex md:items-start md:-mx-4">
                            <span
                                class="inline-block p-2 text-secondary bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-medium text-base-content capitalize dark:text-white">Simple &
                                    clean
                                    designs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
