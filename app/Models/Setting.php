<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    /**
     * Get a setting value by key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getValue(string $key, $default = null)
    {
        return Cache::rememberForever('setting_' . $key, function () use ($key, $default) {
            $setting = self::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Set a setting value
     *
     * @param string $key
     * @param mixed $value
     * @param string $group
     * @return void
     */
    public static function setValue(string $key, $value, string $group = 'general')
    {
        $setting = self::firstOrNew(['key' => $key]);
        $setting->value = $value;
        $setting->group = $group;
        $setting->save();

        // Clear cache for this key
        Cache::forget('setting_' . $key);
    }

    /**
     * Get all settings in a specific group
     *
     * @param string $group
     * @return \Illuminate\Support\Collection
     */
    public static function getGroup(string $group)
    {
        return self::where('group', $group)->get()->pluck('value', 'key');
    }

    /**
     * Get current issue
     * 
     * @return \App\Models\Issue|null
     */
    public static function getCurrentIssue()
    {
        $issueId = self::getValue('current_issue_id');
        return $issueId ? Issue::find($issueId) : null;
    }

    /**
     * Set current issue
     * 
     * @param int $issueId
     * @return void
     */
    public static function setCurrentIssue($issueId)
    {
        self::setValue('current_issue_id', $issueId, 'journal');
    }
} 