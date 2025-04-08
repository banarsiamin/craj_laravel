<?php

namespace App\Http\Controllers\Editorial;

use App\Http\Controllers\Controller;
use App\Models\EditorialBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegistrationController extends Controller
{
    /**
     * Show the registration form
     */
    public function showForm(): View
    {
        //echo"amin";
        return view('pages.editorial-board-registration');
    }
    
    /**
     * Store a new registration
     */
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
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
            'area_of_specialization' => 'required|string|max:255',
            'brief_resume' => 'required|file|mimes:pdf|max:10240',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $data = $request->except(['brief_resume', 'photo']);
        $data['status'] = EditorialBoard::STATUS_PENDING;

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
            ->route('editorial-board.registration.thank-you')
            ->with('success', 'Your application has been submitted successfully and is pending approval.');
    }
    
    /**
     * Display thank you page
     */
    public function thankYou(): View
    {
        return view('pages.editorial-board-thank-you');
    }
}
