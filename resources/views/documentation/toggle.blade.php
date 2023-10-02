<x-app-layout>

    @php
        $pageName = 'Toggle Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-5">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            The Toggle Component is a simplified variant of the Data Component, primarily meant to toggle boolean values. It exposes toggle, setToggle, and toggled properties:
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
        &lt;x-splade-toggle&gt;
            &lt;button @click.prevent="toggle"&gt;Show text&lt;/button&gt;
        
            &lt;div v-show="toggled"&gt;
                &lt;p&gt;...&lt;/p&gt;
                &lt;button @click.prevent="setToggle(false)"&gt;Hide text&lt;/button&gt;
            &lt;/div&gt;
        &lt;/x-splade-toggle&gt;
                    </code>
                </pre>
            </div>
        </div>

        <h1 class="card-title">Multiple toggles</h1>
        <hr class="my-3">
        <p>
            Sometimes, you may want to toggle multiple values. Instead of using multiple components, you can specify all keys in the data attribute. This will slightly alter the exposed props. You can use the key directly, and the toggle and setToggle props now require a key:
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-toggle data="isCompany, hasVatNumber"&gt;
        &lt;button @click.prevent="toggle('isCompany')"&gt;Switch account type&lt;/button&gt;
        &lt;input name="company_name" v-if="isCompany" /&gt;
    
        &lt;button @click.prevent="setToggle('hasVatNumber', true)"&gt;Enable Vat Invoice&lt;/button&gt;
    
        &lt;div v-show="hasVatNumber"&gt;
            ...
        &lt;/div&gt;
    &lt;/x-splade-toggle&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/x-toggle">Splade documentation</a> for more documentation</p>
    </x-card>

</x-app-layout>
