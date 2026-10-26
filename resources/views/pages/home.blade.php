@extends('layout.mainLayout')

@section('title', '2 Derajat | Kopi hangat untuk obrolan yang lebih dekat')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-[#FFE1C9]">
    <img src="{{ asset('Assets/Logo/icon.png') }}" alt="" aria-hidden="true"
        class="pointer-events-none absolute -left-16 top-8 w-[420px] max-w-none select-none opacity-[0.07]">

    <div class="relative mx-auto grid max-w-6xl gap-12 px-5 py-14 md:grid-cols-[1.15fr_.85fr] md:items-center md:py-24">
        <div>
            <h1 class="reveal font-display text-[3.25rem] font-semibold leading-[0.98] md:text-7xl">
                Kopi hangat untuk obrolan yang lebih dekat.
            </h1>
            <p class="reveal mt-6 max-w-lg text-lg leading-relaxed text-[#3A2312]/75" style="--d:100ms">
                Racikan kopi, makanan sederhana, dan tempat nyaman untuk berlama-lama bersama orang-orang tersayang.
            </p>
            <div class="reveal mt-9 flex flex-wrap gap-3" style="--d:200ms">
                <a href="{{ route('menu.index') }}" class="btn btn-primary">Lihat Menu Kami</a>
                <a href="{{ route('galleries.index') }}" class="btn btn-outline">Lihat Galeri</a>
            </div>
        </div>

        {{-- Vertical (9:16) video. Autoplay works only because it is muted. --}}
        <div class="reveal mx-auto w-full max-w-[300px] md:max-w-[340px]" style="--d:150ms">
            <div class="aspect-[9/16] overflow-hidden rounded-[2rem] bg-[#3A2312] shadow-2xl ring-8 ring-white/60">
                <video class="h-full w-full object-cover"
                    src="{{ asset('storage/' . $heroVideo) }}"
                    autoplay muted loop playsinline preload="metadata"
                    aria-label="Video 2 Derajat"></video>
            </div>
        </div>
    </div>
</section>

{{-- CERITA KAMI (all text below is placeholder: replace with your own story) --}}
<section class="bg-[#FFF6EE] py-20 md:py-28">
    <div class="mx-auto grid max-w-6xl items-center gap-14 px-5 md:grid-cols-2 md:gap-20">
        <div class="reveal relative mb-10 md:mb-0">
            <div class="aspect-[4/5] overflow-hidden rounded-3xl bg-[#D1AA89]">
                @if ($photos->isNotEmpty() && $photos->first()->image_url)
                    <img src="{{ $photos->first()->image_url }}" alt="{{ $photos->first()->title }}" loading="lazy" class="h-full w-full object-cover">
                @else
                    <div class="grid h-full w-full place-items-center">
                        <img src="{{ asset('storage/Assets/Logo/icon-white.png') }}" alt="" class="w-1/3">
                    </div>
                @endif
            </div>
            <p class="absolute -bottom-8 right-4 max-w-[17rem] rounded-2xl bg-[#915517] p-5 font-display text-xl font-semibold leading-snug text-white shadow-xl md:-right-8">
                “Your Usual Spot.<br>
                Your Usual People.”
            </p>
        </div>

        <div>
            <h2 class="reveal font-display text-5xl font-semibold leading-none md:text-6xl">Cerita Kami</h2>
            <p class="reveal mt-6 text-lg leading-relaxed text-[#3A2312]/80" style="--d:100ms">
                Ganti teks ini dengan cerita 2 Derajat: kapan kedai ini dibuka, dari mana ide namanya,
                dan apa yang membuat tempat ini terasa seperti rumah kedua bagi para pelanggan.
            </p>
            <p class="reveal mt-4 text-lg leading-relaxed text-[#3A2312]/80" style="--d:150ms">
                Tambahkan satu paragraf lagi tentang biji kopi pilihan, cara kalian meracik, atau
                hal kecil yang selalu dijaga dari hari pertama.
            </p>
            <div class="reveal mt-8" style="--d:200ms">
                <a href="{{ route('founders.index') }}" class="btn btn-outline">Kenali Orang di Baliknya</a>
            </div>
        </div>
    </div>
</section>

{{-- MENU FAVORIT --}}
@if ($menus->isNotEmpty())
<section class="bg-[#F7E3CB] py-20 md:py-24">
    <div class="mx-auto max-w-6xl px-5">
        <div class="reveal flex flex-wrap items-end justify-between gap-4">
            <div>
                <h2 class="font-display text-5xl font-semibold leading-none md:text-6xl">Menu Favorit</h2>
                <p class="mt-3 text-lg text-[#3A2312]/75">Racikan dan hidangan yang paling sering dipesan.</p>
            </div>
            <a href="{{ route('menu.index') }}" class="btn btn-outline">Lihat Semua Menu</a>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($menus as $menu)
                <article class="reveal lift overflow-hidden rounded-3xl bg-white ring-1 ring-[#915517]/10" style="--d:{{ $loop->index * 90 }}ms">
                    <div class="aspect-square bg-[#D1AA89]">
                        @if ($menu->image_url)
                            <img src="{{ $menu->image_url }}" alt="{{ $menu->name }}" loading="lazy" class="h-full w-full object-cover">
                        @else
                            <div class="grid h-full w-full place-items-center">
                                <img src="{{ asset('storage/Assets/Logo/icon-white.png') }}" alt="" class="w-1/4">
                            </div>
                        @endif
                    </div>
                    <div class="p-5">
                        <p class="text-sm font-medium text-[#915517]">{{ $categories[$menu->category] ?? '' }}</p>
                        <h3 class="mt-1 font-display text-2xl font-semibold leading-tight">{{ $menu->name }}</h3>
                        <p class="mt-2 line-clamp-2 text-sm leading-relaxed text-[#3A2312]/70">{{ $menu->description }}</p>
                        <p class="mt-4 text-lg font-semibold text-[#915517]">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- GALERI --}}
