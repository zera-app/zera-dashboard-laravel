<x-app-layout>

    @php
        $pageName = 'X-Script Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-5">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            In addition to building custom Vue components, you may use the Script Component to add inline scripts to your Blade template. Usually, the Vue render engine would throw an error on script tags, but this component magically injects your script as if it was called in the mounted() hook of a Vue component. This way, we can avoid the typical error, and you get access to the global $splade object, which you may use to navigate and access the Event Bus.
            Note that this component is quite limited, and it is generally recommended to use custom Vue components.
        </p>
        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-script&gt;
        document.body.classList.add('bg-confetti');
    &lt;/x-splade-script&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/x-link">Splade documentation</a> for more documentation</p>
    </x-card>

</x-app-layout>
