<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSlotStatus extends Model
{
    use HasFactory;

    public function parkingSlots() {
        return $this->hasMany(ParkingSlot::class, 'status_id');
    }

}