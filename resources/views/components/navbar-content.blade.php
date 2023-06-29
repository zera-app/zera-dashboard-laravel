<div class="flex-1">

</div>
<div class="flex-none space-x-3">
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="badge badge-sm indicator-item">8</span>
            </div>
        </label>
        <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
            <div class="card-body">
                <span class="font-bold text-lg">8 Items</span>
                <span class="text-info">Subtotal: $999</span>
                <div class="card-actions">
                    <button class="btn btn-primary btn-block">View cart</button>
                </div>
            </div>
        </div>
    </div>
    <theme-toggle></theme-toggle>
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar mr-2" @click.prevent="toggle('isProfileOpen')">
            <div class="w-10 rounded-full shadow-md">
                <img src="https://api.dicebear.com/6.x/identicon/svg?scale=75&seed={{ Auth::user()->name }}" />
            </div>
        </label>
        <ul v-show="isProfileOpen" tabindex="0"
            class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 space-y-3">
            <span class="badge">{{ Auth::user()->name }}</span>
            <div class="badge badge-primary badge-outline">{{ Auth::user()->email }}</div>
            <li class="my-4">
                <Link href="{{ route('profile.edit') }}" class="justify-between">
                Profile
                </Link>
            </li>
            <li class="my-4">
                <Link href="{{ route('logout') }}" method="POST">Logout</Link>
            </li>
        </ul>
    </div>
</div>