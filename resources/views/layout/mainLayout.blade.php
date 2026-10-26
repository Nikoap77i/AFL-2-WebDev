<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', '2 Derajat')</title>
    <meta name="description" content="@yield('description', '2 Derajat, kedai kopi dengan racikan hangat dan tempat nyaman untuk berlama-lama.')">
    <link rel="icon" type="image/png" href="{{ asset('Assets/Logo/icon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

    <script>document.documentElement.classList.add('js');</script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /*
         * Palette taken from the logo files:
         *  peach #FFE1C9 | cream #F7E3CB | tan #D1AA89 | caramel #915517 | espresso #3A2312 (text, footer)
         */
        body { font-family: 'Jost', ui-sans-serif, system-ui, sans-serif; }
        .font-display { font-family: 'Cormorant Garamond', Georgia, serif; }
        :focus-visible { outline: 2px solid #915517; outline-offset: 3px; }

        /* Buttons: colour and position change on hover */
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 9999px; padding: .8rem 1.7rem; font-weight: 500; line-height: 1.2;
            transition: background-color .25s ease, color .25s ease, border-color .25s ease,
                        transform .25s ease, box-shadow .25s ease;
        }
        .btn:hover { transform: translateY(-2px); }
        .btn-primary { background: #915517; color: #fff; border: 1.5px solid #915517; }
        .btn-primary:hover { background: #3A2312; border-color: #3A2312; box-shadow: 0 12px 22px -10px rgba(58,35,18,.55); }
        .btn-outline { color: #915517; border: 1.5px solid #915517; }
        .btn-outline:hover { background: #915517; color: #fff; }
        .btn-light { background: #FFE1C9; color: #3A2312; border: 1.5px solid #FFE1C9; }
        .btn-light:hover { background: #fff; border-color: #fff; box-shadow: 0 12px 22px -10px rgba(0,0,0,.4); }
        .btn-outline-light { color: #fff; border: 1.5px solid rgba(255,255,255,.7); }
        .btn-outline-light:hover { background: #fff; color: #915517; border-color: #fff; }

        /* Cards lift on hover */
        .lift { transition: transform .3s ease, box-shadow .3s ease; }
        .lift:hover { transform: translateY(-6px); box-shadow: 0 22px 32px -18px rgba(58,35,18,.45); }

        /* Fade in on scroll (only hidden when JS is running) */
        .js .reveal {
            opacity: 0; transform: translateY(26px);
            transition: opacity .7s ease, transform .7s ease; transition-delay: var(--d, 0ms);
        }
        .js .reveal.is-visible { opacity: 1; transform: none; }

        @media (prefers-reduced-motion: reduce) {
            .js .reveal { opacity: 1; transform: none; transition: none; }
            .btn:hover, .lift:hover { transform: none; }
            html { scroll-behavior: auto !important; }
        }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-[#FFF6EE] text-[#3A2312] antialiased">
    <a href="#content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-white focus:px-3 focus:py-2">Lewati ke konten</a>

    @include('partials.navbar')

    <main id="content">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        (function () {
            var els = document.querySelectorAll('.reveal');
            if (!('IntersectionObserver' in window)) {
                els.forEach(function (e) { e.classList.add('is-visible'); });
                return;
            }
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (en) {
                    if (en.isIntersecting) { en.target.classList.add('is-visible'); io.unobserve(en.target); }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
            els.forEach(function (e) { io.observe(e); });
        })();
    </script>

    @stack('scripts')
</body>
</html>
