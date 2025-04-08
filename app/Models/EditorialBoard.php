<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditorialBoard extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'website',
        'street_address',
        'address_line2',
        'city',
        'state_province_region',
        'zip_postal_code',
        'country',
        'area_of_specialization',
        'brief_resume',
        'description',
        'photo',
        'status',
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    /**
     * Status constants
     */
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    
    /**
     * Scope a query to only include approved members.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('status', self::STATUS_APPROVED);
    }
    
    /**
     * Scope a query to only include pending members.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }
    
    /**
     * Check if the member is approved.
     *
     * @return bool
     */
    public function isApproved(): bool
    {
        return $this->status === self::STATUS_APPROVED;
    }
    
    /**
     * Check if the member is pending approval.
     *
     * @return bool
     */
    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }
    
    /**
     * Check if the member is rejected.
     *
     * @return bool
     */
    public function isRejected(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }
    
    /**
     * Get full name
     * 
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
    
    /**
     * Get formatted address
     * 
     * @return string
     */
    public function getFormattedAddressAttribute(): string
    {
        $address = [];
        
        if ($this->street_address) {
            $address[] = $this->street_address;
        }
        
        if ($this->address_line2) {
            $address[] = $this->address_line2;
        }
        
        $cityRegion = [];
        if ($this->city) {
            $cityRegion[] = $this->city;
        }
        
        if ($this->state_province_region) {
            $cityRegion[] = $this->state_province_region;
        }
        
        if ($this->zip_postal_code) {
            $cityRegion[] = $this->zip_postal_code;
        }
        
        if (!empty($cityRegion)) {
            $address[] = implode(', ', $cityRegion);
        }
        
        if ($this->country) {
            $address[] = $this->country;
        }
        
        return implode("\n", $address);
    }
}
