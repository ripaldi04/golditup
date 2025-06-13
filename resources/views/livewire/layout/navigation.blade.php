<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Kiri -->
            <div class="flex items-center space-x-6">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Beranda
                </a>
                <a href="/aboutus" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Tentang Kami
                </a>
            </div>

            <!-- Tengah: Logo -->
            <div class="flex-shrink-0">
                <a href="" wire:navigate>
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 mx-auto" />
                </a>
            </div>

            <!-- Kanan -->
            <div class="flex items-center space-x-6">
                <a href="/event" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Acara
                </a>
                <a href="/product" class="text-sm font-medium text-gray-600 hover:text-gray-900" wire:navigate>
                    Produk
                </a>

                @auth
                    <!-- Dropdown Authenticated -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
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

                            <button wire:click="logout" class="w-full text-start">
                                <x-dropdown-link>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </button>
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
</nav>
