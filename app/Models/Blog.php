<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;
    // 🔗 Relación: un blog pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔗 Relación: un blog pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 🔗 Relación: un blog puede tener muchos comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // 🔗 Relación: un blog puede tener muchos "me gusta" (hearts)
    public function hearts()
    {
        return $this->hasMany(Heart::class);
    }
}
