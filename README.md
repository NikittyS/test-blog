## Laravel blog
Так как в задании не сказано про верстку, я не верстал.

## Запуск
composer install

php artisan migrate --seed

php artisan serve

## Описание

### Контроллер [ArticleController](/app/Http/Controllers/ArticleController.php)
Обрабатывает запросы, передает данные (пагинации, отдельная статья и создании статьи) в сервис [ArticleService](/app/Services/ArticleService.php) и возвращает данные, а также при создании статьи валидирует данные через [CreateArticleRequest](/app/Http/Requests/CreateArticleRequest.php). 


### Сервис [ArticleService](/app/Services/ArticleService.php) 
Cодержит основную логику для работы со статьями, такие как - получение списка с пагинацей, получение отдельной статьи и создание статьи. Использует модель [Article](/app/Models/Article.php).


### База данных
Миграция [create_articles_table](/database/migrations/2025_03_07_013058_create_articles_table.php). Наполнение базы происходит через [ArticlesSeed](/database/seeders/ArticlesSeed.php), использует фабрику [ArticleFactory](/database/factories/ArticleFactory.php).


## Маршруты [[Routes](/routes/web.php)]

### GET / 
    Возвращает основную страницу со статьями и пагинацией
View - [index.blade](/resources/views/index.blade.php)

### GET /article/{article}
    Возвращает страницу со статьей
View - [article.blade](/resources/views/article.blade.php)

### GET /article/new
    Возвращает страницу с формой для создания статьи
View - [create_article.blade](/resources/views/create_article.blade.php)

### POST /article/new
    Передает данные с формы в контроллер ArticleController


## Задание 

Создать блог на Laravel.

1. Основной сущностью является статья (article). Свойства статьи:
- Заголовок (обязательное, не более 255 символов)
- Автор (не более 100 символов, может быть пустым)
- Бриф (обязательно, не более 500 символов)
- Полный текст (обязательное)
- Дата создания (обязательное)

2. На главной странице выводится постраничный список статей (название, автор и бриф), с каждой статьи есть ссылка на полную версию статьи. На одну страницу выводим не более 5 статей, более новые статьи выводятся первыми.
3. По урл /article/{article} выводим соответствующую статью в полном виде (название, автор, полный текст статьи)
4. По урл /new доступна форма для добавления новой статьи. В случае ошибки при добавлении статьи вывести форму с сохранением заполненных данных и списком ошибок
5. Можно использовать любые js и css библиотеки и фреймворки при необходимости

Требования к реализации

- Валидация запросов при добавлении статьи
- Разделение приложения на слои (сервисный слой, слой базы и тд)
- Создание базы и наполнение с использованием стандартных инструментов Laravel

Стек для выполнения задачи
- php 8.0 и выше
- laravel 10 и выше
- mysql / mariadb
- Docker (по желанию)
