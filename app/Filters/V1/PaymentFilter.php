<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PaymentFilter extends ApiFilter {
   protected $allowedParms = [
      'id' => ['eq'],
      'bookingId' => ['eq'],
      'amount' => ['eq', 'lt', 'lte', 'gt', 'gte'],
      'method' => ['eq', 's'],
      'statusId' => ['eq'],
      'notes' => ['eq', 's'],
      'paidBy' => ['eq', 's'],
      'paidDate' => ['eq', 'lt', 'lte', 'gt', 'gte']
   ];

   protected $columnMap = [
      'bookingId' => 'booking_id',
      'statusId' => 'status_id',
      'paidBy' => 'paid_by',
      'paidDate' => 'paid_date'
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