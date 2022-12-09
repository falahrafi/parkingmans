<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_category_id',
        'plate_number',
        'description',
        'image',
        'vehicle_owner_id',
    ];

    public function vehicleOwner() {
        return $this->belongsTo(VehicleOwner::class);
    }

    public function vehicleCategory() {
        return $this->belongsTo(VehicleCategory::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
