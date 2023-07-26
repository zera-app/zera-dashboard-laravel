<x-app-layout>

    @php
        $pageName = 'Tooltip Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in tooltip component.
        </p>

        <div class="">
            <x-tooltip class="m-1" data-tip="Tooltip">
                <x-button class="">Tooltip</x-button>
            </x-tooltip>

            <div class="">
                <x-tooltip class="m-1 tooltip-open" data-tip="Tooltip Open">
                    <x-button class="btn-primary">Tooltip Open</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-top" data-tip="Tooltip Top">
                    <x-button class="btn-primary">Tooltip Top</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-bottom" data-tip="Tooltip Bottom">
                    <x-button class="btn-primary">Tooltip Bottom</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-left" data-tip="Tooltip Left">
                    <x-button class="btn-primary">Tooltip Left</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-right" data-tip="Tooltip Right">
                    <x-button class="btn-primary">Tooltip Right</x-button>
                </x-tooltip>
            </div>

            <div class="">
                <x-tooltip class="m-1 tooltip-primary" data-tip="Tooltip Primary">
                    <x-button class="btn-primary">Tooltip Primary</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-secondary" data-tip="Tooltip Secondary">
                    <x-button class="btn-secondary">Tooltip Secondary</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-accent" data-tip="Tooltip Accent">
                    <x-button class="btn-accent">Tooltip Accent</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-info" data-tip="Tooltip Info">
                    <x-button class="btn-info">Tooltip Info</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-success" data-tip="Tooltip Success">
                    <x-button class="btn-success">Tooltip Success</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-warning" data-tip="Tooltip Warning">
                    <x-button class="btn-warning">Tooltip Warning</x-button>
                </x-tooltip>
                <x-tooltip class="m-1 tooltip-error" data-tip="Tooltip Error">
                    <x-button class="btn-error">Tooltip Error</x-button>
                </x-tooltip>
            </div>

        </div>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-tooltip class=&quot;m-1&quot; data-tip=&quot;Tooltip&quot;&gt;
        &lt;x-button class=&quot;&quot;&gt;Tooltip&lt;/x-button&gt;
    &lt;/x-tooltip&gt;

    &lt;div class=&quot;&quot;&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-open&quot; data-tip=&quot;Tooltip Open&quot;&gt;
            &lt;x-button class=&quot;btn-primary&quot;&gt;Tooltip Open&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-top&quot; data-tip=&quot;Tooltip Top&quot;&gt;
            &lt;x-button class=&quot;btn-primary&quot;&gt;Tooltip Top&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-bottom&quot; data-tip=&quot;Tooltip Bottom&quot;&gt;
            &lt;x-button class=&quot;btn-primary&quot;&gt;Tooltip Bottom&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-left&quot; data-tip=&quot;Tooltip Left&quot;&gt;
            &lt;x-button class=&quot;btn-primary&quot;&gt;Tooltip Left&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-right&quot; data-tip=&quot;Tooltip Right&quot;&gt;
            &lt;x-button class=&quot;btn-primary&quot;&gt;Tooltip Right&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
    &lt;/div&gt;

    &lt;div class=&quot;&quot;&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-primary&quot; data-tip=&quot;Tooltip Primary&quot;&gt;
            &lt;x-button class=&quot;btn-primary&quot;&gt;Tooltip Primary&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-secondary&quot; data-tip=&quot;Tooltip Secondary&quot;&gt;
            &lt;x-button class=&quot;btn-secondary&quot;&gt;Tooltip Secondary&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-accent&quot; data-tip=&quot;Tooltip Accent&quot;&gt;
            &lt;x-button class=&quot;btn-accent&quot;&gt;Tooltip Accent&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-info&quot; data-tip=&quot;Tooltip Info&quot;&gt;
            &lt;x-button class=&quot;btn-info&quot;&gt;Tooltip Info&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-success&quot; data-tip=&quot;Tooltip Success&quot;&gt;
            &lt;x-button class=&quot;btn-success&quot;&gt;Tooltip Success&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-warning&quot; data-tip=&quot;Tooltip Warning&quot;&gt;
            &lt;x-button class=&quot;btn-warning&quot;&gt;Tooltip Warning&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
        &lt;x-tooltip class=&quot;m-1 tooltip-error&quot; data-tip=&quot;Tooltip Error&quot;&gt;
            &lt;x-button class=&quot;btn-error&quot;&gt;Tooltip Error&lt;/x-button&gt;
        &lt;/x-tooltip&gt;
    &lt;/div&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>
