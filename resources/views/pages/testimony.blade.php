@extends('layout.mainLayout')

@section('title', 'Testimoni | 2 Derajat')

@section('content')

@include('partials.page-header', [
    'title'    => 'Testimoni',
    'subtitle' => 'Cerita dan kesan dari para pelanggan 2 Derajat.',
])

<section class="mx-auto max-w-6xl px-5 py-16">
    @if ($testimonies->isEmpty())
        <p class="text-[#3A2312]/60">Belum ada testimoni.</p>
    @else
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($testimonies as $t)
                <div class="reveal" style="--d:{{ ($loop->index % 3) * 90 }}ms">
                    @include('partials.testimony-card', ['t' => $t, 'lift' => true])
                </div>
            @endforeach
        </div>
    @endif
</section>

@endsection
