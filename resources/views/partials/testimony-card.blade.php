<figure class="flex h-full flex-col rounded-3xl bg-white p-7 shadow-sm ring-1 ring-[#915517]/10 {{ !empty($lift) ? 'lift' : '' }}">
    @include('partials.stars', ['rating' => $t->rating])

    <blockquote class="mt-4 flex-1 leading-relaxed text-[#3A2312]/85">
        {{ $t->comment }}
    </blockquote>

    <figcaption class="mt-6 flex items-center gap-3">
        @if ($t->image_url)
            <img src="{{ $t->image_url }}" alt="" loading="lazy" class="h-11 w-11 rounded-full object-cover">
        @else
            <span class="grid h-11 w-11 place-items-center rounded-full bg-[#915517]/10 font-semibold text-[#915517]">
                {{ mb_strtoupper(mb_substr($t->name, 0, 1)) }}
            </span>
        @endif
        <span class="font-medium">{{ $t->name }}</span>
    </figcaption>
</figure>
