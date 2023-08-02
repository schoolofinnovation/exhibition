<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = "participants";
    
    // public function Sponser()
    // {
    //     return $this->belongsTo(Participant::class);
    // }

    public function sponser()
    {
    return $this->belongsTo(Sponsership::class,'sponsership_id');
    }
}
