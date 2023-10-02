<x-app-layout>

    @php
        $pageName = 'Input Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            The Input Component can be used for all kinds of input, like texts, emails, passwords and dates. The type attribute defaults to text.
        </p>
        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-form :default="$user"&gt;
        &lt;x-splade-input name="username" /&gt;
        &lt;x-splade-input name="job_title" label="Your Job Title" /&gt;
        &lt;x-splade-input name="email" type="email" placeholder="Your Email Address" /&gt;
    &lt;/x-splade-form&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/form-input">Splade documentation</a> for more documentation</p>

    </x-card>

</x-app-layout>
