<details {{ $attributes->merge([
    'class' => 'collapse bg-base-200',
]) }}>
    <summary class="collapse-title text-xl font-medium">{{ $head }}</summary>
    <div class="collapse-content">
        {{ $slot }}
    </div>
</details>
