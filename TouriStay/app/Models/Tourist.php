<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'city',
        'country',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
