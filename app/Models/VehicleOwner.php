<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'fullname',
        'avatar',
        'contact',
        'email',
    ];

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
