@extends('layouts.master')


@section('content')
    <div class="d-flex mb-lg-4">
        @if ($article->thumbnail)
            <img class=" me-2 rounded " width="80" src="{{ asset(Storage::url($article->thumbnail)) }}" alt="">
        @else
            <img class=" me-2 rounded " width="80"
                src="https://raw.githubusercontent.com/julien-gargot/images-placeholder/master/placeholder-square.png"
                alt="">
        @endif
        <div class="">
            <h3 class=" mb-2">
                <a href="" class=" text-decoration-none text-dark mb-0">
                    {{ $article->title }}
                </a>
            </h3>
            <div class=" mb-4">
                <span class=" badge bg-dark">{{ $article->category->title ?? 'Unknown' }}</span>
                <span class=" badge bg-dark">{{ $article->created_at->format('d M Y') }}</span>
                <span class=" badge bg-dark">{{ $article->user->name }}</span>
                @foreach ($article->tags->pluck('title')->toArray() as $tag)
                    <span class=" badge bg-dark">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>
    <div class=" mb-3">
        {{ $article->description }}
    </div>

    @foreach ($article->photos as $photo)
        <a class="venobox" data-gall="aa" data-maxwidth="600px" href="{{ asset(Storage::url($photo->address)) }}">
            <img src="{{ asset(Storage::url($photo->address)) }}" alt="image alt" />
        </a>
    @endforeach

    @include('layouts.comment')
@endsection

@push('script')
    @vite(['resources/js/venobox.js'])
@endpush
