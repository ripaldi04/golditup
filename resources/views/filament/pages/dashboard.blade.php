<x-filament::page>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <x-filament::card>
            <div class="text-xl font-semibold text-gray-700">Total Users</div>
            <div class="text-3xl font-bold text-primary-600 mt-2">
                {{ \App\Models\User::count() }}
            </div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-xl font-semibold text-gray-700">Active Sessions</div>
            <div class="text-3xl font-bold text-primary-600 mt-2">128</div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-xl font-semibold text-gray-700">Server Status</div>
            <div class="text-green-600 font-bold mt-2">✔ Online</div>
        </x-filament::card>
    </div>  

    <div class="mt-8">
        <x-filament::section>
            <x-slot name="header">Welcome</x-slot>
            <x-slot name="description">
                Selamat datang di admin dashboard. Silakan pilih menu di sidebar untuk mengelola aplikasi.
            </x-slot>

            <div class="text-gray-600">
                Ini adalah halaman dashboard default yang dapat kamu sesuaikan sesuai kebutuhan proyekmu.
            </div>
        </x-filament::section>
    </div>
</x-filament::page>
