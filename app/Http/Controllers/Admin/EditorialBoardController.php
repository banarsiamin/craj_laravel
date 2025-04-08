<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EditorialBoard;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EditorialBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $members = EditorialBoard::approved()->latest()->paginate(10);
        return view('admin.editorial_board.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.editorial_board.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:editorial_boards',
            'phone' => 'nullable|string|max:20',
            'website' => 'nullable|string|max:500',
            'street_address' => 'nullable|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state_province_region' => 'nullable|string|max:255',
            'zip_postal_code' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:255',
            'area_of_specialization' => 'nullable|string|max:255',
            'brief_resume' => 'nullable|file|mimes:pdf|max:10240',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.editorial-board.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->except(['brief_resume', 'photo']);

        // Handle resume file upload
        if ($request->hasFile('brief_resume')) {
            $resumeFile = $request->file('brief_resume');
            $resumePath = $resumeFile->store('editorial_board/resumes', 'public');
            $data['brief_resume'] = $resumePath;
        }

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoPath = $photoFile->store('editorial_board/photos', 'public');
            $data['photo'] = $photoPath;
        }

        EditorialBoard::create($data);

        return redirect()
            ->route('admin.editorial-board.index')
            ->with('success', 'Editorial board member added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditorialBoard $editorialBoard): View
    {
        return view('admin.editorial_board.show', compact('editorialBoard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditorialBoard $editorialBoard): View
    {
        return view('admin.editorial_board.edit', compact('editorialBoard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EditorialBoard $editorialBoard): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:editorial_boards,email,' . $editorialBoard->id,
            'phone' => 'nullable|string|max:20',
            'website' => 'nullable|string|max:500',
            'street_address' => 'nullable|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state_province_region' => 'nullable|string|max:255',
            'zip_postal_code' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:255',
            'area_of_specialization' => 'nullable|string|max:255',
            'brief_resume' => 'nullable|file|mimes:pdf|max:10240',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.editorial-board.edit', $editorialBoard)
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->except(['brief_resume', 'photo']);

        // Handle resume file upload
        if ($request->hasFile('brief_resume')) {
            // Delete old file if exists
            if ($editorialBoard->brief_resume) {
                Storage::disk('public')->delete($editorialBoard->brief_resume);
            }
            
            $resumeFile = $request->file('brief_resume');
            $resumePath = $resumeFile->store('editorial_board/resumes', 'public');
            $data['brief_resume'] = $resumePath;
        }

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old file if exists
            if ($editorialBoard->photo) {
                Storage::disk('public')->delete($editorialBoard->photo);
            }
            
            $photoFile = $request->file('photo');
            $photoPath = $photoFile->store('editorial_board/photos', 'public');
            $data['photo'] = $photoPath;
        }

        $editorialBoard->update($data);

        return redirect()
            ->route('admin.editorial-board.index')
            ->with('success', 'Editorial board member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EditorialBoard $editorialBoard): RedirectResponse
    {
        // Delete files if they exist
        if ($editorialBoard->brief_resume) {
            Storage::disk('public')->delete($editorialBoard->brief_resume);
        }
        
        if ($editorialBoard->photo) {
            Storage::disk('public')->delete($editorialBoard->photo);
        }
        
        $editorialBoard->delete();

        return redirect()
            ->route('admin.editorial-board.index')
            ->with('success', 'Editorial board member deleted successfully');
    }

    /**
     * Show pending registrations.
     */
    public function pendingRegistrations(): View
    {
        $pendingMembers = EditorialBoard::pending()->latest()->paginate(10);
        return view('admin.editorial_board.pending', compact('pendingMembers'));
    }
    
    /**
     * Approve a registration.
     */
    public function approve(EditorialBoard $editorialBoard): RedirectResponse
    {
        $editorialBoard->update(['status' => EditorialBoard::STATUS_APPROVED]);
        
        return redirect()
            ->route('admin.editorial-board.pending')
            ->with('success', 'Editorial board member has been approved successfully.');
    }
    
    /**
     * Reject a registration.
     */
    public function reject(EditorialBoard $editorialBoard): RedirectResponse
    {
        $editorialBoard->update(['status' => EditorialBoard::STATUS_REJECTED]);
        
        return redirect()
            ->route('admin.editorial-board.pending')
            ->with('success', 'Editorial board member has been rejected.');
    }
}
