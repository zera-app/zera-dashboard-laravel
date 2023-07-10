<div {{ $attributes->merge([
        'class' => 'card bg-base-100 dark:bg-base-900 rounded-md shadow-sm mt-10',
    ])->except('body-class') }}>

    <div class="card-body {{ $attributes->get('body-class') }}">
        {{ $slot }}
    </div>

</div>
