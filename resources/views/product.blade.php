<x-applayout>
    <div wire:ignore>
        <section class="py-16 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Kelas Online</h2>
                <p class="text-gray-500 text-sm">Membership Only</p>
            </div>

            <!-- Swiper -->
            <div class="swiper kelasSwiper px-8">
                <div class="swiper kelasSwiper px-8">
                    <div class="swiper-wrapper">
                        @foreach ($memberships as $membership)
                            <div class="swiper-slide flex flex-col items-center">
                                <div
                                    class="w-60 h-60 border border-gray-300 flex items-center justify-center overflow-hidden">
                                    <img src="{{ asset('storage/' . $membership->image_path) }}"
                                        alt="{{ $membership->title }}" class="w-full h-full object-cover" />
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="font-semibold text-lg">{{ $membership->title }}</h3>
                                    <p class="text-gray-500 text-sm">{{ $membership->categoryContent->name ?? '-' }}</p>
                                    <a href="{{ route('product', $membership->id) }}"
                                        class="mt-2 inline-block bg-[#FEBA17] text-white text-sm px-4 py-2 rounded-md hover:opacity-90 transition">
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-next text-gray-800"></div>
                    <div class="swiper-button-prev text-gray-800"></div>
                </div>
        </section>
        <section class="py-16 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Buku</h2>
                <p class="text-gray-500 text-sm">Karya Para Penulis Berdasarkan Kisah Hidup</p>
            </div>

            <!-- Swiper -->
            <div class="swiper kelasSwiper px-8">
                <div class="swiper-wrapper">
                    @foreach ($books as $book)
                        <div class="swiper-slide flex flex-col items-center">
                            <div
                                class="w-60 h-60 border border-gray-300 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $book->image_path) }}" alt="{{ $book->title }}"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="font-semibold text-lg">{{ $book->title }}</h3>
                                <p class="text-gray-500 text-sm">{{ $book->categoryContent->name ?? '-' }}</p>
                                <a href="{{ route('product', $book->id) }}"
                                    class="mt-2 inline-block bg-[#FEBA17] text-white text-sm px-4 py-2 rounded-md hover:opacity-90 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- Navigation buttons -->
                <div class="swiper-button-next text-gray-800"></div>
                <div class="swiper-button-prev text-gray-800"></div>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Event</h2>
                <p class="text-gray-500 text-sm">Karya Para Penulis Berdasarkan Kisah Hidup</p>
            </div>

            <!-- Swiper -->
            <div class="swiper kelasSwiper px-8">
                <div class="swiper-wrapper">
                    @foreach ($events as $event)
                        <div class="swiper-slide flex flex-col items-center">
                            <div
                                class="w-60 h-60 border border-gray-300 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $event->image_path) }}" alt="{{ $event->title }}"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="font-semibold text-lg">{{ $event->title }}</h3>
                                <p class="text-gray-500 text-sm">{{ $event->categoryContent->name ?? '-' }}</p>
                                <a href="{{ route('product', $event->id) }}"
                                    class="mt-2 inline-block bg-[#FEBA17] text-white text-sm px-4 py-2 rounded-md hover:opacity-90 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next text-gray-800"></div>
                <div class="swiper-button-prev text-gray-800"></div>
            </div>
        </section>
    </div>
</x-applayout>