@if ($photos->isNotEmpty())
<section class="bg-[#FFF6EE] py-20 md:py-24">
    <div class="mx-auto max-w-6xl px-5">
        <div class="reveal flex flex-wrap items-end justify-between gap-4">
    <h2 class="font-display text-5xl font-semibold leading-none md:text-6xl flex items-center gap-3">
        <span class="text-[#915517]">Suasana di</span>
        <img src="{{ asset('storage/Assets/Logo/logo-horizontal.png') }}"
            alt="2 Derajat"
            class="h-[1.1em] w-auto inline-block align-middle">
    </h2>
    <a href="{{ route('galleries.index') }}" class="btn btn-outline">Lihat Semua Foto</a>
</div>

        <div class="mt-10 grid grid-cols-2 gap-3 md:grid-cols-4 md:grid-rows-2">
            @foreach ($photos as $photo)
                <a href="{{ route('galleries.index') }}"
                    style="--d:{{ $loop->index * 80 }}ms"
                    class="reveal group relative overflow-hidden rounded-2xl bg-[#D1AA89] {{ $loop->first ? 'col-span-2 row-span-2 aspect-square md:aspect-auto' : 'aspect-square' }}">
                    <img src="{{ $photo->image_url }}" alt="{{ $photo->title ?? 'Foto 2 Derajat' }}" loading="lazy"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- VIDEO --}}
@if (!empty($videos))
<section class="bg-[#F7E3CB] py-20 md:py-24">
    <div class="mx-auto max-w-6xl px-5">
        <h2 class="reveal font-display text-5xl font-semibold leading-none md:text-6xl">Lihat Lebih Dekat</h2>
        <div class="mt-10 flex flex-wrap gap-5">
            @foreach ($videos as $path)
                <div class="reveal lift aspect-[9/16] w-[calc(50%-0.625rem)] overflow-hidden rounded-3xl bg-[#3A2312] shadow-lg sm:w-56"
                     style="--d:{{ $loop->index * 100 }}ms">
                    <video class="h-full w-full object-cover"
                            src="{{ asset('storage/' . $path) }}"
                            controls playsinline preload="metadata"
                            aria-label="Video 2 Derajat {{ $loop->iteration }}"></video>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- TESTIMONI (carousel) --}}
@if ($testimonies->isNotEmpty())
<section class="bg-[#FFE1C9] py-20 md:py-24" aria-labelledby="testimoni-heading">
    <div class="mx-auto max-w-6xl px-5">
        <div class="reveal flex flex-wrap items-end justify-between gap-4">
            <h2 id="testimoni-heading" class="font-display text-5xl font-semibold leading-none md:text-6xl">Apa Kata Pelanggan</h2>
            <div class="flex items-center gap-2">
                <button id="t-prev" type="button" aria-label="Testimoni sebelumnya"
                        class="grid h-12 w-12 place-items-center rounded-full border-[1.5px] border-[#915517] text-[#915517] transition hover:bg-[#915517] hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button id="t-next" type="button" aria-label="Testimoni berikutnya"
                        class="grid h-12 w-12 place-items-center rounded-full border-[1.5px] border-[#915517] text-[#915517] transition hover:bg-[#915517] hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <div class="reveal" style="--d:100ms">
            <div id="t-track" tabindex="0" aria-label="Testimoni pelanggan"
                class="mt-10 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth pb-4 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                @foreach ($testimonies as $t)
                    <div class="w-[85%] shrink-0 snap-start md:w-[calc((100%-2.5rem)/3)]">
                        @include('partials.testimony-card', ['t' => $t])
                    </div>
                @endforeach
            </div>
        </div>

        <div class="reveal mt-6">
            <a href="{{ route('testimonies.index') }}" class="btn btn-outline">Baca Semua Testimoni</a>
        </div>
    </div>
