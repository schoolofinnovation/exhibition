<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cag extends Model
{
    use HasFactory;
    
    protected $table="cags";

    public function mag()
    {
    return $this->hasMany(Mag::class,'cag_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
