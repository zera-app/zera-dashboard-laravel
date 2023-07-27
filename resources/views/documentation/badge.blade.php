<x-app-layout>

    @php
    $pageName = 'Badge Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in badge component.
        </p>

        <div class="grid gap-3 grid-cols-3 lg:grid-cols-6">
            <x-badge class="mx-1 badge">badge</x-badge>
            <x-badge class="mx-1 badge-neutral">badge-neutral</x-badge>
            <x-badge class="mx-1 badge-primary">badge-primary</x-badge>
            <x-badge class="mx-1 badge-secondary">badge-secondary</x-badge>
            <x-badge class="mx-1 badge-accent">badge-accent</x-badge>
            <x-badge class="mx-1 badge-ghost">badge-ghost</x-badge>
            <x-badge class="mx-1 badge-info">badge-info</x-badge>
            <x-badge class="mx-1 badge-success">badge-success</x-badge>
            <x-badge class="mx-1 badge-warning">badge-warning</x-badge>
            <x-badge class="mx-1 badge-error">badge-error</x-badge>
            <x-badge class="mx-1 badge-outline">badge-outline</x-badge>
        </div>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-badge class=&quot;badge&quot;&gt;Badge&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-neutral&quot;&gt;badge-neutral&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-primary&quot;&gt;badge-primary&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-secondary&quot;&gt;badge-secondary&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-accent&quot;&gt;badge-accent&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-ghost&quot;&gt;badge-ghost&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-info&quot;&gt;badge-info&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-success&quot;&gt;badge-success&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-warning&quot;&gt;badge-warning&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-error&quot;&gt;badge-error&lt;/x-badge&gt;
    &lt;x-badge class=&quot;badge-outline&quot;&gt;badge-outline&lt;/x-badge&gt;
                    </code>
                </pre>
            </div>
        </div>
    </x-card>

</x-app-layout>