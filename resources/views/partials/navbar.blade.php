@php
    $links = [
        ['route' => 'home',              'label' => 'Beranda',           'match' => 'home'],
        ['route' => 'menu.index',        'label' => 'Menu',              'match' => 'menu.*'],
        ['route' => 'testimonies.index', 'label' => 'Testimoni',         'match' => 'testimonies.*'],
        ['route' => 'galleries.index',   'label' => 'Galeri',            'match' => 'galleries.*'],
        ['route' => 'founders.index',    'label' => 'Di Balik 2 Derajat', 'match' => 'founders.*'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-[#915517]/15 bg-[#FFF6EE]/95 shadow-sm backdrop-blur">
    <nav class="mx-auto flex h-[72px] max-w-6xl items-center justify-between px-5" aria-label="Utama">
        <a href="{{ route('home') }}" aria-label="2 Derajat, ke beranda">
            <img src="{{ asset('storage/Assets/Logo/logo-horizontal.png') }}" alt="2 Derajat" class="h-14 w-auto">
        </a>

        <ul class="hidden items-center gap-7 lg:flex">
            @foreach ($links as $link)
                <li>
                    <a href="{{ route($link['route']) }}"
                        @if (request()->routeIs($link['match'])) aria-current="page" @endif
                        class="border-b-2 pb-0.5 text-[15px] font-medium transition-colors hover:text-[#915517]
                            {{ request()->routeIs($link['match']) ? 'border-[#915517] text-[#915517]' : 'border-transparent' }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('menu.index') }}" class="btn btn-primary hidden !py-2.5 lg:inline-flex">Lihat Menu</a>

        <button id="nav-toggle" type="button" class="rounded-lg p-2 lg:hidden" aria-expanded="false" aria-controls="nav-menu" aria-label="Buka menu">
            <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
        </button>
    </nav>

    <div id="nav-menu" class="hidden border-t border-[#915517]/15 px-5 pb-5 lg:hidden">
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ route($link['route']) }}"
                        class="block py-3 text-base font-medium {{ request()->routeIs($link['match']) ? 'text-[#915517]' : '' }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('menu.index') }}" class="btn btn-primary mt-2 w-full">Lihat Menu</a>
    </div>
</header>

<script>
    (function () {
        var btn = document.getElementById('nav-toggle');
        var menu = document.getElementById('nav-menu');
        btn.addEventListener('click', function () {
            var open = menu.classList.toggle('hidden') === false;
            btn.setAttribute('aria-expanded', open);
            btn.setAttribute('aria-label', open ? 'Tutup menu' : 'Buka menu');
        });
    })();
</script>
