<x-app-layout>
    <section class="py-10 px-4" x-data="{ showAlert: false }">
        <!-- YOUTUBE VIDEO -->
        <div class="max-w-5xl mx-auto">
            <div class="aspect-video border border-gray-300">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/-3poJ5nN9K0" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- CONTENT BLOCK -->
        <div class="max-w-6xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <!-- GAMBAR -->
            <div class="w-full h-64 md:h-80 bg-gray-100 flex items-center justify-center border">
                <span class="text-lg text-gray-500 font-semibold">GAMBAR</span>
            </div>

            <!-- TEXT KONTEN -->
            <div class="space-y-4">
                <p class="text-xs uppercase text-gray-500 font-medium">MATERI BY GOLD IT UP</p>
                <h2 class="text-2xl font-bold">JUDUL</h2>

                <p class="text-sm text-gray-700">Tahun Rilis | Genre | Rating Umur</p>

                <h3 class="font-semibold text-lg">Heading</h3>

                <p class="text-sm text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>

                <button @click="showAlert = true"
                    class="mt-4 px-4 py-2 bg-[#FEBA17] text-white border border-[#FEBA17] rounded hover:bg-[#e6a600] transition">
                    Tonton Video
                </button>
            </div>
        </div>

        <!-- ALERT -->
        <div x-show="showAlert" x-transition
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded shadow-md text-center max-w-md mx-auto">
                <h2 class="text-lg font-bold mb-2 text-black">PERHATIAN !!!</h2>
                <p class="text-sm text-gray-700 mb-4">
                    Untuk Mengakses video ini anda harus join membership di youtube <b>GOLD IT UP</b>.
                </p>
                <div class="space-y-2">
                    <a href="https://www.youtube.com/shorts/ADdZNgXvZ1k" target="_blank"
                        class="block w-full bg-green-100 text-green-800 px-4 py-2 rounded hover:bg-green-200 text-sm font-semibold">
                        Saya Sudah Menjadi Member, Lanjutkan Menonton
                    </a>
                    <a href="https://www.youtube.com/@GoldItUp" target="_blank"
                        class="block w-full bg-red-100 text-red-800 px-4 py-2 rounded hover:bg-red-200 text-sm font-semibold">
                        Oke, Daftar Jadi Member Sekarang
                    </a>
                </div>
                <button @click="showAlert = false" class="mt-4 text-xs text-gray-500 hover:underline">Tutup</button>
            </div>
        </div>



        <!-- PADUAN PEMBELIAN -->
        <div class="max-w-6xl mx-auto mt-16 bg-white border border-gray-200 rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">PADUAN PEMBELIAN!</h3>
            <p class="text-sm text-gray-700 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
    </section>
</x-app-layout>
