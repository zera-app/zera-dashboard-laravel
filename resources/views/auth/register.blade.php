<x-auth-card>
    <div class="">
        <h2 class="text-2xl font-bold tracking-wide">Sign Up</h2>
        <hr class="border border-secondary my-4">
        <p class="text-dark">Hello, please sign up to continue.</p>

        <div class="mt-6">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" />
            <x-splade-form action="{{ route('register') }}" class="space-y-4">
                <x-splade-input id="name" type="text" name="name" :label="__('Name')" required autofocus />
                <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
                <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="new-password" />
                <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" required />

                <x-splade-submit class="w-full" :label="__('Sign Up')" />

                <div class="mt-6 text-center">
                    <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already have an account?') }}
                    </Link>
                </div>
            </x-splade-form>
        </div>
</x-auth-card>
