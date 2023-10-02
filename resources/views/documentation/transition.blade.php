<x-app-layout>

    @php
        $pageName = 'Transition Component';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>Documentation</x-breadcrumbs-link>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-5">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            The Transition Component allows you to animate elements that should be shown or hidden. It comes with a few default animations, but you can also use custom animations and define presets.

        </p>
        <h1 class="card-title">Toggle Example</h1>
        <hr class="my-3">
        <p>
            This example uses the Toggle component to show or hide the Welcome!-message. Instead of using a v-show to toggle the message, you may now use the show attribute:
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-toggle&gt;
        &lt;button @click.prevent="toggle"&gt;Toggle message&lt;/button&gt;
    
        &lt;x-splade-transition show="toggled"&gt;
            Welcome!
        &lt;/x-splade-transition&gt;
    &lt;/x-splade-toggle&gt;
                    </code>
                </pre>
            </div>
        </div>

        <h1 class="card-title">CSS Classes</h1>
        <hr class="my-3">
        <p>
            You may use classes to style a transition. While you can use any class you want, here are the links to the Tailwind CSS documentation on Transitions and Transforms.
        </p>

        <div class="mt-5">
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    &lt;x-splade-transition
        show="toggled"
        enter="transition-opacity duration-75"
        enter-from="opacity-0"
        enter-to="opacity-100"
        leave="transition-opacity duration-150"
        leave-from="opacity-100"
        leave-to="opacity-0"
    &gt;
        ...
    &lt;/x-splade-transition&gt;
                    </code>
                </pre>
            </div>
        </div>

        <p>Plase visit <a class="text-secondary" href="https://splade.dev/docs/x-transition">Splade documentation</a> for more documentation</p>
    </x-card>

</x-app-layout>
