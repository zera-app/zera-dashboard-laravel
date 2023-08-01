<x-app-layout>

    @php
        $pageName = 'Form Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-5">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            The Form Component allows you to send forms asynchronously. This way, you'll prevent full page reloads and can present validation errors without reevaluating the form with old submitted data. In addition, you may use the form prop to do two-way binding. The default method is POST.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-form action="/users/store"&gt;
        &lt;input v-model="form.name" type="text" /&gt;
        &lt;input v-model="form.email" type="email" /&gt;
        &lt;button type="submit"&gt;Send&lt;/button&gt;
    &lt;/x-splade-form&gt;
                    </code>
                </pre>
            </div>
        </div>

        <h1 class="card-title">Method and Validation errors</h1>
        <hr class="my-3">
        <p>
            Just like traditional forms, there's a method attribute. In addition, you may use the form.errors prop to evaluate validation errors
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-form method="put"&gt;
        ...
        &lt;p v-text="form.errors.name" /&gt;
        ...
    &lt;/x-splade-form&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/x-form">Splade documentation</a> for more documentation</p>
    </x-card>

</x-app-layout>
