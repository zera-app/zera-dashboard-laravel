<div {{ $attributes->only(['v-if', 'v-show', 'class']) }}>
    <label class="flex items-center text-base-content">
        <input {{ $attributes->except(['v-if', 'v-show', 'class'])->class('rounded border-gray-300 text-secondary shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50 dark:bg-neutral dark:checked:bg-primary dark:checked:outline-primary checked:bg-primary focus:outline-primary')->merge([
                'name' => $name,
                'value' => $value,
                'type' => 'checkbox',
                'v-model' => $vueModel(),
                'data-validation-key' => $validationKey(),
            ]) }} :true-value="@js($value)" :false-value="@js($falseValue)" />

        @if (trim($slot))
            <span class="ml-2">{{ $slot }}</span>
        @else
            <span class="ml-2 dark:text-neutral-content">{{ $label }}</span>
        @endif
    </label>

    @includeWhen($help, 'splade::form.help', ['help' => $help])
    @includeWhen($showErrors, 'splade::form.error', ['name' => $validationKey()])
</div>
