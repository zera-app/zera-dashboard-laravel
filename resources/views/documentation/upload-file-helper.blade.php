<x-app-layout>

    @php
        $pageName = 'Upload File Helper';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            Sometimes you maybe use service, and repository for your app. you can use this helper for your application
        </p>
        <div class="mockup-code">
            <pre data-prefix="">
                <code>
    use \App\Traits\UploadFile;

    public function store(Request $request)
    {
        // ...
        $user->profile_photo_path = $this->uploadFile($request->file('file'), 'folder-name');
        // ...
    }

    public function destroy()
    {
        // ...
        $this->deleteFile($user->profile_photo_path);
        // ...
    }
                </code>
            </pre>
        </div>
    </x-card>

</x-app-layout>
