<x-applayout>
    <div wire:ignore>

        {{-- HERO SECTION - Banner dengan blur dan overlay --}}
        <section class="relative py-16 text-center w-full flex items-center justify-center bg-cover bg-center"
            style="min-height: 60vh; background-image: url('{{ asset('storage/' . $event->banner) }}');">

            {{-- Optional overlay: bisa dihapus atau atur opasitasnya --}}
            <div class="absolute inset-0 bg-black/20 z-0"></div>

            <div class="relative z-10 max-w-4xl mx-auto text-white">
                <h1 class="text-4xl font-bold mb-4">{{ $event->header }}</h1>
                <p>{{ $event->deskripsi }}</p>
            </div>
        </section>

        {{-- KELAS TERBARU - SVG Dots Background --}}
        <section class="relative py-12 bg-white overflow-hidden">
            <div class="absolute inset-0 -z-10 opacity-10">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none">
                    <defs>
                        <pattern id="dots" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="2" fill="#6366F1" />
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#dots)" />
                </svg>
            </div>

            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Kelas Terbaru</h2>
            </div>

            <div class="swiper kelasTerbaruSwiper px-6">
                <div class="swiper-wrapper mt-8">
                    @foreach (range(1, 4) as $i)
                        <div class="swiper-slide flex justify-center">
                            <div
                                class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1 transition-transform hover:scale-105 duration-300">
                                <h3 class="font-semibold text-xl">Kelas {{ $i }}</h3>
                                <p class="text-base text-gray-600 m-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next text-black"></div>
                <div class="swiper-button-prev text-black"></div>
            </div>
        </section>

        {{-- BUKU TERBARU - Gradient Background --}}
        <section class="py-12 bg-gradient-to-br from-white via-purple-50 to-purple-100">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Buku Terbaru</h2>
            </div>

            <div class="swiper kelasTerbaruSwiper px-6">
                <div class="swiper-wrapper mt-8">
                    @foreach (range(1, 4) as $i)
                        <div class="swiper-slide flex justify-center">
                            <div
                                class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1 transition-transform hover:scale-105 duration-300">
                                <h3 class="font-semibold text-xl">Buku {{ $i }}</h3>
                                <p class="text-base text-gray-600 m-0">
                                    Deskripsi buku singkat yang menarik perhatian.
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next text-black"></div>
                <div class="swiper-button-prev text-black"></div>
            </div>
        </section>

        {{-- EVENT - Dengan Wave Background --}}
        <section class="relative py-12 bg-white overflow-hidden">
            <div class="absolute bottom-0 left-0 w-full -z-10">
                <svg viewBox="0 0 1440 320" class="w-full h-auto">
                    <path fill="#f472b6" fill-opacity="0.2"
                        d="M0,224L48,202.7C96,181,192,139,288,144C384,149,480,203,576,208C672,213,768,171,864,170.7C960,171,1056,213,1152,224C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Event</h2>
            </div>

            <div class="swiper kelasTerbaruSwiper px-6">
                <div class="swiper-wrapper mt-8">
                    @foreach (range(1, 4) as $i)
                        <div class="swiper-slide flex justify-center">
                            <div
                                class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1 transition-transform hover:scale-105 duration-300">
                                <h3 class="font-semibold text-xl">Event {{ $i }}</h3>
                                <p class="text-base text-gray-600 m-0">
                                    Informasi event menarik, seminar, pelatihan, dll.
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next text-black"></div>
                <div class="swiper-button-prev text-black"></div>
            </div>
        </section>

    </div>
</x-applayout>
