<x-app-layout>

    @php
        $pageName = 'Controller Helper Documentation';
    @endphp

    <x-breadcrumbs>
        <x-breadcrumbs-link>{{ $pageName }}</x-breadcrumbs-link>
    </x-breadcrumbs>

    <x-card class="mt-10">
        <h1 class="card-title">{{ $pageName }}</h1>
        <hr class="my-3">
        <p class="text-base-content">
            This template contains controller helper for helping you developing the apps. Here is the example for the controller helpers.
        </p>

        <div class="mt-5">
            <h6 class="font-bold text-xl">Response Json</h6>
            <p>
                This helper is for returning the json response. you must pass the data and the status code. the status code is optional, if you not pass the status code it will return the default status code, 200 / OK.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index()
    {
        $user = User::findOne();

        return $this->responseJson([
            'data' => $user,
        ], Response::HTTP_OK);
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <h6 class="font-bold text-xl">Response Json Validate</h6>
            <p>
                This helper is for returning the json response for validation. you must pass the data and the status code. the status code is optional, if you not pass the status code it will return the default status code, 422 / Unprocessable Entity. The first parameter must from <code>\Illuminate\Support\MessageBag</code>
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|max:255',
            'password_confirmation' => 'required|string|max:255|same:password',
        ]);

        if ($validator->fails()) {
            return $this->responseJsonValidate($validator->errors());
        }

        // ... action
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <h6 class="font-bold text-xl">Response Json Message</h6>
            <p>
                This helper is for returning the json response for message. you must pass the data and the status code. the status code is optional, if you not pass the status code it will return the default status code, 200 / OK. The first parameter must be string.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        // ... action

        return $this->responseJsonMessage('Success create new data user', 200);
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <h6 class="font-bold text-xl">Response Json Data</h6>
            <p>
                This helper is for returning the json response for data. This helper contains 3 parameter, data, message, and response status, you must pass the data. the message and response status is defaul to <code>Success get data</code> and <code>200</code> response ok.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        $users = User::when($request->search,  function ($q) use ($request) {
            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        })
            ->orderByDesc('created_at')
            ->paginate(15);

        return $this->responseJsonData($users,);
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <h6 class="font-bold text-xl">Response Json Message Crud</h6>
            <p>
                This helper is for returning the json response for message crud. This helper contains 6 parameters. success, method, message, exception message, code, and data.
            </p>
            <p>This is available method</p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    $methods = [
        'create' => 'insert new data. ',
        'edit' => 'update data. ',
        'delete' => 'delete data. ',
        'restore' => 'restore data. ',
        'forceDelete' => 'force delete data. ',
    ];
                    </code>
                </pre>
            </div>
            <div class="mockup-code mt-5">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        // ... action

        return $this->responseJsonMessageCrud(
            success: true,
            method: 'create',
            message: 'success create data user',
            exception_message: null,
            code: 200,
            data: []
        );
    }
                    </code>
                </pre>
            </div>
        </div>

        <div class="mt-5">
            <h6 class="font-bold text-xl">Response Message Crud</h6>
            <p>
                This helper is for returning the response for message crud. This helper contains 4 parameters. success, method, message, exception message.
            </p>
            <p>This is available method</p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    $methods = [
        'create' => 'insert new data. ',
        'edit' => 'update data. ',
        'delete' => 'delete data. ',
        'restore' => 'restore data. ',
        'forceDelete' => 'force delete data. ',
    ];
                    </code>
                </pre>
            </div>
            <div class="mockup-code mt-5">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        // ... action

        return $this->responseMessageCrud(
            success: true,
            method: 'create',
            message: 'success create data user',
            exception_message: null
        );
    }
                    </code>
                </pre>
            </div>
        </div>
        <div class="mt-5">
            <h6 class="font-bold text-xl">Response download storage.</h6>
            <p>
                This helper is for returning the response download storage. This helper contain 1 parameter. file_path. the path is the path of the file.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        $user = Auth::user();

        return $this->responseDownloadStorage($user->profile_photo_path);
    }
                    </code>
                </pre>
            </div>
        </div>
        <div class="mt-5">
            <h6 class="font-bold text-xl">Response download.</h6>
            <p>
                This helper is for returning the response download. This helper contain 1 parameter. file_path. the path is the path of the file.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        $user = Auth::user();

        return $this->responseDownload(storage_path('/app/public/' . $user->profile_photo_path));
    }
                    </code>
                </pre>
            </div>
        </div>
        <div class="mt-5">
            <h6 class="font-bold text-xl">Upload file.</h6>
            <p>
                This helper is for upload file. This helper contain 2 parameter. file and path. the file is the file that you want to upload, and the path is the path of folder where the file will be store.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        $user = Auth::user();

        $this->uploadFile($request->file('profile_photo_path'), 'user-profle');
    }
                    </code>
                </pre>
            </div>
        </div>
        <div class="mt-5">
            <h6 class="font-bold text-xl">Delete file.</h6>
            <p>
                This helper is for delete file. This helper contain 1 parameter. file_path. the file_path is the path of file that you want to delete.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        $user = Auth::user();

        $this->deleteFile($user->profile_photo_path ?? '');
    }
                    </code>
                </pre>
            </div>
        </div>
        <div class="mt-5">
            <h6 class="font-bold text-xl">Validate api.</h6>
            <p>
                This helper is for validate api. This helper contain 2 parameter. request and rules. the request is the request that you want to validate, and the rules is the rules of validation.
            </p>
            <div class="mockup-code">
                <pre data-prefix="">
                    <code>
    public function index(Request $request)
    {
        // ... validator rules
        $this->validateApi($request, $rules);

        //... action
    }
                    </code>
                </pre>
            </div>
        </div>

    </x-card>

</x-app-layout>
