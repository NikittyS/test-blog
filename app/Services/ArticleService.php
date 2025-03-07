<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    /**
     * Получить список статей (с пагинацией)
     */
    public function getPaginatedArticles(int $perPage = 5)
    {
        return Article::select('id', 'title', 'author', 'brief')
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    /**
     * Найти статью по id
     */
    public function getArticleById(int $id): ?Article
    {
        return Article::findOrFail($id);
    }

    /**
     * Создать новую статью
     */
    public function createArticle(array $data): Article
    {
        return Article::create($data);
    }
}
