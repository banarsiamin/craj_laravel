<?php

namespace App\Http\Controllers;

use App\Models\JournalIndexing;
use Illuminate\Http\Request;

class JournalIndexingController extends Controller
{
    public function index()
    {
        $indexings = JournalIndexing::all();
        return view('journal_indexing.index', compact('indexings'));
    }

    public function create()
    {
        return view('journal_indexing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|in:active,inactive'
        ]);

        JournalIndexing::create($request->all());
        return redirect()->route('journal-indexing.index')->with('success', 'Journal Indexing created successfully');
    }

    public function edit(JournalIndexing $journalIndexing)
    {
        return view('journal_indexing.edit', compact('journalIndexing'));
    }

    public function update(Request $request, JournalIndexing $journalIndexing)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|in:active,inactive'
        ]);

        $journalIndexing->update($request->all());
        return redirect()->route('journal-indexing.index')->with('success', 'Journal Indexing updated successfully');
    }

    public function destroy(JournalIndexing $journalIndexing)
    {
        $journalIndexing->delete();
        return redirect()->route('journal-indexing.index')->with('success', 'Journal Indexing deleted successfully');
    }
} 