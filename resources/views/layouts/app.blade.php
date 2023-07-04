<div class="min-h-screen bg-base-200">
    <x-navigation headerNav="{{ $headerNav ?? '' }}">
        <!-- Page Heading Navbar -->
        {{-- @if(isset($headerNav))
        {{ $headerNav }}
        @endif --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </x-navigation>
</div>