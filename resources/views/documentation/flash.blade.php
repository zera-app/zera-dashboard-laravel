<x-app-layout>

    @php
        $pageName = 'Flash Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            You may use the Flash Component to interact with Flash Data. First, of course, you may render Flash Data server-side with Blade, but if you redirect back to the same page, for example, after form submission, you may choose to not reload the page. In that case, the browser won't update the server-side rendered Flash Data.
        </p>
        <p>Plase visit <a href="https://splade.dev/docs/x-flash" class="text-secondary">Splade toast documentation </a>For more information</p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-flash&gt;
        &lt;p v-if="flash.has('message')" v-text="flash.message" /&gt;
    &lt;/x-splade-flash&gt;
                    </code>
                </pre>
            </div>
        </div>
    </x-card>

</x-app-layout>
