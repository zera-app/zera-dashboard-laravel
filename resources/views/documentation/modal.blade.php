<x-app-layout>

    @php
        $pageName = 'Modal Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template have build in modal component.
        </p>

        <div class="">
            <x-button class="btn-primary" onclick="my_modal_2.showModal()">open modal</x-button>
            <x-modal id="my_modal_2">
                <h1>Hello Modal</h1>
            </x-modal>
        </div>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-button class=&quot;btn-primary&quot; onclick=&quot;modal_id.showModal()&quot;&gt;open modal&lt;/x-button&gt;
    &lt;x-modal id=&quot;modal_id&quot;&gt;
        &lt;h1&gt;Hello Modal&lt;/h1&gt;
    &lt;/x-modal&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>
