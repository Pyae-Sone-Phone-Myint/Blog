<h1>Hello {{ $article->user->name }}</h1>

<p>{{ $userName }} commented on your post {{ $article->title }}</p>

<a href="{{ route('detail', $article->slug) }}">
    Read Detail
</a>
