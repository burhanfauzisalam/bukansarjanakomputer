<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->latest('published_at')
            ->paginate(6);

        return view('blog.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $relatedArticles = Article::query()
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(5)
            ->get();

        return view('blog.show', compact('article', 'relatedArticles'));
    }
}
