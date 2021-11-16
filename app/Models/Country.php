<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name'
    ];

    public function airlines()
    {
        return $this->hasMany(Airline::class, 'country_id', 'id');
    }

    public function airports()
    {
        return $this->hasMany(Airport::class, 'country_id', 'id');
    }
}
