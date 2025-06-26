<x-applayout>
    <div class="mx-4 md:mx-8 lg:mx-12 my-8">
        @php
            $backgroundUrl1 = $banner1 ? asset('storage/' . $banner1) : asset('images/default-banner.jpg');
            $backgroundUrl2 = $banner2 ? asset('storage/' . $banner2) : asset('images/default-banner.jpg');
        @endphp
        <!-- Swiper Hero -->
        <div class="swiper heroSwiper w-full h-screen overflow-hidden mb-16">
            <div class="swiper-wrapper">

                {{-- Slide 1 --}}
                <div class="swiper-slide w-full h-full bg-cover bg-center h-screen flex flex-col items-center justify-center rounded-xl"
                    style="background-image: url('{{ $backgroundUrl1 }}')">
                    <div class="flex flex-col items-center mt-32 md:mt-48 gap-12 text-white px-4">
                        <div class="flex flex-col gap-[10px] text-center">
                            <h1
                                class="font-bison text-black text-6xl md:text-7xl gradient-text-hero animate__animated animate__backInDown">
                                {{ $dashboard->header_banner1 }} </h1>
                            </h1>
                            <p
                                class="text-md md:text-xl leading-[36px] text-black max-w-4xl mx-auto animate__animated animate__backInDown">
                                {{ $dashboard->deskripsi_banner1 }} </h1>
                            </p>
                        </div>
                        <div class="flex gap-6 w-fit pb-10">
                            <a href="/aboutus"
                                class="text-white bg-[#FEBA17] font-semibold rounded-[30px] p-[16px_32px] transition-all duration-300 hover:bg-[#FEBA17] animate__animated animate__fadeInUpBig">
                                ➡️ Aku Mau Berubah Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide w-full h-full bg-cover bg-center h-screen flex flex-col items-center justify-center rounded-xl"
                    style="background-image: url('{{ $backgroundUrl2 }}')">
                    <div class="flex flex-col items-center mt-32 md:mt-48 gap-12 text-white px-4">
                        <div class="flex flex-col gap-[10px] text-center">
                            <h1
                                class="font-bison text-black text-6xl md:text-7xl gradient-text-hero animate__animated animate__backInDown">
                                {{ $dashboard->header_banner2 }} </h1>
                            <p
                                class="text-md md:text-xl leading-[36px] text-black max-w-4xl mx-auto animate__animated animate__backInDown">
                                {{ $dashboard->deskripsi_banner2 }} </h1>
                            </p>
                        </div>
                        <div class="flex gap-6 w-fit pb-10">
                            <a href="/materi"
                                class="text-white bg-[#FEBA17] font-semibold rounded-[30px] p-[16px_32px] transition-all duration-300 animate__animated animate__fadeInUpBig">
                                ➡️ Aku Mau Berubah Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Optional navigation -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>


        <section id="cek" class="relative container mx-auto py-16 px-4 md:px-8 mt-8 max-w-screen overflow-hidden">
            <!-- Background grafis modern -->
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <!-- Grafis abstract 1 (kiri atas) -->
                <svg class="absolute -left-20 -top-20 opacity-20" width="250" height="250" viewBox="0 0 250 250"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M125 0C125 69.0365 69.0365 125 0 125C69.0365 125 125 180.963 125 250C125 180.963 180.963 125 250 125C180.963 125 125 69.0365 125 0Z"
                        fill="#FEBA17" />
                </svg>

                <!-- Grafis abstract 2 (kanan bawah) -->
                <svg class="absolute -right-20 -bottom-20 opacity-15 rotate-45" width="300" height="300"
                    viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M150 0L300 150L150 300L0 150L150 0Z" fill="#e69c0f" />
                </svg>

                <!-- Garis dekoratif -->
                <div class="absolute inset-0 border-2 border-dashed border-[#FEBA17]/20 rounded-full mx-12 my-8"></div>
            </div>

            <div class="flex md:flex-row flex-col-reverse items-center justify-between gap-8 relative z-10">
                <!-- YouTube Video Container -->
                <div class="flex-1 w-full">
                    <div class="relative w-full aspect-video">
                        <iframe class="w-full h-full rounded-xl" src="{{ $dashboard->youtube_preview }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="flex-1 w-full text-center md:text-left flex flex-col gap-[30px] px-4">
                    <h2 class="font-bold text-[36px] leading-[52px]">{{ $dashboard->header_preview }}</h2>
                    <p class="text-[#475466] text-lg leading-[34px]">{{ $dashboard->deskripsi_preview }}</p>
                    <a href=""
                        class="text-white font-semibold mx-auto md:mx-0 rounded-[30px] p-[16px_32px] bg-[#FEBA17] transition-all duration-300 hover:shadow-[0_10px_20px_0_#F0654280] w-fit">
                        Lihat Preview
                    </a>
                </div>
            </div>
        </section>


        <section class="mt-16 mb-16 relative overflow-hidden">
            <!-- Modern Geometric Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-gray-100">
                <!-- Geometric Shapes -->
                <div
                    class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-r from-[#FEBA17]/20 to-[#e69c0f]/30 rounded-full blur-xl">
                </div>
                <div
                    class="absolute top-32 right-20 w-24 h-24 bg-gradient-to-l from-blue-200/40 to-purple-200/40 rounded-full blur-lg">
                </div>
                <div
                    class="absolute bottom-20 left-1/4 w-40 h-40 bg-gradient-to-tr from-[#FEBA17]/15 to-orange-200/25 rounded-full blur-2xl">
                </div>
                <div
                    class="absolute bottom-32 right-1/3 w-28 h-28 bg-gradient-to-bl from-indigo-200/30 to-pink-200/30 rounded-full blur-lg">
                </div>

                <!-- Abstract Lines -->
                <svg class="absolute top-0 left-0 w-full h-full opacity-10" viewBox="0 0 1000 600" fill="none">
                    <path d="M0,300 Q250,100 500,200 T1000,150" stroke="url(#gradient1)" stroke-width="2"
                        fill="none" />
                    <path d="M0,400 Q300,250 600,350 T1000,300" stroke="url(#gradient2)" stroke-width="2"
                        fill="none" />
                    <path d="M0,150 Q400,50 800,100 T1000,80" stroke="url(#gradient3)" stroke-width="1.5"
                        fill="none" />
                    <defs>
                        <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#FEBA17;stop-opacity:0.3" />
                            <stop offset="100%" style="stop-color:#e69c0f;stop-opacity:0.1" />
                        </linearGradient>
                        <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:#8B5CF6;stop-opacity:0.1" />
                        </linearGradient>
                        <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#10B981;stop-opacity:0.2" />
                            <stop offset="100%" style="stop-color:#06B6D4;stop-opacity:0.1" />
                        </linearGradient>
                    </defs>
                </svg>

                <!-- Floating Dots Pattern -->
                <div class="absolute inset-0">
                    <div class="absolute top-1/4 left-1/5 w-2 h-2 bg-[#FEBA17]/40 rounded-full animate-pulse"></div>
                    <div class="absolute top-1/3 right-1/4 w-1 h-1 bg-blue-400/50 rounded-full animate-pulse"
                        style="animation-delay: 0.5s;"></div>
                    <div class="absolute bottom-1/3 left-1/3 w-1.5 h-1.5 bg-purple-400/40 rounded-full animate-pulse"
                        style="animation-delay: 1s;"></div>
                    <div class="absolute bottom-1/4 right-1/5 w-2 h-2 bg-green-400/40 rounded-full animate-pulse"
                        style="animation-delay: 1.5s;"></div>
                    <div class="absolute top-1/6 left-3/4 w-1 h-1 bg-pink-400/50 rounded-full animate-pulse"
                        style="animation-delay: 2s;"></div>
                    <div class="absolute bottom-1/6 left-1/6 w-1.5 h-1.5 bg-indigo-400/40 rounded-full animate-pulse"
                        style="animation-delay: 2.5s;"></div>
                </div>
            </div>

            <!-- Content -->
            <div class="relative z-10 pt-16 pb-8">
                <div class="mt-5">
                    <h2 class="font-bold text-center text-[36px] leading-[52px] text-gray-800">
                        {{ $dashboard->header_copywriting1 }}</h2>
                    <p class="text-center p-5 text-gray-600">{{ $dashboard->deskripsi_copywriting1 }}</p>
                </div>

                <!-- 4 Kotak Berjejer with Enhanced Design -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10 px-4">
                    <!-- Kotak 1 -->
                    <div
                        class="bg-white/80 backdrop-blur-sm shadow-lg hover:shadow-xl rounded-xl p-6 text-center border border-white/50 hover:border-[#FEBA17]/30 transition-all duration-300 hover:-translate-y-1 group">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-xl mb-2 text-gray-800">{{ $dashboard->header_point1 }}</h3>
                        <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point1 }}</p>
                    </div>

                    <!-- Kotak 2 -->
                    <div
                        class="bg-white/80 backdrop-blur-sm shadow-lg hover:shadow-xl rounded-xl p-6 text-center border border-white/50 hover:border-blue-400/30 transition-all duration-300 hover:-translate-y-1 group">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-xl mb-2 text-gray-800">{{ $dashboard->header_point2 }}</h3>
                        <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point2 }}</p>
                    </div>

                    <!-- Kotak 3 -->
                    <div
                        class="bg-white/80 backdrop-blur-sm shadow-lg hover:shadow-xl rounded-xl p-6 text-center border border-white/50 hover:border-green-400/30 transition-all duration-300 hover:-translate-y-1 group">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14-4H3m16 8H5m14-8V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V7z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-xl mb-2 text-gray-800">{{ $dashboard->header_point3 }}</h3>
                        <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point3 }}</p>
                    </div>

                    <!-- Kotak 4 -->
                    <div
                        class="bg-white/80 backdrop-blur-sm shadow-lg hover:shadow-xl rounded-xl p-6 text-center border border-white/50 hover:border-purple-400/30 transition-all duration-300 hover:-translate-y-1 group">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-xl mb-2 text-gray-800">{{ $dashboard->header_point4 }}</h3>
                        <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point4 }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 overflow-hidden">
            <!-- Background grafis modern (abstract shapes) -->
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <!-- Grafis abstract 1 (kiri atas) -->
                <svg class="absolute -left-20 -top-20 opacity-20" width="250" height="250"
                    viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M125 0C125 69.0365 69.0365 125 0 125C69.0365 125 125 180.963 125 250C125 180.963 180.963 125 250 125C180.963 125 125 69.0365 125 0Z"
                        fill="#FEBA17" />
                </svg>

                <!-- Grafis abstract 2 (kanan bawah) -->
                <svg class="absolute -right-20 -bottom-20 opacity-15 rotate-45" width="300" height="300"
                    viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M150 0L300 150L150 300L0 150L150 0Z" fill="#e69c0f" />
                </svg>

                <!-- Garis dekoratif -->
                <div class="absolute inset-0 border-2 border-dashed border-[#FEBA17]/20 rounded-full mx-12 my-8"></div>
            </div>

            <!-- Konten -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl mb-4">
                        {{ $dashboard->header_copywriting2 }}
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        {{ $dashboard->deskripsi_copywriting1 }}
                    </p>
                </div>

                <!-- Grid Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl">
                        <div class="h-48 bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] relative overflow-hidden">
                            <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-[#e69c0f] opacity-30 rounded-full">
                            </div>
                            <div class="absolute -left-5 -top-5 w-20 h-20 bg-white opacity-20 rounded-full"></div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $dashboard->card_header1 }}</h3>
                            <p class="text-gray-600 mb-6">{{ $dashboard->card_deskripsi1 }}</p>
                            <a href="/class/detail"
                                class="inline-flex items-center justify-center px-6 py-3 bg-[#FEBA17] hover:bg-[#e69c0f] text-white font-bold rounded-lg transition-all shadow-md hover:shadow-lg">
                                Gabung Sekarang <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl">
                        <div class="h-48 bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] relative overflow-hidden">
                            <div class="absolute -left-10 -bottom-10 w-32 h-32 bg-[#FEBA17] opacity-30 rounded-full">
                            </div>
                            <div class="absolute -right-5 -top-5 w-20 h-20 bg-white opacity-20 rounded-full"></div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $dashboard->card_header2 }}</h3>
                            <p class="text-gray-600 mb-6">{{ $dashboard->card_deskripsi2 }}</p>
                            <a href="/class/detail"
                                class="inline-flex items-center justify-center px-6 py-3 bg-[#FEBA17] hover:bg-[#e69c0f] text-white font-bold rounded-lg transition-all shadow-md hover:shadow-lg">
                                Gabung Sekarang <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    {{-- Swiper init --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper('.heroSwiper', {
                loop: true,
                effect: 'fade',
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
</x-applayout>
