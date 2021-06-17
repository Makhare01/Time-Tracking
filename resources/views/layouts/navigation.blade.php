<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <!-- <x-application-logo class="block h-10 w-auto fill-current text-gray-600" /> -->
                    <img src="/img/time.svg" alt="Faust logo" width = "30">
                </a>
            </div>
            <div class="flex">
                <!-- Navigation Links  -->
                <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                    <x-nav-link style="border: solid 1px red;" :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="text-decoration: none">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                @if (Auth::user()->hasRole('admin'))
                    <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                        <x-nav-link :href="route('dashboard.users')" :active="request()->routeIs('dashboard.users')" style="text-decoration: none">
                            {{ __('All user') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')" style="text-decoration: none">
                            {{ __('Register user') }}
                        </x-nav-link>
                    </div>
                @endif

                @if (Auth::user()->hasRole('company'))
                    <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                        <x-nav-link :href="route('dashboard.employees')" :active="request()->routeIs('dashboard.employees')" style="text-decoration: none">
                            {{ __('Employees') }}
                        </x-nav-link>
                    </div>
                    <!-- <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                        <x-nav-link :href="route('dashboard.calendar')" :active="request()->routeIs('dashboard.calendar')" style="text-decoration: none">
                            {{ __('Calendar') }}
                        </x-nav-link>
                    </div> 
                    <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                        <x-nav-link :href="route('dashboard.statistics')" :active="request()->routeIs('dashboard.statistics')" style="text-decoration: none">
                            {{ __('Statistic') }}
                        </x-nav-link>
                    </div> -->
                @endif

                @if (Auth::user()->hasRole('user'))
                    <div class="hidden space-x-8 sm:-my-px ml-5 mr-5 sm:flex">
                        <x-nav-link :href="route('dashboard.work')" :active="request()->routeIs('dashboard.work')" style="text-decoration: none">
                            {{ __('Work') }}
                        </x-nav-link>
                    </div>
                @endif
              
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>
                                @if(Auth::user()->role_id == "user" || Auth::user()->role_id == "admin")
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }} {{Auth::user()->last_name }}</div>
                                @else
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->company_name }}</div>
                                @endif    
                            </div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                style="text-decoration: none">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" tyle="text-decoration: none !important;">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @if (Auth::user()->hasRole('admin'))
                <x-responsive-nav-link :href="route('dashboard.users')" :active="request()->routeIs('dashboard.users')" style="text-decoration: none">
                    {{ __('All user') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')" style="text-decoration: none">
                    {{ __('Register user') }}
                </x-responsive-nav-link>
            @endif

            @if (Auth::user()->hasRole('roller'))
                <x-responsive-nav-link :href="route('dashboard.offers')" :active="request()->routeIs('dashboard.offers')" style="text-decoration: none">
                    {{ __('Roller Table') }}
                </x-responsive-nav-link>
            @endif

            @if (Auth::user()->hasRole('superadmin'))
                <x-responsive-nav-link :href="route('dashboard.offersList')" :active="request()->routeIs('dashboard.offersList')" style="text-decoration: none">
                    {{ __('Offers Table') }}
                </x-responsive-nav-link>
            @endif

            @if (Auth::user()->hasRole('registrar'))
                <x-responsive-nav-link :href="route('dashboard.accountsList')" :active="request()->routeIs('dashboard.accountsList')" style="text-decoration: none">
                    {{ __('Accounts Table') }}
                </x-responsive-nav-link>
            @endif
        </div>

        

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    @if(Auth::user()->role_id == "user" || Auth::user()->role_id == "admin")
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }} {{Auth::user()->last_name }} </div>
                    @else
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->company_name }}</div>
                    @endif
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" style="text-decoration: none !important;">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
