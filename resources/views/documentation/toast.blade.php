<x-app-layout>

    @php
        $pageName = 'Toast Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            Splade has built-in support for toasts. Use the Toast facade to send a toast to the frontend. But this template contains a component that can be used to display toasts. see <a href="{{ route('documentation.splade-helper') }}" class="text-secondary">Splade Helper</a>
        </p>
    </x-card>

</x-app-layout>
