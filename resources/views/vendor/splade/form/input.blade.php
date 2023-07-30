@php $flatpickrOptions = $flatpickrOptions() @endphp
@props(['class' => '', 'float' => false,'bgLabel' => 'bg-base-100'])
<!-- Added 'float' attribute with default value false -->
@if ($float)
<SpladeInput {{ $attributes->only(['v-if', 'v-show', 'v-for', 'class'])->class(['hidden' => $isHidden(),'']) }}
    :flatpickr="@js($flatpickrOptions)"
    :js-flatpickr-options="{!! $jsFlatpickrOptions !!}"
    v-model="{{ $vueModel() }}"
    #default="inputScope"
    >
    <label for="{{ $attributes['name'] }}"
        class="relative block rounded-md border border-base-300 shadow-sm focus-within:border-secondary-focus focus-within:ring-1 focus-within:ring-secondary-focus my-5">
        <div class="flex rounded-md border border-base-300 shadow-sm">
            @if($prepend)
            <span :class="{ 'opacity-50': inputScope.disabled && @json(!$alwaysEnablePrepend) }"
                class="inline-flex items-center px-3 rounded-l-md border border-t-0 border-b-0 border-l-0 border-base-300 bg-gray-50 text-gray-500">
                {!! $prepend !!}
            </span>
            @endif
            <input {{ $attributes->except(['v-if', 'v-show', 'v-for', 'class'])->class([
            $class ? $class : 'bg-base-100',
            'text-base-content block w-full border-0 shadow border-base-300
            focus:border-secondary-focus
            focus:ring-2
            focus:ring-secondary-focus
            focus:ring-opacity-50 disabled:opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed',
            'rounded-md' => !$append && !$prepend,
            'min-w-0 flex-1 rounded-none' => $append || $prepend,
            'rounded-l-md' => $append && !$prepend,
            'rounded-r-md' => !$append && $prepend,
            ])->merge([
            'name' => $name,
            'type' => $type,
            'data-validation-key' => $validationKey(),
            'class' => 'peer border-none placeholder-transparent focus:border-transparent',
            ])->when(!$flatpickrOptions, fn($attributes) => $attributes->merge([
            'v-model' => $vueModel(),
            ])) }}
            placeholder="{{ $label }}"
            />
            <span
                class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 {{ $bgLabel }} p-0.5 text-xs text-base-content transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                {{ $label }}
            </span>
            @if($append)
            <span :class="{ 'opacity-50': inputScope.disabled && @json(!$alwaysEnableAppend) }"
                class="inline-flex items-center px-3 rounded-r-md border border-t-0 border-b-0 border-r-0 border-gray-300 bg-gray-50 text-gray-500">
                {!! $append !!}
            </span>
            @endif
        </div>
    </label>
    @include('splade::form.help', ['help' => $help])
    @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
</SpladeInput>
@else
<SpladeInput {{ $attributes->only(['v-if', 'v-show', 'v-for', 'class'])->class(['hidden' => $isHidden()]) }}
    :flatpickr="@js($flatpickrOptions)"
    :js-flatpickr-options="{!! $jsFlatpickrOptions !!}"
    v-model="{{ $vueModel() }}"
    #default="inputScope"
    >
    <label class="block">
        @includeWhen($label, 'splade::form.label', ['label' => $label])

        <div class="flex rounded-md border border-base-300 shadow-sm">
            @if($prepend)
            <span :class="{ 'opacity-50': inputScope.disabled && @json(!$alwaysEnablePrepend) }"
                class="inline-flex items-center px-3 rounded-l-md border border-t-0 border-b-0 border-l-0 border-base-300 bg-gray-50 text-gray-500">
                {!! $prepend !!}
            </span>
            @endif

            <input {{ $attributes->except(['v-if', 'v-show', 'v-for', 'class'])->class([
            $class ? $class : 'bg-base-100',
            'text-base-content block w-full border-0 shadow border-base-300
            focus:border-secondary-focus
            focus:ring-2
            focus:ring-secondary-focus
            focus:ring-opacity-50 disabled:opacity-50 disabled:bg-gray-50 disabled:cursor-not-allowed',
            'rounded-md' => !$append && !$prepend,
            'min-w-0 flex-1 rounded-none' => $append || $prepend,
            'rounded-l-md' => $append && !$prepend,
            'rounded-r-md' => !$append && $prepend,
            ])->merge([
            'name' => $name,
            'type' => $type,
            'data-validation-key' => $validationKey(),
            ])->when(!$flatpickrOptions, fn($attributes) => $attributes->merge([
            'v-model' => $vueModel(),
            ])) }}
            />

            @if($append)
            <span :class="{ 'opacity-50': inputScope.disabled && @json(!$alwaysEnableAppend) }"
                class="inline-flex items-center px-3 rounded-r-md border border-t-0 border-b-0 border-r-0 border-gray-300 bg-gray-50 text-gray-500">
                {!! $append !!}
            </span>
            @endif
        </div>
    </label>

    @include('splade::form.help', ['help' => $help])
    @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
</SpladeInput>
@endif