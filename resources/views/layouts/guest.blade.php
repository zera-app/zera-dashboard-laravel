<div class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col justify-between min-h-screen">
        <main>
            {{ $slot }}
        </main>

        <footer class="footer footer-center p-4 bg-base-300 text-base-content">
            <div>
                <p>Copyright © {{ \Carbon\Carbon::now()->format('Y') }} - All right reserved by {{ env('COPY_RIGHT') }}</p>
            </div>
        </footer>
    </div>
</div>
