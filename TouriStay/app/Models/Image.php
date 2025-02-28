<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'listing_id',
        'image_path',
    ];

    // Relation avec Listing
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
