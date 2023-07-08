<div class="min-h-screen bg-base-200">
    <x-navigation headerNav="{{ $headerNav ?? '' }}">
        <!-- Page Heading Navbar -->
        {{-- @if (isset($headerNav))
        {{ $headerNav }}
        @endif --}}

        <!-- Page Content -->
        <div class="flex flex-col justify-between min-h-screen">

            <main class="p-10">
                {{ $slot }}
            </main>

            <footer class="footer footer-center p-4 bg-base-300 text-base-content">
                <div>
                    <p>Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - All right reserved by {{ env('COPY_RIGHT') }}</p>
                </div>
            </footer>
        </div>
    </x-navigation>
</div>
