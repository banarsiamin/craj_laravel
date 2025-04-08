<?php

namespace App\Http\Controllers\Editorial;

use App\Http\Controllers\Controller;
use App\Models\EditorialBoard;
use Illuminate\View\View;

class BoardController extends Controller
{
    /**
     * Display a listing of editorial board members.
     */
    public function index(): View
    {
        $members = EditorialBoard::approved()->latest()->paginate(12);
        return view('pages.editorial-board', compact('members'));
    }
    
    /**
     * Display a specific editorial board member.
     */
    public function show(EditorialBoard $member): View
    {
        // Only show approved members
        if (!$member->isApproved()) {
            abort(404);
        }
        
        return view('pages.editorial-board-member', compact('member'));
    }
}
