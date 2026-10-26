@extends('layout.mainLayout')

@section('title', 'Galeri | 2 Derajat')

@section('content')

@include('partials.page-header', [
    'title'    => 'Galeri',
    'subtitle' => 'Suasana kedai, kopi, dan makanan di 2 Derajat.',
])

<section class="mx-auto max-w-6xl px-5 py-16">
    @if ($galleries->isEmpty())
        <p class="text-[#3A2312]/60">Belum ada foto.</p>
    @else
        <div class="columns-2 gap-4 md:columns-3 lg:columns-4">
            @foreach ($galleries as $g)
                <button type="button"
                        data-lightbox="{{ $g->image_url }}"
                        data-caption="{{ $g->title }}"
                        class="reveal group mb-4 block w-full break-inside-avoid overflow-hidden rounded-2xl bg-[#D1AA89]">
                    <img src="{{ $g->image_url }}" alt="{{ $g->title ?? 'Foto galeri' }}" loading="lazy"
                        class="w-full transition duration-500 group-hover:scale-105">
                </button>
            @endforeach
        </div>

        <div class="mt-8">{{ $galleries->links() }}</div>
    @endif
</section>

{{-- Lightbox --}}
<dialog id="lightbox" class="m-auto max-h-[92vh] max-w-[92vw] bg-transparent p-0 backdrop:bg-[#3A2312]/90">
    <figure class="relative">
        <img id="lightbox-img" src="" alt="" class="max-h-[85vh] max-w-full rounded-2xl object-contain">
        <figcaption id="lightbox-caption" class="mt-3 text-center text-sm text-white"></figcaption>
        <button id="lightbox-close" type="button" aria-label="Tutup foto"
                class="absolute right-2 top-2 grid h-10 w-10 place-items-center rounded-full bg-[#3A2312]/70 text-xl text-white transition hover:bg-[#915517]">&times;</button>
    </figure>
</dialog>

@endsection

@push('scripts')
<script>
    (function () {
        var dialog = document.getElementById('lightbox');
        var img = document.getElementById('lightbox-img');
        var cap = document.getElementById('lightbox-caption');

        document.querySelectorAll('[data-lightbox]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                img.src = btn.dataset.lightbox;
                img.alt = btn.dataset.caption || 'Foto galeri';
                cap.textContent = btn.dataset.caption || '';
                dialog.showModal();
            });
        });

        document.getElementById('lightbox-close').addEventListener('click', function () { dialog.close(); });
        dialog.addEventListener('click', function (e) { if (e.target === dialog) dialog.close(); });
    })();
</script>
@endpush
