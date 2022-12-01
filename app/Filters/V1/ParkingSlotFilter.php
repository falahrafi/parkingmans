<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ParkingSlotFilter extends ApiFilter {
   protected $allowedParms = [
      'id' => ['eq'],
      'slotNumber' => ['eq'],
      'statusId' => ['eq']
   ];

   protected $columnMap = [
      'slotNumber' => 'slot_number',
      'statusId' => 'status_id'
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