<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Hasmany;

class Diretor extends Model
{
    protected $fillable =[
        'name',
        'description',
        'date'
    ];

    public function filme():HasMany
    {
        return $this->hasMany(Filme::class);
    }
}
