<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'listing_id',
    ];

    // Relation avec User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec Listing
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
