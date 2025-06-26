<x-applayout>
    {{-- SECTION 1 --}}
    <div class="relative text-center py-12 px-4 bg-gradient-to-b from-white to-gray-100 overflow-hidden">
        {{-- Decorative Circle --}}
        <div class="absolute -top-10 -left-10 w-48 h-48 bg-blue-100 rounded-full opacity-30 z-0"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-pink-100 rounded-full opacity-20 z-0"></div>

        <div class="relative z-10">
            <h1 class="text-4xl font-bold mb-6">{{ $aboutus->header1 }}</h1>

            <p class="text-gray-600 max-w-4xl mx-auto mb-6 text-sm sm:text-base">
                {{ $aboutus->deskripsi1 }}
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center">
                @foreach ($images as $image)
                    <div
                        class="w-full sm:w-80 h-64 sm:h-80 bg-white border border-gray-300 rounded-xl shadow-sm overflow-hidden">
                        <img src="{{ asset('storage/' . $image) }}" alt="Image {{ $loop->iteration }}"
                            class="w-full h-full object-cover" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div class="relative text-center py-12 px-4 bg-white overflow-hidden">
        {{-- Abstract shape SVG background --}}
        <svg class="absolute top-0 left-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#e0e0e0" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>

        <div class="relative z-10">
            <h1 class="text-4xl font-bold mb-12">{{ $aboutus->header2 }}</h1>

            <div class="max-w-6xl mx-auto space-y-16">
                <div class="flex flex-wrap justify-center gap-8">
                    @foreach (array_slice($points, 0, 3) as $point)
                        <div class="w-48 h-48 rounded-full border border-gray-300 shadow-md flex flex-col items-center justify-center text-center p-4 backdrop-blur-md bg-white/70"
                            style="background-image: url('{{ asset('storage/' . ($point['background'] ?? 'default.jpg')) }}'); background-size: cover; background-position: center;">
                            <h2 class="font-bold mb-2 text-base sm:text-lg">{{ $point['header'] ?? 'Heading' }}</h2>
                            <p class="text-sm text-gray-600">{{ $point['deskripsi'] ?? 'Deskripsi kosong.' }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap justify-center gap-8">
                    @foreach (array_slice($points, 3, 2) as $point)
                        <div class="w-48 h-48 rounded-full border border-gray-300 shadow-md flex flex-col items-center justify-center text-center p-4 backdrop-blur-md bg-white/70"
                            style="background-image: url('{{ asset('storage/' . ($point['background'] ?? 'default.jpg')) }}'); background-size: cover; background-position: center;">
                            <h2 class="font-bold mb-2 text-base sm:text-lg">{{ $point['header'] ?? 'Heading' }}</h2>
                            <p class="text-sm text-gray-600">{{ $point['deskripsi'] ?? 'Deskripsi kosong.' }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 3 --}}
    <div class="relative text-center py-12 px-4 bg-gradient-to-br from-gray-100 via-white to-gray-200 overflow-hidden">
        {{-- Wavy background SVG --}}
        <svg class="absolute bottom-0 left-0 w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e5e7eb" fill-opacity="0.4"
                d="M0,160L48,154.7C96,149,192,139,288,138.7C384,139,480,149,576,165.3C672,181,768,203,864,213.3C960,224,1056,224,1152,213.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

        <div class="relative z-10">
            <h1 class="text-4xl font-bold mb-8">{{ $aboutus->header3 }}</h1>

            <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-6">
                @foreach ($cards as $card)
                    <div
                        class="w-full sm:w-80 bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow">
                        <img src="{{ asset('storage/' . $card['image']) }}" alt="Image"
                            class="w-full h-40 object-cover" />
                        <div class="p-4 text-left">
                            <h2 class="text-lg font-bold mb-1">{{ $card['title'] }}</h2>
                            <p class="text-sm text-gray-600">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-applayout>
