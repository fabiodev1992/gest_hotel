<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Costomer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
            'email',
            'telephone',
    ];
    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class);
    }
}
