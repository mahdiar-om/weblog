<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function user_id() {
        return $this->belongsTo(User::class);
    }
    public function post_id() {
        return $this->belongsTo(Post::class);
    }

    protected $fillable = [
        'comment',
        'verification',
        'user_id',
        'post_id',
    ];
}
