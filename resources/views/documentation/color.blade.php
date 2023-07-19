<x-app-layout>

    @php
    $pageName = 'Custom Color Documentation';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <h3 class="text-base-content font-semibold">
            Custom CSS for a daisyUI theme
        </h3>
        <p>
            You can apply custom style to a daisyUI themes using CSS:
        </p>
        <div class="mockup-code">
            <pre data-prefix="">
                <code>
    [data-theme="light"] .btn {
        border-width: 2px;
        border-color: black;
    }
                </code>
            </pre>
        </div>
        <h3 class="text-base-content font-semibold mt-3">
            How to customize an existing theme ?
        </h3>
        <p>
            In your tailwind.config.js, you can require an existing daisyUI theme and override some colors. In the below
            example, I require and spread light theme and change its <b>secondary</b> and <b>secondary-focus</b> colors:
        </p>
        <div class="mockup-code">
            <pre data-prefix="">
                <code>
    module.exports = {
        //...
        daisyui: {
            themes: [
                {
                    light: {
                        ..require("daisyui/src/theming/themes")["[data-theme=light]"],
                        "secondary": "#F000B8",
                        "secondary-focus" : "#CC009C"
                    },
                },
            ],
        },
    }
                </code>
            </pre>
        </div>
        <p>
            More information about custom color is available
            <Link href="https://daisyui.com/docs/themes/#-4" away class="link link-secondary">here
            </Link>.
        </p>
    </x-card>

</x-app-layout>