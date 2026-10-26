<section class="relative overflow-hidden bg-[#FFE1C9]">
    <img src="{{ asset('storage/Assets/Logo/icon.png') }}" alt="" aria-hidden="true"
        class="pointer-events-none absolute -right-6 top-1/2 hidden w-56 max-w-none -translate-y-1/2 select-none opacity-[0.08] md:block">
    <div class="relative mx-auto max-w-6xl px-5 py-14 md:py-20">
        <h1 class="reveal font-display text-5xl font-semibold leading-none md:text-6xl">{{ $title }}</h1>
        @if (!empty($subtitle))
            <p class="reveal mt-4 max-w-xl text-lg leading-relaxed text-[#3A2312]/75" style="--d:100ms">{{ $subtitle }}</p>
        @endif
    </div>
</section>
