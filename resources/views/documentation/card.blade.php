<x-app-layout>

    @php
        $pageName = 'Card Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in card component.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-card class=&quot;mt-10&quot; body-class=&quot;&quot;&gt;
        ...
    &lt;/x-card&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>
