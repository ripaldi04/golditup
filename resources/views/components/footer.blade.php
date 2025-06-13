<footer class="w-full mt-12 flex flex-col pt-[70px] pb-[50px] px-10 lg:px-[100px] gap-[50px] bg-[#F5F8FA]">
    <div class="flex flex-col lg:flex-row  justify-between gap-16">
        <div class="flex flex-col gap-5 max-w-2xl">
            <a href="">
                <div>
                    {{-- @if ($course->logo == null)
                        <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" class="h-10">
                    @else
                        <img src="{{ Storage::url($course->logo) }}" alt="logo" class="h-10">
                    @endif --}}
                </div>
            </a>
            <p class="text-[#6D7786] leading-relaxed text-justify"><strong>Golditup.com</strong> hadir
                untuk memberikan solusi. Kami adalah wadah edukasi khusus yang dirancang untuk membantu Anda menguasai
                strategi pemasaran properti yang efektif dan terkini, tentunya tanpa ribet dan mudah, karena disampaikan
                oleh para praktisi yang sukses di bidang penjualan properti.</p>
        </div>

        <div class="flex flex-col gap-5">
            <p class="font-semibold text-lg">Menu</p>
            <ul class="flex flex-col gap-[14px]">
                <li>
                    <a href="/" class="text-[#6D7786]">Beranda</a>
                </li>
                <li>
                    <a href="/tentang-kami" class="text-[#6D7786]">Tentang Kami</a>
                </li>
                <li>
                    <a href="/acara" class="text-[#6D7786]">Acara</a>
                </li>
                <li>
                    <a href="/produk" class="text-[#6D7786]">Produk</a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col gap-5 max-w-md">
            <p class="font-semibold text-lg">Kontak</p>
            <div>
                {{-- <p class="text-[#6D7786]">{{ $course->address }}</p> --}}
                {{-- <p class="text-[#6D7786]">+{{ $course->phone }}</p> --}}
            </div>
        </div>
    </div>
    <div class="w-full h-[51px] flex items-end border-t border-[#E7EEF2]">
        <p class="mx-auto text-sm text-[#6D7786] -tracking-[2%]">All Rights Reserved Golditup.com 2025
        </p>
    </div>
</footer>
