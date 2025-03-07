<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog - {{ $article->title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <h3><a href="{{ route('index') }}">Назад</a></h3>
    <br /><br />
    <h1>{{ $article->title }}</h1>
    <br /> <br />
    <p>Автор: {{ $article->author ?? 'Аноним' }}</p>
    <br />
    <p>{{ $article->content }}</p>
</body>

</html>
