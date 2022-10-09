<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'beds',
        'rooms',
        'bathrooms',
        'capacity',
        'price'
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
