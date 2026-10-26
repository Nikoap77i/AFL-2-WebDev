@extends('layout.mainLayout')

@section('title', 'Menu | 2 Derajat')
@section('description', 'Makanan, minuman, dan tambahan di 2 Derajat.')

@section('content')

@include('partials.page-header', [
    'title'    => 'Menu',
    'subtitle' => 'Makanan, minuman, dan tambahan yang bikin pesananmu makin pas.',
])

{{-- Category jump links --}}
{{-- Category jump links --}}
<div class="sticky top-[72px] z-30 border-b border-[#915517]/20 bg-[#D1AA89]">
    <nav class="mx-auto flex max-w-6xl gap-2 overflow-x-auto px-5 py-3 [scrollbar-width:none]" aria-label="Kategori menu">
        @foreach ($categories as $key => $label)
            <a href="#{{ $key }}"
                class="btn btn-primary shrink-0 !px-5 !py-2.5 text-sm focus-visible:outline-[#3A2312]">
                {{ $label }}
            </a>
        @endforeach
    </nav>
</div>

<div class="mx-auto max-w-6xl space-y-20 px-5 py-16">
    @foreach ($categories as $key => $label)
        @php
            $items   = $menus->get($key, collect());
            $isAddon = str_starts_with($key, 'addon');
        @endphp

        <section id="{{ $key }}" class="scroll-mt-40" aria-labelledby="{{ $key }}-title">
            <h2 id="{{ $key }}-title" class="reveal font-display text-4xl font-semibold leading-none md:text-5xl">{{ $label }}</h2>

            @if ($items->isEmpty())
                <p class="mt-5 text-[#3A2312]/60">Belum ada menu di kategori ini.</p>

            @elseif ($isAddon)
                <ul class="reveal mt-8 grid gap-x-14 md:grid-cols-2">
                    @foreach ($items as $item)
                        <li class="flex items-baseline justify-between gap-4 border-b border-[#915517]/20 py-4">
                            <div>
                                <p class="font-medium">{{ $item->name }}</p>
                                @if ($item->description)
                                    <p class="text-sm text-[#3A2312]/65">{{ $item->description }}</p>
                                @endif
                            </div>
                            <p class="shrink-0 font-semibold tabular-nums text-[#915517]">+ Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        </li>
                    @endforeach
                </ul>

            @else
                <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($items as $item)
                        <article class="reveal lift overflow-hidden rounded-3xl bg-white ring-1 ring-[#915517]/10"
                                 style="--d:{{ ($loop->index % 3) * 90 }}ms">
                            <div class="aspect-[4/3] bg-[#D1AA89]">
                                @if ($item->image_url)
                                    <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" class="h-full w-full object-cover">
                                @else
                                    <div class="grid h-full w-full place-items-center">
                                        <img src="{{ asset('images/logo/icon-white.png') }}" alt="" class="w-1/6">
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="font-display text-2xl font-semibold leading-tight">{{ $item->name }}</h3>
                                @if ($item->description)
                                    <p class="mt-2 text-sm leading-relaxed text-[#3A2312]/70">{{ $item->description }}</p>
                                @endif
                                <p class="mt-4 text-lg font-semibold tabular-nums text-[#915517]">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </section>
    @endforeach
</div>

@endsection
