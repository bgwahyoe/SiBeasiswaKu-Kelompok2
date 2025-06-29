<header x-data="{ mobileMenuOpen: false }" class="fixed top-0 w-full z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 bg-white/80 px-6 py-4 shadow-sm backdrop-blur-md md:px-10">

    <div class="flex items-center gap-3">
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <div class="text-blue-600 text-2xl font-bold">🎓</div>
            <h1 class="font-bold text-xl text-slate-800">Sibeasiswaku</h1>
        </a>
    </div>

    <nav class="hidden md:flex items-center gap-8">
        <a class="text-sm font-medium {{ request()->is('home') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 transition-colors" href="{{ url('/home') }}">Home</a>
        <a class="text-sm font-medium {{ request()->is('beasiswa*') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 transition-colors" href="{{ url('/beasiswa') }}">Beasiswa</a>
        <a class="text-sm font-medium {{ request()->is('about') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 transition-colors" href="{{ url('/about') }}">About Us</a>
        <a class="text-sm font-medium {{ request()->is('contact') ? 'text-blue-600' : 'text-slate-600' }} hover:text-blue-600 transition-colors" href="{{ url('/contact') }}">Contact</a>
    </nav>

    <div class="flex items-center gap-2">
        @auth
            <div class="relative group hidden md:block">
                <button class="flex items-center gap-2 text-sm font-medium text-slate-700 transition-colors hover:text-blue-600">
                    <span>{{ Auth::user()->name }}</span>
                    <svg class="size-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="absolute right-0 z-20 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 opacity-0 scale-95 group-hover:scale-100 group-hover:opacity-100 transition-all duration-200 ease-out">
                    <div class="py-1">
                        <a href="{{ url('/user/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Status</a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); this.closest('form').submit();"
                               class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">
                                Log Out
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="hidden md:flex items-center gap-2">
                 <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">Log in</a>
                 <a href="{{ route('register') }}" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 transition-colors">Register</a>
            </div>
        @endauth

        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-slate-700 p-2" aria-label="Buka menu">
            <svg fill="currentColor" class="size-6" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,88H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
            </svg>
        </button>
    </div>

    <div x-show="mobileMenuOpen"
         @click.away="mobileMenuOpen = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute top-full right-4 mt-2 w-64 origin-top-right rounded-lg bg-white p-4 shadow-xl ring-1 ring-black ring-opacity-5 md:hidden">

        <nav class="flex flex-col gap-4">
            <a class="text-base font-medium text-slate-700 hover:text-blue-600" href="{{ url('/home') }}">Home</a>
            <a class="text-base font-medium text-slate-700 hover:text-blue-600" href="{{ url('/beasiswa') }}">Beasiswa</a>
            <a class="text-base font-medium text-slate-700 hover:text-blue-600" href="{{ url('/about') }}">About Us</a>
            <a class="text-base font-medium text-slate-700 hover:text-blue-600" href="{{ url('/contact') }}">Contact</a>
        </nav>

        <div class="mt-4 border-t border-gray-200 pt-4">
            @auth
                <div class="flex items-center gap-3">
                    <div class="flex-shrink-0">
                        <div class="size-10 rounded-full bg-slate-300 text-slate-600 flex items-center justify-center font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-slate-800">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-slate-500 truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="mt-3 space-y-1">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); this.closest('form').submit();"
                           class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-800">
                           Log Out
                        </a>
                    </form>
                </div>
            @else
                 <a href="{{ route('login') }}" class="block w-full rounded-md bg-gray-50 px-4 py-2 text-center font-medium text-gray-700 hover:bg-gray-100">Log In</a>
                 <a href="{{ route('register') }}" class="mt-2 block w-full rounded-md bg-blue-600 px-4 py-2 text-center font-medium text-white hover:bg-blue-700">Register</a>
            @endauth
        </div>
    </div>

</header>
