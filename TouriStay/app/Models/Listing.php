<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'price',
        'amenities',
        'available_from',
        'available_to',
    ];

    // Relation avec User (propriétaire)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec Favorites
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    // Relation avec Bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Relation avec Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Relation avec Images
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
