<x-app-layout>

    @php
    $pageName = 'Splade Helper';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10 max-w-4xl">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            Splade have useful function, but is sperated in some classes, here is the helper you maybe need to help
            developing the apps.
        </p>

        <div class="">
            <h6 class="font-bold text-xl">Splade Title</h6>
            <p>
                This function is used to set the title of the page, you can use this in your controller file.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index()
    {
        $this->spladeTitle('Splade Helper Documetation');

        // ...
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="">
            <h6 class="font-bold text-xl">Splade Desctription</h6>
            <p>
                This function is used to set the description of the page, you can use this in your controller file.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index()
    {
        $this->spladeDescription('Splade Helper Documetation page is for explaining the function of SpladeHelpers.php traits.');

        // ...
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="">
            <h6 class="font-bold text-xl">Splade meta</h6>
            <p>
                This function is used to set the meta of the page, you can use this in your controller file. it contains
                one parameter, the parameter is array, the array must contain the key of name and content.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index()
    {
        $this->spladeMeta([
            'metaKey' => 'metaValue',
        ]);
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="">
            <h6 class="font-bold text-xl">Splade Meta By Name</h6>
            <p>
                This function is used to set the meta by name of the page, you can use this in your controller file. it
                contains two parameters, the parameter is string.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index()
    {
        $this->spladeMetaName('metaKey', 'metaValue');
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="">
            <h6 class="font-bold text-xl">Splade Toast</h6>
            <p>
                This function is used to call the toast from laravel splade. this must contains one parameter, the
                parameter must be array and contains key (success and message) </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index()
    {
        $this->spladeToast(
            $this->responseMessageCrud(
                success: true,
                method: 'create',
                message: 'success create data user',
                exception_message: null
            )
        );
    }
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>