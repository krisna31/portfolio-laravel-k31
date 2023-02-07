<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalProject extends Model
{
    public function local() {
        return $this->hasMany(Local::class);
    }
    
    use HasFactory;
}
