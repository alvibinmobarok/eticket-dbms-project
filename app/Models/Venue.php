<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venue';

    protected $fillable = [
        'venue_name',
        'capacity',
        'location',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
