<x-applayout>
    <div class="text-center py-12 px-4">
        <h1 class="text-4xl font-bold mb-6">{{ $aboutus->header1 }}</h1>

        <p class="text-gray-600 max-w-4xl mx-auto mb-6 text-sm sm:text-base">
            {{ $aboutus->deskripsi1 }}
        </p>

        <!-- Responsive grid: 1 kolom di mobile, 2 di tablet, 3 di desktop -->
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


    <div class="text-center py-12 px-4">
        <h1 class="text-4xl font-bold mb-12">{{ $aboutus->header2 }}</h1>

        <div class="max-w-6xl mx-auto space-y-16">
            <!-- Baris Pertama: 3 lingkaran -->
            <div class="flex flex-wrap justify-center gap-8">
                @foreach (array_slice($points, 0, 3) as $point)
                    <div class="w-48 sm:w-48 h-48 rounded-full border border-gray-300 shadow-md flex flex-col items-center justify-center text-center p-4"
                        style="background-image: url('{{ asset('storage/' . ($point['background'] ?? 'default.jpg')) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <h2 class="font-bold mb-2 text-base sm:text-lg">{{ $point['header'] ?? 'Heading' }}</h2>
                        <p class="text-sm text-gray-600">
                            {{ $point['deskripsi'] ?? 'Deskripsi kosong.' }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- Baris Kedua: 2 lingkaran -->
            <div class="flex flex-wrap justify-center gap-8">
                @foreach (array_slice($points, 3, 2) as $point)
                    <div class="w-48 sm:w-48 h-48 rounded-full border border-gray-300 shadow-md flex flex-col items-center justify-center text-center p-4"
                        style="background-image: url('{{ asset('storage/' . ($point['background'] ?? 'default.jpg')) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <h2 class="font-bold
                        mb-2 text-base sm:text-lg">
                            {{ $point['header'] ?? 'Heading' }}</h2>
                        <p class="text-sm text-gray-600">
                            {{ $point['deskripsi'] ?? 'Deskripsi kosong.' }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>


    <div class="text-center py-12 px-4">
        <h1 class="text-4xl font-bold mb-8">{{ $aboutus->header3 }}</h1>

        <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-6">
            @foreach ($cards as $card)
                <div class="w-full sm:w-80 bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
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
</x-applayout>
