<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Qui i campi che vogliamo abilitare al mass update
    // protected $fillable = ['title', 'content', 'slug', 'cover_image'];

    // Qui i campi che non vogliamo abilitare al mass update
    protected $guarded = ['id', 'cover_image'];

    protected $appends = ['cover_image_url'];

    // protected function coverImage(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => ucfirst($value),
    //     );
    // }

    protected function coverImageUrl(): Attribute
    {
        return new Attribute(
            get: fn () => env('APP_FRONTEND_IMG_URL', 'http://localhost') . $this->cover_image,
        );
    }

    public function type() 
    {
        return $this->belongsTo(Type::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function tags() 
    {
        return $this->belongsToMany(Tag::class);
    }
}

