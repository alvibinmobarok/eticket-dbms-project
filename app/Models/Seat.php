<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{

    protected $fillable = [
        'seat_type',
        'status',
        'seat_number',
        'price',
        'venue_id',
        'event_id',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
