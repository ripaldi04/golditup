<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Kiri (Desktop only) -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Beranda
                </a>
                <a href="/aboutus" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Tentang Kami
                </a>
            </div>

            <!-- Tengah: Logo -->
            <div class="flex-shrink-0">
                <a href="/" wire:navigate>
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 mx-auto" />
                </a>
            </div>

            <!-- Hamburger Menu (mobile only) -->
            <div class="flex lg:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Kanan (Desktop only) -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="/event" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Acara
                </a>
                <a href="/product" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Produk
                </a>

                @auth
                    <x-dropdown align="right" width="48">
                        <!-- Trigger & Content Dropdown -->
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name"
                                    x-on:profile-updated.window="name = $event.detail.name">
                                </div>
                                <svg class="ml-1 h-4 w-4 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile')" wire:navigate>
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                        {{ __('Login') }}
                    </a>
                    <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                        {{ __('Register') }}
                    </a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="lg:hidden px-4 pb-4">
        <div class="space-y-2 mt-2">
            <!-- Kiri (mobile) -->
            <a href="/" class="block text-sm font-medium text-gray-600 hover:text-gray-900">Beranda</a>
            <a href="/aboutus" class="block text-sm font-medium text-gray-600 hover:text-gray-900">Tentang Kami</a>

            <!-- Kanan (mobile) -->
            <a href="/event" class="block text-sm font-medium text-gray-600 hover:text-gray-900">Acara</a>
            <a href="/product" class="block text-sm font-medium text-gray-600 hover:text-gray-900">Produk</a>

            @auth
                <a href="{{ route('profile') }}"
                    class="block text-sm font-medium text-gray-600 hover:text-gray-900">{{ __('Profile') }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left text-sm font-medium text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block text-sm text-gray-600 hover:text-gray-900 underline">
                    {{ __('Login') }}
                </a>
                <a href="{{ route('register') }}" class="block text-sm text-gray-600 hover:text-gray-900 underline">
                    {{ __('Register') }}
                </a>
            @endauth
        </div>
    </div>
</nav>
