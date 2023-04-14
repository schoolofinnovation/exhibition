<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expo extends Model
{
    use HasFactory;
    protected $table = "expos";

    
    //public function search() {return $this->belongsTo(Expo::class, 'search_id');}

    public function expo(){return $this->belongsTo(Expo::class, 'expo_id');}

    //public function event(){return $this->hasMany(Event::class, 'event_id');}

}
