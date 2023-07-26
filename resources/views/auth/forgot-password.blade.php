<div class="font-sans text-gray-900 antialiased bg-base-200">
    <div class="flex flex-col justify-between min-h-screen">
        <main class="flex items-center justify-center md:min-w-[90vh] min-h-[90vh] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-base-100 w-full rounded shadow-md border border-base-100 p-10">
                <div class="hidden md:flex justify-center items-center h-full w-full">
                    <img src="{{ asset('img/auth/auth.png') }}" alt="Auth Image" class="bg-cover object-cover bg-no-repeat max-h-[400px]" />
                </div>
                <div class="">
                    <div class="">
                        <h2 class="text-2xl font-bold tracking-wide">Forgot Password</h2>
                        <hr class="border border-secondary my-4">
                        <p class="text-dark">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>

                        <div class="mt-6">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" />

                            <x-splade-form action="{{ route('password.email') }}" class="space-y-4">
                                <x-splade-input id="email" class="block mt-1 w-full" type="email" name="email" :label="__('Email')" required autofocus />
                                <x-splade-submit class="w-full" :label="__('Email Password Reset Link')" />
                            </x-splade-form>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <footer class="footer footer-center p-4 bg-base-300 text-base-content">
            <div>
                <p>Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - All right reserved by {{ env('COPY_RIGHT') }}</p>
            </div>
        </footer>
    </div>
</div>
