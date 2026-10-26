@extends('layout.mainLayout')

@section('title', 'Orang di Balik 2 Derajat')
@section('description', 'Kenali orang-orang yang membangun 2 Derajat.')

@section('content')

@include('partials.page-header', [
    'title'    => 'Orang di Balik 2 Derajat',
    'subtitle' => 'Kenali orang-orang yang membangun 2 Derajat dari awal.',
])

<section class="mx-auto max-w-6xl space-y-20 px-5 py-16 md:space-y-28 md:py-24">
    @forelse ($founders as $founder)
        {{-- Odd rows: photo left, text right. Even rows: flipped. --}}
        <article class="reveal grid items-center gap-8 md:grid-cols-2 md:gap-16">
            <div class="mx-auto w-full max-w-sm md:max-w-none {{ $loop->even ? 'md:order-2' : 'md:order-1' }}">
                <div class="relative">
                    <div class="absolute inset-0 rounded-3xl bg-[#D1AA89] {{ $loop->even ? '-translate-x-3 translate-y-3' : 'translate-x-3 translate-y-3' }}"></div>
                    <div class="relative aspect-[4/5] overflow-hidden rounded-3xl bg-[#F7E3CB]">
                        @if ($founder->image_url)
                            <img src="{{ $founder->image_url }}" alt="{{ $founder->name }}" loading="lazy" class="h-full w-full object-cover">
                        @else
                            <div class="grid h-full w-full place-items-center bg-[#D1AA89]">
                                <img src="{{ asset('images/logo/icon-white.png') }}" alt="" class="w-1/3">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="{{ $loop->even ? 'md:order-1' : 'md:order-2' }}">
                <h2 class="font-display text-4xl font-semibold leading-none md:text-5xl">{{ $founder->name }}</h2>
                <p class="mt-5 whitespace-pre-line text-lg leading-relaxed text-[#3A2312]/80">{{ $founder->description }}</p>
            </div>
        </article>
    @empty
        <p class="text-[#3A2312]/60">Belum ada data. Tambahkan baris di tabel <code>founders</code>.</p>
    @endforelse
</section>

@endsection
