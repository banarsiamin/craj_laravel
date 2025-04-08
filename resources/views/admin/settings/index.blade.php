@extends('admin.layouts.app')

@section('title', 'Settings - Admin Panel')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    </div>

    <!-- Tab navigation -->
    <ul class="nav nav-tabs mb-4" id="settingsTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">
                <i class="bi bi-gear"></i> General Settings
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false">
                <i class="bi bi-envelope"></i> Email Settings
            </button>
        </li>
    </ul>

    <!-- Tab content -->
    <div class="tab-content" id="settingsTabContent">
        <!-- General Settings Tab -->
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Journal Settings</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.settings.save-general') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="current_issue_id">Current Issue</label>
                                    <select class="form-control @error('current_issue_id') is-invalid @enderror" id="current_issue_id" name="current_issue_id">
                                        <option value="">Select Current Issue</option>
                                        @foreach($issues as $issue)
                                            <option value="{{ $issue->id }}" {{ $currentIssueId == $issue->id ? 'selected' : '' }}>
                                            {{ $issue->title }} (Volume {{ $issue->volume }} Issue {{ $issue->issue }} ({{ $issue->year }}))
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('current_issue_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">
                                        This issue will be displayed prominently on the homepage and marked as the current issue.
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Save General Settings
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Email Settings Tab -->
        <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">SMTP Configuration</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.settings.save-smtp') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="smtp_host">SMTP Host</label>
                                    <input type="text" class="form-control @error('smtp_host') is-invalid @enderror" id="smtp_host" name="smtp_host" value="{{ $smtpSettings['smtp_host'] ?? '' }}">
                                    @error('smtp_host')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="smtp_port">SMTP Port</label>
                                    <input type="number" class="form-control @error('smtp_port') is-invalid @enderror" id="smtp_port" name="smtp_port" value="{{ $smtpSettings['smtp_port'] ?? 587 }}">
                                    @error('smtp_port')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="smtp_username">SMTP Username</label>
                                    <input type="text" class="form-control @error('smtp_username') is-invalid @enderror" id="smtp_username" name="smtp_username" value="{{ $smtpSettings['smtp_username'] ?? '' }}">
                                    @error('smtp_username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="smtp_password">SMTP Password</label>
                                    <input type="password" class="form-control @error('smtp_password') is-invalid @enderror" id="smtp_password" name="smtp_password" value="{{ $smtpSettings['smtp_password'] ?? '' }}">
                                    @error('smtp_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="smtp_encryption">Encryption</label>
                                    <select class="form-control @error('smtp_encryption') is-invalid @enderror" id="smtp_encryption" name="smtp_encryption">
                                        <option value="tls" {{ ($smtpSettings['smtp_encryption'] ?? '') == 'tls' ? 'selected' : '' }}>TLS</option>
                                        <option value="ssl" {{ ($smtpSettings['smtp_encryption'] ?? '') == 'ssl' ? 'selected' : '' }}>SSL</option>
                                    </select>
                                    @error('smtp_encryption')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 mb-4">
                            <h6 class="font-weight-bold">From Address Settings</h6>
                            <hr>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mail_from_address">From Email Address</label>
                                    <input type="email" class="form-control @error('mail_from_address') is-invalid @enderror" id="mail_from_address" name="mail_from_address" value="{{ $smtpSettings['mail_from_address'] ?? '' }}">
                                    @error('mail_from_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mail_from_name">From Name</label>
                                    <input type="text" class="form-control @error('mail_from_name') is-invalid @enderror" id="mail_from_name" name="mail_from_name" value="{{ $smtpSettings['mail_from_name'] ?? config('app.name') }}">
                                    @error('mail_from_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Save SMTP Settings
                        </button>
                        
                        <div class="mt-4">
                            <div class="alert alert-info">
                                <p class="mb-0">
                                    <i class="bi bi-info-circle"></i> 
                                    These settings will update your <code>.env</code> file configuration for mail. 
                                    Be sure to test your email configuration after saving changes.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 