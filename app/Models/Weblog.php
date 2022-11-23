<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weblog extends Model
{
    use HasFactory;
    public function user_id() {
        return $this->belongsTo(User::class);
    }
    public function post_id() {
        return $this->hasMany(Comment::class);
    }
    protected $fillable = [
        'text',
        'title',
        'user_id',
    ];
}
