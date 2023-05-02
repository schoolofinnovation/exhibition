<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denco extends Model
{
    use HasFactory;
    protected $table = "dencos";

    public function expo()
    {
    return $this->belongsTo(Expo::class, 'expo_id');
    }

    public function event()
    {
    return $this->belongsTo(Event::class, 'event_id');
    }
}
