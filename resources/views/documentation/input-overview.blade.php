<x-app-layout>

    @php
        $pageName = 'Input Component Overview';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            Splade comes with a set of Form Components to rapidly build forms. It supports model binding and validation, includes default styling, and is still fully customizable! It integrates with Autosize to automatically adjust textarea height, Choices.js to make selects searchable and taggable, Flatpickr to provide a powerful datetime picker, FilePond for smooth file uploads, and Jodit to provide a WYSIWYG editor.
        </p>
        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/form-overview">Splade documentation</a> for more documentation</p>

    </x-card>

</x-app-layout>
