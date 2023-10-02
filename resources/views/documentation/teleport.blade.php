<x-app-layout>

    @php
        $pageName = 'Teleport Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-5">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            The Teleport Component allows you to teleport a section of a template into another DOM node. It works even outside the scope of a component.
            You may pass a CSS selector to the to attribute. This will tell Splade to teleport the component's contents, the 'You are searching' part, to the bottom div element with the footer ID.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-form&gt;
        &lt;x-splade-input name="search" /&gt;
    
        &lt;x-splade-teleport to="#footer"&gt;
            You are searching for: &lt;span v-text="form.search" /&gt;
        &lt;/x-splade-teleport&gt;
    &lt;/x-splade-form&gt;
    
    &lt;div id="footer" class="p-4 bg-green-500 text-white" /&gt;
                    </code>
                </pre>
            </div>
        </div>
        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/x-teleport">Splade documentation</a> for more documentation</p>
    </x-card>

</x-app-layout>
