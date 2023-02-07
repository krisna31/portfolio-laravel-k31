<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    public function projects()
    {
        return $this->hasMany(LocalProject::class, 'local_id');
    }

    public function socialMedia()
    {
        return $this->hasMany(LocalSocialMedia::class, 'local_id');
    }
    
    use HasFactory;
}
