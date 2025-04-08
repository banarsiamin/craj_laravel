<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Issue;
use App\Models\SubjectArea;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $issues = Issue::where('status', 'published')->orderBy('order')->get();
        $subjectAreas = SubjectArea::orderBy('name')->get();
        
        return view('admin.articles.create', compact('issues', 'subjectAreas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'abstract' => 'required',
            'content' => 'nullable',
            'references' => 'nullable',
            'author_contributor_list' => 'nullable',
            'author_name' => 'required',
            'email' => 'required|email',
            'affiliation' => 'required',
            'country' => 'required',
            'keywords' => 'required',
            'category' => 'required',
            'doi' => 'nullable|max:255',
            'pages' => 'nullable|max:255',
            'published_date' => 'nullable|date',
            'has_permissions' => 'boolean',
            'license_url' => 'nullable|url',
            'copyright_holder' => 'nullable|max:255',
            'copyright_year' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'subject_areas' => 'nullable|array',
            'subject_areas.*' => 'exists:subject_areas,id',
            'issues' => 'nullable|array',
            'issues.*' => 'exists:issues,id',
            'pdf_file' => 'nullable|mimes:pdf|max:10240', // 10MB max
            'html_file' => 'nullable|mimes:html,htm|max:10240',
            'docx_file' => 'nullable|mimes:docx,doc|max:10240',
            'html_content' => 'nullable',
            'featured_image' => 'nullable|image|max:2048', // 2MB max
        ]);

        // Handle PDF file upload
        if ($request->hasFile('pdf_file')) {
            $pdfPath = $request->file('pdf_file')->store('articles/pdf', 'public');
        }
        
        // Handle HTML file upload
        if ($request->hasFile('html_file')) {
            $htmlPath = $request->file('html_file')->store('articles/html', 'public');
        }
        
        // Handle DOCX file upload
        if ($request->hasFile('docx_file')) {
            $docxPath = $request->file('docx_file')->store('articles/docx', 'public');
        }
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('articles/images', 'public');
        }

        $article = Article::create([
            'title' => $validated['title'],
            'abstract' => $validated['abstract'],
            'references' => $validated['references'] ?? null,
            'author_contributor_list' => $validated['author_contributor_list'] ?? null,
            'author_name' => $validated['author_name'],
            'email' => $validated['email'],
            'affiliation' => $validated['affiliation'],
            'country' => $validated['country'],
            'content' => $validated['content'] ?? null,
            'keywords' => $validated['keywords'],
            'category' => $validated['category'],
            'doi' => $validated['doi'] ?? null,
            'pdf_file' => $pdfPath ?? null,
            'html_file' => $htmlPath ?? null,
            'docx_file' => $docxPath ?? null,
            'html_content' => $validated['html_content'] ?? null,
            'pages' => $validated['pages'] ?? null,
            'published_date' => $validated['published_date'] ?? null,
            'has_permissions' => $request->input('has_permissions', false),
            'license_url' => $validated['license_url'] ?? null,
            'copyright_holder' => $validated['copyright_holder'] ?? null,
            'copyright_year' => $validated['copyright_year'] ?? null,
            'featured_image' => $imagePath ?? null,
            'manuscript_path' => $pdfPath ?? null,
            'is_published' => $request->input('is_published', false),
            'status' => $request->input('is_published', false) ? 'published' : 'draft',
        ]);

        // Sync subject areas
        if ($request->has('subject_areas')) {
            $article->subjectAreas()->sync($request->subject_areas);
        }
        
        // Sync issues with order
        if ($request->has('issues')) {
            $issueData = [];
            foreach ($request->issues as $issueId) {
                $issueData[$issueId] = ['order' => 0]; // Default order to 0
            }
            $article->issues()->sync($issueData);
        }

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article created successfully');
    }

    public function edit(Article $article)
    {
        $issues = Issue::where('status', 'published')->orderBy('order')->get();
        $subjectAreas = SubjectArea::orderBy('name')->get();
        $selectedIssues = $article->issues->pluck('id')->toArray();
        $selectedSubjectAreas = $article->subjectAreas->pluck('id')->toArray();
        
        return view('admin.articles.edit', compact('article', 'issues', 'subjectAreas', 'selectedIssues', 'selectedSubjectAreas'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'abstract' => 'required',
            'content' => 'nullable',
            'references' => 'nullable',
            'author_contributor_list' => 'nullable',
            'author_name' => 'required',
            'email' => 'required|email',
            'affiliation' => 'required',
            'country' => 'required',
            'keywords' => 'required',
            'category' => 'required',
            'doi' => 'nullable|max:255',
            'pages' => 'nullable|max:255',
            'published_date' => 'nullable|date',
            'has_permissions' => 'boolean',
            'license_url' => 'nullable|url',
            'copyright_holder' => 'nullable|max:255',
            'copyright_year' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'subject_areas' => 'nullable|array',
            'subject_areas.*' => 'exists:subject_areas,id',
            'issues' => 'nullable|array',
            'issues.*' => 'exists:issues,id',
            'pdf_file' => 'nullable|mimes:pdf|max:10240',
            'html_file' => 'nullable|mimes:html,htm|max:10240',
            'docx_file' => 'nullable|mimes:docx,doc|max:10240',
            'html_content' => 'nullable',
            'featured_image' => 'nullable|image|max:2048',
        ]);

        // Handle file uploads
        if ($request->hasFile('pdf_file')) {
            // Delete old file if exists
            if ($article->pdf_file) {
                Storage::disk('public')->delete($article->pdf_file);
            }
            $pdfPath = $request->file('pdf_file')->store('articles/pdf', 'public');
            $article->pdf_file = $pdfPath;
            $article->manuscript_path = $pdfPath; // For backward compatibility
        }
        
        if ($request->hasFile('html_file')) {
            if ($article->html_file) {
                Storage::disk('public')->delete($article->html_file);
            }
            $htmlPath = $request->file('html_file')->store('articles/html', 'public');
            $article->html_file = $htmlPath;
        }
        
        if ($request->hasFile('docx_file')) {
            if ($article->docx_file) {
                Storage::disk('public')->delete($article->docx_file);
            }
            $docxPath = $request->file('docx_file')->store('articles/docx', 'public');
            $article->docx_file = $docxPath;
        }
        
        if ($request->hasFile('featured_image')) {
            if ($article->featured_image) {
                Storage::disk('public')->delete($article->featured_image);
            }
            $imagePath = $request->file('featured_image')->store('articles/images', 'public');
            $article->featured_image = $imagePath;
        }

        $is_published = $request->input('is_published', $article->is_published);
        
        // Update data with proper null handling
        $dataToUpdate = [
            'title' => $validated['title'],
            'abstract' => $validated['abstract'],
            'author_name' => $validated['author_name'],
            'email' => $validated['email'],
            'affiliation' => $validated['affiliation'],
            'country' => $validated['country'],
            'keywords' => $validated['keywords'],
            'category' => $validated['category'],
            'is_published' => $is_published,
            'status' => $is_published ? 'published' : 'draft',
        ];
        
        // Only include these fields if they exist in the request
        if (isset($validated['references'])) {
            $dataToUpdate['references'] = $validated['references'];
        }
        
        if (isset($validated['author_contributor_list'])) {
            $dataToUpdate['author_contributor_list'] = $validated['author_contributor_list'];
        }
        
        if (isset($validated['content'])) {
            $dataToUpdate['content'] = $validated['content'];
        } else {
            // Don't update content if not present in request
            //$dataToUpdate['content'] = null;
        }
        
        if (isset($validated['doi'])) {
            $dataToUpdate['doi'] = $validated['doi'];
        }
        
        if (isset($validated['html_content'])) {
            $dataToUpdate['html_content'] = $validated['html_content'];
        }
        
        if (isset($validated['pages'])) {
            $dataToUpdate['pages'] = $validated['pages'];
        }
        
        if (isset($validated['published_date'])) {
            $dataToUpdate['published_date'] = $validated['published_date'];
        }
        
        $dataToUpdate['has_permissions'] = $request->has('has_permissions');
        
        if (isset($validated['license_url'])) {
            $dataToUpdate['license_url'] = $validated['license_url'];
        }
        
        if (isset($validated['copyright_holder'])) {
            $dataToUpdate['copyright_holder'] = $validated['copyright_holder'];
        }
        
        if (isset($validated['copyright_year'])) {
            $dataToUpdate['copyright_year'] = $validated['copyright_year'];
        }
        
        // Update the article with prepared data
        $article->update($dataToUpdate);

        // Sync subject areas
        if ($request->has('subject_areas')) {
            $article->subjectAreas()->sync($request->subject_areas);
        } else {
            $article->subjectAreas()->detach();
        }
        
        // Sync issues with order
        if ($request->has('issues')) {
            $issueData = [];
            foreach ($request->issues as $issueId) {
                $issueData[$issueId] = ['order' => 0]; // Default order to 0
            }
            $article->issues()->sync($issueData);
        } else {
            $article->issues()->detach();
        }

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        // Delete all associated files
        $filesToDelete = [
            $article->pdf_file,
            $article->html_file,
            $article->docx_file,
            $article->featured_image,
            $article->manuscript_path
        ];
        
        foreach ($filesToDelete as $file) {
            if ($file) {
                Storage::disk('public')->delete($file);
            }
        }
        
        // Delete the article (relationships will be handled by database cascade)
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article deleted successfully');
    }
    
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }
} 