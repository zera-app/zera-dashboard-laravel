<x-app-layout>

    @php
        $pageName = 'Alert Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in alert component.
        </p>

        <div class="">
            <x-alert class="my-1 alert">alert</x-alert>
            <x-alert class="my-1 alert-info">alert-info</x-alert>
            <x-alert class="my-1 alert-success">alert-success</x-alert>
            <x-alert class="my-1 alert-warning">alert-warning</x-alert>
            <x-alert class="my-1 alert-error">alert-error</x-alert>
        </div>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-alert class=&quot;alert&quot;&gt;alert&lt;/x-alert&gt;
    &lt;x-alert class=&quot;alert-info&quot;&gt;alert-info&lt;/x-alert&gt;
    &lt;x-alert class=&quot;alert-success&quot;&gt;alert-success&lt;/x-alert&gt;
    &lt;x-alert class=&quot;alert-warning&quot;&gt;alert-warning&lt;/x-alert&gt;
    &lt;x-alert class=&quot;alert-error&quot;&gt;alert-error&lt;/x-alert&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>
