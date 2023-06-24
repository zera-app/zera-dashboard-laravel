<div class="min-h-screen bg-base-100 dark:bg-base-200">
    <x-navigation>
        <!-- Page Heading -->
        @if(isset($header))
        <header class="bg-base-100 shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </x-navigation>
</div>