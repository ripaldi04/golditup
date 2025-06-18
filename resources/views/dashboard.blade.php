<x-applayout>
    <div>
        @php
            $backgroundUrl1 = $banner1 ? asset('storage/' . $banner1) : asset('images/default-banner.jpg');
            $backgroundUrl2 = $banner2 ? asset('storage/' . $banner2) : asset('images/default-banner.jpg');
        @endphp
        <!-- Swiper Hero -->
        <div class="swiper heroSwiper w-full h-screen overflow-hidden">
            <div class="swiper-wrapper">

                {{-- Slide 1 --}}
                <div class="swiper-slide w-full h-full bg-cover bg-center h-screen flex flex-col items-center justify-center"
                    style="background-image: url('{{ $backgroundUrl1 }}')">
                    <div class="flex flex-col items-center mt-32 md:mt-48 gap-12 text-white">
                        <div class="flex flex-col gap-[10px] text-center">
                            <h1
                                class="font-bison text-6xl md:text-9xl gradient-text-hero animate__animated animate__fadeInDownBig animate__faster">
                                {{ $dashboard->header_banner }} </h1>
                            </h1>
                            <p
                                class="text-md md:text-xl leading-[36px] text-[#F5F8FA] max-w-4xl mx-auto animate__animated animate__fadeInDownBig animate__fast">
                                {{ $dashboard->deskripsi_banner }} </h1>
                            </p>
                        </div>
                        <div class="flex gap-6 w-fit pb-10">
                            <a href="/aboutus"
                                class="text-white bg-[#FEBA17] font-semibold rounded-[30px] p-[16px_32px] transition-all duration-300 hover:bg-[#FEBA17] animate__animated animate__fadeInUpBig">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide w-full h-full bg-cover bg-center h-screen flex flex-col items-center justify-center"
                    style="background-image: url('{{ $backgroundUrl2 }}')">
                    <div class="flex flex-col items-center mt-32 md:mt-48 gap-12 text-white">
                        <div class="flex flex-col gap-[10px] text-center">
                            <h1
                                class="font-bison text-6xl md:text-9xl gradient-text-hero animate__animated animate__fadeInDownBig animate__faster">
                                {{ $dashboard->header_banner }} </h1>
                            <p
                                class="text-md md:text-xl leading-[36px] text-[#F5F8FA] max-w-4xl mx-auto animate__animated animate__fadeInDownBig animate__fast">
                                {{ $dashboard->deskripsi_banner }} </h1>
                            </p>
                        </div>
                        <div class="flex gap-6 w-fit pb-10">
                            <a href="/materi"
                                class="text-white bg-[#FEBA17] font-semibold rounded-[30px] p-[16px_32px] transition-all duration-300 animate__animated animate__fadeInUpBig">
                                Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Optional navigation -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>


        <section id="cek" class="container mx-auto py-16 max-w-screen overflow-hidden">
            <div class="flex md:flex-row flex-col-reverse items-center justify-around">
                <div class="relative mt-12 md:mt-0">
                    <div class="w-[300px] h-[200px] md:w-[500px] md:h-[300px]">
                        <iframe class="w-full h-full rounded-xl" src="https://www.youtube.com/embed/XVxyY_owL_M"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="md:ms-32 ms-0 text-center flex flex-col md:text-left gap-[30px]">
                    <h2 class="font-bold text-[36px] leading-[52px]">{{ $dashboard->header_preview }}</h2>
                    <p class="max-w-xl text-[#475466] text-lg leading-[34px]">{{ $dashboard->deskripsi_preview }}</p>
                    <a href=""
                        class="text-white font-semibold mx-auto md:mx-0 rounded-[30px] p-[16px_32px] bg-[#FEBA17] transition-all duration-300 hover:shadow-[0_10px_20px_0_#F0654280] w-fit">Lihat
                        Preview</a>
                </div>
            </div>
        </section>
        <section>
            <div class="mt-5">
                <h2 class="font-bold text-center text-[36px] leading-[52px]">{{ $dashboard->header_copywriting1 }}</h2>
                <p class="text-center p-5">{{ $dashboard->deskripsi_copywriting1 }}</p>

            </div>
            <!-- 4 Kotak Berjejer -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-10 mt-10">
                <!-- Kotak 1 -->
                <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                    <h3 class="font-semibold text-xl mb-2">{{ $dashboard->header_point1 }}</h3>
                    <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point1 }}</p>
                </div>

                <!-- Kotak 2 -->
                <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                    <h3 class="font-semibold text-xl mb-2">{{ $dashboard->header_point2 }}</h3>
                    <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point2 }}</p>
                </div>

                <!-- Kotak 3 -->
                <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                    <h3 class="font-semibold text-xl mb-2">{{ $dashboard->header_point3 }}</h3>
                    <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point3 }}</p>
                </div>

                <!-- Kotak 4 -->
                <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                    <h3 class="font-semibold text-xl mb-2">{{ $dashboard->header_point4 }}</h3>
                    <p class="text-gray-600 text-sm">{{ $dashboard->deskripsi_point4 }}</p>
                </div>
        </section>
        <section>
            <div class="mt-10 max-w-7xl mx-auto px-4">
                <h2 class="font-bold text-center text-[36px] leading-[52px]">{{ $dashboard->header_copywriting2 }}</h2>
                <p class="text-center p-5">
                    {{ $dashboard->deskripsi_copywriting1 }}
                </p>

                <!-- Grid Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-10">
                    <!-- Card 1 -->
                    <div class="relative flex flex-col rounded-xl bg-white text-gray-700 shadow-md w-full">
                        <div class="h-40 rounded-t-xl bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] shadow-lg">
                        </div>
                        <div class="p-6 text-center">
                            <h5 class="mb-2 text-xl font-semibold text-blue-gray-900">
                                {{ $dashboard->card_header1 }} </h5>
                            <p class="text-base font-light leading-relaxed">
                                {{ $dashboard->card_deskripsi1 }} </p>
                        </div>
                        <div class="p-6 pt-0 text-center">
                            <a href="/class/detail"
                                class="inline-block rounded-lg bg-[#FEBA17] py-3 px-6 text-xs font-bold uppercase text-white shadow-md transition-all hover:shadow-lg focus:opacity-85">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative flex flex-col rounded-xl bg-white text-gray-700 shadow-md w-full">
                        <div class="h-40 rounded-t-xl bg-gradient-to-r from-[#FEBA17] to-[#e69c0f] shadow-lg">
                        </div>
                        <div class="p-6 text-center">
                            <h5 class="mb-2 text-xl font-semibold text-blue-gray-900">
                                {{ $dashboard->card_header2 }} </h5>
                            <p class="text-base font-light leading-relaxed">
                                {{ $dashboard->card_deskripsi2 }} </p>
                        </div>
                        <div class="p-6 pt-0 text-center">
                            <a href="/class/detail"
                                class="inline-block rounded-lg bg-[#FEBA17] py-3 px-6 text-xs font-bold uppercase text-white shadow-md transition-all hover:shadow-lg focus:opacity-85">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
