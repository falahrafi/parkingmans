<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'amount',
        'method',
        'status_id',
        'notes',
        'paid_by',
        'paid_date',
    ];

    public function paymentStatus() {
        return $this->belongsTo(PaymentStatus::class, 'status_id');
    }

    public function booking() {
        return $this->belongsTo(Booking::class);
    }
}
