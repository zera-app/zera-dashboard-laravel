<x-app-layout>

    @php
        $pageName = 'Collapse Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in collapse component.
        </p>

        <div class="">
            <x-collapse>
                <x-slot name="head">Collapse</x-slot>
                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </x-collapse>
            <x-collapse>
                <x-slot name="head">Collapse</x-slot>
                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </x-collapse>
        </div>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-collapse class=&quot;&quot; id=&quot;&quot; &gt;
        &lt;x-slot name=&quot;head&quot;&gt;Collapse&lt;/x-slot&gt;
        &lt;div class=&quot;&quot;&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/x-collapse&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>