</section>
@endif

{{-- CTA --}}
<section class="bg-[#915517] py-16 text-white md:py-20">
    <div class="reveal mx-auto max-w-3xl px-5 text-center">
        <h2 class="font-display text-4xl font-semibold leading-tight md:text-5xl">Sudah siap seruput kehangatan 2 Derajat hari ini?</h2>
        <p class="mt-4 text-lg text-white/85">Mampir langsung ke kedai kami dan temukan menu favoritmu.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <a href="{{ route('menu.index') }}" class="btn btn-light">Lihat Menu</a>
            <a href="#lokasi" class="btn btn-outline-light">Temukan Lokasi</a>
        </div>
    </div>
</section>

{{-- LOKASI (map, just before the footer) --}}
<section id="lokasi" class="scroll-mt-24 bg-[#FFF6EE] py-20 md:py-24">
    <div class="mx-auto max-w-6xl px-5">
        <h2 class="reveal font-display text-5xl font-semibold leading-none md:text-6xl">Temukan Kami</h2>

        <div class="mt-10 grid gap-8 lg:grid-cols-[.8fr_1.2fr]">
            {{-- PLACEHOLDERS: replace address and hours --}}
            <div class="reveal rounded-3xl bg-white p-8 ring-1 ring-[#915517]/10">
                <h3 class="font-display text-3xl font-semibold">2 Derajat Coffee</h3>

                <dl class="mt-6 space-y-5">
                    <div>
                        <dt class="text-sm font-medium text-[#915517]">Alamat</dt>
                        <dd class="mt-1 leading-relaxed">Jl. Raya Made No.Raya, Made, Kec. Sambikerep, Surabaya, Jawa Timur 60219</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-[#915517]">Jam buka</dt>
                        <dd class="mt-1 leading-relaxed">Setiap hari (Kecuali Minggu), 07.00 – 02.00 WIB</dd>
                    </div>
                </dl>

                <a href="https://www.google.com/maps/search/?api=1&query=-7.2768345,112.6370120"
                    target="_blank" rel="noopener" class="btn btn-primary mt-8">Buka di Google Maps</a>
            </div>

            <div class="reveal min-h-[360px] overflow-hidden rounded-3xl shadow-lg ring-1 ring-[#915517]/10" style="--d:120ms">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.8916551775231!2d112.6370120338444!3d-7.276834504721249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd00786bb8f7%3A0x7f359129920e35b4!2s2%20DERAJAT%20COFFEE!5e0!3m2!1sid!2sid!4v1792938245921!5m2!1sid!2sid"
                        title="Peta lokasi 2 Derajat Coffee"
                        class="h-full min-h-[360px] w-full" style="border:0;"
                        allowfullscreen loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    (function () {
        var track = document.getElementById('t-track');
        if (!track) return;

        var prev = document.getElementById('t-prev');
        var next = document.getElementById('t-next');

        function go(dir) {
            var atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 8;
            if (dir > 0 && atEnd) track.scrollTo({ left: 0 });
            else if (dir < 0 && track.scrollLeft <= 8) track.scrollTo({ left: track.scrollWidth });
            else track.scrollBy({ left: dir * track.clientWidth * 0.9 });
        }

        prev.addEventListener('click', function () { go(-1); });
        next.addEventListener('click', function () { go(1); });

        // Auto-advance; paused on hover/focus; skipped when the visitor prefers reduced motion
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var timer = setInterval(function () { go(1); }, 6000);
        function pause() { clearInterval(timer); }
        function resume() { pause(); timer = setInterval(function () { go(1); }, 6000); }
        ['mouseenter', 'focusin', 'touchstart'].forEach(function (e) { track.addEventListener(e, pause, { passive: true }); });
        ['mouseleave', 'focusout'].forEach(function (e) { track.addEventListener(e, resume); });
    })();
</script>
@endpush
