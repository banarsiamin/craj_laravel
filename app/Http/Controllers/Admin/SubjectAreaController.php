<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubjectArea;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubjectAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjectAreas = SubjectArea::latest()->paginate(10);
        return view('admin.subject_areas.index', compact('subjectAreas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subject_areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:subject_areas',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $subjectArea = new SubjectArea();
        $subjectArea->name = $validated['name'];
        $subjectArea->slug = $validated['slug'];
        $subjectArea->description = $validated['description'] ?? null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('subject_areas', 'public');
            $subjectArea->image = $imagePath;
        }

        $subjectArea->save();

        return redirect()->route('admin.subject-areas.index')
            ->with('success', 'Subject Area created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjectArea = SubjectArea::findOrFail($id);
        return view('admin.subject_areas.show', compact('subjectArea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subjectArea = SubjectArea::findOrFail($id);
        return view('admin.subject_areas.edit', compact('subjectArea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subjectArea = SubjectArea::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:subject_areas,slug,' . $id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $subjectArea->name = $validated['name'];
        $subjectArea->slug = $validated['slug'];
        $subjectArea->description = $validated['description'] ?? $subjectArea->description;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($subjectArea->image) {
                Storage::disk('public')->delete($subjectArea->image);
            }
            
            // Store new image
            $imagePath = $request->file('image')->store('subject_areas', 'public');
            $subjectArea->image = $imagePath;
        }

        $subjectArea->save();

        return redirect()->route('admin.subject-areas.index')
            ->with('success', 'Subject Area updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subjectArea = SubjectArea::findOrFail($id);
        
        // Delete image if exists
        if ($subjectArea->image) {
            Storage::disk('public')->delete($subjectArea->image);
        }
        
        $subjectArea->delete();

        return redirect()->route('admin.subject-areas.index')
            ->with('success', 'Subject Area deleted successfully.');
    }
}
