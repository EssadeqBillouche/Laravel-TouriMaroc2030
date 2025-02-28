<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation avec Tourist
    public function tourist()
    {
        return $this->hasOne(Tourist::class);
    }

    // Relation avec Owner
    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

    // Relation avec Admin
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    // Relation avec Listings (pour les propriétaires)
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    // Relation avec Favorites (pour les touristes)
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    // Relation avec Bookings (pour les touristes)
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Relation avec Reviews (pour les touristes)
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Méthode pour déterminer le rôle
    public function getRoleAttribute()
    {
        if ($this->tourist) {
            return 'tourist';
        } elseif ($this->owner) {
            return 'owner';
        } elseif ($this->admin) {
            return 'admin';
        }
        return null; // Aucun rôle trouvé
    }
}
