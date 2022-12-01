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

    public function vehicle() {
        $this->hasOne(Vehicle::class);
    }
}
