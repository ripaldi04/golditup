<x-applayout>
    <div class="text-center py-12 px-4">
        <h1 class="text-4xl font-bold mb-6">Gold It Up</h1>

        <p class="text-gray-600 max-w-4xl mx-auto mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
        </p>

        @php
            $images = ['gold1.jpg', 'gold2.jpg', 'gold3.jpg', 'gold1.jpg', 'gold2.jpg', 'gold3.jpg'];
            $chunks = array_chunk($images, 3);
        @endphp

        <!-- Setiap 3 gambar dalam 1 baris -->
        @foreach ($chunks as $chunk)
            <div class="flex justify-center gap-6 mb-6">
                @foreach ($chunk as $image)
                    <div class="w-80 h-80 bg-white border border-gray-300 rounded-xl shadow-sm overflow-hidden">
                        <img src="{{ asset('images/' . $image) }}" alt="Image" class="w-full h-full object-cover" />
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center py-12 px-4">
        <h1 class="text-4xl font-bold mb-12">Who are they</h1>

        <div class="max-w-6xl mx-auto space-y-20">
            <!-- Baris Pertama: 3 lingkaran -->
            <div class="flex justify-center gap-16 flex-wrap">
                @for ($i = 0; $i < 3; $i++)
                    <div
                        class="w-48 h-48 rounded-full border border-gray-300 shadow-md flex flex-col items-center justify-center text-center p-4">
                        <h2 class="font-bold mb-2">Heading</h2>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                @endfor
            </div>

            <!-- Baris Kedua: 2 lingkaran -->
            <div class="flex justify-center gap-16">
                @for ($i = 0; $i < 2; $i++)
                    <div
                        class="w-48 h-48 rounded-full border border-gray-300 shadow-md flex flex-col items-center justify-center text-center p-4">
                        <h2 class="font-bold mb-2">Heading</h2>
                        <p class="text-sm text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="text-center py-12 px-4">
        <h1 class="text-4xl font-bold mb-8">Our Feature Cards</h1>

        @php
            $cards = [
                ['image' => 'card1.jpg', 'title' => 'Title 1', 'desc' => 'Deskripsi singkat konten 1.'],
                ['image' => 'card2.jpg', 'title' => 'Title 2', 'desc' => 'Deskripsi singkat konten 2.'],
                ['image' => 'card3.jpg', 'title' => 'Title 3', 'desc' => 'Deskripsi singkat konten 3.'],
                ['image' => 'card4.jpg', 'title' => 'Title 4', 'desc' => 'Deskripsi singkat konten 4.'],
                ['image' => 'card5.jpg', 'title' => 'Title 5', 'desc' => 'Deskripsi singkat konten 5.'],
                ['image' => 'card6.jpg', 'title' => 'Title 6', 'desc' => 'Deskripsi singkat konten 6.'],
            ];

            $chunks = array_chunk($cards, 3); // 3 per baris
        @endphp

        <div class="max-w-7xl mx-auto space-y-10">
            @foreach ($chunks as $chunk)
                <div class="flex flex-wrap justify-center gap-6">
                    @foreach ($chunk as $card)
                        <div class="w-80 bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                            <img src="{{ asset('images/' . $card['image']) }}" alt="Image"
                                class="w-full h-40 object-cover" />
                            <div class="p-4 text-left">
                                <h2 class="text-lg font-bold mb-1">{{ $card['title'] }}</h2>
                                <p class="text-sm text-gray-600">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

</x-applayout>
