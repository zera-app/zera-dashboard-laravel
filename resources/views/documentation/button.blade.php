<x-app-layout>

    @php
    $pageName = 'Button Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in button component.
        </p>

        <div class="">
            <x-button class="m-1 btn">btn</x-button>
            <x-button class="m-1 btn-neutral">btn-neutral</x-button>
            <x-button class="m-1 btn-primary">btn-primary</x-button>
            <x-button class="m-1 btn-secondary">btn-secondary</x-button>
            <x-button class="m-1 btn-accent">btn-accent</x-button>
            <x-button class="m-1 btn-info">btn-info</x-button>
            <x-button class="m-1 btn-success">btn-success</x-button>
            <x-button class="m-1 btn-warning">btn-warning</x-button>
            <x-button class="m-1 btn-error">btn-error</x-button>
        </div>

        <div class="">
            <x-button class="m-1 btn-ghost">btn-ghost</x-button>
            <x-button class="m-1 btn-link">btn-link</x-button>
            <x-button class="m-1 btn-outline">btn-outline</x-button>
            <x-button class="m-1 btn-active">btn-active</x-button>
            <x-button class="m-1 btn-disabled">btn-disabled</x-button>
            <x-button class="m-1 glass">glass</x-button>
            <x-button class="m-1 no-animation">no-animation</x-button>
        </div>

        <div class="">
            <x-button class="m-1 btn-lg">btn-lg</x-button>
            <x-button class="m-1 btn-md">btn-md</x-button>
            <x-button class="m-1 btn-sm">btn-sm</x-button>
            <x-button class="m-1 btn-xs">btn-xs</x-button>
        </div>

        <div class="">
            <x-button class="m-1 btn-wide">btn-wide</x-button>
            <x-button class="m-1 btn-block">btn-block</x-button>
            <x-button class="m-1 btn-circle">btn-circle</x-button>
            <x-button class="m-1 btn-square">btn-square</x-button>
        </div>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;div class=&quot;&quot;&gt;
        &lt;x-button class=&quot;m-1 btn&quot;&gt;btn&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-neutral&quot;&gt;btn-neutral&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-primary&quot;&gt;btn-primary&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-secondary&quot;&gt;btn-secondary&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-accent&quot;&gt;btn-accent&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-info&quot;&gt;btn-info&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-success&quot;&gt;btn-success&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-warning&quot;&gt;btn-warning&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-error&quot;&gt;btn-error&lt;/x-button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;&quot;&gt;
        &lt;x-button class=&quot;m-1 btn-ghost&quot;&gt;btn-ghost&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-link&quot;&gt;btn-link&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-outline&quot;&gt;btn-outline&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-active&quot;&gt;btn-active&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-disabled&quot;&gt;btn-disabled&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 glass&quot;&gt;glass&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 no-animation&quot;&gt;no-animation&lt;/x-button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;&quot;&gt;
        &lt;x-button class=&quot;m-1 btn-lg&quot;&gt;btn-lg&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-md&quot;&gt;btn-md&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-sm&quot;&gt;btn-sm&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-xs&quot;&gt;btn-xs&lt;/x-button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;&quot;&gt;
        &lt;x-button class=&quot;m-1 btn-wide&quot;&gt;btn-wide&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-block&quot;&gt;btn-block&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-circle&quot;&gt;btn-circle&lt;/x-button&gt;
        &lt;x-button class=&quot;m-1 btn-square&quot;&gt;btn-square&lt;/x-button&gt;
    &lt;/div&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>