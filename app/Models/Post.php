<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    // untuk yang boleh diisi
    protected $fillable=['title', 'author', 'slug', 'body', "category"];
    // eager laoding
    protected $with=["author","category"];

    public function author():BelongsTo{
        // ini di relasika secara belingsTo ke tabel user
        return $this->belongsTo(User::class);
    }
    public function category():BelongsTo{
        // ini di relasika secara belingsTo ke tabel user
        return $this->belongsTo(Category::class);
    }
}
