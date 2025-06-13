<x-applayout>
    <div>
        <!-- Swiper Hero -->
        <div class="swiper heroSwiper w-full h-screen overflow-hidden">
            <div class="swiper-wrapper">

                {{-- Slide 1 --}}
                <div class="swiper-slide w-full h-full bg-cover bg-center h-screen flex items-center justify-center flex-col"
                    style="background-image: url('{{ asset('images/background.svg') }}')">
                    <div class="flex flex-col items-center mt-32 md:mt-48 gap-12 text-white">
                        <div class="flex flex-col gap-[10px] text-center">
                            <h1
                                class="font-bison text-6xl md:text-9xl gradient-text-hero animate__animated animate__fadeInDownBig animate__faster">
                                djfsjf </h1>
                            <p
                                class="text-md md:text-xl leading-[36px] text-[#F5F8FA] max-w-4xl mx-auto animate__animated animate__fadeInDownBig animate__fast">
                                ksdf </p>
                        </div>
                        <div class="flex gap-6 w-fit pb-10">
                            <a href="/materi"
                                class="text-white bg-[#FEBA17] font-semibold rounded-[30px] p-[16px_32px] transition-all duration-300 hover:bg-[#FEBA17] animate__animated animate__fadeInUpBig">Mulai
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide w-full h-full bg-cover bg-center flex flex-col items-center justify-center"
                    style="background-image: url('{{ asset('images/background.svg') }}')">
                    <div class="flex flex-col items-center mt-32 md:mt-48 gap-12 text-white">
                        <div class="flex flex-col gap-[10px] text-center">
                            <h1
                                class="font-bison text-6xl md:text-9xl gradient-text-hero animate__animated animate__fadeInDownBig animate__faster">
                                sdkjfdskjg</h1>
                            <p
                                class="text-md md:text-xl leading-[36px] text-[#F5F8FA] max-w-4xl mx-auto animate__animated animate__fadeInDownBig animate__fast">
                                sdkfjskdf</p>
                        </div>
                        <div class="flex gap-6 w-fit pb-10">
                            <a href="/materi"
                                class="text-white bg-[#FEBA17] font-semibold rounded-[30px] p-[16px_32px] transition-all duration-300 animate__animated animate__fadeInUpBig">Mulai
                                Sekarang</a>
                        </div>
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
                <h2 class="font-bold text-[36px] leading-[52px]">Belajar Dimana Saja,<br>Kapanpun Anda Mau</h2>
                <p class="max-w-xl text-[#475466] text-lg leading-[34px]">oioioi</p>
                <a href=""
                    class="text-white font-semibold mx-auto md:mx-0 rounded-[30px] p-[16px_32px] bg-[#FEBA17] transition-all duration-300 hover:shadow-[0_10px_20px_0_#F0654280] w-fit">Cek
                    Harga</a>
            </div>
        </div>
    </section>
    <section>
        <div class="mt-5">
            <h2 class="font-bold text-center text-[36px] leading-[52px]">Belajar Dimana Saja Kapanpun Anda Mau</h2>
            <p class="text-center p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui labore ducimus in
                hic, porro est ex, fugiat
                esse illo iste expedita quaerat distinctio illum officia totam aspernatur perferendis voluptas
                minus.Doloremque nihil perspiciatis eum soluta sapiente distinctio tempora quas placeat quidem qui modi
                iure molestias, rem cum in molestiae asperiores explicabo aut eius fuga. Maiores velit iusto rerum
                incidunt praesentium.</p>

        </div>
        <!-- 4 Kotak Berjejer -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-10 mt-10">
            <!-- Kotak 1 -->
            <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                <h3 class="font-semibold text-xl mb-2">Fleksibel</h3>
                <p class="text-gray-600 text-sm">Belajar kapan saja tanpa batas waktu atau tempat.</p>
            </div>

            <!-- Kotak 2 -->
            <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                <h3 class="font-semibold text-xl mb-2">Materi Lengkap</h3>
                <p class="text-gray-600 text-sm">Dapatkan akses ke materi lengkap dan up-to-date.</p>
            </div>

            <!-- Kotak 3 -->
            <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                <h3 class="font-semibold text-xl mb-2">Pengajar Ahli</h3>
                <p class="text-gray-600 text-sm">Dipandu oleh instruktur profesional di bidangnya.</p>
            </div>

            <!-- Kotak 4 -->
            <div class="bg-white shadow-md rounded-xl p-6 text-center border">
                <h3 class="font-semibold text-xl mb-2">Sertifikat</h3>
                <p class="text-gray-600 text-sm">Dapatkan sertifikat resmi setelah menyelesaikan kursus.</p>
            </div>
    </section>
    <section>
        <div class="mt-10">
            <h2 class="font-bold text-center text-[36px] leading-[52px]">JOIN MEMBERSHIP</h2>
            <p class="text-center p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui labore ducimus in
                hic, porro est ex, fugiat
                esse illo iste expedita quaerat distinctio illum officia totam aspernatur perferendis voluptas
                minus.Doloremque nihil perspiciatis eum soluta sapiente distinctio tempora quas placeat quidem qui modi
                iure molestias, rem cum in molestiae asperiores explicabo aut eius fuga. Maiores velit iusto rerum
                incidunt praesentium.</p>

        </div>
        <!-- 2Kotak Berjejer -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 px-10 mt-10">
            <!-- Kotak 1 -->
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div
                    class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                </div>
                <div class="p-6 text-center">
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Tailwind card
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis ligula.
                    </p>
                </div>
                <div class="p-6 pt-0 text-center">
                    <button data-ripple-light="true" type="button"
                        class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>

            <!-- Kotak 2 -->
            <div
                class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mt-8 sm:mt-0">
                <div
                    class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                </div>
                <div class="p-6 text-center">
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Tailwind card
                    </h5>
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis ligula.
                    </p>
                </div>
                <div class="p-6 pt-0 text-center">
                    <button data-ripple-light="true" type="button"
                        class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
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
