<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Issue;
use App\Models\IssueGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use App\Http\Controllers\Admin\DB;

class IssueController extends Controller
{
    /**
     * Display a listing of the issues.
     */
    public function index()
    {
        // $issues = Issue::orderBy('order')->get();
        $issues = Issue::latest()->paginate(10);
        return view('admin.issues.index', compact('issues'));
    }

    /**
     * Show the form for creating a new issue.
     */
    public function create()
    {
        $articles = Article::published()->get();
        $attachedArticles=[];
        return view('admin.issues.create', compact('articles','attachedArticles'));
    }

    /**
     * Store a newly created issue in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'nullable|string',
            'order' => 'nullable|integer',
            'volume' => 'nullable|string|max:50',
            'number' => 'nullable|string|max:50',
            'year' => 'nullable|integer',
            'access_status' => 'required|in:open_access,subscription',
            'open_access_date' => 'nullable|date',
            'show_volume' => 'boolean',
            'show_number' => 'boolean',
            'show_year' => 'boolean',
            'show_access' => 'boolean',
            'show_title' => 'boolean',
            'status' => 'required|string|max:50',
            'article_ids' => 'nullable|array',
            'article_ids.*' => 'exists:articles,id',
            'featured_image' => 'nullable|image|max:2048',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|max:2048',
            'gallery_captions' => 'nullable|array',
            'gallery_captions.*' => 'nullable|string|max:255',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image');
            $featuredImageName = 'featured_' . time() . '.' . $featuredImage->getClientOriginalExtension();
            $featuredImage->storeAs('public/issues', $featuredImageName);
            $validatedData['featured_image'] = 'issues/' . $featuredImageName;
        }

        // Create the issue
        $issue = Issue::create($validatedData);

        // Handle article associations with ordering
        // if ($request->has('article_ids') && is_array($request->article_ids)) {
        //     $articleOrder = [];
        //     foreach ($request->article_ids as $index => $articleId) {
        //         $articleOrder[$articleId] = ['order' => $index];
        //     }
        //     $issue->articles()->attach($articleOrder);
        // }

        // Handle gallery images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $index => $image) {
                $imageName = 'gallery_' . time() . '_' . $index . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/issues/gallery', $imageName);
                
                $issue->galleryImages()->create([
                    'image_path' => 'issues/gallery/' . $imageName,
                    'caption' => $request->gallery_captions[$index] ?? null,
                    'order' => $index
                ]);
            }
        }

        return redirect()->route('admin.issues.index')
            ->with('success', 'Issue created successfully.');
    }

    /**
     * Show the form for editing the specified issue.
     */
    public function edit(Issue $issue)
    {   
        // echo $issue->id;die;
        $articles = Article::published()->get();
        $selectedArticleIds = $issue->articles->pluck('id')->toArray();
        // $data = DB::table('articles')
        //     ->join('article_issue', 'articles.id', '=', 'article_issue.article_id')
        //     ->select('articles.*', 'article_issue.id as article_issue_id')
        //     ->where('article_issue.issue_id',$issue->id)
        //     ->get();
        // If you need the pivot data, use the relationship with pivot
        $attachedArticles = $issue->articles()
            ->withPivot('id') // assuming you want the pivot id
            ->get();
        // echo"<PRE>";
        // print_r($attachedArticles);
        // echo"</PRE>";

        return view('admin.issues.edit', compact('issue', 'articles', 'selectedArticleIds','attachedArticles'));
    }

    /**
     * Update the specified issue in storage.
     */
    public function update(Request $request, Issue $issue)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'nullable|string',
            'order' => 'nullable|integer',
            'volume' => 'nullable|string|max:50',
            'number' => 'nullable|string|max:50',
            'year' => 'nullable|integer',
            'access_status' => 'required|in:open_access,subscription',
            'open_access_date' => 'nullable|date',
            'show_volume' => 'boolean',
            'show_number' => 'boolean',
            'show_year' => 'boolean',
            'show_access' => 'boolean',
            'show_title' => 'boolean',
            'status' => 'required|string|max:50',
            'article_ids' => 'nullable|array',
            'article_ids.*' => 'exists:articles,id',
            'featured_image' => 'nullable|image|max:2048',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|max:2048',
            'gallery_captions' => 'nullable|array',
            'gallery_captions.*' => 'nullable|string|max:255',
            'delete_gallery' => 'nullable|array',
            'delete_gallery.*' => 'integer|exists:issue_galleries,id',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($issue->featured_image) {
                Storage::delete('public/' . $issue->featured_image);
            }
            
            $featuredImage = $request->file('featured_image');
            $featuredImageName = 'featured_' . time() . '.' . $featuredImage->getClientOriginalExtension();
            $featuredImage->storeAs('public/issues', $featuredImageName);
            $validatedData['featured_image'] = 'issues/' . $featuredImageName;
        }

        // Update the issue
        $issue->update($validatedData);

        // Handle article associations with ordering
        // if ($request->has('article_ids')) {
        //     $articleOrder = [];
        //     foreach ($request->article_ids as $index => $articleId) {
        //         $articleOrder[$articleId] = ['order' => $index];
        //     }
        //     $issue->articles()->sync($articleOrder);
        // } else {
        //     $issue->articles()->detach();
        // }

        // Delete gallery images if requested
        if ($request->has('delete_gallery')) {
            foreach ($request->delete_gallery as $galleryId) {
                $gallery = IssueGallery::find($galleryId);
                if ($gallery) {
                    Storage::delete('public/' . $gallery->image_path);
                    $gallery->delete();
                }
            }
        }

        // Add new gallery images
        if ($request->hasFile('gallery_images')) {
            $lastOrder = $issue->galleryImages()->max('order') ?? 0;
            
            foreach ($request->file('gallery_images') as $index => $image) {
                $imageName = 'gallery_' . time() . '_' . $index . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/issues/gallery', $imageName);
                
                $issue->galleryImages()->create([
                    'image_path' => 'issues/gallery/' . $imageName,
                    'caption' => $request->gallery_captions[$index] ?? null,
                    'order' => $lastOrder + $index + 1
                ]);
            }
        }

        return redirect()->route('admin.issues.index')
            ->with('success', 'Issue updated successfully.');
    }

    /**
     * Remove the specified issue from storage.
     */
    public function destroy(Issue $issue)
    {
        // Delete featured image
        if ($issue->featured_image) {
            Storage::delete('public/' . $issue->featured_image);
        }
        
        // Delete gallery images
        foreach ($issue->galleryImages as $gallery) {
            Storage::delete('public/' . $gallery->image_path);
        }
        
        // Delete the issue (relationships will be deleted by cascade)
        $issue->delete();

        return redirect()->route('admin.issues.index')
            ->with('success', 'Issue deleted successfully.');
    }
} 