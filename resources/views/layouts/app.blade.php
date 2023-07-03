<div class="min-h-screen bg-base-200">
    <x-navigation>
        <!-- Page Heading Navbar -->
        <x-slot name="headerNav">
            {{ $headerNav ?? '' }}
        </x-slot>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </x-navigation>
</div>