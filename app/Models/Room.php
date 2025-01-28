<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Costomer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[

        'num_room',
            'price',
            'name',
            'status',
            'category_id',

    ];
    public function costomers(): BelongsToMany
    {
        return $this->belongsToMany(Costomer::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
