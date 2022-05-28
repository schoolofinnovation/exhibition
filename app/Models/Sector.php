<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = "sectors";

    public function sector()
    {
      return $this->hasMany(Sector::class);
    }

    public function franchise()
    {
      return $this->hasMany(Franchise::class);
    }

    public function service()
    {
      return $this->hasMany(Service::class);
    }


}
