<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'path',
        'room_id',
    ];
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
