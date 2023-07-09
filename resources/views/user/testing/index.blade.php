<x-app-layout>
    <x-slot name="headerNav">
        {{ __("Table Testing") }}
    </x-slot>

    <x-splade-table :for="$users">
        <x-splade-cell edit>
            <Link href="/users/{{ $item->id }}/edit"> Edit </Link>
        </x-splade-cell>
    </x-splade-table>
</x-app-layout>