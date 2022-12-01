<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class VehicleFilter extends ApiFilter {
   protected $allowedParms = [
      'id' => ['eq'],
      'vehicleCategoryId' => ['eq'],
      'plateNumber' => ['eq', 's'],
      'description' => ['eq', 's'],
      'image' => [],
      'vehicleOwnerId' => ['eq']
   ];

   protected $columnMap = [
      'vehicleCategoryId' => 'vehicle_category_id',
      'plateNumber' => 'plate_number',
      'vehicleOwnerId' => 'vehicle_owner_id'
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