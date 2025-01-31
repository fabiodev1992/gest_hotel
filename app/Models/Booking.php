<?php

namespace App\Models;

use App\Models\Room;
use App\Models\User;
use App\Models\Costomer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'startdate',
            'enddate',
            'paymentmethode',
            'costomer_id',
            'room_id',
            'user_id',
    ];
/*Les relations* plusieur à plusieur */
    public function costomer(): BelongsTo
    {
        return $this->belongsTo(Costomer::class);

    }
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);

    }
    /*un user peut faire plusieurs reservation*/
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }

}

