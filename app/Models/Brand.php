<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table="brands";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function sprofile()
    {
    return $this->belongsTo(Sprofile::class);
    }

    public function category()
    {
    return $this->hasMany(Category::class,'category_id');
    }

    
    
}
