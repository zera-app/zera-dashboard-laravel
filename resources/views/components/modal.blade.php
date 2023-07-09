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

{{-- <dialog id="my_modal_2" class="modal">
            <form method="dialog" class="modal-box">
                <h3 class="font-bold text-lg">Hello!</h3>
                <p class="py-4">Press ESC key or click outside to close</p>
            </form>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog> --}}
