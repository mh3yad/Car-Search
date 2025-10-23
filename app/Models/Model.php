<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Model extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['name','maker_id'];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
