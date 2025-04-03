<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index(): View
    {
        // Get latest published articles for display on homepage
        $latestArticles = Article::published()
            ->orderBy('published_date', 'desc')
            ->take(5)
            ->get();
            
        // Get most read articles
        $popularArticles = Article::published()
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
            
        return view('pages.home', compact('latestArticles', 'popularArticles'));
    }
    
    /**
     * Display the aims and scope page
     */
    public function aimsScope(): View
    {
        return view('pages.aims-scope');
    }
    
    /**
     * Display the current issues page
     */
    public function current(): View
    {
        $currentIssueArticles = Article::published()
            ->orderBy('published_date', 'desc')
            ->take(10)
            ->get();
            
        return view('pages.current', compact('currentIssueArticles'));
    }
    
    /**
     * Display the archive page
     */
    public function archive(): View
    {
        // Group articles by volume and issue
        $archives = Article::published()
            ->orderBy('volume', 'desc')
            ->orderBy('issue', 'desc')
            ->get()
            ->groupBy('volume')
            ->map(function ($volume) {
                return $volume->groupBy('issue');
            });
            
        return view('pages.archive', compact('archives'));
    }
    
    /**
     * Display the contact page
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
