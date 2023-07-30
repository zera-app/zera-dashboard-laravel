<x-app-layout>
    @php
    $pageName = 'Input Float Component';
    @endphp
    <x-breadcrumbs>
        <x-breadcrumbs-link>Testing Documentation</x-breadcrumbs-link>
    </x-breadcrumbs>
    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            Float label input component to beautify the input form
        <p>
            If you want to use float input add attribute <b>float="true"</b> then don't forget to add the <b>label</b>
            as well because it's mandatory.
        </p>
        </p>

        <div class="">
            <x-splade-form method="patch" :action="route('profile.update')" class="space-y-6" preserve-scroll>
                <x-splade-input id="name" name="name" type="text" :label="__('Float label')" required autofocus
                    autocomplete="name" float="true" />
            </x-splade-form>
        </div>

        <div class="mt-3">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-input type=&quot;text&quot; <b>:label=&quot;__('Float label')&quot;</b> <b>float=&quot;true&quot;</b> required /&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p class="mt-3">
            if you want to change the background label, then you can add the attribute <b>bgLabel="bg-base-200"</b>
        </p>
        </p>

        <div class="">
            <x-splade-form method="patch" :action="route('profile.update')" class="bg-base-200 space-y-6"
                preserve-scroll>
                <x-splade-input class="bg-base-200" id="name" name="name" type="text" :label="__('Float label')"
                    required autofocus autocomplete="name" float="true" bgLabel="bg-base-200" />
            </x-splade-form>
        </div>

        <div class="mt-3">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-input type=&quot;text&quot; <b>:label=&quot;__('Float label')&quot;</b> <b>float=&quot;true&quot;</b> <b>bgLabel=&quot;bg-base-200&quot;</b> /&gt;
                    </code>
                </pre>
            </div>
        </div>

    </x-card>



</x-app-layout>