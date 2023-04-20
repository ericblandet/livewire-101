<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public $fillable = ['post_id', 'author', 'content'];

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
}
