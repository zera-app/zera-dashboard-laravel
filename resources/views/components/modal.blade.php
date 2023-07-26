<dialog {{ $attributes->merge([
    'class' => 'modal',
]) }}>

    <div class="modal-box">
        {{ $slot }}
    </div>

    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>

</dialog>
