<x-app-layout>

    @php
        $pageName = 'Link Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-5">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            Unlike most Splade components, the Link Component is a Vue component. It's a wrapper around the <a> element, which prevents a full refresh but loads the linked page asynchronously.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;Link href="/users"&gt;All Users&lt;/Link&gt;
                    </code>
                </pre>
            </div>
        </div>

        <h1 class="card-title">Validation Link</h1>
        <hr class="my-3">
        <p>
            You may use the confirm attribute to show a confirmation dialog before Splade loads the new page:
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;Link
        confirm="Enter the danger zone..."
        confirm-text="Are you sure?"
        confirm-button="Yes, take me there!"
        cancel-button="No, keep me save!"
        href="/danger"&gt;
        Danger Zone
    &lt;/Link&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/x-link">Splade documentation</a> for more documentation</p>
    </x-card>

</x-app-layout>
