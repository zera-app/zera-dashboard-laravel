<x-app-layout>

    @php
        $pageName = 'Table Overview';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Table Component</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10" body-class="">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-2">
        <x-splade-table :for="$data" />
    </x-card>

</x-app-layout>
