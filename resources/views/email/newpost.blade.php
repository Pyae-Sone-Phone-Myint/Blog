<h1>Hello {{ $receiver }}</h1>
<p>Here is new post "{{ $article->title }}" from {{ $article->user->name }}</p>

<a href="{{ route('detail', $article->slug) }}">
    More Detail
</a>
