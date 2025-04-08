<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Check if we are in the installation process (migrations not run yet)
        if (!Schema::hasTable('settings')) {
            return;
        }
        
        // Load SMTP settings from the database
        $smtpSettings = Setting::where('group', 'smtp')->get();
        
        if ($smtpSettings->count() > 0) {
            // Map settings from database to config
            $mailConfig = [
                'smtp_host' => 'mail.host',
                'smtp_port' => 'mail.port',
                'smtp_username' => 'mail.username',
                'smtp_password' => 'mail.password',
                'smtp_encryption' => 'mail.encryption',
                'mail_from_address' => 'mail.from.address',
                'mail_from_name' => 'mail.from.name',
            ];
            
            // Apply settings to the config
            foreach ($smtpSettings as $setting) {
                if (isset($mailConfig[$setting->key])) {
                    $configKey = $mailConfig[$setting->key];
                    
                    // Handle nested config keys
                    if (strpos($configKey, '.') !== false) {
                        $parts = explode('.', $configKey);
                        
                        if (count($parts) === 3) {
                            // Handle mail.from.address and mail.from.name
                            Config::set($parts[0] . '.' . $parts[1], [
                                $parts[2] => $setting->value
                            ]);
                        } else {
                            Config::set($configKey, $setting->value);
                        }
                    } else {
                        Config::set($configKey, $setting->value);
                    }
                }
            }
            
            // Set mail driver to smtp
            Config::set('mail.default', 'smtp');
        }
        
        // Load current issue
        $currentIssueId = Setting::getValue('current_issue_id');
        if ($currentIssueId) {
            Config::set('journal.current_issue_id', $currentIssueId);
        }
    }
} 