<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function local() {
        return $this->belongsTo(Local::class);
    }
    
    use HasFactory;

    protected $guarded = ['id'];
}
