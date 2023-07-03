<x-splade-toggle data="isProfileOpen">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <x-navbar>
                @if(isset($headerNav))
                {{ $slot }}
                @endif
            </x-navbar>

            {{ $slot }}

            {{-- in there is footer (if any) --}}
        </div>

        <x-sidebar />
    </div>
</x-splade-toggle>