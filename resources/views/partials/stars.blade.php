@if (!empty($rating))
    <p class="{{ $class ?? 'text-[#915517]' }} text-lg leading-none tracking-wide" aria-label="{{ $rating }} dari 5 bintang">
        @for ($i = 1; $i <= 5; $i++)
            <span aria-hidden="true">{{ $i <= $rating ? '★' : '☆' }}</span>
        @endfor
    </p>
@endif
