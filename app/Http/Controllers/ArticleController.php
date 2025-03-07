<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use App\Http\Requests\CreateArticleRequest;

class ArticleController extends Controller
{
    private ArticleService $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        $articles = $this->articleService->getPaginatedArticles();
        return view('index', compact('articles'));
    }

    public function show($id) {
        $article = $this->articleService->getArticleById($id);
        return view('article', compact('article'));
    }

    public function create(CreateArticleRequest $request)
    {
        $this->articleService->createArticle($request->validated());
        return redirect('/')->with('success', 'Статья добавлена!');
    }
}
