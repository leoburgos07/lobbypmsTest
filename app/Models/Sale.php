<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservationDate',
        'reservationDays',
        'payment',
        'users_id',
        'bedrooms_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function bedrooms()
    {
        return $this->belongsTo(Bedroom::class);
    }

}
