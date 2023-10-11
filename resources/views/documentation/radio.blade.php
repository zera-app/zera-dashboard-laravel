<x-app-layout>

    @php
        $pageName = 'Radio Input Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in radio input component.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-group name=&quot;notification_channel&quot; label=&quot;Preferred notification channel&quot; inline&gt;
        &lt;x-splade-radio name=&quot;notification_channel&quot; value=&quot;mail&quot; label=&quot;Mail&quot; /&gt;
        &lt;x-splade-radio name=&quot;notification_channel&quot; value=&quot;slack&quot; label=&quot;Slack&quot; /&gt;
    &lt;/x-splade-group&gt;
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/form-radio">Splade documentation</a> for more documentation</p>
        </div>

    </x-card>

</x-app-layout>
