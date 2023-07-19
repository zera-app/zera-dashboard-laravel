<div class="flex-1 ml-2">
    <h2 class="font-semibold text-xl leading-tight">
        {{ $slot }}
    </h2>
</div>
<div class="flex-none space-x-3">
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <div class="indicator">
                <x-heroicon-o-bell-alert />
                <span class="badge badge-xs bg-red-500 indicator-item"></span>
            </div>
        </label>
        <div tabindex="0" class="z-10 mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
            <div class="card-body">
                You don't have any notifications
            </div>
        </div>
    </div>
    <theme-toggle></theme-toggle>
    <div class="tooltip tooltip-bottom" data-tip="Profile">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar mr-2" @click.prevent="toggle('isProfileOpen')">
                <div class="w-10 rounded-full shadow">
                    <img src="https://api.dicebear.com/6.x/identicon/svg?scale=75&seed={{ Auth::user()->name }}" />
                </div>
            </label>
            <ul v-show="isProfileOpen" tabindex="0"
                class="z-10 menu menu-sm dropdown-content p-2 shadow bg-base-100 rounded-box w-52 space-y-3">
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
</div>