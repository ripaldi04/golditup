<nav x-data="{ open: false }" class="bg-white/95 backdrop-blur-md border-b border-gray-200/50 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center justify-between w-full">
                <!-- Left Navigation -->
                <div class="flex items-center space-x-8">
                    <a href="/"
                        class="relative text-sm font-semibold text-gray-700 hover:text-[#FEBA17] transition-all duration-300 group px-2 py-1"
                        wire:navigate>
                        Beranda
                        <span
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-[#FEBA17] transition-all duration-300 group-hover:w-3/4"></span>
                    </a>
                    <a href="/aboutus"
                        class="relative text-sm font-semibold text-gray-700 hover:text-[#FEBA17] transition-all duration-300 group px-2 py-1"
                        wire:navigate>
                        Tentang Kami
                        <span
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-[#FEBA17] transition-all duration-300 group-hover:w-3/4"></span>
                    </a>
                </div>

                <!-- Center Logo -->
                <div class="flex-shrink-0 mx-8">
                    <a href="/" wire:navigate class="group">
                        <div
                            class="p-3 rounded-xl bg-gradient-to-r from-[#FEBA17]/10 to-[#e69c0f]/10 group-hover:from-[#FEBA17]/20 group-hover:to-[#e69c0f]/20 transition-all duration-300">
                            <x-application-logo
                                class="block h-10 w-auto fill-current text-[#FEBA17] group-hover:scale-105 transition-transform duration-300" />
                        </div>
                    </a>
                </div>

                <!-- Right Navigation -->
                <div class="flex items-center space-x-8">
                    <a href="/event"
                        class="relative text-sm font-semibold text-gray-700 hover:text-[#FEBA17] transition-all duration-300 group px-2 py-1"
                        wire:navigate>
                        Acara
                        <span
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-[#FEBA17] transition-all duration-300 group-hover:w-3/4"></span>
                    </a>
                    <a href="/product"
                        class="relative text-sm font-semibold text-gray-700 hover:text-[#FEBA17] transition-all duration-300 group px-2 py-1"
                        wire:navigate>
                        Produk
                        <span
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-[#FEBA17] transition-all duration-300 group-hover:w-3/4"></span>
                    </a>

                    <!-- Auth Section -->
                    <div class="flex items-center ml-4">
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-semibold rounded-full text-gray-700 bg-gray-50 hover:bg-gray-100 hover:text-[#FEBA17] focus:outline-none focus:ring-2 focus:ring-[#FEBA17]/20 transition-all duration-300">
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-8 h-8 bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] rounded-full flex items-center justify-center">
                                                <span
                                                    class="text-white text-xs font-bold">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                                            </div>
                                            <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name"
                                                x-on:profile-updated.window="name = $event.detail.name" class="hidden sm:block">
                                            </div>
                                        </div>
                                        <svg class="ml-2 h-4 w-4 fill-current transition-transform duration-200"
                                            viewBox="0 0 20 20" :class="{ 'rotate-180': open }">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="py-1">
                                        <x-dropdown-link :href="route('profile')" wire:navigate class="flex items-center space-x-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                            <span>{{ __('Profile') }}</span>
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                class="flex items-center space-x-2 text-red-600 hover:text-red-700 hover:bg-red-50">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                                <span>{{ __('Log Out') }}</span>
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        @else
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('login') }}"
                                    class="text-sm font-semibold text-gray-700 hover:text-[#FEBA17] transition-colors duration-300 px-3 py-2">
                                    {{ __('Masuk') }}
                                </a>
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center px-6 py-2 text-sm font-semibold text-white bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] rounded-full hover:from-[#e69c0f] hover:to-[#FEBA17] transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                    {{ __('Daftar') }}
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex lg:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-xl text-gray-600 hover:text-[#FEBA17] hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#FEBA17]/20 transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2"
        class="lg:hidden bg-white/95 backdrop-blur-md border-t border-gray-200/50">
        <div class="px-4 py-6 space-y-4">
            <!-- Navigation Links -->
            <div class="space-y-3">
                <a href="/"
                    class="flex items-center space-x-3 text-base font-semibold text-gray-700 hover:text-[#FEBA17] py-2 px-3 rounded-lg hover:bg-gray-50 transition-all duration-300"
                    wire:navigate>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Beranda</span>
                </a>
                <a href="/aboutus"
                    class="flex items-center space-x-3 text-base font-semibold text-gray-700 hover:text-[#FEBA17] py-2 px-3 rounded-lg hover:bg-gray-50 transition-all duration-300"
                    wire:navigate>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Tentang Kami</span>
                </a>
                <a href="/event"
                    class="flex items-center space-x-3 text-base font-semibold text-gray-700 hover:text-[#FEBA17] py-2 px-3 rounded-lg hover:bg-gray-50 transition-all duration-300"
                    wire:navigate>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>Acara</span>
                </a>
                <a href="/product"
                    class="flex items-center space-x-3 text-base font-semibold text-gray-700 hover:text-[#FEBA17] py-2 px-3 rounded-lg hover:bg-gray-50 transition-all duration-300"
                    wire:navigate>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <span>Produk</span>
                </a>
            </div>

            <!-- Auth Section -->
            <div class="pt-4 border-t border-gray-200">
                @auth
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 py-2 px-3">
                            <div
                                class="w-10 h-10 bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] rounded-full flex items-center justify-center">
                                <span
                                    class="text-white text-sm font-bold">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <a href="{{ route('profile') }}"
                            class="flex items-center space-x-3 text-base font-semibold text-gray-700 hover:text-[#FEBA17] py-2 px-3 rounded-lg hover:bg-gray-50 transition-all duration-300"
                            wire:navigate>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>{{ __('Profile') }}</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center space-x-3 text-base font-semibold text-red-600 hover:text-red-700 py-2 px-3 rounded-lg hover:bg-red-50 transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                                <span>{{ __('Log Out') }}</span>
                            </button>
                        </form>
                    </div>
                @else
                    <div class="space-y-3">
                        <a href="{{ route('login') }}"
                            class="flex items-center justify-center space-x-2 w-full py-3 px-4 text-base font-semibold text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-[#FEBA17] hover:text-[#FEBA17] transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <span>{{ __('Masuk') }}</span>
                        </a>
                        <a href="{{ route('register') }}"
                            class="flex items-center justify-center space-x-2 w-full py-3 px-4 text-base font-semibold text-white bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] rounded-lg hover:from-[#e69c0f] hover:to-[#FEBA17] transition-all duration-300 shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                            <span>{{ __('Daftar') }}</span>
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>