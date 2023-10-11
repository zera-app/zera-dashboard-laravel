<x-app-layout>

    @php
        $pageName = 'Checkboc Input Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in Checkboc Input Component.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-checkbox name=&quot;newsletter&quot; value=&quot;1&quot; label=&quot;Subscribe to newsletter&quot; /&gt;
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/form-checkbox">Splade documentation</a> for more documentation</p>
        </div>

    </x-card>

</x-app-layout>
