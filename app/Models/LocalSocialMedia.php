<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalSocialMedia extends Model
{

    public function local() {
        return $this->belongsTo(Local::class, 'id', 'local_id');
    }
    use HasFactory;
}
