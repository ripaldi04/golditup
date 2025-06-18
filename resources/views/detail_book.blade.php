<x-app-layout>
    <section class="py-10 px-4" x-data="{ showAlert: false, showLoginAlert: false }">
        <!-- GRID UTAMA -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <!-- GAMBAR BUKU -->
            <div class="w-full h-80 md:h-[450px] bg-gray-100 border flex items-center justify-center">
                <img src="{{ asset('storage/' . $book->image_path) }}" alt="{{ $book->title }}"
                    class="object-cover w-full h-full" />
            </div>

            <!-- KONTEN TEKS -->
            <div class="space-y-4">
                <p class="text-xs uppercase text-gray-500 font-medium">MATERI BY GOLD IT UP</p>
                <h2 class="text-2xl font-bold">{{ $book->title }}</h2>
                <p class="text-sm text-gray-700">{{ $book->release_year }} | {{ $book->categoryContent->name }} |
                    {{ $book->author }}</p>

                <h3 class="font-semibold text-lg">{{ $book->detail_header }}</h3>
                <p class="text-sm text-gray-600">
                    {{ $book->detail_deskripsi }}
                </p>

                @auth
                    <!-- Sudah login -->
                    <button @click="showAlert = true"
                        class="mt-4 px-4 py-2 bg-[#FEBA17] text-white border border-[#FEBA17] rounded hover:bg-[#e6a600] transition">
                        Pesan Sekarang
                    </button>
                @else
                    <!-- Belum login -->
                    <button @click="showLoginAlert = true"
                        class="mt-4 px-4 py-2 bg-[#FEBA17] text-white border border-[#FEBA17] rounded hover:bg-[#e6a600] transition">
                        Pesan Sekarang
                    </button>
                @endauth
            </div>
        </div>

        <!-- TIGA GAMBAR -->
        <div class="max-w-6xl mx-auto mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="h-80 bg-gray-100 border flex items-center justify-center">
                <img src="{{ asset('storage/' . $book->image_book1) }}" alt="Gambar Buku 1"
                    class="object-cover h-full w-full" />
            </div>
            <div class="h-80 bg-gray-100 border flex items-center justify-center">
                <img src="{{ asset('storage/' . $book->image_book2) }}" alt="Gambar Buku 1"
                    class="object-cover h-full w-full" />
            </div>
            <div class="h-80 bg-gray-100 border flex items-center justify-center">
                <img src="{{ asset('storage/' . $book->image_book3) }}" alt="Gambar Buku 1"
                    class="object-cover h-full w-full" />
            </div>
        </div>

        <!-- PADUAN PEMBELIAN -->
        <div class="max-w-6xl mx-auto mt-16 bg-white border border-gray-200 rounded-lg shadow-sm p-6">
            <h3 class="text-lg md:text-xl font-bold mb-4 text-gray-800">PADUAN PEMBELIAN !</h3>
            <p class="text-sm text-gray-700 leading-relaxed">
                {{ $book->buying_guide }}
            </p>
        </div>

        <!-- ✅ ALERT WHATSAPP -->
        <div x-show="showAlert" x-transition
            class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full text-center">
                <h2 class="text-lg font-bold text-black mb-2">PERHATIAN !!!</h2>
                <p class="text-sm text-gray-700 mb-4">
                    Anda akan dialihkan ke WhatsApp admin untuk melakukan pemesanan dan pembayaran.
                </p>
                <a href="https://wa.me/628121869994?text=Halo%20admin%2C%20saya%20ingin%20memesan%20buku..."
                    target="_blank"
                    class="inline-block w-full bg-green-100 text-green-800 px-4 py-2 rounded hover:bg-green-200 text-sm font-semibold">
                    Menuju Whatsapp &gt;&gt;&gt;&gt;
                </a>
                <button @click="showAlert = false" class="mt-4 text-xs text-gray-500 hover:underline">
                    Tutup
                </button>
            </div>
        </div>

        <div x-show="showLoginAlert" x-transition
            class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full text-center">
                <h2 class="text-lg font-bold text-red-600 mb-2">Login Diperlukan</h2>
                <p class="text-sm text-gray-700 mb-4">
                    Silakan login terlebih dahulu untuk dapat melakukan pemesanan buku.
                </p>

                <!-- Tombol Login dan Registrasi (vertikal) -->
                <div class="flex flex-col space-y-2">
                    <a href="{{ route('login') }}"
                        class="w-full bg-green-300 text-yellow-800 px-4 py-2 rounded hover:bg-green-100 text-sm font-semibold text-center">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="w-full bg-yellow-300 text-yellow-800 px-4 py-2 rounded hover:bg-yellow-100 text-sm font-semibold text-center">
                        Registrasi
                    </a>
                </div>

                <button @click="showLoginAlert = false" class="mt-4 text-xs text-gray-500 hover:underline">
                    Tutup
                </button>
            </div>
        </div>
    </section>
</x-app-layout>
