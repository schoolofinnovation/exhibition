<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mag extends Model
{
    use HasFactory;
    protected $table= "mags";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cag()
    {
        return $this->belongsTo(Cag::class);
    }


    //many to many
    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'post_user')->withTimestamps();
    } 
    
    //comment section
    public function review(){
    return $this->hasMany(Review::class);
    }
}
