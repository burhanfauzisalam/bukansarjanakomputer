<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function latest()
    {
        $article = Article::query()
            ->latest('published_at')
            ->latest('id')
            ->first();

        if (! $article) {
            return response()->json([
                'message' => 'No articles found.',
            ], 404);
        }

        return response()->json([
            'data' => $article,
        ], 200);
    }

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

    protected function defaultImageForCategory(string $category): string
    {
        $map = [
            'Web Development' => '/assets/img/blog/article-1.svg',
            'Automation' => '/assets/img/blog/article-2.svg',
            'DevOps' => '/assets/img/blog/article-3.svg',
            'IoT' => '/assets/img/blog/article-4.svg',
            'SEO' => '/assets/img/blog/seo.svg',
        ];

        return $map[$category] ?? '/assets/img/blog/article-1.svg';
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:articles,slug'],
            'category' => ['nullable', 'string', 'max:100'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
        ]);

        $slug = $validated['slug'] ?? Str::slug($validated['title']);

        $baseSlug = $slug;
        $suffix = 1;

        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$suffix;
            $suffix++;
        }

        $validated['slug'] = $slug;
        $validated['category'] = $validated['category'] ?? 'Umum';

        if (empty($validated['image'])) {
            $validated['image'] = $this->defaultImageForCategory($validated['category']);
        }

        $article = Article::create($validated);

        return response()->json([
            'message' => 'Article created successfully.',
            'data' => $article,
        ], 201);
    }
}
