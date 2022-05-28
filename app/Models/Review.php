<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $table = "reviews";

    
    public function franchise()
    {
        return $this->hasMany(Franchise::class);
    }

    //comment section
    public function mag(){
        return $this->belongsTo(mag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function franchises()
    {
        return $this->hasMany(mag::class);
    }

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
    
}
