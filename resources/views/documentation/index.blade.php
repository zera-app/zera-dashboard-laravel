<x-app-layout>

    <x-breadcrumbs>
        <x-breadcrumbs-link>Testing Documentation</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="test" id="class" body-class="test">
        <h1 class="card-title">Hello Card</h1>

        <div class="flex">
            <x-badge class="badge-primary">Primary</x-badge>
        </div>

        <div class="">
            <x-button class="btn-primary">Button</x-button>
        </div>

        <div class="">
            <x-alert class="alert-success">Alert</x-alert>
        </div>

        <div class="">
            <x-collapse>
                <x-slot name="head">Collapse</x-slot>
                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
            </x-collapse>
        </div>

        <div class="">
            <x-tooltip class="tooltip-primary" data-tip="Tooltip Content">
                <x-button class="btn-primary">Tooltip</x-button>
            </x-tooltip>
        </div>

        <button class="btn" onclick="my_modal_2.showModal()">open modal</button>
        <x-modal id="my_modal_2">
            <h1>Hello Modal</h1>
        </x-modal>
    </x-card>

</x-app-layout>
