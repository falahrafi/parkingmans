<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class VehicleOwnerFilter extends ApiFilter {
   protected $allowedParms = [
      'id' => ['eq'],
      'username' => ['eq', 's'],
      'password' => [],
      'fullname' => ['eq', 's'],
      'avatar' => [],
      'contact' => ['eq', 's'],
      'email' => ['eq', 's']
   ];

   protected $columnMap = [];

   protected $operatorMap = [
      'eq' => '=',
      'lt' => '<',
      'lte' => '<=',
      'gt' => '>',
      'gte' => '>=',
      's' => 'LIKE'
   ];
}