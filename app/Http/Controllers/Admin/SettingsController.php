<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SettingsController extends Controller
{
    /**
     * Display the settings page
     */
    public function index(): View
    {
        // Get all issues for dropdown
        // $issues = Issue::orderBy('year', 'desc')
                // ->orderBy('volume', 'desc')
                // ->orderBy('issue', 'desc')
                // ->get();
        $issues = Issue::orderBy('id','desc')->get()->where('status','published');
                
        // Get current issue ID
        $currentIssueId = Setting::getValue('current_issue_id');
        
        // Get SMTP settings
        $smtpSettings = Setting::getGroup('smtp');
        
        return view('admin.settings.index', compact('issues', 'currentIssueId', 'smtpSettings'));
    }
    
    /**
     * Save general settings
     */
    public function saveGeneral(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_issue_id' => 'required|exists:issues,id',
        ]);
        
        Setting::setCurrentIssue($validated['current_issue_id']);
        
        return redirect()->route('admin.settings.index')
            ->with('success', 'General settings have been updated.');
    }
    
    /**
     * Save SMTP settings
     */
    public function saveSmtp(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'smtp_host' => 'required|string',
            'smtp_port' => 'required|numeric',
            'smtp_username' => 'required|string',
            'smtp_password' => 'required|string',
            'smtp_encryption' => 'required|string|in:tls,ssl',
            'mail_from_address' => 'required|email',
            'mail_from_name' => 'required|string',
        ]);
        
        foreach ($validated as $key => $value) {
            Setting::setValue($key, $value, 'smtp');
        }
        
        return redirect()->route('admin.settings.index')
            ->with('success', 'SMTP settings have been updated.');
    }
} 