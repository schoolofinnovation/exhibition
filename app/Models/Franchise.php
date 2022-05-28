<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $table="franchises";
    
    protected $casts = ['opportunites' => 'array'];

    public function category()
    {
    return $this->belongsTo(Category::class,'category_id');
    }

    public function sector()
    {
    return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function brand()
    {
    return $this->belongsTo(Brand::class);
    }
      
    //many to many
    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'post_user')->withTimestamps();
    }    
   //comment section
   public function review()
   {
    return $this->hasMany(Review::class);
   }

   public function orderItems()
   {
    return $this->hasMany(OrderItem::class);
   }
   
}
