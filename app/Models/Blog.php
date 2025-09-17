<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    // Un blog pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un blog pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un blog puede tener muchos comentarios (polimórficos)
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Un blog puede tener muchos "me gusta" (hearts)
    public function hearts()
    {
        return $this->hasMany(Heart::class);
    }
}
