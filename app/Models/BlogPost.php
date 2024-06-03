<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'view_count',
        'status',
        'slug',
        'image_url'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $user = auth()->user();
            // Generate the slug based on the title
            $post->slug = Str::slug($post->title);
            $post->author_id = $user->id;
        });
    }
}
