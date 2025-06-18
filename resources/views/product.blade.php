<x-applayout>
    <div wire:ignore>
        {{-- Section: Kelas Online --}}
        <section class="py-16 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Kelas Online</h2>
                <p class="text-gray-500 text-sm">Membership Only</p>
            </div>

            <div class="relative px-8">
                <div class="glider glider-membership">
                    @foreach ($memberships as $membership)
                        <div class="p-2 flex flex-col items-center">
                            <div
                                class="w-60 h-60 border border-gray-300 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $membership->image_path) }}"
                                    alt="{{ $membership->title }}" class="w-full h-full object-cover" />
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="font-semibold text-lg">{{ $membership->title }}</h3>
                                <p class="text-gray-500 text-sm">{{ $membership->categoryContent->name ?? '-' }}</p>
                                <a href="{{ route('detail_membership', $membership->id) }}"
                                    class="mt-2 inline-block bg-[#FEBA17] text-white text-sm px-4 py-2 rounded-md hover:opacity-90 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button
                    class="glider-prev-membership absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-10 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="glider-next-membership absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-10 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>

        {{-- Section: Buku --}}
        <section class="py-16 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Buku</h2>
                <p class="text-gray-500 text-sm">Karya Para Penulis Berdasarkan Kisah Hidup</p>
            </div>

            <div class="relative px-8">
                <div class="glider glider-book">
                    @foreach ($books as $book)
                        <div class="p-2 flex flex-col items-center">
                            <div
                                class="w-60 h-60 border border-gray-300 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $book->image_path) }}" alt="{{ $book->title }}"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="font-semibold text-lg">{{ $book->title }}</h3>
                                <p class="text-gray-500 text-sm">{{ $book->categoryContent->name ?? '-' }}</p>
                                <a href="{{ route('detail_book', $book->id) }}"
                                    class="mt-2 inline-block bg-[#FEBA17] text-white text-sm px-4 py-2 rounded-md hover:opacity-90 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button
                    class="glider-prev-book absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-10 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="glider-next-book absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-10 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>

        {{-- Section: Event --}}
        <section class="py-16 bg-white">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Event</h2>
                <p class="text-gray-500 text-sm">Karya Para Penulis Berdasarkan Kisah Hidup</p>
            </div>

            <div class="relative px-8">
                <div class="glider glider-event">
                    @foreach ($events as $event)
                        <div class="p-2 flex flex-col items-center">
                            <div
                                class="w-60 h-60 border border-gray-300 flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $event->image_path) }}" alt="{{ $event->title }}"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="font-semibold text-lg">{{ $event->title }}</h3>
                                <p class="text-gray-500 text-sm">{{ $event->categoryContent->name ?? '-' }}</p>
                                <a href="{{ route('detail_event', $event->id) }}"
                                    class="mt-2 inline-block bg-[#FEBA17] text-white text-sm px-4 py-2 rounded-md hover:opacity-90 transition">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button
                    class="glider-prev-event absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-10 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="glider-next-event absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-10 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>
    </div>

    <!-- Glider JS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

    <!-- Glider Init Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Glider(document.querySelector('.glider-membership'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                arrows: {
                    prev: '.glider-prev-membership',
                    next: '.glider-next-membership'
                },
                responsive: [{
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }
                ]
            });

            new Glider(document.querySelector('.glider-book'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                arrows: {
                    prev: '.glider-prev-book',
                    next: '.glider-next-book'
                },
                responsive: [{
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }
                ]
            });

            new Glider(document.querySelector('.glider-event'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                arrows: {
                    prev: '.glider-prev-event',
                    next: '.glider-next-event'
                },
                responsive: [{
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }
                ]
            });
        });
    </script>
</x-applayout>
