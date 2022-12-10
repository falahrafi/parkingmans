<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class BookingFilter extends ApiFilter {
   protected $allowedParms = [
      'id' => ['eq'],
      'vehicleOwnerId' => ['eq'],
      'vehicleId' => ['eq'],
      'parkingSlotId' => ['eq'],
      'duration' => ['eq', 'lt', 'lte', 'gt', 'gte'],
      'statusId' => ['eq'],
      'notes' => ['eq', 's'],
      'bookedDate' => ['eq', 'lt', 'lte', 'gt', 'gte']
   ];

   protected $columnMap = [
      'vehicleOwnerId' => 'vehicle_owner_id',
      'vehicleId' => 'vehicle_id',
      'parkingSlotId' => 'parking_slot_id',
      'statusId' => 'status_id',
      'bookedDate' => 'booked_date'
   ];

   protected $operatorMap = [
      'eq' => '=',
      'lt' => '<',
      'lte' => '<=',
      'gt' => '>',
      'gte' => '>=',
      's' => 'LIKE'
   ];
}