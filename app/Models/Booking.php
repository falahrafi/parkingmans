<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_owner_id',
        'vehicle_id',
        'parking_slot_id',
        'duration',
        'status_id',
        'notes',
        'booked_date',
    ];

    public function bookingStatus() {
        return $this->belongsTo(BookingStatus::class, 'status_id');
    }

    public function parkingSlot() {
        return $this->belongsTo(ParkingSlot::class);
    }

    public function vehicle() {
        $this->belongsTo(Booking::class);
    }

    public function vehicleOwner() {
        $this->belongsTo(Booking::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }
}
