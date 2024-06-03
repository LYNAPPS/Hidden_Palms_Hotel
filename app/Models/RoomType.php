<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'main_image',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(RoomTypeImage::class, 'room_type_id');
    }
}
