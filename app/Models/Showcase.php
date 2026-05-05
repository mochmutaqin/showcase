<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    protected $fillable = [
        'serial_number',
        'user_id',
        'warranty_expiry',
        'compressor_type',
        'glass_spec'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getWarrantyStatusAttribute()
    {
        return now()->lt($this->warranty_expiry) ? 'Aktif' : 'Kedaluwarsa';
    }
}