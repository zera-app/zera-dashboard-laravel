<div class="min-h-screen bg-base-200">
    <x-navigation headerNav="{{ $headerNav ?? '' }}">
        <!-- Page Heading Navbar -->
        {{-- @if(isset($headerNav))
        {{ $headerNav }}
        @endif --}}

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-base-100 text-base-content">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </x-navigation>
</div>