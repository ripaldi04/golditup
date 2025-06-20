<x-applayout>
    <div wire:ignore>
        <section class="py-16 bg-white text-center w-full bg-cover bg-center flex items-center justify-center"
            style="min-height: 60vh; background-image: url('{{ asset('storage/' . $event->banner) }}')">
            <!-- Banner -->
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold mb-4">{{ $event->header }}</h1>
                <p class="text-gray-700">
                    {{ $event->deskripsi }}
                </p>
            </div>
        </section>

        <!-- Kelas Terbaru -->
        <section class="py-12 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Kelas Terbaru</h2>
            </div>

            <div class="swiper kelasTerbaruSwiper px-6">
                <div class="swiper-wrapper mt-8">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 2 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 3 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 4 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next text-black"></div>
                <div class="swiper-button-prev text-black"></div>
            </div>
        </section>
        <section class="py-12 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Buku Terbaru</h2>
            </div>

            <div class="swiper kelasTerbaruSwiper px-6">
                <div class="swiper-wrapper mt-8">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 2 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 3 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 4 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next text-black"></div>
                <div class="swiper-button-prev text-black"></div>
            </div>
        </section>
        <section class="py-12 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Event</h2>
            </div>

            <div class="swiper kelasTerbaruSwiper px-6">
                <div class="swiper-wrapper mt-8">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 2 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 3 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    {{-- slide 4 --}}
                    <div class="swiper-slide flex justify-center">
                        <div
                            class="border border-gray-300 rounded-md p-6 w-96 h-64 text-left bg-white flex flex-col justify-end gap-y-1">
                            <h3 class="font-semibold text-xl">Heading</h3>
                            <p class="text-base text-gray-600 m-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next text-black"></div>
                <div class="swiper-button-prev text-black"></div>
            </div>
        </section>
    </div>
</x-applayout>
