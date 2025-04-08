<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\JournalIndexing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JournalIndexingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indexings = JournalIndexing::orderBy('order')->get();
        return view('admin.journal-indexing.index', compact('indexings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.journal-indexing.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:255',
            'status' => 'boolean',
            'order' => 'required|integer|min:0'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('journal-indexing', 'public');
        }

        JournalIndexing::create($validated);

        return redirect()->route('admin.journal-indexing.index')
            ->with('success', 'Journal indexing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JournalIndexing $journalIndexing)
    {
        return view('admin.journal-indexing.form', compact('journalIndexing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JournalIndexing $journalIndexing)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:255',
            'status' => 'boolean',
            'order' => 'required|integer|min:0'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($journalIndexing->image) {
                Storage::disk('public')->delete($journalIndexing->image);
            }
            $validated['image'] = $request->file('image')->store('journal-indexing', 'public');
        }

        $journalIndexing->update($validated);

        return redirect()->route('admin.journal-indexing.index')
            ->with('success', 'Journal indexing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JournalIndexing $journalIndexing)
    {
        if ($journalIndexing->image) {
            Storage::disk('public')->delete($journalIndexing->image);
        }
        
        $journalIndexing->delete();

        return redirect()->route('admin.journal-indexing.index')
            ->with('success', 'Journal indexing deleted successfully.');
    }
}
