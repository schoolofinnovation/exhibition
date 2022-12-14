<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $table = "tickets";

    public function Event()
    {
    return $this->belongsTo(Event::class,'event_id');
    }
}
