<footer class="bg-[#3A2312] text-[#F7E3CB]/85">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 py-16 md:grid-cols-[1.3fr_1fr_1fr]">
        <div>
            <img src="{{ asset('storage/Assets/Logo/logo-horizontal-white.png') }}" alt="2 Derajat" class="h-16 w-auto">
            <p class="mt-5 max-w-xs text-sm leading-relaxed">
                Kedai kopi dengan racikan hangat dan suasana yang bikin betah berlama-lama.
            </p>
        </div>

        <div>
            <h2 class="font-display text-2xl font-semibold text-white">Jelajahi</h2>
            <ul class="mt-4 space-y-2.5 text-sm">
                <li><a class="transition hover:text-white" href="{{ route('menu.index') }}">Menu</a></li>
                <li><a class="transition hover:text-white" href="{{ route('testimonies.index') }}">Testimoni</a></li>
                <li><a class="transition hover:text-white" href="{{ route('galleries.index') }}">Galeri</a></li>
                <li><a class="transition hover:text-white" href="{{ route('founders.index') }}">Di Balik 2 Derajat</a></li>
                <li><a class="transition hover:text-white" href="{{ route('home') }}#lokasi">Lokasi</a></li>
            </ul>
        </div>

        <div>
            <h2 class="font-display text-2xl font-semibold text-white">Hubungi Kami</h2>
            {{-- PLACEHOLDERS: replace with your real details --}}
            <ul class="mt-4 space-y-2.5 text-sm">
                <li><a href="https://maps.app.goo.gl/NGbH7qSinhq1yUcJ9" target="_blank" class="transition hover:text-white">Jl. Raya Made No.Raya, Made, Kec. Sambikerep, Surabaya, Jawa Timur 60219</a></li>
                <li><a href="https://wa.me/6282135006530" target="_blank" class="transition hover:text-white">+62 821-3500-6530</a></li>
                <li>Setiap hari (Kecuali Minggu), 07.00 – 02.00 WIB</li>
                <li><a class="transition hover:text-white" href="https://www.instagram.com/2derajatcoffee/" target="_blank">Instagram: @2derajatcoffee</a></li>
                <li><a class="transition hover:text-white" href="https://www.tiktok.com/@2.derajat.coffee" target="_blank">Tiktok: 2.derajat.coffee</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10 py-5 text-center text-xs text-[#F7E3CB]/60">
        &copy; {{ date('Y') }} 2 Derajat. Seluruh hak cipta dilindungi.
    </div>
</footer>
