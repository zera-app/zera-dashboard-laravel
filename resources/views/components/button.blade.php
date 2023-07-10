<button {{ $attributes->merge([
    'class' => 'btn rounded-md',
]) }}>{{ $slot }}</button>
