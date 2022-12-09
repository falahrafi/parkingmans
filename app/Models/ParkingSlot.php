<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot_number',
        'status_id'
    ];

    public function parkingSlotStatus() {
        return $this->belongsTo(ParkingSlotStatus::class, 'status_id');
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
