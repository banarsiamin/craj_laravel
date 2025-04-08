<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of articles
     */
    public function index(): View
    {
        $articles = Article::published()
            ->orderBy('published_date', 'desc')
            ->paginate(10);
            
        return view('pages.articles.index', compact('articles'));
    }

    /**
     * Show the form for submitting a new article
     */
    public function create(): View
    {
        return view('pages.submit-article');
    }

    /**
     * Store a newly submitted article
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'affiliation' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'keywords' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'manuscript' => 'required|file|mimes:pdf|max:10240', // Max 10MB
            'cover_letter' => 'nullable|file|mimes:pdf|max:5120', // Max 5MB
            'declaration' => 'required|accepted',
            'consent' => 'required|accepted',
        ]);

        // Store manuscript file
        $manuscriptPath = $request->file('manuscript')->store('manuscripts', 'public');
        
        // Store cover letter if provided
        $coverLetterPath = null;
        if ($request->hasFile('cover_letter')) {
            $coverLetterPath = $request->file('cover_letter')->store('cover_letters', 'public');
        }

        // Create article
        Article::create([
            'author_name' => $validated['author_name'],
            'email' => $validated['email'],
            'affiliation' => $validated['affiliation'],
            'country' => $validated['country'],
            'title' => $validated['title'],
            'abstract' => $validated['abstract'],
            'keywords' => $validated['keywords'],
            'category' => $validated['category'],
            'manuscript_path' => $manuscriptPath,
            'cover_letter_path' => $coverLetterPath,
        ]);

        return redirect()->back()->with('success', 'Your article has been submitted successfully and is under review.');
    }

    /**
     * Display the specified article
     */
    public function show(Article $article, Request $request): View
    {
        // Record view with IP address tracking
        $article->recordView($request->ip(), $request->userAgent());
        
        // Get popular articles for sidebar
        $popularArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();
            
        return view('pages.article-detail', compact('article', 'popularArticles'));
    }

    /**
     * Like the specified article
     */
    public function like(Article $article)
    {
        // Increment the like count
        $article->incrementLikes();
        
        return response()->json([
            'success' => true,
            'likes' => $article->likes
        ]);
    }

    /**
     * Show just the abstract for an article
     */
    public function showAbstract(Article $article)
    {
        return response()->json([
            'success' => true,
            'abstract' => $article->abstract
        ]);
    }
}
