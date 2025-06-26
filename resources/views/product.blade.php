<x-applayout>
    <div wire:ignore>
        {{-- Section: Kelas Online --}}
        <section class="relative py-16 bg-white overflow-hidden">
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
                <h2 class="text-3xl font-bold">Kelas Online</h2>
                <p class="text-gray-500 text-sm">Membership Only</p>
            </div>

            <div class="relative px-8 z-10">
                <div class="glider glider-membership">
                    @foreach ($memberships as $membership)
                        <div class="p-2 flex flex-col items-center">
                            <div class="w-60 h-60 border border-gray-300 overflow-hidden rounded-lg shadow">
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
                    class="glider-prev-membership absolute left-0 top-1/2 -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-20 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="glider-next-membership absolute right-0 top-1/2 -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-20 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>

        {{-- Section: Buku --}}
        <section class="py-16 bg-gradient-to-br from-white via-indigo-50 to-indigo-100">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Buku</h2>
                <p class="text-gray-500 text-sm">Karya Para Penulis Berdasarkan Kisah Hidup</p>
            </div>

            <div class="relative px-8 z-10">
                <div class="glider glider-book">
                    @foreach ($books as $book)
                        <div class="p-2 flex flex-col items-center">
                            <div class="w-60 h-60 border border-gray-300 overflow-hidden rounded-lg shadow">
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
                    class="glider-prev-book absolute left-0 top-1/2 -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-20 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="glider-next-book absolute right-0 top-1/2 -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-20 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>

        {{-- Section: Event --}}
        <section class="relative py-16 bg-white overflow-hidden">
            <div class="absolute bottom-0 left-0 w-full -z-10">
                <svg viewBox="0 0 1440 320" class="w-full h-auto">
                    <path fill="#f472b6" fill-opacity="0.2"
                        d="M0,224L48,202.7C96,181,192,139,288,144C384,149,480,203,576,208C672,213,768,171,864,170.7C960,171,1056,213,1152,224C1248,235,1344,213,1392,202.7L1440,192L1440,320L0,320Z" />
                </svg>
            </div>

            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold">Event</h2>
                <p class="text-gray-500 text-sm">Karya Para Penulis Berdasarkan Kisah Hidup</p>
            </div>

            <div class="relative px-8 z-10">
                <div class="glider glider-event">
                    @foreach ($events as $event)
                        <div class="p-2 flex flex-col items-center">
                            <div class="w-60 h-60 border border-gray-300 overflow-hidden rounded-lg shadow">
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
                    class="glider-prev-event absolute left-0 top-1/2 -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-20 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="glider-next-event absolute right-0 top-1/2 -translate-y-1/2 bg-[#FEBA17] text-white p-2 rounded-full z-20 hover:bg-[#d89a00] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </section>
    </div>

    {{-- Glider CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

    {{-- Glider Init --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ['membership', 'book', 'event'].forEach(type => {
                new Glider(document.querySelector(`.glider-${type}`), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    arrows: {
                        prev: `.glider-prev-${type}`,
                        next: `.glider-next-${type}`,
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
        });
    </script>
</x-applayout>
