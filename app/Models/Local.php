<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function projects()
    {
        return $this->hasMany(LocalProject::class, 'local_id');
    }

    public function socialMedia()
    {
        return $this->hasMany(LocalSocialMedia::class, 'local_id');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
