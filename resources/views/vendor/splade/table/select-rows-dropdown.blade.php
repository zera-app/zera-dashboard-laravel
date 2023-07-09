<x-splade-component is="dropdown" dusk="select-rows-dropdown" close-on-click>
    <x-slot:trigger>
        <input type="checkbox"
            class="rounded border-base-300 bg-base-100 text-secondary shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50"
            :checked="table.allVisibleItemsAreSelected" />
    </x-slot:trigger>

    <div class="mt-2 min-w-max rounded-md shadow-lg bg-base-100 ring-1 ring-black ring-opacity-5">
        <div class="flex flex-col">
            <button class="text-left w-full px-4 py-2 text-sm text-base-content hover:bg-base-200  font-normal"
                @click="table.setSelectedItems(@js($table->getPrimaryKeys()))" dusk="select-all-on-this-page">
                {{ __('Select all on this page') }} ({{ $table->totalOnThisPage() }})
            </button>

            @if($showPaginator())
            <button class="text-left w-full px-4 py-2 text-sm text-base-content hover:bg-base-200  font-normal"
                @click="table.setSelectedItems(['*'])" dusk="select-all-results">
                {{ __('Select all results') }} ({{ $table->totalOnAllPages() }})
            </button>
            @endif

            <button v-if="table.hasSelectedItems"
                class="text-left w-full px-4 py-2 text-sm text-base-content hover:bg-base-200  font-normal"
                @click="table.setSelectedItems([])" dusk="select-none">
                {{ __('Clear selection') }}
            </button>
        </div>
    </div>
</x-splade-component>