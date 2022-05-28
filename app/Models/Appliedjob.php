<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliedjob extends Model
{
    use HasFactory;

    protected $table="appliedjobs";

    protected $fillable=['name','email','message','resume','comments'];
}
