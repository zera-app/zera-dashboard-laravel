<x-auth-card>

    {{-- FOR DEMO AND DEVELOPMENT PURPOSE ONLY --}}
    @php
        if (in_array(env('APP_ENV'), ['local', 'development', 'dev'])) {
            $user = \App\Models\User::whereEmail('user@example.com')->first();
            $user->password = 'password';
        } else {
            $user = null;
        }
    @endphp

    <div class="text-base-content dark:text-white">

        <h2 class="text-2xl font-bold tracking-wide">Sign in</h2>
        <hr class="border border-secondary my-4">
        <p class="">Welcome back, please sign in to continue.</p>

        <div class="mt-3">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" />

            <x-splade-form action="{{ route('login') }}" class="space-y-4" :default="$user">
                <!-- Email Address -->
                <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
                <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="current-password" />
                <x-splade-checkbox class="" id="remember_me" name="remember" :label="__('Remember me')" />

                <x-splade-submit class="w-full" :label="__('Sign in')" />

                <div class="mt-6 text-center">
                    @if (Route::has('password.request'))
                        <Link class="underline text-sm hover:text-neutral dark:hover:text-slate-300" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                        </Link>
                    @endif
                    <br>
                    @if (Route::has('register'))
                        <Link class="underline text-sm hover:text-neutral dark:hover:text-slate-300" href="{{ route('register') }}">
                        {{ __('Dont have an account? Sign up') }}
                        </Link>
                    @endif
                </div>
            </x-splade-form>
        </div>

    </div>

</x-auth-card>
