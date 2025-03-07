<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    @if (session('success'))
        <h2>
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </h2><br /><br />
    @endif

    <h3><a href="{{ route('article.create.view') }}">Создать статью</a></h3>
    <br /><br />
    <h1>Статьи</h1>
    <br />
    @foreach ($articles as $article)
        <h2>{{ $article->title }}</h2>
        <p>Автор: {{ $article->author ?? 'Аноним' }}</p>
        <p>{{ $article->brief }}</p>
        <br />
        <a href="{{ route('article.show', $article->id) }}">Читать далее</a>
        <hr>
    @endforeach

    {{ $articles->links() }}
</body>

</html>
