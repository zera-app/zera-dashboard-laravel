<x-app-layout>

    @php
        $pageName = 'Text Area Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            The Textarea Component is based mainly on the Input component and provides an integration with the autosize library. This is as simple as adding the autosize attribute to the element:
        </p>
        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-textarea name="biography" autosize /&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/form-input">Splade documentation</a> for more documentation</p>

    </x-card>

</x-app-layout>
