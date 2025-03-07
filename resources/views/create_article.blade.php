<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog Create</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <h3><a href="{{ route('index') }}">Назад</a></h3>
    <br /><br />
    <h1>Добавить статью</h1>
    <br /><br />
    <!-- Проверка на ошибки-->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br /><br />
    <!-- Форма -->
    <form action="{{ route('article.create') }}" method="POST">
        @csrf

        <div>
            <label for="title">Заголовок</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required maxlength="255">
        </div>

        <div>
            <label for="author">Автор</label>
            <input type="text" id="author" name="author" value="{{ old('author') }}" maxlength="100">
        </div>

        <div>
            <label for="brief">Бриф</label>
            <textarea id="brief" name="brief" required maxlength="500">{{ old('brief') }}</textarea>
        </div>

        <div>
            <label for="content">Полный текст</label>
            <textarea id="content" name="content" required>{{ old('content') }}</textarea>
        </div>

        <button type="submit">Создать статью</button>
    </form>
</body>

</html>
