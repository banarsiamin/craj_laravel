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
        $description = \App\Models\Setting::getValue('journal_description');
        $openAccessPolicy = \App\Models\Setting::getValue('open_access_policy');
        $editorialPolicies = \App\Models\Setting::getValue('editorial_policies');
        
        // Get current issue
        $currentIssueId = \App\Models\Setting::getValue('current_issue_id');
        $currentIssue = null;
        if ($currentIssueId) {
            $currentIssue = \App\Models\Issue::with('articles')->find($currentIssueId);
        }
        
        // Get popular articles
        $popularArticles = \App\Models\Article::published()
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();
        
        return view('pages.home', compact('description', 'openAccessPolicy', 'editorialPolicies', 'currentIssue', 'popularArticles'));
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
        // Get the current issue ID from settings
        $currentIssueId = \App\Models\Setting::getValue('current_issue_id');
        
        // Get the current issue details
        $currentIssue = null;
        $currentIssueArticles = collect(); // Empty collection as default
        
        if ($currentIssueId) {
            $currentIssue = \App\Models\Issue::find($currentIssueId);
            
            if ($currentIssue) {
                // Get articles that belong to this issue
                $currentIssueArticles = $currentIssue->articles()
                    ->published()
                    ->orderBy('published_date', 'desc')
                    ->paginate(10);
            }
        }
        
        return view('pages.current', compact('currentIssue', 'currentIssueArticles'));
    }
    
    /**
     * Display the archive page
     */
    public function archive(): View
    {
        // Get paginated list of all published articles ordered by volume and issue
        $articles = Article::published()
            ->orderBy('volume', 'desc')
            ->orderBy('issue', 'desc')
            ->orderBy('published_date', 'desc')
            ->paginate(20);
            
        // Group the current page of articles by volume and issue
        $archives = $articles->groupBy('volume')
            ->map(function ($volume) {
                return $volume->groupBy('issue');
            });
            
        return view('pages.archive', compact('archives', 'articles'));
    }
    
    /**
     * Display the contact page
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
